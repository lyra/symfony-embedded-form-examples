<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\Includes;

use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Rest{


    /**
         * The list of encodings supported by the API.
         *
         * @var array[string]
         */
        public static $SUPPORTED_ENCODINGS = array(
            'UTF-8',
            'ASCII',
            'Windows-1252',
            'ISO-8859-15',
            'ISO-8859-1',
            'ISO-8859-6',
            'CP1256'
        );

    public function checkResponseFormat($data)
    {
        return isset($data['kr-hash']) && isset($data['kr-hash-algorithm']) && isset($data['kr-answer']);
    }

    public function checkResponseHash($data, $key ,ContainerInterface $container): bool
    {
        $logger = $this->get_logger($container);
        $logger->info('{method checkResponseHash} key config method  =>:'.$key);
        $supportedSignAlgos = array('sha256_hmac');
        // Check if the hash algorithm is supported.
        $logger->info('{method checkResponseHash}  sha256_hmac =>: ' . $data['kr-hash-algorithm']);
        if (! in_array($data['kr-hash-algorithm'], $supportedSignAlgos)) {
            return false;
        }
        // On some servers, / can be escaped.
        $krAnswer = str_replace('\/', '/', $data['kr-answer']);
        $hash = hash_hmac('sha256', $krAnswer, $key);

        $logger->info('{method checkResponseHash}  kr-hash =>: '.$data['kr-hash']);
        $logger->info('{method checkResponseHash}  hash generate with algoritm =>: '.$hash);

        $logger->info('{method checkResponseHash}  comparate kr-hash and has genereted =>:'.($hash === $data['kr-hash']));
        // Return true if calculated hash and sent hash are the same.
        return ($hash === $data['kr-hash']);
    }

    public function checkStatusTransactions($data){

        $arrayAnswer = json_decode($data['kr-answer'],true);
        //echo "answer =>";
        //var_dump($arrayAnswer);
        //die("this is the answer =>".var_dump($arrayAnswer));

        $statusFailed =array('AUTHORISED',
                            'AUTHORISED_TO_VALIDATE', // TODO is this a pending status?
                            'CAPTURED',
                            'ACCEPTED'
                    );
        //printf($arrayAnswer['transactions'][0]['detailedStatus']);
        if(in_array($arrayAnswer['transactions'][0]['detailedStatus'], $statusFailed)){
            return true;
        }else{
            return false;
        }        
    }


    /**
     * @return \Monolog\Logger
     */
    public function get_logger(ContainerInterface $container)
    {
        // Create the logger
        $log_file_name = date('Y_m') . '_payzen';
        $logger = new Logger($log_file_name);

        // Now add some handlers
        $log_dir = $container->get('kernel')->getLogDir();
        $logger->pushHandler(new StreamHandler($log_dir . '/' . $log_file_name . '.log', Logger::DEBUG));
        $logger->pushHandler(new FirePHPHandler());
        return $logger;
    }   

}
<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Lyra\PayzenBundle\Includes\PayzenResponse;
use Lyra\PayzenBundle\Payzen\PayzenEmbeddedService;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Lyra\PayzenBundle\Payzen\PayzenService;
use Lyra\PayzenBundle\Includes\Rest;


class PayzenController extends AbstractController
{


    /**
     * @Route("/embeddedPayment/")
     * @return Response
     */
    public function payment_embedded(PayzenEmbeddedService $payzenEmbedded,ContainerInterface $container){
        //die(print_r($_GET));
        $logger = $this->get_logger($container);

       // $payzenCreatePaymentRequest = $payzenEmbedded->createObjectPayment($_GET);
        //die(print_r($payzenCreatePaymentRequest));
        $response=$payzenEmbedded->create_payment();

        $logger->info('Response received from PayZen return URL: ' . print_r($response, true));


        $javascript_url =$payzenEmbedded->getClient_javascript_url();
        $public_key=$payzenEmbedded->getPublicKey();
        $kr_post_url_success = $payzenEmbedded->getSuccessUrl();
        $kr_post_url_refused = $payzenEmbedded->getKr_post_url_refused();
        $kr_popin = $payzenEmbedded->getKrPopin();
        $kr_language=$payzenEmbedded->getKr_language();

        $token= $response['answer']['formToken'];

        return $this->render ('@Payzen/embedded/payzen_embedded.html.twig', [
            'javascript_url' =>$javascript_url,
            'public_key'=>$public_key,
            'kr_post_url_success'=>$kr_post_url_success,
            'kr_post_url_refused'=>$kr_post_url_refused,
            'kr_popin'=>$kr_popin,
            'token'=>$token,
            'kr_language'=>$kr_language,
        ]);
    }


    /**
     * @Route("/success/")
     * @return Response
     */
    public function success (PayzenEmbeddedService $payzenEmbedded,ContainerInterface $container){
        $rest  = new Rest();
       // var_dump(print_r($_POST, true));
        $result = "";


        if ($rest ->checkResponseFormat($_POST)) { 
            if($rest->checkResponseHash($_POST,$payzenEmbedded->getkey(),$container)){
                if($rest->checkStatusTransactions($_POST)){
                    $result="SUCCESS"; 
                }else{
                    $result="FAILURE";
                }
            }else{
                $result="FAILURE";
            }
        } 
        else {
            $result="FAILURE";
        }

        return $this->render ('@Payzen/embedded/payzen_result_payment.html.twig', [
            'result' =>$result
        ]);

    }



    /**
     * @Route("/callbackIpn/")
     * @return Response
     */
    public function callback (PayzenEmbeddedService $payzenEmbedded,ContainerInterface $container){
       // die('hello callback');
        $rest  = new Rest();
        $result = "";
        $logger = $this->get_logger($container);

        $logger->info('POST received from PayZen server IPN =>: ' . print_r($_POST, true));

        if($rest->checkResponseFormat($_POST)){
            $logger->info('POST received kr-hash =>: ' . print_r($_POST['kr-hash'], true));
            $logger->info('POST received kr-hash-algorithm =>: ' . print_r($_POST['kr-hash-algorithm'], true));

            if(!$rest->checkResponseHash($_POST,$payzenEmbedded->getPassword(),$container)){
                $logger->Error('Signature algorithm selected in module settings must be the same as one selected in PayZen Back Office.');
                $logger->info('SERVER URL PROCESS END');
                die("An error occurred while computing the signature.");
            }else{
                $logger->info('Payment successfull, let\'s save order #');
                //This method can to be used to save order in your logic
                //$this->saveOrder($_POST);
                $logger->info('Payment completed successfully  ');
                $logger->info('SERVER URL PROCESS END');
                if($rest->checkStatusTransactions($_POST)){
                    die('Accepted payment, order has been updated, Payment completed successfully  ');
                }else{
                    die('Payment failure, order has been cancelled, Payment  failure .');
                }
            }
        }

    }

    //public function saveOrder($data){


        //YOUR CODE HERE FOR MANAGE CALLBACK AND SEVE ORDER
    //}


    
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

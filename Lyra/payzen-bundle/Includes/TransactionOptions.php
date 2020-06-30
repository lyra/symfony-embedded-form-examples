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

//require_once 'PayzenApi.php';

//if (! class_exists('PayzenRequest', false)) {

class TransactionOptions
{

     /**
     * The fields to send to the payment api to create payment.
     *
     * @var CardOptions
     * @access private
     */
    private $cardOptions;


    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  CardOptions
     */ 
    public function getCardOptions()
    {
        return $this->cardOptions;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  CardOptions  $cardOptions  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setCardOptions(CardOptions $cardOptions)
    {
        $this->cardOptions = $cardOptions;

        return $this;
    }
}
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

//if (! class_exists('PayzenRequest', false)) {


    class PayzenCreatePaymentRequest
    {
        /**
         * The fields to send to the payment api to create payment.
         *
         * @var integer
         * @access public
         */
        public  $amount;


        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $contrib;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $currency;


        /**
         * The fields to send to the payment api to create payment.
         *
         * @var int
         * @access public
         */
        public $formTokenVersion;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $ipnTargetUrl;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $orderId;


        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $metadata;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $fingerPrintId;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $formAction;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $paymentMethodToken;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $strongAuthentication;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var string
         * @access public
         */
        public $acquirerTransientData;


        /**
         * The fields to send to the payment api to create payment.
         *
         * @var Customer
         * @access public
         */
        public $customer;


        /**
         * The fields to send to the payment api to create payment.
         *
         * @var TransactionOptions
         * @access public
         */
        public $transactionOptions;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var integer
         * @access public
         */
        public $taxAmount;

        /**
         * The fields to send to the payment api to create payment.
         *
         * @var integer
         * @access public
         */
        public $taxRate;




   // }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  integer
         */ 
        public function getAmount()
        {
                return $this->amount;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  integer  $amount  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setAmount($amount)
        {
                $this->amount = $amount;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getContrib()
        {
                return $this->contrib;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $contrib  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setContrib(string $contrib)
        {
                $this->contrib = $contrib;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getCurrency()
        {
                return $this->currency;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $currency  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setCurrency(string $currency)
        {
                $this->currency = $currency;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  int
         */ 
        public function getFormTokenVersion()
        {
                return $this->formTokenVersion;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  int  $formTokenVersion  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setFormTokenVersion(int $formTokenVersion)
        {
                $this->formTokenVersion = $formTokenVersion;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getIpnTargetUrl()
        {
                return $this->ipnTargetUrl;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $ipnTargetUrl  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setIpnTargetUrl(string $ipnTargetUrl)
        {
                $this->ipnTargetUrl = $ipnTargetUrl;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getOrderId()
        {
                return $this->orderId;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $orderId  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setOrderId(string $orderId)
        {
                $this->orderId = $orderId;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getMetadata()
        {
                return $this->metadata;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $metadata  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setMetadata(string $metadata)
        {
                $this->metadata = $metadata;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getFingerPrintId()
        {
                return $this->fingerPrintId;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $fingerPrintId  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setFingerPrintId(string $fingerPrintId)
        {
                $this->fingerPrintId = $fingerPrintId;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getFormAction()
        {
                return $this->formAction;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $formAction  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setFormAction(string $formAction)
        {
                $this->formAction = $formAction;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getPaymentMethodToken()
        {
                return $this->paymentMethodToken;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $paymentMethodToken  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setPaymentMethodToken(string $paymentMethodToken)
        {
                $this->paymentMethodToken = $paymentMethodToken;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getStrongAuthentication()
        {
                return $this->strongAuthentication;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $strongAuthentication  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setStrongAuthentication(string $strongAuthentication)
        {
                $this->strongAuthentication = $strongAuthentication;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  string
         */ 
        public function getAcquirerTransientData()
        {
                return $this->acquirerTransientData;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  string  $acquirerTransientData  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setAcquirerTransientData(string $acquirerTransientData)
        {
                $this->acquirerTransientData = $acquirerTransientData;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  Customer
         */ 
        public function getCustomer()
        {
                return $this->customer;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  Customer  $customer  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setCustomer(Customer $customer)
        {
                $this->customer = $customer;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  TransactionOptions
         */ 
        public function getTransactionOptions()
        {
                return $this->transactionOptions;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  TransactionOptions  $transactionOptions  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setTransactionOptions(TransactionOptions $transactionOptions)
        {
                $this->transactionOptions = $transactionOptions;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  integer
         */ 
        public function getTaxAmount()
        {
                return $this->taxAmount;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  integer  $taxAmount  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setTaxAmount($taxAmount)
        {
                $this->taxAmount = $taxAmount;

                return $this;
        }

        /**
         * Get the fields to send to the payment api to create payment.
         *
         * @return  integer
         */ 
        public function getTaxRate()
        {
                return $this->taxRate;
        }

        /**
         * Set the fields to send to the payment api to create payment.
         *
         * @param  integer  $taxRate  The fields to send to the payment api to create payment.
         *
         * @return  self
         */ 
        public function setTaxRate($taxRate)
        {
                $this->taxRate = $taxRate;

                return $this;
        }


        public function __construct($encoding = 'UTF-8')
        {
                                
        }
}
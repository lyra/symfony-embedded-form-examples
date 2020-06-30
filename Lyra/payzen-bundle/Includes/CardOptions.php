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

class CardOptions
{

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var integer
     * @access private
     */
    private $captureDelay;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var integer
     * @access private
     */
    private $firstInstallmentDelay;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $manualValidation;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $mid;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $paymentSource;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $retry;

    

    

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  integer
     */ 
    public function getCaptureDelay()
    {
        return $this->captureDelay;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  integer  $captureDelay  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setCaptureDelay($captureDelay)
    {
        $this->captureDelay = $captureDelay;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  integer
     */ 
    public function getFirstInstallmentDelay()
    {
        return $this->firstInstallmentDelay;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  integer  $firstInstallmentDelay  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setFirstInstallmentDelay($firstInstallmentDelay)
    {
        $this->firstInstallmentDelay = $firstInstallmentDelay;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getManualValidation()
    {
        return $this->manualValidation;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $manualValidation  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setManualValidation(string $manualValidation)
    {
        $this->manualValidation = $manualValidation;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $mid  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setMid(string $mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $paymentSource  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setPaymentSource(string $paymentSource)
    {
        $this->paymentSource = $paymentSource;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $retry  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setRetry(string $retry)
    {
        $this->retry = $retry;

        return $this;
    }
}
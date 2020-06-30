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

class ShoppingCart
{


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $insuranceAmount;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $shippingAmount;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $taxAmount;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $cartItemInfo;

    /**
     * The fields to send to the payment gateway.
     *
     * @var array[CartItemInfo]
     * @access private
     */
    private $cartItemsInfo;

    


    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $insuranceAmount  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setInsuranceAmount(string $insuranceAmount)
    {
        $this->insuranceAmount = $insuranceAmount;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $shippingAmount  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setShippingAmount(string $shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $taxAmount  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setTaxAmount(string $taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Get the fields to send to the payment gateway.
     *
     * @return  array[CartItemInfo]
     */ 
    public function getCartItemsInfo()
    {
        return $this->cartItemsInfo;
    }

    /**
     * Set the fields to send to the payment gateway.
     *
     * @param  array[CartItemInfo]  $cartItemsInfo  The fields to send to the payment gateway.
     *
     * @return  self
     */ 
    public function setCartItemsInfo(array[CartItemInfo] $cartItemsInfo)
    {
        $this->cartItemsInfo = $cartItemsInfo;

        return $this;
    }
}
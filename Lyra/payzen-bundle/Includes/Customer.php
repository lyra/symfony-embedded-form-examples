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

class Customer
{
    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $email;

     /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $reference;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var BillingDetails
     * @access private
     */
    private $billingDetails;


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var ShippingDetails
     * @access private
     */
    private $shippingDetails;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var ShoppingCart
     * @access private
     */
    private $shoppingCart;

    

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $email  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $reference  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setReference(string $reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  BillingDetails
     */ 
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  BillingDetails  $billingDetails  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setBillingDetails(BillingDetails $billingDetails)
    {
        $this->billingDetails = $billingDetails;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  ShippingDetails
     */ 
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  ShippingDetails  $shippingDetails  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setShippingDetails(ShippingDetails $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  ShoppingCart
     */ 
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  ShoppingCart  $shoppingCart  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setShoppingCart(ShoppingCart $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;

        return $this;
    }
}
//}
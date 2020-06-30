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

class CartItemInfo 
{


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $productAmount;


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $productLabel;


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var integer
     * @access private
     */
    private $productQty;


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $productRef;


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $productType;


    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $productVat;

    


    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getProductAmount()
    {
        return $this->productAmount;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $productAmount  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setProductAmount(string $productAmount)
    {
        $this->productAmount = $productAmount;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $productLabel  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setProductLabel(string $productLabel)
    {
        $this->productLabel = $productLabel;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  integer
     */ 
    public function getProductQty()
    {
        return $this->productQty;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  integer  $productQty  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setProductQty($productQty)
    {
        $this->productQty = $productQty;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getProductRef()
    {
        return $this->productRef;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $productRef  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setProductRef(string $productRef)
    {
        $this->productRef = $productRef;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $productType  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setProductType(string $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getProductVat()
    {
        return $this->productVat;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $productVat  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setProductVat(string $productVat)
    {
        $this->productVat = $productVat;

        return $this;
    }
}


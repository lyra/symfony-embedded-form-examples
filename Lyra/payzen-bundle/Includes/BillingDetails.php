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

class BillingDetails
{
    

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $address;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $address2;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $category;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $cellPhoneNumber;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $city;   

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $country;   

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $district;  

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $firstName;


     /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $lastName;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $identityCode;
    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $language;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $phoneNumber;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $state;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $streetNumber;

    /**
     * The fields to send to the payment api to create payment.
     *
     * @var string
     * @access private
     */
    private $zipCode;   


    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $address  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $address2  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setAddress2(string $address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $category  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setCategory(string $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getCellPhoneNumber()
    {
        return $this->cellPhoneNumber;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $cellPhoneNumber  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setCellPhoneNumber(string $cellPhoneNumber)
    {
        $this->cellPhoneNumber = $cellPhoneNumber;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $city  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $country  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setCountry(string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $district  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setDistrict(string $district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $firstName  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getIdentityCode()
    {
        return $this->identityCode;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $identityCode  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setIdentityCode(string $identityCode)
    {
        $this->identityCode = $identityCode;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $language  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setLanguage(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $phoneNumber  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $state  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setState(string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $streetNumber  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setStreetNumber(string $streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $zipCode  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setZipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get the fields to send to the payment api to create payment.
     *
     * @return  string
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the fields to send to the payment api to create payment.
     *
     * @param  string  $lastName  The fields to send to the payment api to create payment.
     *
     * @return  self
     */ 
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
}

//}
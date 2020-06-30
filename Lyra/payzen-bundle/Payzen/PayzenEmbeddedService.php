<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\Payzen;

use App\Kernel;
use Lyra\PayzenBundle\Includes\BillingDetails;
use Lyra\PayzenBundle\Includes\CardOptions;
use Lyra\PayzenBundle\Includes\Customer;
use Lyra\PayzenBundle\Includes\PayzenCreatePaymentRequest;
use Lyra\PayzenBundle\Includes\ShippingDetails;
use Lyra\PayzenBundle\Includes\ShoppingCart;
use Lyra\PayzenBundle\Includes\TransactionOptions;
use ReflectionClass;
use ReflectionProperty;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Validator\Constraints\Length;

use function Symfony\Component\String\b;

/**
 * Main bundle service.
 */
class PayzenEmbeddedService
{

    /**
    * @var string
    */
    public $test_password;

    /**
    * @var string
    */
    public $prod_password;

    /**
    * @var string
    */
    public $test_public_key;

    /**
    * @var string
    */
    public $prod_public_key;

    /**
    * @var string
    */
    public $algo_signature;


    /**
    * @var string
    */
    public $hmac_256_test_key;

    /**
    * @var string
    */
    public $hmac_256_key_prod;

    /**
    * @var string
    */
    public $client_javascript_url;

    /**
    * @var string
    */
    public $api_rest_url;

    /**
    * @var string
    */
    public $rest_api_pay_notification_url;

    /**
    * @var boolean
    */
    public $test_mode;

    /**
    * @var boolean
    */
    public $kr_popin;

    /**
    * @var string
    */
    public $site_id;

    /**
    * @var string
    */
    public $kr_post_url_success;

    /**
    * @var string
    */
    public $kr_post_url_refused;

    /**
    * @var string
    */
    public $kr_language;

    /**
    * @var string
    */
    public $form_action;


    /**
    * @var PayzenCreatePaymentRequest
    */
    public $payzenCreatePaymentRequest;


  
    /**
     *
     * @param $site_id
     * @param $key_test
     * @param $key_prod
     * @param $ctx_mode
     * @param $sign_algo
     * @param $platform_url
     * @throws \Exception
     */
    public function __construct($site_id,$test_mode, $algo_signature, $kr_popin, $test_password, $prod_password, 
        $test_public_key, $prod_public_key, $hmac_256_test_key, $hmac_256_key_prod, $client_javascript_url, 
        $api_rest_url, $kr_post_url_refused, $kr_post_url_success,$kr_language,$form_action)
    {
        $this->site_id=$site_id;
        $this->test_mode=$test_mode;
        $this->algo_signature = $algo_signature;
        $this->kr_popin =$kr_popin;
        $this->test_password=$test_password;
        $this->prod_password = $prod_password;
        $this->test_public_key = $test_public_key;
        $this->prod_public_key=$prod_public_key;
        $this->hmac_256_test_key = $hmac_256_test_key;
        $this->hmac_256_key_prod = $hmac_256_key_prod;
        $this->client_javascript_url = $client_javascript_url;
        $this->api_rest_url = $api_rest_url;
        $this->kr_post_url_refused=$kr_post_url_refused;
        $this->kr_post_url_success=$kr_post_url_success;
        $this->kr_language=$kr_language;
        $this->form_action=$form_action;

        $customer = new Customer();
        $billingDetails = new BillingDetails();
        $shippingDetails = new ShippingDetails();
        $customer->setBillingDetails($billingDetails);
        $customer->setShippingDetails($shippingDetails);

        $transactionOPtions = new TransactionOptions();
        $cardOptions = new CardOptions();
        $transactionOPtions->setCardOptions($cardOptions);
        
        $this->payzenCreatePaymentRequest = new PayzenCreatePaymentRequest();
        $this->payzenCreatePaymentRequest->setCustomer($customer);
        $this->payzenCreatePaymentRequest->setTransactionOptions($transactionOPtions);

    }

    

    public function create_payment(){

        $this->payzenCreatePaymentRequest->setAmount(990);
        $this->payzenCreatePaymentRequest->setContrib("symfony plugin 1.0/ symphony version ".Kernel::VERSION);
        $this->payzenCreatePaymentRequest->setCurrency("COP");
        $this->payzenCreatePaymentRequest->setOrderId("myOrderId-999999");
        $this->payzenCreatePaymentRequest->setFormAction($this->form_action);
        $this->payzenCreatePaymentRequest->setTaxRate(19);
        $customer = new Customer();
        $customer->setEmail("sample@example.com");
        $customer->setReference("cus1111");
        $billingDetails = new BillingDetails();
        $billingDetails->setAddress("calle 68");
        $billingDetails->setAddress2("carre 70 c");
        $billingDetails->setCategory("COMPANY");
        $billingDetails->setCity("Bogota");
        $billingDetails->setFirstName("juan");
        $billingDetails->setLastName("Hernandez");
        $billingDetails->setPhoneNumber("5555555");
        $billingDetails->setZipCode("78878");
        $billingDetails->setCountry("CO");
        $customer->setBillingDetails($billingDetails); 
        $this->payzenCreatePaymentRequest->setCustomer($customer);
        $transactionOPtions = new TransactionOptions();
        $cardOptions = new CardOptions();
        $cardOptions->setCaptureDelay(1);
        $cardOptions->setManualValidation("YES");
        $cardOptions->setPaymentSource("EC");
        $transactionOPtions->setCardOptions($cardOptions);
        $this->payzenCreatePaymentRequest->setTransactionOptions($transactionOPtions);
        //$tempArraydata = (array)$this->payzenCreatePaymentRequest;


        //$tempArraydata = (array)$this->payzenCreatePaymentRequest;
        $arraydata = $this->getArray($this->payzenCreatePaymentRequest);// array();
    
        $jsonConvert=json_encode($arraydata);
//        var_dump($jsonConvert);

        $token = base64_encode($this->site_id.":".$this->getPassword());
    
        $client = HttpClient::create();
        $response = $client->request('POST', $this->api_rest_url.'api-payment/V4/Charge/CreatePayment',[
            'headers' => ['Content-Type' => 'application/json',
            'Authorization' => 'Basic '.$token],
            'verify_peer' => false,
            'body' =>  $jsonConvert
        ]);


        //var_dump($response);

        //var_dump($response->getContent());

        $array_response =json_decode($response->getContent(),true);
        
        return $array_response;

    }

    public function getArray($temp){
        foreach ($temp as $k => $v) {
            if(is_object($v)){
                $array = (array)$v;
                $converArray=$this->getArray($array);
                $k = preg_match('/^\x00(?:.*?)\x00(.+)/', $k, $matches) ? $matches[1] : $k;
                $returnArray[$k] = $converArray;
            }else{
                if(!is_null($v) && $v !== ''){
                    $k = preg_match('/^\x00(?:.*?)\x00(.+)/', $k, $matches) ? $matches[1] : $k;
                    $returnArray[$k] = $v;
                }
            }
            
        }

        return $returnArray;
    }

    public function getkey(){
        if($this->test_mode){
            return $this->hmac_256_test_key;
        }
        else{
            return $this->hmac_256_key_prod;
        }
    }


    public function getKrPopin(): string{
        if($this->kr_popin){
            return "kr-popin";
        }else{
            return "";
        }
    }

    public function getPassword(): string{
        if($this->test_mode){
            return $this->test_password;
        }else{
            return $this->prod_pass;
        }
    }

    public function getPublicKey(): string{
        if($this->test_mode){
            return $this->test_public_key;
        }else{
            return $this->prod_public_key;
        }
    }

    public function getSuccessUrl(): string{
        return $this->kr_post_url_success;
    }



    /**
     * Get the value of client_javascript_url
     *
     * @return  string
     */ 
    public function getClient_javascript_url()
    {
        return $this->client_javascript_url;
    }

    /**
     * Get the value of kr_post_url_success
     *
     * @return  string
     */ 
    public function getKr_post_url_success()
    {
        return $this->kr_post_url_success;
    }

    /**
     * Get the value of kr_post_url_refused
     *
     * @return  string
     */ 
    public function getKr_post_url_refused()
    {
        return $this->kr_post_url_refused;
    }

    /**
     * Get the value of kr_language
     *
     * @return  string
     */ 
    public function getKr_language()
    {
        return $this->kr_language;
    }

    /**
     * Get the value of form_action
     *
     * @return  string
     */ 
    public function getForm_action()
    {
        return $this->form_action;
    }
}
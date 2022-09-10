<?php
namespace App\PaymentGateways;

use App\Helpers\FileHelper;
use App\Helpers\MapperHelper;
use App\PaymentGateways\Contracts\Payment;
use App\PaymentGateways\Mapper\PaymentResponse;

class PayPal implements Payment{

    protected $data;


    public function __construct()
    {
        $this->baseUri  = config('services.paypal.base_uri');
        $this->username = config('services.paypal.username');
        $this->secret   = config('services.paypal.secret');
    }

    /**
     * @return mixed $response
     */
    public function pay($data){
        $this->data = $data;
        $transaction = $this->createNewTransaction();
        $this->storeRequest('pay');
        return $this->response($transaction);
    }

    /**
     * @return mixed $response
     */
    public function withdraw($data){
        $this->data = $data;
        $transaction = $this->createNewTransaction();
        $this->storeRequest('withdraw');
        return $this->response($transaction);
    }


    public function createNewTransaction(){
        return [
            'auth_key'          => $this->secret,
            'transaction_id'    => random_int(10000000, 999999999999),
            'status'            => random_int(0,1),
            'amount'            => $this->data['amount'],
            'other_data'        => [
                'product_id'        => $this->data['amount'],
                'payment_method'    => $this->data['payment_method'],
            ],
        ];
    }

    public function storeRequest($method){
        FileHelper::append('test/'. $this->data['payment_method']."_$method.json", json_encode($this->data));
    }

    public function response($transaction){
        return MapperHelper::dataToObject($transaction, new PaymentResponse());
    }

}
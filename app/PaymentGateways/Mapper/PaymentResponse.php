<?php
namespace App\PaymentGateways\Mapper;



class PaymentResponse extends DTO implements \JsonSerializable{

    public $transactionId;
    public $status;
    public $amount;
    public $otherData;
    // public $productId;
    // public $paymentMethod;


    public function getTransactionId(){
        return $this->transactionId;
    }
    public function setTransactionId($transactionId){
        $this->transactionId = $transactionId;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    public function getAmount(){
        return $this->amount;
    }
    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function getProductId(){
        return $this->productId;
    }
    public function setProductId($productId){
        $this->productId = $productId;
    }

    public function getOtherData(){
        return $this->otherData;
    }
    public function setOtherData($otherData){
        $this->otherData = $otherData;
    }

    public function getPaymentMethod(){
        return $this->paymentMethod;
    }
    public function setPaymentMethod($paymentMethod){
        $this->paymentMethod = $paymentMethod;
    }

}
<?php
namespace App\PaymentGateways\Contracts;


interface Payment {

    /**
     * @param array $data
     * 
     * @return response
     */
    public function pay($data);

    /**
     * @param array $data
     * 
     * @return response
     */
    public function withdraw($data);
}
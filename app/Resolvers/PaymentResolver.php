<?php

namespace App\Resolvers;

use App\Helpers\Response;
use App\Models\PaymentMethod;

class PaymentResolver
{

    protected $paymentMethods;

    public function __construct()
    {
        $this->paymentMethods = PaymentMethod::all();
    }

    public function get($paymentMethod)
    {
        $className = $this->paymentMethods->firstWhere('name', $paymentMethod)?->class_name;
        if ($className) {
            return resolve($className);
        }
        throw new \Exception(Response::PLATFORM_NOT_SUPPORTED);
    }
}

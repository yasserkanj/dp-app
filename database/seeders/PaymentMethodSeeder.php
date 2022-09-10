<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        PaymentMethod::create([
            'name'          => 'PayPal',
            'class_name'    => 'App\\PaymentGateways\\PayPal',   
        ]);

        PaymentMethod::create([
            'name'          => 'Visa',
            'class_name'    => 'App\\PaymentGateways\\Visa',   
        ]);
    }
}

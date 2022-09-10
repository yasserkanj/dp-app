<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Helpers\Response;
use App\Helpers\ResponseStatus;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PayTest extends TestCase
{
    public function setUp(): void{
        parent::setUp();
        // seed the database
        $this->artisan('migrate:refresh --seed');
    }

    public function testPaymentIsCreatedSuccessfully() {

        $formData = [
            'payment_method'    => 'Visa',
            'amount'            => '10',
            'product_id'        => '1',
        ];
        $this->json('post', 'api/payment/pay', $formData)
            ->assertStatus(ResponseStatus::SUCCESS)
            ->assertJsonStructure([
                    'message',
                    'content'   => [
                        'status',
                    ]
            ]);
    }

    public function testPaymentValidationError() {
        $formData = [
            'payment_method'    => 'stripe',
            'amount'            => '10',
            'product_id'        => '1',
        ];
        $this->json('post', 'api/payment/pay', $formData)
            ->assertStatus(ResponseStatus::VALIDATION_ERROR)
            ->assertJsonStructure([
                    'message',
            ]);
    }

    public function testPaymentJsonFileCreatedSuccessfully() {
        $formData = [
            'payment_method'    => 'PayPal',
            'amount'            => '10',
            'product_id'        => '1',
        ];
        $this->json('post', 'api/payment/pay', $formData)
            ->assertStatus(ResponseStatus::SUCCESS);
        
        Storage::disk('local')->assertExists('test/paypal_pay.json');
    }
}

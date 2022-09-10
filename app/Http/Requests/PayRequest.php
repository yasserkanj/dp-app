<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'payment_method'    => 'required|exists:payment_methods,name',
            'amount'            => 'required|numeric',
            'product_id'        => 'required|integer',
        ];
    }
}

<?php
namespace App\Http\Controllers\API\Payment;

use App\Http\Requests\PayRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;


class PaymentController extends Controller {





    /**
     * @param PayRequest $request
     * 
     * @return Response
     */
    public function pay(PayRequest $request){
        try{
            $data = $request->validated();
            $response = Payment::pay($data);
            // Transaction::create([
            //     'transaction_id'    => $response->transaction_id,
            //     'status'            => $response->status,
            //     'info'              => $response->data,
            // ]);
            return Response::respondSuccess(Response::SUCCESS, new TransactionResource($response));
        } catch (\Exception $e) {
            return Response::respondError($e->getMessage());
        }
    }
}
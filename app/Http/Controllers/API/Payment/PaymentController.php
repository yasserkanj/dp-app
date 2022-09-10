<?php
namespace App\Http\Controllers\API\Payment;

use App\Helpers\Response;
use App\Models\Transaction;
use App\Facades\PaymentFacade;
use App\Http\Requests\PayRequest;
use App\Resolvers\PaymentResolver;
use App\Http\Controllers\Controller;
use App\Http\Requests\WithdrawRequest;
use App\Http\Resources\TransactionResource;


class PaymentController extends Controller {


    public function __construct(PaymentResolver $paymentResolver){
        $this->paymentResolver = $paymentResolver;
    }

    /**
     * @param PayRequest $request
     * 
     * @return Response
     */
    public function pay(PayRequest $request){
        try{
            $data = $request->validated();
            $response = PaymentFacade::get($data['payment_method'])->pay($data);
            $transaction = Transaction::create([
                'transaction_id'    => $response->transactionId,
                'status'            => $response->status,
                'info'              => $response->otherData,
            ]);
            return Response::respondSuccess(Response::SUCCESS, new TransactionResource($transaction));
        } catch (\Exception $e) {
            return Response::respondError($e->getMessage());
        }
    }


    /**
     * @param WithdrawRequest $request
     * 
     * @return Response
     */
    public function withdraw(WithdrawRequest $request){
        try{
            $data = $request->validated();
            $response = PaymentFacade::get($data['payment_method'])->withdraw($data);
            $transaction = Transaction::create([
                'transaction_id'    => $response->transactionId,
                'status'            => $response->status,
                'info'              => $response->otherData,
            ]);
            return Response::respondSuccess(Response::SUCCESS, new TransactionResource($transaction));
        } catch (\Exception $e) {
            return Response::respondError($e->getMessage());
        }
    }

}
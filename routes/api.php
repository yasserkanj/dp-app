<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix'    => 'payment',
    'namespace' => 'API\Payment',
], function(){
    Route::post('/pay', 'PaymentController@pay');
    Route::post('/withdraw', 'PaymentController@withdraw');
 
});
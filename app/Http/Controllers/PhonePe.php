<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dipesh79\LaravelPhonePe\LaravelPhonePe;


class PhonePe extends Controller
{
    public function phonePePayment()
    {
        $phonePe = new LaravelPhonePe();
        $url = $phonePe->makePayment(1000, '9999999999', route('phonepe.callback'), '1');
        return redirect()->away($url);
    }


    public function callBackAction(Request $request)
    {
        $phonepe = new LaravelPhonePe();
        $response = $phonepe->getTransactionStatus($request->all());
        if (json_decode($response)->success == true) {
            return $response;
        } else {
            return 'error';
        }
    }

}

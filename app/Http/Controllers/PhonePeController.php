<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonePeController extends PhonePe
{
    public function phonePePayment()
    {
        $url = $this->makePayment(1000, '9999999999', route('phonepe.callback'), '1');
        return redirect()->away($url);
    }


    public function callBackAction(Request $request)
    {
        $response = $this->getTransactionStatus($request->all());
        if (json_decode($response)->success == true) {
            return $response;
        } else {
            return 'error';
        }
    }
}

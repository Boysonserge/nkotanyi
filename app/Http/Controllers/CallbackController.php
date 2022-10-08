<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function paymentCallBack(Request $request) {
        /* if transaction is successfuly */
        if($request->status == "SUCCESS") {
            $get = Payment::where('transaction_id', $request->transaction_id)->first();
            if(isset($get)) {
                Payment::where('transaction_id', $request->transaction_id)->update(['paid' => 1]);
            }
        } else {
            /**
             * message
             */

        }

        return true;
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class MyPayments extends Component
{
    public function comfirm_pay($transId){
        $da=DB::table('payments')
            ->where('transaction_id', $transId)
            ->update(['paid' => 1]);

        $user = Payment::where('transaction_id', $transId)->first();

        $sms="Hello".auth()->user()->name." , Thank you for paying this plan, your transaction id is: ".$user->transaction_id;

        $respo = Http::withHeaders([
            'x-api-key' => 'a2sya21rZ2R1OHJoeXMza3JjdXVpNXRqYzdoOHJnMDk=',
            'Accept'=> 'application/json'
        ])->post('https://api.mista.io/sms',[
            'to'=>"+25".$user->payment_phone,
            'from'=>"UokalmniMS",
            'unicode'=>0,
            'sms'=>"$sms",
            'action'=>"send-sms"
        ]);


        return Redirect::back();
    }


    public function render()
    {
        $myPay=Payment::with('subscriptions')->where('user_id',auth()->id())->get();


        return view('livewire.my-payments',[
            'myPayments'=>$myPay
        ]);
    }
}

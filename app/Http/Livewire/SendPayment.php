<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use App\Models\Subscription;
use Illuminate\Support\Carbon;
use Livewire\Component;

class SendPayment extends Component
{
    public $price,$user_id,$subscription_id,$amount_paid,$end_date,$transaction_id;
    public $payment_phone;
    function payment_api($transactionId,$amount,$telephoneNumber) {
        $url = "https://opay-api.oltranz.com/opay/paymentrequest";
        $content = '{
                "telephoneNumber" : "'.$telephoneNumber.'",
                "amount" : "'.$amount.'",
                "organizationId" : "8a74810968e261260168f08a378c0002",
                "description" : "description",
                "callbackUrl" : "http://127.0.0.1:8000/callback",
                "transactionId" : "'.$transactionId.'"
            }';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $content,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }



    public function mount($subName){

        $selectedSub=Subscription::latest()->where('sub_name',$subName)
            ->with('items')
            ->first();
        $this->price=$selectedSub->sub_price;
        $this->user_id=auth()->id();
        $this->subscription_id=$selectedSub->id;
        $this->amount_paid=$selectedSub->sub_price;
        $this->end_date=Carbon::now()->addYears(1)->toDateTimeString();
    }




    public function process_pay(){
        $trans=uniqid();
        $this->payment_api($this->transaction_id,$this->amount_paid,$this->payment_phone);
        Payment::create([
            'user_id'=>$this->user_id,
            'subscription_id'=>$this->subscription_id,
            'amount_paid'=>$this->amount_paid,
            'end_date'=>$this->end_date,
            'transaction_id'=>$trans,
            'payment_phone'=>$this->payment_phone
        ]);
        sleep(3);
        return  $this->redirect('/myaccount');


    }

    public function render()
    {
        return view('livewire.send-payment');
    }
}

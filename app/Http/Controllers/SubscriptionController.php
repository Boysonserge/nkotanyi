<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public $sub_id;
    public $amount;
    public function show($subName){
        $selectedSub=Subscription::latest()->where('sub_name',$subName)
            ->with('items')
            ->first();
        $this->sub_id=$selectedSub->id;
        $this->amount=$selectedSub->sub_price;

        return view('other.subscription',[
            'subName'=>$subName,
            'selectedSub'=>$selectedSub
        ]);
    }

    public function payment(){
        /*$respo = Http::withHeaders([
            'x-api-key' => 'a2sya21rZ2R1OHJoeXMza3JjdXVpNXRqYzdoOHJnMDk=',
            'Accept'=> 'application/json'
        ])->post('https://api.mista.io/sms',[
            'to'=>"+250780331198",
            'from'=>'WasteCMS',
            'unicode'=>0,
            'sms'=>'Hello Sir',
            'action'=>'send-sms'
        ]);
        dd($respo->body());*/

        return response("test");
    }
}

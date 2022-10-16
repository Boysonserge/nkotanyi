<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookEventRequest;
use App\Http\Requests\UpdateBookEventRequest;
use App\Models\BookEvent;
use App\Models\Payment;
use App\Models\Subscription;
use App\pkg\PaymentApi;
use Illuminate\Http\Request;


class SubscriptionController extends Controller
{


    public function pay(){
        $test=(new \App\pkg\PaymentApi())->payment_api('TID6341DB4A8853X','10','0780331198');
       return $test;
    }

    public function callback(Request $request){
        /* if transaction is successfuly */
        if($request->status == "SUCCESS") {
            $get = Payment::where('transaction_id', $request->transactionId)->first();
            if(isset($get)) {
                Payment::where('transaction_id', $request->transactionId)->update(['paid' => 1]);

            }
        } else {
            /**
             * message
             */
            $get = Payment::where('transaction_id', $request->transactionId)->first();
        }

        return true;
    }

    /**
     * Save the payments information
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function payment(Request $request)
    {
        $request->validate([
            'payment_phone' => 'required|numeric|digits:10',
        ]);


        $payments=Payment::create([
            'user_id' => auth()->id(),
            'payment_phone' => $request->payment_phone,
            'subscription_id' => $request->subscription_id,
            'amount_paid' => $request->amount_paid,
            'end_date' =>\Carbon\Carbon::now()->addYear(1),
            'transaction_id' => strtoupper(uniqid('TID')),
        ]);

        $amount=(integer) $payments->amount_paid;
        $this->payment_api($payments->transaction_id,$amount,$payments->payment_phone);

        return redirect()->route('subscriptions.index')->with('success', 'Payment successful');
    }

    public function show(Subscription $subscription){
        $subscription->load('items');
        return view('subscriptions.show',[
            'subscription'=>$subscription
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $subscriptions=Subscription::latest()->get();
        return view('subscriptions.index',[
            'subs'=>$subscriptions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(\Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookEvent  $bookEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(BookEvent $bookEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookEventRequest  $request
     * @param  \App\Models\BookEvent  $bookEvent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookEventRequest $request, BookEvent $bookEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookEvent  $bookEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookEvent $bookEvent)
    {
        //
    }
}

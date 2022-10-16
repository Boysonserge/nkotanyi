<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $subscriptions = Subscription::all();
        return view('auth.register2', compact('subscriptions'));
    }

    public function create2()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'graduationYear' => ['required', 'string', 'max:255'],
            'department'=> ['required', 'string', 'max:255'],
            'faculty'=> ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed' /*Rules\Password::defaults()*/],
            'subscriptions' => ['required', 'integer'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'graduationYear' => $request->graduationYear,
            'department' => $request->department,
            'faculty' => $request->faculty,
            'password' => Hash::make($request->password),
            'deleted_at' => now(),
        ]);
        $subscriptions = Subscription::find($request->subscriptions);
        //creating payment for this user
        $payments=Payment::create([
            'user_id' => $user->id,
            'payment_phone' => $request->phone,
            'subscription_id' => $subscriptions->id,
            'amount_paid' => $subscriptions->sub_price,
            'end_date' =>\Carbon\Carbon::now()->addYear(1),
            'transaction_id' => strtoupper(uniqid('TID')),
        ]);

        $amount=(integer) $payments->amount_paid;

        (new \App\pkg\PaymentApi())->payment_api($payments->transaction_id,$amount,$payments->payment_phone);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

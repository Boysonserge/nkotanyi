<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function dashboard(){
        $payments=Payment::query()->with('subscriptions')
            ->where('paid',1)
            ->where('user_id',auth()->id())->get();

        $sub=Subscription::query()->join('payments','payments.subscription_id','=','subscriptions.id')
            ->where('payments.user_id',auth()->id())
            ->where('payments.paid',1)->get();




        return view('dashboard',compact('sub'));
    }
    public function index(){
        $subs=Subscription::with('items')->get();
        $countStudents=User::query()->where('role','student')->count();

        $events = Event::latest()->get();

        return view('welcome',
            [
                'subs'=>$subs,
                'students'=>$countStudents,
                'events'=>$events
            ]);
    }
}

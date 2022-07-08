<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $subs=Subscription::with('items')->get();
        $countStudents=User::query()->where('role','student')->count();
        return view('welcome',
            [
                'subs'=>$subs,
                'students'=>$countStudents
            ]);
    }
}

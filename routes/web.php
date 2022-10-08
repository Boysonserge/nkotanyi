<?php

use App\Http\Controllers\CallbackController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [IndexController::class, 'index'])->name('home');

Route::get('/index', function () {
    return view('welcome2');
});


Route::get('/',[IndexController::class,'index'])->name('/');

Route::get('dashboard',[IndexController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('pay',[SubscriptionController::class,'payment'])->name('pay');

Route::post('callback',[CallbackController::class,'paymentCallBack']);

Route::resource('events', EventController::class);

Route::resource('subscriptions', SubscriptionController::class);

require __DIR__.'/auth.php';

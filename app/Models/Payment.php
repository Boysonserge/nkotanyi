<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function subscriptions(){
        return $this->belongsTo(Subscription::class,'subscription_id');
    }
}

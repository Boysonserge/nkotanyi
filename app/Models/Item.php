<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function subscriptions(){
        return $this->belongsToMany(Subscription::class,'item_subscription')
            ->as('subscriptions');
    }
}

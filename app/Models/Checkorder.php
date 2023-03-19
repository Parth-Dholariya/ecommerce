<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Checkorder extends Model
{
    protected $table = "checkorders";
    protected $fillable = [
        'user_id',
        'tracking_no',
        'tracking_msg',
        'payment_mode',
        'payment_id',
        'payment_status',
        'order_status',
        'cancle_reason',
        'notify',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function orderitems()
    {
        return $this->hasMany(Orderitem::class,'order_id','id');
    }
}

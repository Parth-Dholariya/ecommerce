<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'status',
        'link',
    ];

    public function submenus(){
        return $this->hasMany('App\Models\SubMenuItem')->where('status','enable');
    }
}

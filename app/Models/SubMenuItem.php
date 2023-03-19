<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'link',
        'menu_item_id',
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product','category_id');
    }
}

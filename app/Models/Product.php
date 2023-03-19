<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'name',
        'url',
        'price',
        'category',
        'description',
        'gallery',
        'category_id',
        'trending',
        'cat'
    ];


    public function subcategory()
    {
        return $this->belongsTo(SubMenuItem::class,'category_id','id');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Raybon saree',
                "price"=>"1999",
                "description" =>"this is the best woman's saree ever",
                "category"=>"woman_saree",
                "gallery"=>"suite3.jpg",
                "category_id" =>"3"
            ],
            [
                'name'=>'Artbase saree',
                "price"=>"599",
                "description" =>"this is the best woman's saree ever",
                "category"=>"woman_saree",
                "gallery"=>"suite5.jpg",
                "category_id" =>"3"
            ],
            [
                'name'=>'Bandhni saree',
                "price"=>"1999",
                "description" =>"this is the best woman's saree ever",
                "category"=>"woman_saree",
                "gallery"=>"suite6.jpg",
                "category_id" =>"3"
            ],
            [
                'name'=>'Traditional saree',
                "price"=>"1999",
                "description" =>"this is the best woman's saree ever",
                "category"=>"woman_saree",
                "gallery"=>"suite3.jpg",
                "category_id" =>"3"
            ],
            [
                'name'=>'Milkbon saree',
                "price"=>"1599",
                "description" =>"this is the best woman's saree ever",
                "category"=>"woman_saree",
                "gallery"=>"suite4.jpg",
                "category_id" =>"3"
            ]

        ]);
    }
}

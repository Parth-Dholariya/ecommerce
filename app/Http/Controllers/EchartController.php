<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubMenuItem;
use App\Models\Product;

class EchartController extends Controller
{
    public function echart(Request $request)
    {
        $SubMenuItems = SubMenuItem::where('status', 'enable')->get();
        $products = Product::where('category_id',$SubMenuItems->products->id)->get();
        $product_count = count($products);
        return view('admin.dashboard',compact('products'));

    }
}

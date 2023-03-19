<?php

namespace App\Http\Controllers;

use App\Models\Checkorder;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function table(Product $product)
    {
        $data = Product::all();
        return view('admin.table',compact('product','data'));
    }
    public function usertable()
    {
        $data = User::all();
        return view('admin.usertable',compact('data'));
    }

    public function orderitemtable()
    {
        $data = Orderitem::all();
        return view('admin.orderitemtable',compact('data'));
    }

}

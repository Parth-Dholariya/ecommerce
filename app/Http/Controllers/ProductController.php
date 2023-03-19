<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\SubMenuItem;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index()
    {
        // return Product::all();
        $data = Product::all();
        return view('index', ['products' => $data]);
    }

    function category(Request $request)
    {
        $data = Product::all();
        return view('category', ['products' => $data]);
    }



    function blog()
    {
        return view('blog');
    }

    function contact()
    {
        return view('contact');
    }

    function detail($id)
    {
        $data = Product::find($id);
        if($data->quantity > '0')
        {
            $stockLevel = '<div class="badge badge-success">In Stock</div>';
        }
        else{
            $stockLevel = '<div class="badge badge-danger">Out of Stock</div>';
        }

        return view('detail', ['products' => $data],['stockLevel'=>$stockLevel]);
    }
    function product($id)
    {
        // $products = SubMenuItem::with('products',function($q){
        //     $q->take(20);
        // })->get();
            $category = Product::where('category_id',$id)->get();
        // $data = Product::all();
        return view('collection.product',compact('category'));
    }


    function search(Request $req)
    {
        // return $req->input();
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }



    // function addToCart(Request $req)
    // {
    //     if ($req->session()->has('user'))
    //     {
    //         $cart = new Cart;
    //         $cart->user_id = $req->session()->get('user')['id'];
    //         $cart->product_id = $req->product_id;
    //         $cart->save();
    //         return redirect('/');
    //     }
    //     else
    //     {
    //         return redirect('/login');
    //     }
    // }

    // static function cartItem()
    // {
    //     $userId = Session::get('user')['id'];
    //     return Cart::where('user_id', $userId)->count();
    // }

    // function cartList()
    // {
    //     $userId = Session::get('user')['id'];
    //     $products = DB::table('cart')
    //         ->join('products', 'cart.product_id', '=', 'products.id')
    //         ->where('cart.user_id', $userId)
    //         ->select('products.*', 'cart.id as cart_id')
    //         ->get();

    //     return view('cartlist', ['products' => $products]);
    // }

    // function removeCart($id)
    // {
    //     Cart::destroy($id);
    //     return redirect('cartlist');
    // }

    // function orderNow()
    // {
    //     $userId = Session::get('user')['id'];
    //     $total = $products = DB::table('cart')
    //         ->join('products', 'cart.product_id', '=', 'products.id')
    //         ->where('cart.user_id', $userId)
    //         ->sum('products.price');
    //     return view('ordernow', ['total' => $total]);
    // }

    // function orderPlace(Request $req)
    // {
    //     $userId = Session::get('user')['id'];
    //     $allCart = Cart::where('user_id', $userId)->get();
    //     foreach ($allCart as $cart) {
    //         $order = new Order;
    //         $order->product_id = $cart['product_id'];
    //         $order->user_id = $cart['user_id'];
    //         $order->status = 'pending';
    //         $order->payment_method = $req->payment;
    //         $order->payment_status = 'pending';
    //         $order->name = $req->name;
    //         $order->number = $req->number;
    //         $order->email = $req->email;
    //         $order->address = $req->address;
    //         $order->save();
    //         Cart::where('user_id', $userId)->delete();
    //     }
    //     return redirect('/myorders');
    // }

    // function myOrders()
    // {
    //     // echo "my order";
    //     $userId = Session::get('user')['id'];
    //     $orders =  DB::table('orders')
    //         ->join('products', 'orders.product_id', '=', 'products.id')
    //         ->where('orders.user_id', $userId)
    //         ->get();
    //     return view('myorders', ['orders' => $orders]);

    // }
    function myOrders()
    {
        // echo "my order";
        $userId = Auth::id();
        $orders =  DB::table('order_items')
            // ->join('products', 'orders.product_id', '=', 'products.id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->join('checkorders', 'order_items.order_id', '=', 'checkorders.id')

            ->where('checkorders.user_id', $userId)
            ->get();
        return view('myorders', ['orders' => $orders]);

    }

}

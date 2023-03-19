<?php

namespace App\Http\Controllers;

use App\Models\Checkorder;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orderitem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

use Session;

class CheckController extends Controller
{
    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('checkout')
        ->with('cart_data',$cart_data);
    }

    private function update_user($user_id,$request)
    {
        $user = User::find($user_id);
        $user->name = $request->input('name');
        $user->lname = $request->input('lname');
        $user->number = $request->input('number');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->pincode = $request->input('pincode');
        return $user->save();
    }

    private function insert_orderitem($last_order_id)
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        $items_in_cart = $cart_data;

        foreach($items_in_cart as $itemdata)
        {

            $products = Product::find($itemdata['item_id']);
            $price_value= $products->price;
            $tax_amt = $products->tax_amt;
            Orderitem::create([
                    'order_id' => $last_order_id,
                    'product_id' =>$itemdata['item_id'],
                    'price' => $price_value,
                    'tax_amt' => $tax_amt,
                    'quantity' =>$itemdata['item_quantity'],

                ]);
        }

    }

    public function storeorder(Request $request)
    {
        if(isset($_POST['place_order_btn']))
        {
            //User data update
             $user_id = Auth::id();
            $this -> update_user($user_id,$request);


            //Placing order
            /*
           Payment Status =
                0 =  (pending)
                1 = Cash Paid
                2 = Razorpay payment successfull
                3 = Razorpay payment failed
                4 = pay, stripe.
            */
            $trackno = rand(1111,9999);
            $order = new Checkorder;
            $order->user_id = $user_id;
            $order->tracking_no = 'siyaram'.$trackno;
            $order->payment_mode = "Cash On Delivery";
            $order->payment_status = "0";
            $order->order_status = "0";
            $order->notify = "0";
            $order->save();

            $last_order_id = $order->id;

            //ordered - cart items
            $this->insert_orderitem($last_order_id);


            Cookie::queue(Cookie::forget('shopping_cart'));

            return redirect('/thenk-you')->with('status','Order has been placed successfully');
        }

        if(isset($_POST['place_order_razorpay']))
        {
            //User data update
            $user_id = Auth::id();
            $this -> update_user($user_id,$request);


            //Placing order
            /*
            Payment Status =
                0 = (pending)
                1 = Cash Paid
                2 = Razorpay payment successfull
                3 = Razorpay payment failed
                4 = pay, stripe.
            */
            $trackno = rand(1111,9999);
            $order = new Checkorder;
            $order->user_id = $user_id;
            $order->tracking_no = 'siyaram'.$trackno;
            $order->payment_mode = "Payment by Razorpay";
            $order->payment_id = $request->input('razorpay_payment_id');
            $order->payment_status = "2";
            $order->order_status = "0";
            $order->notify = "0";
            $order->save();

            $last_order_id = $order->id;

            //ordered - cart items
            $this->insert_orderitem($last_order_id);
            return $this->decreaseQuantity();
        }
    }

    public function checkamount(Request $request)

    {
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $items_in_cart = $cart_data;

            $total = "0";
            foreach($items_in_cart as $itemdata)
            {
                $products = Product::find($itemdata['item_id']);
                $price_value= $products->price;
                $total = $total + ($itemdata['item_quantity'] * $price_value);
            }

            return response()->json([
                'name' => $request->name,
                'lname' => $request->lname,
                'number' => $request->number,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'pincode' => $request->pincode,
                'email'=>Auth::user()->email,
                'total_price'=>$total

            ]);
        }
        else
        {
            return response()->json([
                'status_code'=>'no_data_in_cart',
                'status' =>'your cart is empty',
            ]);
        }
    }

    public function decreaseQuantity()
    {
        // $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        // $cart_data = json_decode($cookie_data, true);
        // $items_in_cart = $cart_data;
        $product = Orderitem::get('quantity');
        foreach($product as $itemdata)
        {
            $product = Product::find($itemdata->product_id);
            $product -> update(['quantity'=> $product->quantity - $itemdata->quantity]);
    }
   }
}

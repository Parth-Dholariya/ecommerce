<?php

namespace App\Http\Controllers;
use App\Models\Checkorder;
use PDF;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ordertable()
    {
        $data = Checkorder::all();
        return view('admin.ordertable',compact('data'));
    }
    public function pendingOrder()
    {
        $data = Checkorder::all();
        return view('admin.pending_order',compact('data'));
    }
    public function completeOrder()
    {
        $data = Checkorder::all();
        return view('admin.complete_order',compact('data'));
    }
    public function vieworder($order_id)
    {
        if(Checkorder::where('id',$order_id)->exists())
        {
            $orders = Checkorder::find($order_id);
             return view('admin.orderview',compact('orders'));
        }
        else{
            return redirect()->back()->with('status','No Order Found');
        }
    }

    public function invoice($order_id)
    {
        if(Checkorder::where('id',$order_id)->exists())
        {
            $orders = Checkorder::find($order_id);
            //  return view('admin.invoice',compact('orders'));
            $data = [
                'orders' => $orders,
            ];
            $pdf = PDF::loadView('admin.invoice', $data);

            return $pdf->download('Siyaram.pdf');
        }
        else{
            return redirect()->back()->with('status','No Order Found');
        }

    }

    public function editstatus($id)
    {
        $order = Checkorder::find($id);

        return response()->json([
            'status' => 200,
            'order' => $order,
        ]);
    }

    public function updatestatus(Request $request)
    {
        $stud_id = $request->input('stud_id');
        $order = Checkorder::find($stud_id);
        $order->order_status = $request->input('order_status');
        $order->update();
        return redirect()->back();
    }
}

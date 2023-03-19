@extends('layouts.main')

@section('main-container')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>

            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-0">
                                    Order View
                                    <a href="{{url('generate-invoice/'.$orders->id)}}" class="btn btn-success float-right py-1">Generate Invoice</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                               <div class="col-md-12">
                                   <div class="card mt-3">
                                       <div class="card-body">
                                        <h5>Order details</h5>
                                           <div class="row">
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Tracking No:</label>
                                                    <h6>{{$orders->tracking_no}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Tracking Message</label>
                                                    <h6>{{isset($orders->tracking_msg) == true ? $orders->tracking_msg:'Nothing Updated'}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Payment Mode:</label>
                                                    <h6>{{$orders->payment_mode}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                {{-- 0 = (pending)
                                                1 = Cash Paid
                                                2 = Razorpay payment successfull
                                                3 = Razorpay payment failed
                                                4 = pay, stripe. --}}
                                                <div class="border p-2">
                                                    <label for="">Payment Status:</label>
                                                    <h6>
                                                        @if ($orders->payment_status == '0')
                                                        COD - Pending
                                                        @elseif ($orders->payment_status == '1')
                                                        COD - Paid
                                                        @elseif ($orders->payment_status == '2')
                                                        Razorpay Successfull
                                                        @elseif ($orders->payment_status == '3')
                                                        Razorpay failed
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Payment ID:</label>
                                                    <h6>{{isset($orders->payment_id) == true ? $orders->payment_id:'COD Payment - No Id'}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    {{-- 0 = Pending
                                                    1 = Compeleted
                                                    2 = Rejected/Cancelled --}}
                                                    <label for="">Order Status:</label>
                                                    <h6>
                                                        @if ($orders->order_status == '0')
                                                        Pending
                                                        @elseif ($orders->order_status == '1')
                                                        Completed
                                                        @elseif ($orders->order_status == '2')
                                                        Rejected/Cancelled
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Cancle Reason:</label>
                                                    <h6>{{isset($orders->cancle_reason) == true ? $orders->cancle_reason:'Not cancelled'}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="bg-dark">
                                        <h5>Orderd Items</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Product</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Grandtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $total = "0";
                                                        @endphp
                                                        @foreach ($orders->orderitems as $item)
                                                        <tr>
                                                            <td>{{$item -> id}}</td>
                                                            <td>{{$item ->products-> name}}</td>
                                                            <td>{{$item -> quantity}}</td>
                                                            <td>{{number_format($item -> price,0)}}</td>
                                                            <td>{{$item -> price * $item->quantity}}</td>
                                                        </tr>
                                                        @php
                                                            $total = $total + ($item -> price * $item->quantity)
                                                        @endphp
                                                        @endforeach
                                                        <tr>
                                                            <td colspan="4" class="text-right">Sub Total</td>
                                                            <td>{{number_format($total,0)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="text-right">Tax Amount</td>
                                                            <td>
                                                                @if (isset($item->tax_amt))
                                                                @php
                                                                 $tax = $item->tax_amt;
                                                                 $tax_total = ($total * $tax)/100;
                                                                @endphp
                                                                {{ number_format($tax_total)}}
                                                                @else
                                                                0
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="text-right">Grand Total</td>
                                                            <td>
                                                                @if (isset($item->tax_amt))
                                                                @php
                                                                    $grandtotal = $tax_total + $total
                                                                @endphp
                                                                {{number_format($grandtotal,0)}}
                                                                @else
                                                                {{number_format($total,0)}}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                       </div>
                                   </div>
                                   <hr class="bg-dark">
                                   <div class="card mt-3">
                                       <div class="card-body">
                                           <h5>Customer Details</h5>
                                           <div class="row">
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">First Name:</label>
                                                    <h6>{{$orders->users->name}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Last Name:</label>
                                                    <h6>{{$orders->users->lname}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Email id:</label>
                                                    <h6>{{$orders->users->email}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Number:</label>
                                                    <h6>{{$orders->users->number}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Address:</label>
                                                    <h6>{{$orders->users->address}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">City:</label>
                                                    <h6>{{$orders->users->city}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">State:</label>
                                                    <h6>{{$orders->users->state}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <label for="">Pincode:</label>
                                                    <h6>{{$orders->users->pincode}}</h6>
                                                </div>
                                            </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

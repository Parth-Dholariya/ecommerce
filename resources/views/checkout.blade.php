@extends('master')
@section('content')
    <!--================Checkout Area =================-->
    <section class="checkout_area padding_top">
        <div class="container">


            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-7">
                        <h3>Shipping Detail</h3>
                        <form class="row contact_form" action="{{url('place-order')}}" method="POST">
                            @csrf
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="name" value="{{Auth::user()['name']}}" placeholder="Enter Your Name" />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="lname" value="{{Auth::user()['lname']}}" placeholder="Enter Last Name"/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="number" value="{{Auth::user()['number']}}" placeholder="Enter Your Mobile No"/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="address" value="{{Auth::user()['address']}}" placeholder="Enter your address" /><br>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="city" value="{{Auth::user()['city']}}" placeholder="Enter City"/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="state" value="{{Auth::user()['state']}}" placeholder="Enter State"/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="pincode" value="{{Auth::user()['pincode']}}" placeholder="Enter Pincode/Zipcode"/>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="place_order_btn" class="btn_3">
                                    Place your order
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="button"  class="razorpay_pay_btn btn_3">
                                    razorpay online
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        @if (isset($cart_data))
                        @if (Cookie::get('shopping_cart'))
                            @php $total="0" @endphp
                            <div class="order_box">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart_data as $data)
                                        <tr>
                                            <td>{{ $data['item_name'] }}</td>
                                            <td>$ {{  number_format($data['item_price'], 2)  }}</td>
                                            <td>{{ $data['item_quantity']}}</td>
                                            @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                                <div class="text-right">
                                    <h6>Grand total : $ {{number_format($total, 0)}}</h6>
                                </div>

                            </div>

                            @endif
                            @else
                                <div class="row">
                                    <div class="col-md-12 mycard py-5 text-center">
                                        <div class="mycards">
                                            <h4>Your cart is currently empty.</h4>
                                            <a href="{{ url('category') }}"
                                                class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================End Checkout Area =================-->
@endsection

@section('script')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="{{asset('js/checkout.js')}}"></script>
@endsection

@extends('master')
@section('content')
    <!--================Home Banner Area =================-->


    <!--================ confirmation part start =================-->
    <section class="confirmation_part padding_top">
        <div class="container"><br><br>
            <div class="col-lg-12">
                <div class="confirmation_tittle">
                 <h4><span>Thank you. Your order has been received.</span></h4>
                </div>
              </div>
            <div class="row">
                <center>
                <div class="col-lg-6" >
                    <div class="order_details_iner">
                        <h3>Order Details</h3>
                        <table class="table table-borderless" width="fit-content">
                            <thead>
                                <tr>
                                    <th width="30%" scope="col" colspan="2">Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                <tr>
                                    <th  colspan="2">  <img src="{{ asset('image') }}/{{ $item->gallery }}" alt="" /></th>
                                    <th >Name: {{ $item->name }}<br>
                                        Price : ${{ $item->price }}<br>
                                        {{-- Qty : {{ $item->quantity }}<br> --}}

                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </center>
            </div>
        </div>
    </section>
    <!--================ confirmation part end =================-->
@endsection

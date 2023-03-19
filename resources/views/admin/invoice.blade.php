<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siyaram's</title>
    <style>
        body{
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="">
                <div class="">
                    <h1 class="text-white">Siyaram's</h1>
                </div>
                {{-- <div class="">
                    <div class="company-details">
                        <p class="text-white">Siyaram's Textile Pvt. Ltd</p>
                        <p class="text-white">Mumbai, India</p>
                        <p class="text-white">+91 888555XXXX</p>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: {{$orders->id}}</h2>
                    <p class="sub-heading">Tracking No. {{$orders->tracking_no}} </p>
                    <p class="sub-heading">Order Date: {{$orders->created_at->format('d-M-Y')}} </p>
                    <p class="sub-heading">Email Address: {{$orders->users->email}} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: {{$orders->users->name.' '.$orders->users->lname}}  </p>
                    <p class="sub-heading">Address: {{$orders->users->address}} </p>
                    <p class="sub-heading">Phone Number: {{$orders->users->number}} </p>
                    <p class="sub-heading">City,State,Pincode:
                        {{$orders->users->city}},
                        {{$orders->users->state}},
                        {{$orders->users->pincode}},
                    </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $total = "0";
                @endphp
                @foreach ($orders->orderitems as $item)
                <tr>
                    {{-- <td>{{$item -> id}}</td> --}}
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
                    <td colspan="3" class="text-right">Sub Total</td>
                    <td>{{number_format($total,0)}}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Tax Amount</td>
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
                    <td colspan="3" class="text-right">Grand Total</td>
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
            <br>
            <h3 class="heading">Payment Status: @if ($orders->payment_status == '0')
                COD - Pending
                @elseif ($orders->payment_status == '1')
                COD - Paid
                @elseif ($orders->payment_status == '2')
                Razorpay Successfull
                @elseif ($orders->payment_status == '3')
                Razorpay failed
                @endif</h3>
            <h3 class="heading">Payment Mode: {{$orders->payment_mode}}</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2021 - Siyaram's. All rights reserved.
                {{-- <a href="https://www.fundaofwebit.com/" class="float-right">www.fundaofwebit.com</a> --}}
            </p>
        </div>
    </div>

</body>
</html>

@extends('master')
@section('content')
    <!--================Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Searching Product</h3>
                    <div class="row align-items-center latest_product_inner">
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-sm-6">
                                <div class="single_product_item">
                                    <a href="detail/{{ $item['id'] }}"> <img
                                            src="{{ asset('image') }}/{{ $item['gallery'] }}" alt=""></a>
                                    <div class="single_product_text">
                                        <h4>{{ $item['name'] }}</h4>
                                        <h3>${{ $item['price'] }}</h3>
                                        {{-- <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a> --}}
                                        <form action="/add_to_cart" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                            <a class="add_cart">
                                                <button type="submit" class="btn_3">Add to cart</button>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection

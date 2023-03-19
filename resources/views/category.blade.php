@extends('master')
@section('content')

<!--================Home Banner Area =================-->


    <!--================Category Product Area =================-->

    <!--================End Category Product Area =================-->

     <!-- product_list part start-->
     <section class="product_list best_seller  section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Trending <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($products as $sitems)
                        @if ($sitems->trending == true)
                        <div class="single_product_item">
                            <a href="detail/{{$sitems['id']}}"> <img src="{{ asset('image') }}/{{ $sitems['gallery'] }}" alt=""></a>
                            <div class="single_product_text">
                                <h4>{{ $sitems['name'] }}</h4>
                                <h3>${{ $sitems['price'] }}</h3>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($products as $sitems)
                        <div class="single_product_item">
                            <a href="detail/{{$sitems['id']}}"> <img src="{{ asset('image') }}/{{ $sitems['gallery'] }}" alt=""></a>
                            <div class="single_product_text">
                                <h4>{{ $sitems['name'] }}</h4>
                                <h3>${{ $sitems['price'] }}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->
    @endsection

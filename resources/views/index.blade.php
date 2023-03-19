@extends('master')
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        @foreach ($products as $sitems)
                            @if ($sitems->trending == true)
                                <div class="single_banner_slider">
                                    <div class="row product_data">
                                        <div class="col-lg-5 col-md-8">
                                            <div class="banner_text">
                                                <div class="banner_text_iner">
                                                    <h1>Man's Suit</h1>
                                                    <p>{{ $sitems['description'] }}</p>
                                                    {{-- <a href="#" class="btn_2">buy now</a> --}}
                                                    <input type="hidden" class="product_id" name="product_id"
                                                    value="{{ $sitems['id'] }}">
                                                <input type="hidden" class="qty-input form-control" value="1" min="1" max="100" />
                                                <a class="add_cart">
                                                    <button type="submit" class="add-to-cart-btn btn_3">Buy Now</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner_img d-none d-lg-block media">
                                            <a href="{{url('detail')}}/{{ $sitems['id'] }}"> <img
                                                    src="{{ asset('image') }}/{{ $sitems['gallery'] }}"  alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest Man's Suit</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{ asset('img/suit1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest Man's Suit</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{ asset('img/suit2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest Man's Suit</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{ asset('img/suit3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Premium Quality</p>
                        <h3>Latest Man's Suit</h3>
                        <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="{{ asset('img/suit4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>awesome <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                @foreach ($products as $sitems)
                                @if ($sitems->trending == true)
                                <div class="col-lg-3 col-sm-6 product_data">
                                    <div class="single_product_item">
                                        <a href="{{url('detail')}}/{{ $sitems['id'] }}">
                                            <img src="{{ asset('image') }}/{{ $sitems['gallery'] }}" alt="">
                                        </a>
                                        <div class="single_product_text">
                                            <h4>{{ $sitems['name'] }}</h4>
                                            <h3>${{ $sitems['price'] }}</h3>
                                            {{-- <form action="/add_to_cart" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $sitems['id'] }}">
                                                <a class="add_cart">
                                                    <button type="submit" class="btn_3">Add to cart</button>
                                                </a>
                                            </form> --}}
                                            <input type="hidden" class="product_id" name="product_id"
                                            value="{{ $sitems->id }}">
                                        <input type="hidden" class="qty-input form-control" value="1" min="1" max="100" />
                                        <a class="add_cart">
                                            <button type="submit" class="add-to-cart-btn btn_3">Add to cart</button>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                @foreach ($products as $sitems)
                                @if ($sitems->trending == true)
                                <div class="col-lg-3 col-sm-6 product_data">
                                    <div class="single_product_item">
                                        <a href="{{url('detail')}}/{{ $sitems['id'] }}">
                                            <img src="{{ asset('image') }}/{{ $sitems['gallery'] }}" alt="">
                                        </a>
                                        <div class="single_product_text">
                                            <h4>{{ $sitems['name'] }}</h4>
                                            <h3>${{ $sitems['price'] }}</h3>
                                            {{-- <form action="/add_to_cart" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $sitems['id'] }}">
                                                <a class="add_cart">
                                                    <button type="submit" class="btn_3">Add to cart</button>
                                                </a>
                                            </form> --}}
                                            <input type="hidden" class="product_id" name="product_id"
                                            value="{{ $sitems->id }}">
                                        <input type="hidden" class="qty-input form-control" value="1" min="1" max="100" />
                                        <a class="add_cart">
                                            <button type="submit" class="add-to-cart-btn btn_3">Add to cart</button>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="{{ asset('img/man.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on 60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

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
                                <a href="{{url('detail')}}/{{ $sitems['id'] }}"> <img
                                        src="{{ asset('image') }}/{{ $sitems['gallery'] }}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>{{ $sitems['name'] }}</h4>
                                    <h3>{{ $sitems['price'] }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->



    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_1.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_2.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_3.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_4.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_5.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_3.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_1.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_2.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_3.png') }}" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="{{ asset('img/client_logo/client_logo_4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->
@endsection

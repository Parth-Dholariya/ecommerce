@extends('master')
@section('content')
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle">
                        <h2>Product</h2>
                    </div>
                </div>
            </div>
                <div class="col-lg-12">
                    <div class="row align-items-center latest_product_inner">
                        @foreach ($category as $product)
                        {{$product->subcategory->name}}
                                <div class="col-lg-3 col-sm-6 product_data">
                                    <div class="single_product_item">
                                        <a href="{{url('detail')}}/{{ $product->id }}">
                                             <img
                                                src="{{ asset('image') }}/{{ $product->gallery }}" alt="">
                                            </a>
                                        <div class="single_product_text">
                                            <h4>{{ $product->name }}</h4>
                                            <h3>${{ $product->price }}</h3>
                                            <input type="hidden" class="product_id" name="product_id"
                                                value="{{ $product->id }}">
                                            <input type="hidden" class="qty-input form-control" value="1" min="1"
                                                max="100" />
                                                <a class="add_cart"><button type="submit" class="add-to-cart-btn btn_3">Add to cart</button></a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </section>
    @endsection

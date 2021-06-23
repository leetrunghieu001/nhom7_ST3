@extends('layout')
@section('title','Search Product')
@section('content')

<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>We Find <i class="text-success">"{{ count($search_product) }}"</i> products by your keyword</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">

            <!-- Single gallery Item Start -->
            @foreach ($search_product as $key => $product)
            <a href="{{URL::to('/details_product/'.$product->product_id)}}">
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img class="img-product" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                        <div class="product-quicview">
                            <!-- <a href="#" data-toggle="modal" data-target="#aaa"><i class="ti-plus"></i></a> -->
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                        <h4 class="product-price">{{ number_format($product->product_price) }} <span style="color: rgb(232, 149, 253);">VND</span></h4>
                        <p class="product_name_height">{{ $product->product_name }}</p>
                         <!-- Star Rating -->
                         <div class="single_product_ratings mb-15">
                         @for($i = 0;$i<$product->product_star_rating;$i++)
                             <i class="fa fa-star text-warning" aria-hidden="true"></i>
                             @endfor
                             @for($i = 0;$i < (5-$product->product_star_rating);$i++)
                                 <i class="fa fa-star-o text-warning" aria-hidden="true"></i>
                                 @endfor
                     </div>
                        <!-- Add to Cart -->
                        <form class="cart clearfix mb-50 d-flex" method="post" action="{{URL::to('/save_cart')}}">
                            @csrf
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="product_id_hidden" value="{{$product->product_id}}">
                            <button type="submit" name="addtocart" value="5" class="btn btn-danger cart-submit d-block color-btn_add_to_cart">Add to cart</button>
                        </form>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
<!-- ****** New Arrivals Area End ****** -->

<!-- ****** Offer Area Start ****** -->
<section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url({{url('public')}}/frontend/images/bg-img/bg-5.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-end justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                    <h2>t-shirt <span class="karl-level">Hot</span></h2>
                    <p>* Free shipping </p>
                    <div class="offer-product-price">
                        <!-- <h3><span class="regular-price">$25.90</span> $15.90</h3> -->
                    </div>
                    <!-- <a href="#" class="btn karl-btn mt-30">Shop Now</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Offer Area End ****** -->



@endsection()

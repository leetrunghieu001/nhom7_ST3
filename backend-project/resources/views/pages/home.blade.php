@extends('layout')
@section('title','Trang chủ')
@section('content')
<style>
    .hidden-item {
        display: none;
    }
</style>

<!-- ****** Welcome Slides Area Start ****** -->
<section class="welcome_area">
    <div class="welcome_slides owl-carousel">
        <!-- Single Slide Start -->
        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url({{url('public')}}/frontend/images/bg-img/bg-1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome_slide_text">
                            <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
                            <!-- <a href="{{URL::to('/homePage')}}" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide Start -->
        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url({{url('public')}}/frontend/images/bg-img/bg-4.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome_slide_text">
                            <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
                            <!-- <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide Start -->
        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url({{url('public')}}/frontend/images/bg-img/bg-2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome_slide_text">
                            <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                            <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women Fashion</h2>
                            <!-- <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="karl-projects-menu mb-100">
        <div class="text-center portfolio-menu">
            <button class="btn active btn-data-filer" data-filter=".hot-product" style="font-size: 40px;">Hot Product</button>
            <button class="btn btn-data-filer data-filer-all" data-filter=".all-product-list" style="font-size: 40px;">ALL</button>
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">
            <!-- 8 sản phẩm nổi bật nhất-->
            @foreach ($hot_products as $key => $product)
            <a href="{{URL::to('/details_product/'.$product->product_id)}}">
                <div class="col-12 col-sm-6 col-md-3 single_gallery_item hot-product wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img class="img-product" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                        <div class="product-quicview">
                            <!-- <a href="#" data-toggle="modal" data-target="#aaa"><i class="ti-plus"></i></a> -->
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                        <h4 class="product-price">{{ number_format($product->product_price) }} <i style="color: rgb(232, 149, 253);">VND</i></h4>
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
                        <!-- Add to Cart Form -->
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

            <!-- Tất cả sản phẩm -->
            @foreach ($all_product as $key => $product)
            <a href="{{URL::to('/details_product/'.$product->product_id)}}">
                <div class="col-12 col-sm-6 col-md-3 single_gallery_item wow all-product-list fadeInUpBig hidden-item" data-wow-delay="0.2s">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img class="img-product" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                        <div class="product-quicview">
                            <!-- <a href="#" data-toggle="modal" data-target="#aaa"><i class="ti-plus"></i></a> -->
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                        <h4 class="product-price">{{ number_format($product->product_price) }} <i style="color: rgb(232, 149, 253);">VND</i></h4>
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
                            <button style="background-color: blueviolet!important;" type="submit" name="addtocart" value="5" class="btn btn-danger cart-submit d-block color-btn_add_to_cart">Add to cart</button>
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
                    <h2>Thông tin sản phẩm <span class="karl-level">Hot</span></h2>
                    <p>100% sản phẩm được nhập khẩu từ các quốc gia lớn trên thế giới như Mỹ, Úc, Canada,vv.. Cùng với đó là những thương hiệu
                        nổi tiếng như Gucci, Adidas, Supreme, vv... </p>
                        <p>Các sản phẩm đều đạt 100% chất lượng hàng Việt Nam chất lượng cao</p>
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
<script>
    const btnDataFiler = document.querySelectorAll('.btn-data-filer');
    btnDataFiler.forEach(element => {
        element.addEventListener('click', () => {
            let hiddenItem = document.querySelectorAll('.hidden-item');
            hiddenItem.forEach(item => {
                item.style.display = 'inline';
            });
        });

    });
</script>

@endsection()
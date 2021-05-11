@extends('layout.master')
@section('title','Trang chủ')
@section('main')
<style>
    .product-img {
        text-align: center;
        height: 450px;
        border: 1px solid black;
    }

    .product-img img {
        height: 100% !important;
    }

    .product-name {
        height: 80px;
    }

    .product-name h5 {
        max-height: 80px;
    }
    .add-to-cart-btn{
    box-shadow: 0px 5px 10px #212121;
    }
</style>
<!-- ****** Quick View Modal Area Start ****** -->
<div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="quickview_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="quickview_pro_img">
                                    <img src="{{ asset('customer_layout/img/product-img/product-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="quickview_pro_des">
                                    <h4 class="title">Boutique Silk Dress</h4>
                                    <div class="top_seller_product_rating mb-15">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="price">$120.99 <span>$130</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                    <a href="#">View Full Product Details</a>
                                </div>
                                <!-- Add to Cart Form -->
                                <form class="cart" method="post">
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                    <!-- Wishlist -->
                                    <div class="modal_pro_wishlist">
                                        <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                    </div>
                                    <!-- Compare -->
                                    <div class="modal_pro_compare">
                                        <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                    </div>
                                </form>

                                <div class="share_wf mt-30">
                                    <p>Share With Friend</p>
                                    <div class="_icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
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
<!-- ****** Quick View Modal Area End ****** -->

<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>All products</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="karl-projects-menu mb-100">
        <!-- Tất cả sản phẩm -->
        <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">SEE ALL PRODUCTS</button>
        </div>
        <!-- Lọc theo nhà sản xuất sản phẩm -->
        <div class="text-center portfolio-menu">
            <span>Brand</span>
            @foreach($brands as $value)
            <button class="btn" data-filter=".{{ convert_vi_to_en($value->brandName) }}">{{$value->brandName}}</button>
            @endforeach
        </div>
        <!-- Lọc theo loại sản phẩm -->
        <div class="text-center portfolio-menu">
            <span>Type</span>
            @foreach($types as $value)
            <button class="btn" data-filter=".{{ convert_vi_to_en($value->typeName) }}">{{$value->typeName}}</button>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">

            <!-- Single gallery Item Start -->
            @foreach($products as $value)
            <div class="col-12 col-sm-6 col-md-4 single_gallery_item {{ convert_vi_to_en($value->brand->brandName) }} 
                    {{ convert_vi_to_en($value->type->typeName) }} wow fadeInUpBig" data-wow-delay="0.2s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src="{{ asset('image_products/'.$value->image.'') }}" alt="">
                    <div class="product-quicview">
                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price" style="color: black;">${{ number_format($value->price) }}</h4>
                    <div class="product-name">
                        <h5>{{ $value->productName }}</h5>
                    </div>
                    <!-- The star vote-->
                    <div class="top_seller_product_rating mb-15" style="color:#FFD700;height: 5px;">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>

                    <!-- Add to Cart -->
                    <div class="add-to-card" style="height: 50px;">
                        <a href="#" class="btn btn-warning add-to-cart-btn " role="button">
                            <h5>ADD TO CART <i class="fa fa-cart-plus" aria-hidden="true"></i></h5>
                        </a>
                    </div>
                    <p style="padding-top: 15px;"><b>Brand:</b> {{ $value->brand->brandName }}</p>
                    <p><b>Type:</b> {{ $value->type->typeName }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<?php
function convert_vi_to_en($str)
{
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
    $str = preg_replace("/(đ)/", "d", $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
    $str = preg_replace("/(Đ)/", "D", $str);
    $str = str_replace(" ", "-", str_replace("&*#39;", "", $str));
    return $str;
}
?>
@endsection
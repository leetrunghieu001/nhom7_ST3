<?php

use Illuminate\Support\Facades\Session;

$content = Cart::content();
$subtotal = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{url('public/frontend/images/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{url('public/frontend/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">

    <!-- Responsive CSS -->
    <link href="{{url('public')}}/frontend/css/responsive.css" rel="stylesheet">

    <!-- Font Register-->
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/css/css-register/sourcesanspro-font.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{url('public/frontend/css/css-register/style.css')}}" />
    <link rel="stylesheet" href="{{url('public/backend/css/form-validation.css')}}" />
    <style>
        .color-btn_add_to_cart {
        font-weight: bold;
        background: rgb(232, 149, 253)!important;
        border: 2px solid #9e20b0ad;
    }
    </style>

</head>

<body>
    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img class="img-fluid" src="{{url('public')}}/frontend/images/core-img/logo.png" alt="" style="width: 200px;height: 150px;"></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">

                                        @if(Session::has("customer_name") != null)
                                        <h5>Hello <i style="color: rgb(232, 149, 253);">"{{ Session::get('customer_name') }}"</i></h5>
                                        @endif


                                        <!-- Nếu biến Session customer_id tồn tại (tức là ng dùng đã đăng nhập) thì in Sign Out ra -->
                                        @if(Session::has("customer_id") != null)
                                        <a class="user" href="{{URL::to('/logout_checkout')}}" title="Sign Out" rel="nofollow">
                                            <i class="fas fa-sign-in-alt"></i>Sign Out</a>
                                        <!-- Nếu biến Customer_id không có giá trị (tức là ng dùng chưa đăng nhập) thì in Sign In ra -->
                                        @else
                                        <a class="user" href="{{URL::to('/login_checkout')}}" title="Sign In" rel="nofollow">
                                            <i class="fas fa-sign-in-alt"></i>Sign In</a>
                                        @endif

                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">
                                                @foreach ($content as $value_product)
                                                <?php
                                                $subtotal += $value_product->price * $value_product->qty;
                                                ?>
                                                @endforeach
                                                {{ $content->count()}}
                                            </span> <i class="ti-bag"></i> Your Bag
                                            <?php
                                            echo    number_format($subtotal) . ' VND';
                                            $subtotal = 0;
                                            ?></a>

                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">

                                            @foreach ($content as $value_product)
                                            <li>
                                                <a href="{{url('details_product/'.$value_product->id)}}" class="image"><img src="{{URL::to('/public/uploads/product/'.$value_product->options->image)}}" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="{{url('details_product/'.$value_product->id)}}">{{ $value_product->name}}</a></h6>
                                                    <p>{{$value_product->qty}}X - <span class="price">{{ $value_product->price}} VND</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <?php
                                            $subtotal += $value_product->price * $value_product->qty;
                                            ?>
                                            @endforeach
                                            <li class="total">
                                                <span class="pull-right"> Total:
                                                    <?php
                                                    echo number_format($subtotal) . ' VND';
                                                    ?>
                                                </span>
                                                <a href="{{URL::to('/show_cart')}}" class="btn btn-sm btn-cart">Cart</a>

                                                <?php
                                                $shipping_id = Session::get('shipping_id');
                                                $customer_id = Session::get('customer_id');
                                                if ($customer_id != NULL && $shipping_id == null) {
                                                ?>
                                                    <a href="{{URL::to('/show_checkout')}}" class="btn btn-sm btn-checkout">Checkout</a>
                                                <?php } else if ($customer_id != NULL && $shipping_id != null) { ?>
                                                    <a href="{{URL::to('/payment')}}" class="btn btn-sm btn-checkout">Checkout</a>
                                                <?php } else { ?>
                                                    <a href="{{URL::to('/login_checkout')}}" class="btn btn-sm btn-checkout">Checkout</a>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-end">
                        <!-- Khai báo autocomplete="off" để ngắt các từ khoá mà google tự động nhớ -->
                        <form action="{{URL::to('/search')}}" method="POST" class="font-form" autocomplete="off">
                            @csrf
                            <div class="search_box pull_right">
                                <!-- Phải khai báo list=id của datalist -->
                                <input class="help-line input-search" list="browsers" type="text" name="keywords_submit" id="" placeholder="Search product" required>
                                <!-- DataList -->
                                <datalist id="browsers">
                                    <!-- Các Option -->
                                    @foreach($all_product as $product)
                                    <option value="{{$product->product_name}}">
                                    @endforeach
                                </datalist>
                                <input type="submit" value="Search" class="btn btn-default btn-sm search-font">
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="{{URL::to('/homePage')}}">Home</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brand</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    @foreach ($brand as $key => $brand)
                                                    <a class="dropdown-item" href="{{URL::to('/brand_product/'.$brand->brand_id)}}"><img class="images-brand" src="{{url('public')}}/uploads/brand/{{$brand->brand_image}}" alt="">{{ $brand->brand_name }}</a>
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    @foreach ($category as $key => $cate)
                                                    <a class="dropdown-item" href="{{URL::to('/category_product/'.$cate->category_id)}}"><img class="images-brand" src="{{url('public')}}/uploads/category/{{$cate->category_image}}" alt="">{{ $cate->category_name }}</a>
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li class="nav-item active"><a class="nav-link" href="{{URL::to('/show_cart')}}">Cart</a></li>

                                            <!-- <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown" style="min-width: 9rem!important;">
                                                    <a class="dropdown-item" href="index.html">Pants</a>
                                                    <a class="dropdown-item" href="index.html">Clothings</a>
                                                    <a class="dropdown-item" href="index.html">ACCESSORY</a>
                                                </div>
                                            </li> -->
                                            <!-- <li class="nav-item"><a class="nav-link" href="#">Contact</a></li> -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <!-- <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +34 657 3556 778</a> -->
                                <a href="#"><i class="ti-headphone-alt"></i> 0974697842</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
        <!--   <section class="top-discount-area d-md-flex align-items-center">
            <!~~ Single Discount Area ~~>
            <div class="single-discount-area">
                <h5>Free Shipping &amp; Returns</h5>
                <h6><!~~ <a href="#"> ~~>BUY NOW<!~~ </a> ~~></h6>
            </div>
            <!~~ Single Discount Area ~~>
            <div class="single-discount-area">
                <h5>20% Discount for all dresses</h5>
                <h6>USE CODE: <!~~ Colorlib ~~></h6>
            </div>
            <!~~ Single Discount Area ~~>
            <div class="single-discount-area">
                <h5>20% Discount for students</h5>
                <h6>USE CODE: <!~~ Colorlib ~~></h6>
            </div>
        </section> -->
        <!-- ****** Top Discount Area End ****** -->

        @yield('content')
        <!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>AUTHOR</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">
                            @foreach($authors as $author)
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>{{ $author->author_description }}</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="{{url('public/frontend/images/author-img/'.$author->author_image)}}" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p style="text-align: center;">{{ $author->author_name }}</p>
                                        <span style="text-align: center;">{{ $author->author_slogan }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- /.wrapper end -->
    <script type="text/javascript">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
    </script>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{url('public')}}/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{url('public')}}/frontend/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{url('public')}}/frontend/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="{{url('public')}}/frontend/js/plugins.js"></script>
    <!-- Active js -->
    <script src="{{url('public')}}/frontend/js/active.js"></script>
    <script src="{{url('public')}}/frontend/js/b046fc201c.js" crossorigin="anonymous"></script>

    <script src="{{url('public/backend/js/jquery.form-validator.min.js')}}"></script>
    <script type="text/javascript">
        $.validate({});
    </script>


</body>

</html>
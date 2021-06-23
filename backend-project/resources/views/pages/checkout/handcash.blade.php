@extends('layout')
@section('title','Thank you ^^')
@section('content')
<!-- ****** Offer Area Start ****** -->
<section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url({{url('public')}}/frontend/images/bg-img/bg-5.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-end justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                    <h4 class="thanks-style">
                        Thanks for ordering at the store
                    </h4>
                    <!-- <h2>White t-shirt <span class="karl-level">Hot</span></h2>
                    <div class="offer-product-price">
                        <h3><span class="regular-price">$25.90</span> $15.90</h3>
                    </div> -->
                    <a href="{{URL::to('/homePage')}}" class="btn karl-btn mt-30">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Offer Area End ****** -->
@endsection

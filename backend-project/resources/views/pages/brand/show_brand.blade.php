@extends('layout')
@foreach ($brand_name as $key => $name_brand)
@section('title',$name_brand->brand_name)
@endforeach
@section('content')

<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    @foreach ($brand_name as $key => $name_brand)
                    <h2>We find <i style="color: rgb(232, 149, 253);">{{ count($brand_id) }}</i> Product of {{$name_brand->brand_name}}</h2>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row karl-new-arrivals">

            <!-- Single gallery Item Start -->
            @foreach ($brand_id as $key => $product)
            <a href="{{URL::to('/details_product/'.$product->product_id)}}">
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img class="img-product" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                        <div class="product-quicview">
                            <!-- <a href="{{URL::to('/detail/'.$product->product_id)}}" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a> -->
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                        <h4 class="product-price">{{ number_format($product->product_price) }}<span style="color: rgb(232, 149, 253);"> VND</span></h4>
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
<!-- ****** brand Product Area End ****** -->

@endsection()
 @extends('layout')
 @foreach ($product_details as $key => $value)
 @section('title','Chi tiết sản phẩm')
 @endforeach
 @section('content')
 <style>
     .comment {
         background: skyblue;
         border-radius: 10px;
         padding: 10px;
         margin: 5px;
     }

     .avatar-user {
         border: 1px solid black;
         border-radius: 50%;
         width: 50px;
         height: 50px;
         max-width: 50px;
         max-height: 50px;
     }

     .user-name {
         padding-left: 10px;
     }

     .btn-delete-comment {
         transition: 1s;
     }

     .btn-delete-comment:hover {
         transform: scale(1.5);
     }
 </style>

 @foreach ($product_details as $key => $value)
 <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
 <div class="breadcumb_area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <ol class="breadcrumb d-flex align-items-center">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">{{$value->category_name}}</a></li>
                     <li class="breadcrumb-item active">{{$value->product_name}}</li>
                 </ol>
                 <!-- btn -->
                 <a href="{{url('/')}}" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Shop</a>
             </div>
         </div>
     </div>
 </div>
 <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->
 <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
 <section class="single_product_details_area section_padding_0_100">
     <div class="container">
         <div class="row">
             <div class="col-12 col-md-6">
                 <div class="single_product_thumb">
                     <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <a class="gallery_img" href="{{url('public')}}/uploads/product/{{$value->product_image}}">
                                     <img class="d-block w-100" src="{{url('public')}}/uploads/product/{{$value->product_image}}" alt="First slide">
                                 </a>
                             </div>
                             <div class="carousel-item">
                                 <a class="gallery_img" href="{{url('public')}}/uploads/product/{{$value->product_image}}">
                                     <img class="d-block w-100" src="{{url('public')}}/uploads/product/{{$value->product_image}}" alt="Second slide">
                                 </a>
                             </div>
                             <div class="carousel-item">
                                 <a class="gallery_img" href="{{url('public')}}/uploads/product/{{$value->product_image}}">
                                     <img class="d-block w-100" src="{{url('public')}}/uploads/product/{{$value->product_image}}" alt="Third slide">
                                 </a>
                             </div>
                             <div class="carousel-item">
                                 <a class="gallery_img" href="{{url('public')}}/uploads/product/{{$value->product_image}}">
                                     <img class="d-block w-100" src="{{url('public')}}/uploads/product/{{$value->product_image}}" alt="Fourth slide">
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-12 col-md-6">
                 <div class="single_product_desc">
                     <h4 class="title"><a href="#">{{$value->product_name}}</a></h4>

                     <h4 class="price">$ {{number_format($value->product_price)}}</h4>

                     <p class="available">Brand: <span class="text-muted">{{$value->brand_name}}</span></p>
                     <p class="available">Category: <span class="text-muted">{{$value->category_name}}</span></p>

                     <!-- Vote -->
                     <div class="single_product_ratings mb-15">
                         @for($i = 0;$i<$value->product_star_rating;$i++)
                             <i class="fa fa-star" aria-hidden="true"></i>
                             @endfor
                             @for($i = 0;$i < (5-$value->product_star_rating);$i++)
                                 <i class="fa fa-star-o" aria-hidden="true"></i>
                                 @endfor
                     </div>

                     <div class="widget size mb-50">
                         <h6 class="widget-title">Size</h6>
                         <div class="widget-desc">
                             <ul>
                                 <li><a href="#">32</a></li>
                                 <li><a href="#">34</a></li>
                                 <li><a href="#">36</a></li>
                                 <li><a href="#">38</a></li>
                                 <li><a href="#">40</a></li>
                                 <li><a href="#">42</a></li>
                             </ul>
                         </div>
                     </div>

                     <!-- Add to Cart Form -->
                     <form class="cart clearfix mb-50 d-flex" method="post" action="{{URL::to('/save_cart')}}">
                         @csrf
                         <div class="quantity">
                             <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                             <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                             <input type="hidden" class="qty-text" name="product_id_hidden" value="{{$value->product_id}}">
                             <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                         </div>
                         <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to cart</button>
                     </form>

                     <div id="accordion" role="tablist">
                         <div class="card">
                             <div class="card-header" role="tab" id="headingOne">
                                 <h6 class="mb-0">
                                     <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                                 </h6>
                             </div>

                             <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                 <div class="card-body">
                                     <p>{{$value->product_desc}}</p>
                                 </div>
                             </div>
                         </div>
                         <div class="card">
                             <div class="card-header" role="tab" id="headingTwo">
                                 <h6 class="mb-0">
                                     <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Rating & Comment</a>
                                 </h6>
                             </div>
                             <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                 <div class="card-body">
                                     @if(Session::has("customer_name") != null)
                                     <!-- Message -->
                                     <div class="message">
                                         <div class="position-center">
                                             <form role="form" method="POST" action="{{ url('add-comment') }}">
                                                 @csrf
                                                 <div class="form-group">
                                                     <label for="exampleInputPassword1">Comment</label>
                                                     <textarea style="resize: none;" rows="5" class="form-control" name="comment_content" id="ckeditor1" placeholder="Enter your comment here" required></textarea>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="exampleInputPassword1">Rating Star Here</label>
                                                     <select name="comment_rating" class="form-control input-sm m-bot15">
                                                         <option value="5">5 Sao</option>
                                                         <option value="4">4 Sao</option>
                                                         <option value="3">3 Sao</option>
                                                         <option value="2">2 Sao</option>
                                                         <option value="1">1 Sao</option>
                                                     </select>
                                                 </div>
                                                 <input type="number" name="product_id" value="{{$value->product_id}}" style="display: none;">
                                                 <input type="number" name="customer_id" value="{{ Session::get("customer_id") }}" style="display: none;">
                                                 <button type="submit" class="btn btn-info">Comment</button>
                                             </form>
                                         </div>
                                         @else
                                         <h3><i>Please Login to Rating and Comment this Product</i></h3>
                                         <a href="{{url('login_checkout')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login now !!</a>
                                         @endif
                                         <div class="status-area" id="status-area" style="padding-top: 20px;">
                                             <!-- Demo Comment 1 -->
                                             @foreach($comments as $comment)
                                             <div class="row">
                                                 <div class="col-md-1">
                                                     <img class="avatar-user img-fluid" src="{{ url('https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png') }}" alt="">
                                                 </div>
                                                 <div class="col-md-10">
                                                     <div class="user-name">{{ $comment->customer_name }}</div>
                                                     <div dir="auto" class="comment">
                                                         @for($i = 0;$i < $comment->comment_rating;$i++)
                                                             <i class="fas fa-star text-danger"></i>
                                                             @endfor
                                                             @for($i = 0;$i < (5-$comment->comment_rating);$i++)
                                                                 <i class="fas fa-star text-secondary"></i>
                                                                 @endfor
                                                                 <span><i class="text-primary">{{ $comment->time_post }}</i></span><br>
                                                                 {{ $comment->comment_content }}
                                                     </div>
                                                 </div>
                                                 @if(Session::has("customer_id") != null)
                                                 @if(Session::get("customer_id") == $comment->customer_id)
                                                 <div class="col-md-1">
                                                     <a href="{{ url('delete_comment/'.$comment->comment_id.'/'. $value->product_id)}}" class="btn btn-light btn-lg active" role="button" aria-pressed="true">
                                                         <i class="fas fa-trash-alt text-danger btn-delete-comment" title="Delete this comment"></i>
                                                     </a>
                                                 </div>
                                                 @endif
                                                 @endif
                                             </div>
                                             @endforeach
                                             {{ $comments->links() }}
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
     </div>
 </section>
 @endforeach

 <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

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
                                     <!-- <img src="{{url('public')}}/frontend/images/product-img/product-1.jpg" alt=""> -->
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
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                     </div>
                                     <h5 class="price">$120.99 <span>$130</span></h5>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                     <a href="#">View Full Product Details</a>
                                 </div>
                                 <!-- Add to Cart Form -->
                                 <form class="cart" method="post">
                                     <div class="quantity">
                                         <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                         <input type="number" class="qty-text" id="qty2" step="1" min="1" max="12" name="quantity" value="1">

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

 <section class="you_may_like_area clearfix">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section_heading text-center">
                     <h2>related Products</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="you_make_like_slider owl-carousel">
                     @foreach($related_product as $key => $product_relate)
                     <!-- Single gallery Item -->
                     <div class="single_gallery_item">
                         <!-- Product Image -->
                         <div class="product-img">
                             <img class="img-product" src="{{URL::to('/public/uploads/product/'.$product_relate->product_image)}}" alt="">
                             <div class="product-quicview">
                                 <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                             </div>
                         </div>
                         <!-- Product Description -->
                         <div class="product-description">
                             <h4 class="product-price">$ {{number_format($product_relate->product_price)}}</h4>
                             <p>{{$product_relate->product_name}}</p>
                             <!-- Add to Cart -->
                             <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </section>
 @endsection
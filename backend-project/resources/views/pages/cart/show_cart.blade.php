@extends('layout')
@section('title','Cart')
@section('content')
<!-- ****** Cart Area Start ****** -->
<div class="cart_area section_padding_100 clearfix">
    @if(count(Cart::content()) == 0)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table clearfix">
                  <h1 style="text-align: center;color: rgb(232, 149, 253);"><i>There aren't any product in your cart</i></h1>
                </div>

                <div class="cart-footer d-flex mt-30">
                    <div class="back-to-shop w-50">
                        <a href="{{URL::to('/homePage')}}">Continue shooping</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <?php
                        $content = Cart::content();
                        ?>
                        <tbody>
                            @foreach ($content as $value_content)
                            <tr>
                                <td class="cart_product_img d-flex align-items-center">
                                    <a href="#"><img src="{{URL::to('/public/uploads/product/'.$value_content->options->image)}}" alt="Product"></a>
                                    <h6>{{$value_content->name}}</h6>
                                </td>
                                <td class="price"><span>{{number_format($value_content->price)}}</span></td>
                                <td class="qty">
                                    <form action="{{URL::to('/update_cart_quantity')}}" method="POST">

                                        <div class="quantity">
                                            @csrf
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="{{$value_content->qty}}">
                                            <input type="hidden" class="form_control" value="{{$value_content->rowId}}" name="rowId_cart">
                                            <input type="submit" class="fa fa-plus focus_btn btn-sm" value="update" name="update_qty">
                                        </div>
                                    </form>

                                </td>
                                <td class="total_price">
                                    <span>
                                        <?php
                                        $subtotal = $value_content->price * $value_content->qty;
                                        echo number_format($subtotal);
                                        ?>
                                    </span>
                                </td>
                                <td class="times_format">
                                    <span>
                                        <a href="{{URL::to('/delete_to_cart/'.$value_content->rowId)}}"><i class="fas fa-times times_format"></i></a>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="cart-footer d-flex mt-30">
                    <div class="back-to-shop w-50">
                        <a href="{{URL::to('/homePage')}}">Continue shooping</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- <div class="coupon-code-area mt-70">
                    <div class="cart-page-heading">
                        <h5>Cupon code</h5>
                        <p>Enter your cupone code</p>
                   </div>
                    <form action="#">
                        <input type="search" name="search" placeholder="#569ab15">
                        <button type="submit">Apply</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                 <div class="shipping-method-area mt-70">
                    <div class="cart-page-heading">
                        <h5>Shipping method</h5>
                        <p>Select the one you want</p>
                    </div>

                    <div class="custom-control custom-radio mb-30">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Next day delivery</span><span>$4.99</span></label>
                    </div>

                    <div class="custom-control custom-radio mb-30">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Standard delivery</span><span>$1.99</span></label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><span>Personal Pickup</span><span>Free</span></label>
                    </div>
                </div> -->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cart-total-area mt-70">
                    <div class="cart-page-heading">
                        <h5>Cart total</h5>
                    </div>

                    <ul class="cart-total-chart">
                        <li><span>Subtotal</span> <span>{{Cart::subtotal()}} VND</span></li>
                        <!-- <li><span>Eco Tax</span> <span>$ {{Cart::tax()}}</span></li> -->
                        <li><span>Shipping</span> <span>Free</span></li>
                        <li><span><strong>Total</strong></span> <span><strong>{{Cart::subtotal()}} VND</strong></span></li>
                    </ul>

                    <?php
                    $customer_id = Session::get('customer_id');
                    if ($customer_id != NULL) {
                    ?>
                        <a href="{{URL::to('/show_checkout')}}" class="btn karl-checkout-btn">Process to checkout</a>

                    <?php } else { ?>
                        <a href="{{URL::to('/login_checkout')}}" class="btn karl-checkout-btn">Process to checkout</a>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<!-- ****** Cart Area End ****** -->
@endsection

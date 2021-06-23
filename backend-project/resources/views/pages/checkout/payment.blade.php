@extends('layout')
@section('title','Payment')
@section('content')
<?php
                        $content = Cart::content();
                        ?>
<!-- ****** Cart Area Start ****** -->
<div class="cart_area section_padding_100 clearfix">
    <div class="container">
        <h1 style="text-align: center;">Check cart</h1>
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
                     
                        <tbody>
                            @foreach ($content as $value_content)
                            <tr>
                                <td class="cart_product_img d-flex align-items-center">
                                    <a href="#"><img src="{{URL::to('/public/uploads/product/'.$value_content->options->image)}}" alt="Product"></a>
                                    <h6>{{$value_content->name}}</h6>
                                </td>
                                <td class="price"><span>$ {{number_format($value_content->price)}}</span></td>
                                <td class="qty">
                                    <form action="{{URL::to('/update_cart_quantity')}}" method="POST">

                                        <div class="quantity">
                                            @csrf
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="{{$value_content->qty}}" disabled>
                                            <input type="hidden" class="form_control" value="{{$value_content->rowId}}" name="rowId_cart">
                                        </div>
                                    </form>

                                </td>
                                <td class="total_price">
                                    <span>
                                        <?php
                                        $subtotal = $value_content->price * $value_content->qty;
                                        echo '$ ' . number_format($subtotal);
                                        ?>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <h1>Select payment</h1>
        <form action="{{URL::to('/order_place')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="coupon-code-area mt-70">
                        <div class="cart-page-heading">
                            <!-- <h5>Cupon code</h5>
                            <p>Enter your cupone code</p> -->
                        </div>
                        <form action="#">
                            <!-- <input type="search" name="search" placeholder="#569ab15"> -->
                            <!-- <button type="submit">Apply</button> -->
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="shipping-method-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Formal payment</h5>
                            <p>Select the one you want</p>
                        </div>

                        <div class="custom-control custom-radio mb-30">
                            <input type="radio" id="customRadio1" name="payment_option" class="custom-control-input" value="1" required>
                            <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Receive payment</span></label>
                        </div>

                        <!-- <div class="custom-control custom-radio mb-30">
                            <input type="radio" id="customRadio2" name="payment_option" class="custom-control-input" value="2" required>
                            <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Payment by card</span></label>
                        </div> -->

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-total-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Cart total</h5>
                            <p>Final info</p>
                        </div>

                        <ul class="cart-total-chart">
                            <li><span>Subtotal</span> <span>$ {{Cart::subtotal()}}</span></li>
                            <!-- <li><span>Eco Tax</span> <span>$ {{Cart::tax()}}</span></li> -->
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span><strong>Total</strong></span> <span><strong>$ {{Cart::subtotal()}}</strong></span></li>
                        </ul>
                        <input type="submit" name="send_order" id="" value="Order" class="btn karl-checkout-btn">
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- ****** Cart Area End ****** -->

@endsection
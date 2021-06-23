@extends('layout')
@section('content')
<?php
if (!isset($_GET['action']) || $_GET['action']=="") {
    $shipping_name="";
    }
?>
      <!-- ****** Checkout Area Start ****** -->
      <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-12">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>Billing Address</h5>
                                <p>Enter your cupone code</p>
                            </div>

                            <form action="{{URL::to('/save_checkout_customer')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="first_name">Name <span>*</span></label>
                                        <input data-validation="length" data-validation-length="min1" data-validation-error-msg="Please enter your name" type="text" name="shipping_name" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="street_address">Address <span>*</span></label>
                                        <input data-validation="length" data-validation-length="min1" data-validation-error-msg="Please enter your address" type="text" name="shipping_address" class="form-control mb-3" id="street_address" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Phone <span>*</span></label>
                                        <input data-validation="length" data-validation-length="min1" data-validation-error-msg="Please enter your phone" type="number" name="shipping_phone" class="form-control" id="phone_number" min="0" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email Address <span>*</span></label>
                                        <input data-validation="length" data-validation-length="min1" data-validation-error-msg="Please enter your email" type="email" name="shipping_email" class="form-control" id="email_address" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Note</label>
                                        <textarea class="form-control fort-note"  name="shipping_note" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <input type="submit" value="Send" name="send_oder" class="btn karl-checkout-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->

@endsection

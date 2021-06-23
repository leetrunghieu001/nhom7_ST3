@extends('layout')
@section('title','Login')
@section('content')

<body class="form-v8">
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img class="img-register" src="{{url('public/frontend/images/register-img/form-v8.jpg')}}" alt="form">
            </div>
            <div class="form-right">
                <div class="tab">
                    <div class="tab-inner">
                        <button class="tablinks " onclick="openCity(event, 'sign-up')">Register</button>
                    </div>
                    <div class="tab-inner">
                        <button class="tablinks active" onclick="openCity(event, 'sign-in')" id="defaultOpen">Sign In</button>
                    </div>
                </div>
                <form class="form-detail" action="{{URL::to('add_customer')}}" method="POST">
                    @csrf
                    <div class="tabcontent" id="sign-up" style="display: none;">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="customer_name" id="full_name" class="input-text" required>
                                <span class="label">Username</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="customer_email" id="your_email" class="input-text" required>
                                <span class="label">E-Mail</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="customer_password" id="password" class="input-text" required>
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="customer_phone" id="phone" class="input-text" required>
                                <span class="label">Phone</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>
                <form class="form-detail" action="{{URL::to('login_customer')}}" method="post">
                    @csrf
                    <div class="tabcontent" id="sign-in" style="display: block;">

                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="email_account" id="your_email_1" class="input-text" required>
                                <span class="label">E-Mail</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password_account" id="password_1" class="input-text" required>
                                <span class="label">Password</span>
                                <span class="border"></span>

                            </label>
                        </div>
                        <div class="form-row">
                            <!-- <span class="label col-md-6 forgot" style="text-align: left;"><input type="checkbox" name="" id="">Remember Me</span> -->

                            <!-- <span class="label col-md-6 forgot" style="text-align: right;"><a class="link-forgot" href="">Forgot Password ?</a> </span> -->
                        </div>
                        <div class="form-row-last sign-font">
                            <input type="submit" name="register" class="register" value="Sign In">
                        </div>
                    </div>
                </form>
                <?php
                //khai bao $message
                $message = Session::get('message');
                // neu co thi echo va gan $message = null
                if ($message) {
                    echo '<div class="text-alert register-announ">' . $message . '</div>';
                    Session::get('message', null);
                }
                ?>
            </div>
        </div>
    </div>

</body>


@endsection

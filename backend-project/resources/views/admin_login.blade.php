<?php

use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="{{url('public')}}/backend/css/style.css" rel='stylesheet' type='text/css' />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{url('public')}}/backend/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/backend/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{url('public')}}/backend/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="{{URL::to('/admin-dashboard')}}" method="POST">
                    @csrf
                    <span class="login100-form-title p-b-49">
                        Login
                    </span>
                    <?php
                    //khai bao $message
                    $message = Session::get('message');
                    // neu co thi echo va gan $message = null
                    if ($message) {
                        echo '<div class="text-alert">' . $message . '</div>';
                        Session::get('message', null);
                    }
                    ?>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="admin_email" placeholder="Type your E-mail" required="">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="admin_password" placeholder="Type your password" required="">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <div class="text-left-right" style="display: flex;">
                        <!-- <div class="text-left p-t-8 p-b-31 col-md-6"><input type="checkbox" />Remember Me</div> -->
                        <div class="text-right p-t-8 p-b-31 col-md-6">
                            <a href="#">
                                <!-- Forgot password? -->
                            </a>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div> -->
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{url('public')}}/backend/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('public')}}/backend/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('public')}}/backend/vendor/bootstrap/js/popper.js"></script>
    <script src="{{url('public')}}/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('public')}}/backend/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('public')}}/backend/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{url('public')}}/backend/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('public')}}/backend/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('public')}}/backend/js/main.js"></script>

</body>

</html>

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
    <link rel="icon" href="{{ asset('customer_layout/img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('customer_layout/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('customer_layout/style.css') }}">

    <!-- Responsive CSS -->
    <link href="{{ asset('customer_layout/css/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Danh mục các loại sản phẩm -->
    @yield('menu')

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        @yield('header')
        @yield('main')
        @yield('footer')
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('customer_layout/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('customer_layout/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('customer_layout/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('customer_layout/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('customer_layout/js/active.js') }}"></script>
</body>

</html>
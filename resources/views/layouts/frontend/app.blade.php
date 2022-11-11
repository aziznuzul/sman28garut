<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SMAN 28 Garut | {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/icons') }}/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/clever') }}/style.css">
    @stack('css')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="https://wa.me/6282116079363"><span>Phone</span> +62 82 116 079 363</a>
                <a href="mailto:sma28_garut@yahoo.com"><span>Email:</span> sma28_garut@yahoo.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="https://web.facebook.com/OSIS-SMAN-28-Garut-112020660339930"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        @include('layouts.frontend.navbar')
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.frontend.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/active.js"></script>
    @stack('js')
</body>
</html>
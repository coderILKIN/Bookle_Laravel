<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="Bookle - Book Store WooCommerce Html Template ">
    <!-- ======== Page title ============ -->
    <title>Bookle - Book Store WooCommerce Html Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{asset('assets/front/img/favicon.png')}}">
    <!--<< Bootstrap Min CSS >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <!--<< All Min CSS >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/all.min.css')}}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/meanmenu.css')}}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/swiper-bundle.min.css')}}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{asset('assets/front/css/icomoon.css')}}">


    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{asset('assets/front/scss/main.css')}}">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    @yield('customCss')
</head>

<body>
<!-- Cursor follower -->
<div class="cursor-follower"></div>

<!-- Preloader start -->
{{--<div id="preloader" class="preloader">--}}
{{--    <div class="animation-preloader">--}}
{{--        <div class="spinner">--}}
{{--        </div>--}}
{{--        <div class="txt-loading">--}}
{{--                <span data-text-preloader="B" class="letters-loading">--}}
{{--                    B--}}
{{--                </span>--}}
{{--            <span data-text-preloader="O" class="letters-loading">--}}
{{--                    O--}}
{{--                </span>--}}
{{--            <span data-text-preloader="O" class="letters-loading">--}}
{{--                    O--}}
{{--                </span>--}}
{{--            <span data-text-preloader="K" class="letters-loading">--}}
{{--                    K--}}
{{--                </span>--}}
{{--            <span data-text-preloader="L" class="letters-loading">--}}
{{--                    L--}}
{{--                </span>--}}
{{--            <span data-text-preloader="E" class="letters-loading">--}}
{{--                    E--}}
{{--                </span>--}}
{{--        </div>--}}
{{--        <p class="text-center">Loading</p>--}}
{{--    </div>--}}
{{--    <div class="loader">--}}
{{--        <div class="row">--}}
{{--            <div class="col-3 loader-section section-left">--}}
{{--                <div class="bg"></div>--}}
{{--            </div>--}}
{{--            <div class="col-3 loader-section section-left">--}}
{{--                <div class="bg"></div>--}}
{{--            </div>--}}
{{--            <div class="col-3 loader-section section-right">--}}
{{--                <div class="bg"></div>--}}
{{--            </div>--}}
{{--            <div class="col-3 loader-section section-right">--}}
{{--                <div class="bg"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Back To Top start -->
<button id="back-top" class="back-to-top">
    <i class="fa-solid fa-chevron-up"></i>
</button>


@include('front.partials.header')

@yield('content')

@include('front.partials.footer')




<!--<< All JS Plugins >>-->
<!--<< jQuery >>-->
<script src="{{asset('assets/front/js/jquery-3.7.1.min.js')}}"></script>
<!--<< Viewport Js >>-->
<script src="{{asset('assets/front/js/viewport.jquery.js')}}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
<!--<< Nice Select Js >>-->
<script src="{{asset('assets/front/js/jquery.nice-select.min.js')}}"></script>
<!--<< Waypoints Js >>-->
<script src="{{asset('assets/front/js/jquery.waypoints.js')}}"></script>
<!--<< Counterup Js >>-->
<script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{asset('assets/front/js/swiper-bundle.min.js')}}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{asset('assets/front/js/jquery.meanmenu.min.js')}}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<!--<< Gsap >>-->
<script src="{{asset('assets/front/js/gsap.min.js')}}"></script>
<!--<< Main.js >>-->
<script src="{{asset('assets/front/js/main.js')}}"></script>
<!--<< Basket.js >>-->
<script src="{{asset('assets/front/js/basket.js')}}"></script>

<script src="{{asset('assets/front/js/basket-cart.js')}}"></script>


<!--<< Font Awesome CDN >>-->
<script src="https://kit.fontawesome.com/8fcccb0ec8.js" crossorigin="anonymous"></script>

@yield('customJs')

</body>

</html>

@extends('layouts.app')

@section('content')


    <!-- Hero Section start  -->
    <div class="hero-section hero-1 fix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-6">
                    <div class="hero-items">
                        <div class="book-shape">
                            <img src="{{$setting ? Storage::url($setting->slider_image_two) : ''}}" alt="shape-img">
                        </div>
                        <div class="frame-shape1 float-bob-x">
                            <img src="{{asset('assets/front/img/hero/frame.png')}}" alt="shape-img">
                        </div>
                        <div class="frame-shape2 float-bob-y">
                            <img src="{{asset('assets/front/img/hero/frame-2.png')}}" alt="shape-img">
                        </div>
                        <div class="frame-shape3">
                            <img src="{{asset('assets/front/img/hero/xstar.png')}}" alt="img">
                        </div>
                        <div class="frame-shape4 float-bob-x">
                            <img src="{{asset('assets/front/img/hero/frame-shape.png')}}" alt="img">
                        </div>
                        <div class="bg-shape1">
                            <img src="{{asset('assets/front/img/hero/bg-shape.png')}}" alt="img">
                        </div>
                        <div class="bg-shape2">
                            <img src="assets/img/hero/bg-shape2.png" alt="shape-img">
                        </div>
                        <div class="hero-content">
                            <h6 class="wow fadeInUp" data-wow-delay=".3s">{{$setting ? $setting->subtitle : ''}}</h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">{{$setting ? $setting->title : ''}} <br> With The Best Price
                            </h1>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                                <button type="submit" class="theme-btn">
                                    Shop Now <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6">
                    <div class="girl-image">
                        <img class=" float-bob-x" src="{{$setting ? Storage::url($setting->slider_image) : ''}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Return & refund</h3>
                        <p>Money back guarantee</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <div class="content">
                        <h3>Secure Payment</h3>
                        <p>30% off by subscribing</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="content">
                        <h3>Quality Support</h3>
                        <p>Always online 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="fa-solid fa-percent"></i>
                    </div>
                    <div class="content">
                        <h3>Daily Offers</h3>
                        <p>20% off by subscribing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Books</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                   @foreach($products as $product)
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="{{route('app.shop', ['id' => $product->id])}}"><img src="{{Storage::url($product->image)}}" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">

                                            <img class="icon" src="{{asset('assets/front/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">How Deal With Very <br> Bad BOOK</a></h3>
                                <ul class="price-list">
                                    <li>$39.00</li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{Storage::url($product->author->image)}}" alt="img" width="30">
                                        </span>
                                        <span class="content">Esther</span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </div>
    </section>

    <!-- Book Catagories Section start  -->
    <section class="book-catagories-section fix section-padding">
        <div class="container">
            <div class="book-catagories-wrapper">
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Categories Book</h2>
                </div>
                <div class="array-button">
                    <button class="array-prev"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
                <div class="swiper book-catagories-slider">
                    <div class="swiper-wrapper">

                    @foreach($categories as $category)
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{Storage::url($category->image)}}" alt="img" width="100">
                                    <div class="circle-shape">
                                        <img src="{{asset('assets/front/img/book-categori/circle-shape.png')}}" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number"> {{$index = $index ?? 01, $index++}} </div>
                                <h3><a href="shop-details.html">{{$category->name}} Books ({{$category->products->count()}})</a></h3>
                            </div>
                        </div>
                    @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                    <h2>Bookle Top Books</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="book-shop-wrapper">
                @foreach($topSellingBooks as $tbook)
                <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="{{route('app.shop', ['id' => $tbook->id])}}"><img src="{{Storage::url($tbook->image)}}" alt="img"></a>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="shop-cart.html">

                                    <img class="icon" src="{{asset('assets/front/img/icon/shuffle.svg')}}" alt="svg-icon">
                                </a>
                            </li>
                            <li>
                                <a href="shop-details.html"><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">
                        <h5>{{$tbook->category->name}}</h5>
                        <h3><a href="shop-details.html">{{$tbook->name}}</a></h3>
                        <ul class="price-list">
                            <li>{{$tbook->price}} AZN</li>
                            <!-- <li>
                                <del>$39.99</del>
                            </li> -->
                        </ul>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="thumb">
                                    <img src="{{Storage::url($tbook->author->image)}}" alt="img" width="30">
                                </span>
                                <span class="content">(Author) {{$tbook->author->fullname}}</span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Add To
                            Cart</a>
                    </div>
                </div>
                @endforeach

                

                <div class="cta-shop-box">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        Find Your Nest
                        Books!
                    </h2>
                    <h6 class="wow fadeInUp" data-wow-delay=".4s">And get your 25% discount now!</h6>
                    <a href="{{route('app.shops')}}" class="theme-btn white-bg wow fadeInUp" data-wow-delay=".6s">Shop Now <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                    <div class="girl-shape">
                        <img src="assets/img/girl-shape.png" alt="shape-img">
                    </div>
                    <div class="circle-shape">
                        <img src="assets/img/circle-shape.png" alt="shape-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                 style="background-image: url('{{asset('assets/front/img/cta-banner.jpg')}}');">
                <div class="book-shape">
                    <img src="{{$setting ? Storage::url($setting->banner_background_image) : ''}}" alt="shape-img">
                </div>
                <div class="girl-shape float-bob-x">
                    <img src="{{$setting ? Storage::url($setting->banner_image) : ''}}" alt="shape-img">
                </div>
                <div class="cta-content text-center">
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Get 25% discount
                        in all <br> kind of
                        super Selling</h2>
                    <a href="{{route('app.shops')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s"
                       style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Shop Now <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section start 
    <section class="top-ratting-book-section fix section-padding section-bg">
        <div class="container">
            <div class="top-ratting-book-wrapper">
                <div class="section-title-area">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Rating Books</h2>
                    </div>
                    <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">View More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="assets/img/top-book/01.png" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Simple Things You To Save BOOK</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-2.png" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="assets/img/top-book/02.png" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">How Deal With Very Bad BOOK</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$39.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-2.png" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="assets/img/top-book/03.png" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Qple GPad With Retina Sisplay</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-2.png" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="assets/img/top-book/04.png" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Flovely and Unicom Erna</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$19.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-2.png" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="assets/img/top-book/05.png" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Castle In The Sky</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$16.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-2.png" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="assets/img/top-book/06.png" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">The Hidden Mystery Behind</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-2.png" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                    <h2>Top Selling Books</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                @foreach($topSellingBooks as $tBook)
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="{{route('app.shop', ['id' => $tBook->id])}}"><img src="{{Storage::url($tBook->image)}}" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">

                                            <img class="icon" src="{{asset('assets/front/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>{{$tBook->category->name}}</h5>
                                <h3><a href="shop-details.html">{{$tBook->name}}</a></h3>
                                <ul class="price-list">
                                    <li>{{$tBook->price}} AZN</li>
                                    <!-- <li>
                                        <del>$39.99</del>
                                    </li> -->
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{Storage::url($tBook->author->image)}}" alt="img" width="30">
                                        </span>
                                        <span class="content">{{$tBook->author->fullname}}</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section start  -->
    <section class="testimonial-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">What our client say</h2>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    @foreach($comments as $comment)
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                {{$comment->content}}
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                         style="background-image: url('{{Storage::url($comment->user->avatar)}}');">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('assets/front/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>{{$comment->user->name}}</h3>
                                        <!-- <span>Marketing Coordinator</span> -->
                                        <div class="star">
                                        @for($i = 0; $i < $comment->rating; $i++)
                                                <i class="fa-solid fa-star"></i>
                                                @endfor
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="assets/img/testimonial/logo1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section start  -->
    <section class="team-section fix section-padding pt-0 margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Featured Author</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="array-next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    @foreach($authors as $author)
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{Storage::url($author->image)}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('assets/front/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="{{route('app.author', ['id' => $author->id])}}">{{$author->fullname}}</a></h6>
                                <p>{{$author->products->count()}} Published Books</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>

    <!-- News Section start  -->
    <section class="news-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our Latest News</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{asset('assets/front/img/news/09.jpg')}}" alt="img">
                            <img src="{{asset('assets/front/img/news/09.jpg')}}" alt="img">
                            <div class="post-box">
                                Activities
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Feb 10, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By Admin
                                </li>
                            </ul>
                            <h3><a href="news-details.html">Montes suspendisse massa curae malesuada</a></h3>
                            <a href="news-details.html" class="theme-btn-2">Read More <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{asset('assets/front/img/news/10.jpg')}}" alt="img">
                            <img src="{{asset('assets/front/img/news/10.jpg')}}" alt="img">
                            <div class="post-box">
                                Activities
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Mar 20, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By Admin
                                </li>
                            </ul>
                            <h3><a href="news-details.html">Playful Picks Paradise: Kids’ Essentials with Dash.</a></h3>
                            <a href="news-details.html" class="theme-btn-2">Read More <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{asset('assets/front/img/news/11.jpg')}}" alt="img">
                            <img src="{{asset('assets/front/img/news/11.jpg')}}" alt="img">
                            <div class="post-box">
                                Activities
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Jun 14, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By Admin
                                </li>
                            </ul>
                            <h3><a href="news-details.html">Tiny Emporium: Playful Picks for Kids’ Delightful Days.</a>
                            </h3>
                            <a href="news-details.html" class="theme-btn-2">Read More <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{asset('assets/front/img/news/12.jpg')}}" alt="img">
                            <img src="{{asset('assets/front/img/news/12.jpg')}}" alt="img">
                            <div class="post-box">
                                Activities
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Mar 12, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By Admin
                                </li>
                            </ul>
                            <h3><a href="news-details.html">Eu parturient dictumst fames quam tempor</a></h3>
                            <a href="news-details.html" class="theme-btn-2">Read More <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

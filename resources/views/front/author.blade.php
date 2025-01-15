@extends('layouts.app')


@section('content')



@include('front.partials.breadcrump', ['title' => 'Author Profile'])

    <!-- Team Details Section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="team-details-items">
                    <div class="details-image wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{Storage::url($author->image)}}" alt="img">
                    </div>
                    <div class="details-content wow fadeInUp" data-wow-delay=".5s">
                        <h3>Author: {{$author->fullname}}</h3>
                        <span>{{$author->country}}</span>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".7s">
                   {{$author->about}}
                </p>
                <div class="details-counter-area">
                    <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                        <h2><span class="count">{{$author->products->count()}}</span>+</h2>
                        <p>Books</p>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
                        <h2><span class="count">100</span>+</h2>
                        <p>Seles</p>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
                        <h2><span class="count">90</span>+</h2>
                        <p>Review</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section Start -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                <h2>Books By Wade Warren</h2>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @foreach($relatedProducts as $rProduc)
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{Storage::url($rProduc->image)}}" alt="img"></a>
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
                                <h5> {{$rProduc->category->name}} </h5>
                                <h3><a href="shop-details.html">{{$rProduc->name}}</a></h3>
                                <ul class="price-list">
                                    <li>{{$rProduc->price}} AZN</li>
                                    <!-- <li>
                                        <del>$39.99</del>
                                    </li> -->
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{Storage::url($rProduc->author->image)}}" alt="img" width="30">
                                        </span>
                                        <span class="content">{{$rProduc->author->fullname}}</span>
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




@endsection

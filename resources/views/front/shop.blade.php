@extends('layouts.app')


@section('customCss')

<style>
    #rating {
        display: flex;
        font-size: 2rem;
        color: #ccc;
        /* Başlanğıcda ulduzlar solğun olur */
        cursor: pointer;
    }

    #rating i {
        transition: color 0.3s ease;
    }

    #rating i:hover {
        color: #ffcc00;
        /* Hover zamanı ulduzların konturu sarıya boyanır */
    }

    #rating .selected {
        color: #ffcc00;
        /* Seçilmiş ulduz sarıya boyanır */
    }
</style>


@endsection


@section('content')


@include('front.partials.breadcrump', ['title' => 'Shop Details'])

<!-- Shop Details Section Start -->
<section class="shop-details-section fix section-padding">
    <div class="container">
        <div class="shop-details-wrapper">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="shop-details-image">
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <div class="shop-details-thumb">
                                    <img src="{{Storage::url($product->image)}}" alt="img" width="60%">
                                </div>
                            </div>
                            <!-- <div id="thumb2" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/02.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb3" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/03.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb4" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/04.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb5" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/05.png" alt="img">
                                    </div>
                                </div> -->
                        </div>
                        <!-- <ul class="nav">
                                <li class="nav-item">
                                    <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                        <img src="assets/img/shop-details/sm-1.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-2.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-3.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-4.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb5" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-5.png" alt="img">
                                    </a>
                                </li>
                            </ul> -->
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="shop-details-content">
                        <div class="title-wrapper">
                            <h2>{{$product->name}}</h2>
                            <h5>
                                @if($product->status)
                                <p style="color: green;">Stock availability.</p>
                                @endif

                            </h5>
                        </div>
                        <div class="star">
                            <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                            <a href="shop-details.html"><i class="fas fa-star"></i></a>
                            <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                            <a href="shop-details.html"><i class="fas fa-star"></i></a>
                            <a href="shop-details.html"><i class="fa-regular fa-star"></i></a>
                            <span>(1 Customer Reviews)</span>
                        </div>
                        <p>
                            {{$product->description}}
                        </p>
                        <div class="price-list">
                            <h3>{{$product->price}} AZN</h3>
                        </div>
                        <!-- <div class="cart-wrapper">
                            <div class="quantity-basket">
                                <p class="qty">
                                    <button class="qtyminus" aria-hidden="true">−</button>
                                    <input type="number" name="qty" id="qty2" min="1" max="10" step="1" value="1">
                                    <button class="qtyplus" aria-hidden="true">+</button>
                                </p>
                            </div>
                            <button type="button" class="theme-btn style-2" data-bs-toggle="modal" data-bs-target="#readMoreModal">
                                Read A little
                            </button> -->
                            <!-- Read More Modal -->
                            <!-- <div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body" style="background-image: url(assets/img/popupBg.png);">
                                            <div class="close-btn">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="readMoreBox">
                                                <div class="content">
                                                    <h3 id="readMoreModalLabel">The Role Of Book</h3>
                                                    <p>
                                                        Educating the Public <br>
                                                        Political books play a crucial role in educating the public about political theories, historical events, policies, and the workings of governments. They provide readers with insights into complex political concepts and the historical context behind current events, helping to foster a more informed citizenry. <br><br>

                                                        Shaping Public Opinion <br>
                                                        Authors of political books often aim to influence public opinion by presenting arguments and perspectives on various issues. These books can sway readers' views, either reinforcing their existing beliefs or challenging them to consider alternative viewpoints. This influence can extend to political debates and discussions in the public sphere. <br><br>

                                                        Documenting History <br>
                                                        Political books serve as valuable records of historical events and political movements. They document the thoughts, actions, and decisions of political leaders and activists, providing future generations with a detailed account of significant periods and events. This historical documentation is essential for understanding the evolution of political systems and ideologies.

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <a href="shop-details.html" class="theme-btn"><i
                                    class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                            <div class="icon-box">
                                <a href="shop-details.html" class="icon">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a href="shop-details.html" class="icon-2">
                                    <img src="{{asset('assets/front/img/icon/shuffle.svg')}}" alt="svg-icon">
                                </a>
                            </div> -->
                        <!-- </div> -->
                        <div class="category-box">
                            <div class="category-list">
                                <ul>
                                    <li>
                                        <span>SKU:</span> {{$product->sku}}
                                    </li>
                                    <li>
                                        <span>Category:</span> {{$product->category->name}}
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <span>Tags:</span> Design Low Book
                                    </li>
                                    <li>
                                        <span>Format:</span> Hardcover
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <span>Total page:</span> {{$product->total_page}}
                                    </li>
                                    <li>
                                        <span>Language:</span> {{$product->language}}
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <span>Publish Years:</span> {{$product->publish_years}}
                                    </li>
                                    <li>
                                        <span>Country:</span> {{$product->country}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-check">
                            <div class="check-list">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free shipping orders from $150
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        30 days exchange & return
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Mamaya Flash Discount: Starting at 30% Off
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Safe & Secure online shopping
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="social-icon">
                            <h6>Also Available On:</h6>
                            <a href="https://www.customer.io/"><img src="{{asset('assets/front/img/cutomerio.png')}}" alt="cutomer.io"></a>
                            <a href="https://www.amazon.com/"><img src="{{asset('assets/front/img/amazon.png')}}" alt="amazon"></a>
                            <a href="https://www.dropbox.com/"><img src="{{asset('assets/front/img/dropbox.png')}}" alt="dropbox"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-tab section-padding pb-0">
                <ul class="nav mb-5" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                            aria-selected="true" role="tab">
                            <h6>Description</h6>
                        </a>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                               tabindex="-1" role="tab">
                                <h6>Additional Information </h6>
                            </a>
                        </li> -->
                    <li class="nav-item" role="presentation">
                        <a href="#review" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1"
                            role="tab">
                            <h6>reviews (3)</h6>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="description" class="tab-pane fade show active" role="tabpanel">
                        <div class="description-items">
                            <p>
                                {{$product->description}}
                            </p>
                        </div>
                    </div>
                    <!-- <div id="additional" class="tab-pane fade" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="text-1">Availability</td>
                                        <td class="text-2">Available</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Categories</td>
                                        <td class="text-2">Adventure</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Publish Date</td>
                                        <td class="text-2">2022-10-24</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Total Page</td>
                                        <td class="text-2">330</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Format</td>
                                        <td class="text-2">Hardcover</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Country</td>
                                        <td class="text-2">United States</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Language</td>
                                        <td class="text-2">English</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Dimensions</td>
                                        <td class="text-2">30 × 32 × 46 Inches</td>
                                    </tr>
                                    <tr>
                                        <td class="text-1">Weight</td>
                                        <td class="text-2">2.5 Pounds</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    <div id="review" class="tab-pane fade" role="tabpanel">
                        <div class="review-items">
                            @foreach($comments as $comment)
                            <div class="review-wrap-area d-flex gap-4">
                                <div class="review-thumb">
                                    <img src="{{Storage::url($comment->user->avatar)}}" alt="img" width="100">
                                </div>
                                <div class="review-content">
                                    <div
                                        class="head-area d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                        <div class="cont">
                                            <h5><a href="news-details.html">{{$comment->user->name}}</a></h5>
                                            <span>{{$comment->created_at->toFormattedDateString()}}</span>
                                        </div>
                                        <div class="star">
                                            @for($i = 0; $i < $comment->rating; $i++)
                                                <i class="fa-solid fa-star"></i>
                                                @endfor
                                        </div>
                                    </div>
                                    <p class="mt-30 mb-4">
                                        {{$comment->content}}
                                    </p>
                                </div>
                            </div>
                            @endforeach

                            <div class="review-form">
                                <form action="{{route('app.comment', ['product_id' => $product->id])}}" id="contact-form" method="POST">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="review-title mt-5 py-15 mb-30">
                                            <h4>Your Rating*</h4>
                                            <div class="rate-now d-flex align-items-center">
                                                <p>Your Rating*</p>
                                                <div id="rating" class="star">
                                                    <i class="fa-solid fa-star" data-value="1"></i>
                                                    <i class="fa-solid fa-star" data-value="2"></i>
                                                    <i class="fa-solid fa-star" data-value="3"></i>
                                                    <i class="fa-solid fa-star" data-value="4"></i>
                                                    <i class="fa-solid fa-star" data-value="5"></i>
                                                    <input type="hidden" name="rating" id="rating-input" value="{{ old('rating', 0) }}">
                                                    @error('rating')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Your Name*</span>
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Your Email*</span>
                                                <input type="text" name="email" id="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".8">
                                            <div class="form-clt">
                                                <span>Message*</span>
                                                <textarea name="content" id="content"
                                                    placeholder="Write Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".9">
                                            <div class="form-check d-flex gap-2 from-customradio">
                                                <input type="checkbox" class="form-check-input"
                                                    name="flexRadioDefault" id="flexRadioDefault12">
                                                <label class="form-check-label" for="flexRadioDefault12">
                                                    i accept your terms & conditions
                                                </label>
                                            </div>
                                            <button type="submit" class="theme-btn">
                                                Submit now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Ratting Book Section Start -->
<section class="top-ratting-book-section fix section-padding pt-0">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Related Products</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">
                Interdum et malesuada fames ac ante ipsum primis in faucibus. <br> Donec at nulla nulla. Duis
                posuere ex lacus
            </p>
        </div>
        <div class="swiper book-slider">
            <div class="swiper-wrapper">
                @foreach($relatedProducts as $produc)
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="{{route('app.shop',['id' => $produc->id])}}"><img src="{{Storage::url($produc->image)}}" alt="img"></a>
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
                            <h5> {{$produc->category->name}} </h5>
                            <h3><a href="shop-details.html">{{$produc->name}}</a></h3>
                            <ul class="price-list">
                                <li>{{$produc->price}} AZN</li>
                                <!-- <li>
                                    <del>$39.99</del>
                                </li> -->
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                    <span class="thumb">
                                        <img src="{{Storage::url($produc->author->image)}}" alt="img" width="30">
                                    </span>
                                    <span class="content">{{$produc->author->fullname}}</span>
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


@section('customJs')

<script>
    document.querySelectorAll('#rating i').forEach((star, index) => {
        star.addEventListener('click', function() {
            // Tıklanan ulduzun 'selected' sinfini əlavə et
            this.classList.add('selected');

            // Input-a seçilən dəyəri yaz
            const ratingValue = index + 1; // Seçilən ulduzun sırası
            document.getElementById('rating-input').value = ratingValue;
            document.getElementById('rating-value').textContent = `Seçim: ${ratingValue}`;
        });
    });
</script>


@endsection
<footer class="footer-section footer-bg">
    <div class="container">
        <div class="contact-info-area">
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="content">
                    <p>Call Us 7/24</p>
                    <h3>
                        <a href="tel:{{$setting ? $setting->phone : ''}}">{{$setting ? $setting->phone : ''}}</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="fa-solid fa-envelope-circle-check"></i>
                </div>
                <div class="content">
                    <p>Make a Quote</p>
                    <h3>
                        <a href="mailto:{{$setting ? $setting->email : ''}}">{{$setting ? $setting->email :''}}</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="content">
                    <p>Opening Hour</p>
                    <h3>
                        Sunday - Fri: 9 aM - 6 pM
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="content">
                    <p>Location</p>
                    <h3>
                        {{$setting ? $setting->location : ''}}
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widgets-wrapper">
        <div class="plane-shape float-bob-y">
            <img src="{{asset('assets/front/img/plane-shape.png')}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="index.html">
                                <img src="{{$setting ? Storage::url($setting->logo_image) : ''}}" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                {{$setting ? $setting->description : ''}}
                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="{{$setting ? $setting->facebook : ''}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{$setting ? $setting->twitter : ''}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{$setting ? $setting->youtube: ''}}"><i class="fab fa-youtube"></i></a>
                                <a href="{{$setting ? $setting->linkedin : ''}}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Costumers Support</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="shop.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Store List
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Opening Hours
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Return Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Categories</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="shop.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Novel Books
                                </a>
                            </li>
                            <li>
                                <a href="shop.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Poetry Books
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Political Books
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    History Books
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <p>Sign up to searing weekly newsletter to get the latest updates.</p>
                            <div class="footer-input">
                                <input type="email" id="email2" placeholder="Enter Email Address">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    © All Copyright 2024 by <a href="index.html">Bookle</a>
                </p>
                <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="contact.html">
                            <img src="{{asset('assets/front/img/visa-logo.png')}}" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="{{asset('assets/front/img/mastercard.png')}}" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="{{asset('assets/front/img/payoneer.png')}}" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="{{asset('assets/front/img/affirm.png')}}" alt="img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

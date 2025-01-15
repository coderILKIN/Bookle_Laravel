<!-- Offcanvas Area start  -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{route('app.home')}}">
                            <img src="{{$setting ?  Storage::url($setting->logo_image)  : ''}}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                    feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="index.html">Main Street, Melbourne, Australia</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@example.com"><span
                                        class="mailto:info@example.com">info@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="index.html">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">+11002345909</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="contact.html" class="theme-btn text-center">
                            Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<div class="header-top-1">
    <div class="container">
        <div class="header-top-wrapper">
            <ul class="contact-list">
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:{{$setting ? $setting->phone : ''}}">{{$setting ? $setting->phone : ''}}</a>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <a href="mailto:{{$setting ?  $setting->email : ''}}">{{$setting ? $setting->email : ''}}</a>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <span>Sunday - Fri: 9 aM - 6 pM</span>
                </li>
            </ul>
            <ul class="list">
                <li><i class="fa-regular fa-comments"></i><a href="contact.html">Live Chat</a></li>
                @guest
                <li><i class="fa-regular fa-user"></i>
                    <a href="{{route('app.login')}}">Login</a>
                </li>

                <li><i class="fa-regular fa-user"></i>
                    <a href="{{route('app.register')}}">Register</a>
                </li>
                @endguest

                @auth
                    <li><i class="fa-regular fa-user"></i>
                        <a href="{{route('app.profile')}}">Profile</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</div>

<!-- Sticky Header Section start  -->
<header class="header-1 sticky-header">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{route('app.home')}}" class="header-logo">
                                    <img src="{{$setting ? Storage::url($setting->logo_image) : ''}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="{{route('app.home')}}">
                                                    Home

                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('app.shops')}}">
                                                    Shop

                                                </a>

                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{route('app.authors')}}">
                                                    Author
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('app.contact')}}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Category
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Web Development
                                    </option>
                                    <option value="1">
                                        Graphic Design
                                    </option>
                                    <option value="1">
                                        Softwer Eng
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Author">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart">
                                <a href="wishlist.html" class="cart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="{{route('app.basket')}}" class="cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span id="cart-count">0</span>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="{{asset('assets/front/img/icon/icon-13.svg')}}" alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>

<!-- Main Header Section start  -->
<header class="header-1">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{route('app.home')}}" class="header-logo">
                                    <img src="{{$setting ? Storage::url($setting->logo_image): ''}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{route('app.home')}}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('app.shops')}}">
                                                    Shop

                                                </a>

                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{route('app.authors')}}">
                                                    Author
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('app.contact')}}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Category
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Web Development
                                    </option>
                                    <option value="1">
                                        Graphic Design
                                    </option>
                                    <option value="1">
                                        Softwer Eng
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Author">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart">
                                <a href="wishlist.html" class="cart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="{{route('app.basket')}}" class="cart-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span id="cart-count">0</span>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="{{asset('assets/front/img/icon/icon-13.svg')}}" alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>

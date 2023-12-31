<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>Protect Me</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{  asset('assets/imgs/theme/favicon.png') }}">
<link rel="stylesheet" href="{{  asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{  asset('assets/css/custom.css') }}">
@livewireStyles
</head>
<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                        <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="{{  asset('assets/imgs/theme/flag-fr.png')}}" alt="">Français</a></li>
                                        <li><a href="#"><img src="{{  asset('assets/imgs/theme/flag-dt.png')}}" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="{{  asset('assets/imgs/theme/flag-ru.png')}}" alt="">Pусский</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="{{-- route('shop') --}}">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="{{-- route('shop') --}}">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>
                                <li><i class="fi-rs-user"></i>{{  Auth::user()->name }}  /
                                    <form method="POST" action="{{route('logout') }}">
                                        @csrf
                                        <a href="{{route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Lougout</a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a>  / <a href="{{ route('register') }}">Sign Up</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{asset('assets/imgs/logo/LOGOO.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                         @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                     @livewire('wishlist-icon-component')
                                    {{-- @livewire('cart-icon-component') --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{  asset('assets/imgs/logo/LOGOO.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-dress"></i>Fabrics</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Unis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Brocareds</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Imprimes</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Brodes</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Velours</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{  asset('assets/imgs/banner/menu-banner-2.jpg')}}" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-tshirt"></i>Curtain</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Blackout curtain</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Thermal curtain</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">The sails</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Classic curtain</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Stores</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-desktop"></i>Tassels</a></li>
                                    <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-cpu"></i>Textile Tassels</a></li>
                                    <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-diamond"></i>Double Ball Tassels</a></li>
                                    <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-home"></i>Ball Magnetic Tassels</a></li>
                                    <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-high-heels"></i>Lace Fringed Ribbon</a></li>
                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-desktop"></i>Beauty, Health</a></li>
                                            <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-cpu"></i>Bags and Shoes</a></li>
                                            <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-diamond"></i>Consumer Electronics</a></li>
                                            <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-home"></i>Automobiles & Motorcycles</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="/">Accueil </a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="{{ route('adopte') }}">J'adopte</a></li>
                                    <li class="position-static"><a href="#">Our Collections <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Fabrics</a>
                                                <ul>
                                                    <li><a href="product-details.html">Unis</a></li>
                                                    <li><a href="product-details.html">Brocareds</a></li>
                                                    <li><a href="product-details.html">Imprimes</a></li>
                                                    <li><a href="product-details.html">Brodes</a></li>
                                                    <li><a href="product-details.html">Velours</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Curtain</a>
                                                <ul>
                                                    <li><a href="product-details.html">Blackout curtain</a></li>
                                                    <li><a href="product-details.html">Thermal curtain</a></li>
                                                    <li><a href="product-details.html">The sails </a></li>
                                                    <li><a href="product-details.html">Classic curtain</a></li>
                                                    <li><a href="product-details.html">Stores</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Tassels</a>
                                                <ul>
                                                    <li><a href="product-details.html">Textile Tassels</a></li>
                                                    <li><a href="product-details.html"> Double Ball Tassels</a></li>
                                                    <li><a href="product-details.html">Ball Magnetic Tassels</a></li>
                                                    <li><a href="product-details.html">Lace Fringed Ribbon</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="{{-- route('shop') --}}"><img src="{{  asset('assets/imgs/banner/menu-banner-1.png')}}" alt="Protect Me"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hot deals</h4>
                                                        <h3>Don't miss<br> Trending</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Save to 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="product-details.html">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span>
                                                            off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{-- route('contact') --}}">Contact us</a></li>
                                    @auth
                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            @if (Auth::user()->utype == 'ADM')
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                    <li><a href="{{-- route('admin.products') --}}">Products</a></li>
                                                    <li><a href="{{-- route('admin.categories') --}}">Categories</a></li>
                                                    <li><a href="{{-- route('admin.contact') --}}">Contact Messages</a></li>
                                                    <li><a href="{{-- route('admin.home.slider') --}}">Manage Slider</a></li>
                                                    <li><a href="{{-- route('admin.orders') --}}">Orders</a></li>
                                                    <li><a href="#">Customers</a></li>
                                                </ul>
                                            @else
                                                <ul class="sub-menu">
                                                    <li><a href="{{-- route('user.dashboard') --}}">Dashboard</a></li>
                                                    <li><a href="{{-- route('user.orders') --}}">My Orders</a></li>
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="Protect Me" src="{{  asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                    <span class="pro-count white"></span>
                                </a>
                            </div>

                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{  asset('assets/imgs/logo/LOGOO.png')}}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-dress"></i>Fabrics</a></li>
                                <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-tshirt"></i>Curtain</a></li>
                                <li> <a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-smartphone"></i> Stores</a></li>
                                <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-desktop"></i>Tassels</a></li>
                                <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-cpu"></i>Textile Tassels</a></li>
                                <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-home"></i>Double Ball Tassels</a></li>
                                <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-high-heels"></i>Ball Magnetic Tassels</a></li>
                                <li><a href="{{-- route('shop') --}}"><i class="surfsidemedia-font-teddy-bear"></i>Lace Fringed Ribbon</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{-- route('shop') --}}">shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our Collections</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Fabrics</a>
                                        <ul class="dropdown">
                                                    <li><a href="product-details.html">Brocareds</a></li>
                                                    <li><a href="product-details.html">Imprimes</a></li>
                                                    <li><a href="product-details.html">Brodes</a></li>
                                                    <li><a href="product-details.html">Velours</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Curtain</a>
                                        <ul class="dropdown">
                                                    <li><a href="product-details.html">Blackout curtain</a></li>
                                                    <li><a href="product-details.html">Thermal curtain</a></li>
                                                    <li><a href="product-details.html">The sails </a></li>
                                                    <li><a href="product-details.html">Classic curtain</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#"> Tassels</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Textile Tassels</a></li>
                                            <li><a href="product-details.html"> Double Ball Tassels</a></li>
                                            <li><a href="product-details.html">Ball Magnetic Tassels</a></li>
                                            <li><a href="product-details.html">Lace Fringed Ribbon</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{ route('login') }}">Log In </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{ route('register') }}">Sign Up</a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

{{$slot}}
    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="{{  asset('assets/imgs/theme/icons/icon-email.svg')}}" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><img src="{{  asset('assets/imgs/logo/LOGOO.png')}}" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Order</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>562 Wellington Road
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>+1 0000-000-000
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>contact@palomaTextile.com
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Vendor JS-->
<script src="{{  asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{  asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{  asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{  asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{  asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{  asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{  asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{  asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>

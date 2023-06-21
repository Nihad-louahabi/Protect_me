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
<style>
    .ml{
        margin-left: 340px;

        justify-content: space-evenly;
    }
    #c2{
        width: 50px;
        height: 40px;
        margin-left: -50px;
       position: absolute;
       margin-top: 5px
    }
       #c3{
        width: 30px;
        height: 20px;
        margin-left: -30px
    }
       #c5{
        width: 50px;
        height: 40px;
        margin-left: -52px;
       position: absolute;
       margin-top: 5px;
       display: flex;
       justify-content: space-between
    }
    #c1{
        width: 35px;
        height: 30px;  margin-left: -20px;
        margin-top:20px;
        position: :absolute;
    }
    #cc{
        margin-left:76px;
        position: absolute;
    }
    #c7{ width: 30px;
        height: 25px;
        margin-left: -30px;
       position: absolute;
       margin-top: 12px
    }
    #eng{margin-left:  1000px;
        position: absolute;
        margin-top: 60px;
        font-size: 14px;
        font: bold;color: black;
    }
    #eng a{
        color: black;
        font-weight: bold;
        font-size: 16px
    }
    #head{height: 70px;

    }
</style>
<link rel="shortcut icon" type="image/x-icon" href="{{  asset('assets/imgs/theme/favicon.png') }}">
<link rel="stylesheet" href="{{  asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{  asset('assets/css/custom.css') }}">
@livewireStyles
</head>

<body>
    <header class="">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4" id="eng">
                <div class="header-info header-info-right">
                    @auth
                    <ul>
                        <li><i class="fi-rs-user"></i>{{  Auth::user()->name }}  /
                            <form method="POST" action="{{route('logout') }}">
                                @csrf
                                <a href="{{route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Déconnexion</a>
                            </form>
                        </li>
                    </ul>
                    @else
                    <ul>
                        <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Se connecter </a>  / <a href="{{ route('register') }}">S'inscrire</a></li>
                    </ul>
                    @endif
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
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul  class="ml">
                                    <li><img id="c2" src="{{  asset('assets/imgs/logo/c1.jpg')}}"> <a class="active" href="/">Accueil </a></li>
                                    <li><img id="c1" src="{{  asset('assets/imgs/logo/c3.jpg')}}"><a href="about.html">About Nous</a></li>
                                    <li><img id="c3" src="{{  asset('assets/imgs/logo/c2.jpg')}}"> <a href="{{ route('adopte') }}">J'adopte</a></li>
                                    <li class="position-static" ><img id="c7" src="{{  asset('assets/imgs/logo/c8.jpg')}}"><a href="#">Accès rapide
                                        <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-50">

                                                <ul>
                                                    <li><a href="product-details.html">Je souhaite adopter un animal</a></li>
                                                    <li><a href="product-details.html">Je dois me séparer de mon animal</a></li>

                                                </ul>
                                            </li>

                                            <li class="sub-mega-menu sub-mega-menu-width-50">

                                                <ul>

                                                    <li><a href="product-details.html"> Double Ball Tassels</a></li>

                                                    <li> <a href="{{ route('contact') }}">Contactez-nous</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="{{-- route('shop') --}}"><img src="{{  asset('assets/imgs/logo/anim.jpg')}}"alt="Protect Me"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Cher Ami</h4>

                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Sauvez  moi </span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="product-details.html">J'adopte</a>
                                                        </div>
                                                    </div>


                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                    @auth
                                        <li><a href="#">Mon Compte<i class="fi-rs-angle-down"></i></a>
                                            @if (Auth::user()->utype == 'ADM')
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
                                                    <li><a href="{{route('admin.categories')}}">Catégories</a></li>
                                                    <li><a href="{{ route('admin.animals') }}">Animaux</a></li>

                                                   <li><a href="{{ route('admin.contact')}}  ">Contact Messages</a></li>
                                                </ul>
                                            @else
                                                <ul class="sub-menu">
                                                    <li><a href="{{-- route('user.dashboard') --}}">Tableau de bord</a></li>
                                                    <li><a href="{{-- route('adopte.wishlistuser.orders') --}}">Mes Favoris</a></li>
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
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{ route('adopte') }}">adopte</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our Collections</a>
                                <ul class="dropdown">
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

    <section class="section-padding footer-mid">
        <div class="container pt-10 pb-15">
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
                        <li><a href="/">Accueil</a></li>
                        <li><a href="#">About nous</a></li>
                        <li><a href="#">Contactez-nous</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">Mon Compte</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="my-account.html">Mon Compte</a></li>
                        <li><a href="#">Mes Favoris</a></li>
                        <li><a href="#">J'adobte</a></li>

                    </ul>
                </div>
                <div class="col-lg-4 mob-center">
                    <h5 class="widget-title wow fadeIn animated">Follow Us</h5>
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

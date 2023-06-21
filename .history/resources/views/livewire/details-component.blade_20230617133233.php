<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Accueil</a>
                    <span></span> Détail animal
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/animals')}}/{{ $animal->image}}" alt="product image">
                                            </figure>
                                            @foreach ( $ranimals as $ranimal )
                                                <figure>
                                                    <a href="{{ route('animal.details',['slug'=>$ranimal->slug]) }}" tabindex="0">
                                                        <img class="default-img" src="{{ asset('assets/imgs/animals')}}/{{ $ranimal->image }}" alt="{{ $ranimal->name }}">
                                                    </a>
                                                </figure>
                                            @endforeach
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                                 @foreach ( $ranimals as $ranimal )
                                                    <figure>
                                                        <a href="{{ route('animal.details',['slug'=>$ranimal->slug]) }}" tabindex="0">
                                                            <img class="default-img" src="{{ asset('assets/imgs/animals')}}/{{ $ranimal->image }}" alt="{{ $ranimal->name }}">
                                                        </a>
                                                    </figure>
                                                @endforeach
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">Nom :{{ $animal ->name }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> <i
                                                    class=
                                                    "fi fi-rs-comment"
                                                    ></i> Race :  <a href="shop.html">{{ $animal ->race }}</a></span>
                                            </div>
                                        </div>
                                        <div class="clearfix ">
                                            <div class="pro-details-brand">
                                                <span > <i class="fi fi-rs-fingerprint"></i> âge : {{ $animal ->age }} Mois <span class="text-brand">  {{ $animal ->sexe }}</span></span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $animal->description }}</p>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="product-extra-link2">
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                 <button type="button"  class="button button-add-to-cart" wire:click.prevent="store({{ $animal->id }},'{{ $animal->name }}',{{ $animal->age }})">Appelez-le</button>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a><i class="fi-rs-smartphone">{{ $animal->phone }}</i>
                                            </div>
                                        </div>
                                        <div class="detail-extralink">
                                            <div class="product-extra-link2">
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                 <button type="button"  class="button button-add-to-cart" wire:click.prevent="sendMail()">En</button>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a><i class="fi-rs-smartphone">{{ $animal->phone }}</i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            {{ $animal->description }}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="comment-list">
                                                        <div class="single-comment justify-content-between d-flex">
                                                            @foreach ( $fanimal as $ffanimal )
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="{{ asset('assets/imgs/page/avatar-6.jpg') }}" alt="">
                                                                        <h6><a href="#"> </a></h6>
                                                                        <p class="font-xxs"></p>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <div class="product-rate d-inline-block">
                                                                            <div class="product-rating" style="width:90%">
                                                                            </div>
                                                                        </div>
                                                                        <p>{{ $ffanimal->comment }}</p>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div class="d-flex align-items-center">
                                                                                <p class="font-xs mr-30">{{ $ffanimal->created_at }} </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--comment form-->
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Animaux liés</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach ( $ranimals as $ranimal )
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap small hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ route('animal.details',['slug'=>$ranimal->slug]) }}" tabindex="0">
                                                                <img class="default-img" src="{{ asset('assets/imgs/animals')}}/{{ $ranimal->image }}" alt="{{ $ranimal->name }}">
                                                            </a>
                                                        </div>
                                                        <div class="product-action-1">
                                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                        </div>
                                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="{{ route('animal.details',['slug'=>$ranimal->slug]) }}" tabindex="0">{{ $ranimal->name }}</a></h2>
                                                        <div class="rating-result" title="90%">
                                                            <span>
                                                            </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>{{ $ranimal->age }}Mois </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Nouveau Animal</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($nanimals as $nanimal )
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/animals')}}/{{$nanimal->image}}" alt="{{ $nanimal->name }}">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a href="{{ route('animal.details',['slug'=>$nanimal->slug]) }}">{{ $nanimal->name }}</a></h5>
                                        <p class="price mb-0 mt-5">{{ $nanimal->age }}Mois</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        .wishlisted{
            background-color: #F15412 !important;
            border: 1px solid transparent !important;
        }
        .wishlisted i{
            color:#fff !important;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Accueil</a>
                    <span></span> J'adopte
                </div>
            </div>
        </div>
        <section>
            <div class="single-hero-slider single-animation-wrap">
                <div class="single-slider-img single-slider-img-1">
                     <img style="width: 1400px" src="{{asset('assets/imgs/slider/slide.png')}}"  alt="">
                    </div>
                </div>
        </section>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> Nous avons trouvé <strong class="text-brand">{{ $animals->total() }}</strong> résultats</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Montrer:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> {{ $pageSize }} <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="{{ $pageSize==12 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(12)">12</a></li>
                                            <li><a  class="{{$pageSize==15 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(15)">15</a></li>
                                            <li><a class="{{ $pageSize==25 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(25)">25</a></li>
                                            <li><a class="{{ $pageSize==32 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(32)">32</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Trier par:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Tri par défaut <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="{{ $orderBy=='Default Sorting' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Default Sorting')">Tri Par Défaut</a></li>
                                            <li><a class="{{ $orderBy=='Age: Low to High' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Age: Low to High')">Âge : Faible à élevé</a></li>
                                            <li><a class="{{ $orderBy=='Age: High to Low' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Age: High to Low')">Âge : élevé à faible</a></li>
                                            <li><a class="{{ $orderBy=='Sort By Newness' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Sort By Newness')">Trier par nouveauté </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-3">
                            @foreach ($animals as $animal)
                                @php
                                    $witems=Cart::instance('wishlist')->content()->pluck('id');
                                @endphp
                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('animal.details',['slug'=>$animal->slug]) }}">
                                                    <img class="default-img" style="" src="{{asset('assets/imgs/animals')}}/{{ $animal->image }}" alt="{{ $animal->name }}">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                    <i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{$animal->sexe }}</span>
                                            </div>
                                        </div>

                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html" >{{$animal->race }}</a>
                                            </div>
                                            <h2><a href="{{ route('animal.details',['slug'=>$animal->slug]) }}">{{ $animal->name }}</a></h2>
                                            <div class="product-price">
                                                <span>{{ $animal->age}} Mois </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                @if ($witems->contains($animal->id))
                                                    <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{$animal->id}})"><i class="fi-rs-heart"></i></a>
                                                @else
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{$animal->id}},'{{$animal->name}}',{{$animal->age }})"><i class="fi-rs-heart"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            {{ $animals -> links() }}
                            {{--<nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav>--}}
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                @foreach ($categories as $category )
                                    <li><a href="{{ route('animal.category',['slug'=>$category->slug]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Nouveau Animal</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($nanimals as $nanimal )
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/products')}}/{{$nanimal->image}}" alt="{{ $nanimal->name }}">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a href="{{ route('animal.details',['slug'=>$nanimal->slug]) }}">{{ $nanimal->name }}</a></h5>
                                        <p class="price mb-0 mt-5">{{ $nanimal->age }}DH</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="banner-img wow fadeIn  animated d-lg-block d-none">
                            <img  src="{{ asset('assets/imgs/blog/spa.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

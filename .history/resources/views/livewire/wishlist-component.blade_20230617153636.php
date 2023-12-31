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
        .product-cart-wrap .product-action-1 button:after, .product-cart-wrap .product-action-1 a.action-btn:after {
            left: -32%;}
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Accueil</a>
                    <span></span> Favoris
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row product-grid-4">
                    @if(Cart::instance('wishlist')->count()>0)
                        @foreach (Cart::instance('wishlist')->content() as $item)
                            <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('animal.details',['slug'=>$item->model->slug]) }}">
                                                <img class="default-img" style="height: 300px;width:500px" src="{{asset('assets/imgs/animals')}}/{{ $item->model->image }}" alt="{{ $item->model->name }}">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{ $item->model->sexe }}</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">{{ $item->model->race }}</a>
                                        </div>
                                        <h2><a href="product-details.html">{{ $item->model->name }}</a></h2>
                                        <div class="product-price">
                                            <span>{{ $item->model->age }} Mois</span>

                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{$item->model->id}})"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    @else
                            <div class="text-center" style="padding: 30px 0;">
                                <h1>Votre page de favorite a vite</h1>
                                <p>Ajouter un animal maintenant</p>
                                <a href="{{ route("adopte") }}" class="btn btn-success">Adopte</a>
                     @endif

                </div>
            </div>
        </section>
    </main>
</div>

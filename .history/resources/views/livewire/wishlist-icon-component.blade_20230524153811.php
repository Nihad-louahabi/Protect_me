<div class="header-action-icon-2">
    <a href="{{route('adopte.wishlist')  }}">
        <img class="svgInject" alt="wishlist" src={{asset('assets/imgs/theme/icons/icon-heart.svg')}}>
        @if (Cart::instance('wishlist')->count() > 0)
        

        @endif

    </a>
</div>


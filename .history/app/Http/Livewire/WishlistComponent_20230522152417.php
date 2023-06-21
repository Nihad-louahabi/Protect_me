<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishlistComponent extends Component
{

    public function removeFromWishlist($animal_id){
        foreach(
           $thiswishlist->content() as $witem
        )
        {
            if($witem->id==$animal_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshCompnent');
                return;
            }

        }

    }
    public function render()
    {
        return view('livewire.wishlist-component');
    }
}

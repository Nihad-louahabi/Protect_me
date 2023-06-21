<?php

namespace App\Http\Livewire;

use Livewire\Component;
use C

class WishlistComponent extends Component
{

    public function removeFromWishlist($animal_id){
        foreach(
            Cart::instance('wishlist')->content() as $witem
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

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Animal;
use Cart;

class HomeComponent extends Component
{
    public function addToWishlist($animal_id ,$animal_name ,$age)
    {
         Cart::instance('wishlist')->add($animal_id,$animal_name,1,$age)->associate('\App\Models\Animal');
         $this->emitTo('wishlist-icon-component','refreshCompnent');
     }

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
        $categories = Category::orderBy('name','ASC')->get();
        $lproducts = Animal::orderBy('created_at','DESC')->get()->take(8);
        $fproducts = Animal::where('featured',1)->inRandomOrder()->get()->take(8);
        $pcategories = Category::where('is_popular',1)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component',['lproducts'=>$lproducts,'fproducts'=>$fproducts ,'pcategories'=>$pcategories,'categories'=>$categories]);
    }
}

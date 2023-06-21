<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Animal;
use Livewire\WithPagination;


class AdopteComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy ='Default Sorting';
    public $min_value = 0;
    public $max_value = 1000;


    public function changePageSize($size)
    {
        $this->pageSize = $size;

    }
    public function changeOrderBy($order)
    {
        $this->orderBy = $order;

    }

    public function addToWishlist($product_id ,$product_name ,$product_price)
    {
         Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
         $this->emitTo('wishlist-icon-component','refreshCompnent');
     }

 public function removeFromWishlist($product_id){
     foreach(
         Cart::instance('wishlist')->content() as $witem
     )
     {
         if($witem->id==$product_id){
             Cart::instance('wishlist')->remove($witem->rowId);
             $this->emitTo('wishlist-icon-component','refreshCompnent');
             return;
         }

     }

 }



    public function render()
    {
        if($this->orderBy == 'Age: Low to High')
        {
            $animals = Animal::whereBetween('age',[$this->min_value,$this->max_value])->orderBy('age','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Age: High to Low')
        {
            $animals = Animal::whereBetween('age',[$this->min_value,$this->max_value])->orderBy('age','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Sort By Newness')
        {
            $animals = Animal::whereBetween('age',[$this->min_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else
        {
            $animals = Animal::whereBetween('age',[$this->min_value,$this->max_value])->paginate($this->pageSize);
        }
        $categories = Category::orderBy('name','ASC')->get();
        $nanimals = Animal::latest()->take(4)->get();
        return view('livewire.adopte-component',['animals'=>$animals,'categories'=>$categories,'nanimals'=>$nanimals]);
    }
}

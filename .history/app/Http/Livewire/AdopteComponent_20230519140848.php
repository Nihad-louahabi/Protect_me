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
                $this->emitTo('wishlist-icon-component','refreshComponent');
                return;
            }

        }

    }
    public function render()
    {
        if($this->orderBy == 'Price: Low to High')
        {
            $animals = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low')
        {
            $animals = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Sort By Newness')
        {
            $animals = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else
        {
            $animals = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->paginate($this->pageSize);
        }
        $categories = Category::orderBy('name','ASC')->get();
        $nanimals = Product::latest()->take(4)->get();
        return view('livewire.shop-component',['animals'=>$animals,'categories'=>$categories,'nanimals'=>$nproducts]);
    }
}

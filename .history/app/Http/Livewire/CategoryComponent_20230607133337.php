<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Animal;
use Livewire\WithPagination;
use Cart;

class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy ='Default Sorting';
    public $slug;
    public $min_value = 0;
    public $max_value = 1000;


    public function changePageSize($size)
    {
        $this->pageSize = $size;

    }
    public function mount($slug)
    {
        $this->slug = $slug;

    }
    public function changeOrderBy($order)
    {
        $this->orderBy = $order;

    }
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
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $category_name =$category->name;

        if($this->orderBy == 'Age: Low to High')
        {
            $animals = Animal::where('category_id',$category_id)->whereBetween('age',[$this->min_value,$this->max_value])->orderBy('age','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Age: High to Low')
        {
            $animals = Animal::where('category_id',$category_id)->whereBetween('age',[$this->min_value,$this->max_value])->orderBy('age','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Sort By Newness')
        {
            $animals = Animal::where('category_id',$category_id)->whereBetween('age',[$this->min_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else
        {
            $animals = Animal::where('category_id',$category_id)->whereBetween('age',[$this->min_value,$this->max_value])->paginate($this->pageSize);
        }
        $categories = Category::orderBy('name','ASC')->get();
        $nanimals = Animal::latest()->take(4)->get();
        return view('livewire.category-component',['nanimals'=>$nanimals,'animals'=>$animals,'categories'=>$categories,'category_name'=>$category_name]);
    }
}

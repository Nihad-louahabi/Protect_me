<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Animal;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $lproducts = Animal::orderBy('created_at','DESC')->get()->take(8);
        $fproducts = Animal::where('featured',1)->inRandomOrder()->get()->take(8);
        $pcategories = Category::where('is_popular',1)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component',['lproducts'=>$lproducts,'fproducts'=>$fproducts ,'pcategories'=>$pcategories,'categories'=>$categories]);
    }
}

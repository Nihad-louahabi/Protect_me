<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Animal;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;

    }
    public function render()
    {
        $product = Animal::where('slug',$this->slug)->first();
        $rproducts = Animal::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts = Product::latest()->take(4)->get();
        return view('livewire.details-component',['product'=>$product,'rproducts'=>$rproducts,'nproducts'=>$nproducts]);
    }
}

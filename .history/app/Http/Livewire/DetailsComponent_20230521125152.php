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
        $animal = Animal::where('slug',$this->slug)->first();
        $ranimals = Animal::where('category_id',$a->category_id)->inRandomOrder()->limit(4)->get();
        $nanimals = Animal::latest()->take(4)->get();
        return view('livewire.details-component',['animal'=>$animal,'ranimals'=>$ranimals,'nanimals'=>$nanimals]);
    }
}

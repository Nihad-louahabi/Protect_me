<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Animal;

class AdminAnimalComponent extends Component
{   public $animal_id;
    use WithPagination;


    public function deleteAnimal(){
        $animal = Animal::find($this->animal_id);
       // unlink('assets/imgs/animal/'.$animal->image);
        $animal->delete();
        session()->flash('message','Animal has been deleted ');
    }

    public function render()
    {
       $animals = Animal::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-animal-component',['animals'=>$animals]);
    }
}

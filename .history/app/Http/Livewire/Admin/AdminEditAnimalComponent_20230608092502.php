<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Animal;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditAnimalComponent extends Component
{ use WithFileUploads;
    public $animal_id;
    public $name;
    public $slug;
    public $race;
    public $description;
    public $age;
    public $sexe = 'Mâle' ;
    public $phone;
    public $featured = 0;
    public $image;
    public $category_id;
    public $newimage;
    public function mount($animal_id){

        $animal = Animal::find($animal_id);
        $this->animal_id =$animal->id;
        $this->name =$animal->name;
        $this->slug= $animal-> slug;
        $this->race =$animal->race;
        $this-> description=$animal->description;
        $this->age=$animal->age;
        $this->sexe =$animal->sexe;
        $this->phone=$animal->phone;
        $this->featured =$animal->featured;
        $this->image =$animal->image;
        $this->category_id =$animal->id;

    }

    public function generateSlug(){
        $this->slug = Str::slg($this->name);
    }
    public function updateAnimal(){
        $this->validate([

            'name'=>'required',
            'slug'=>'required',
            'race'=>'required',
            'description'=>'required',
            'age'=>'required',
             'sexe'=>'required',
             'phone'=>'required',
            'featured'=>'required',
            'image'=>'required',
            'category_id'=>'required'

        ]);


    $animal = animal::find($this->animal_id);
        $animal->name =$this->name;
        $animal->slug =$this->slug;
        $animal->race =$this->race;
        $animal->description =$this->description;
        $animal->age =$this->age;
        $animal->sexe=$this->sexe;
        $
        $animal->featured =$this->featured;
        if($this->newimage)
        {
            //unlink('assets/imgs/caegories/'.$category->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('animals',$imageName);
            $animal->image = $imageName;
        }
        $animal->category_id =$this->category_id;
        $animal->save();
        session()->flash('message','animal has been updated successfuly! ');

    }




    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-edit-animal-component',['categories'=>$categories]);
    }
}

<?php

namespace App\Http\Livewire\User;
use App\Models\Category;
use App\Models\Animal;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class UserAddAnimalComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $race;
    public $description;
    public $age;
    public $sexe = 'Mâle';
    public $phone;
    public $featured = 0;
    public $image;
    public $category_id;

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }
    public function addAnimal(){
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


    $animal = new Animal();
        $animal->name =$this->name;
        $animal->slug =$this->slug;
        $animal->race=$this->race;
        $animal->description =$this->description;
        $animal->age =$this->age;
        $animal->sexe =$this->sexe;
        $animal
        $animal->featured =$this->featured;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('animals',$imageName);
        $animal->image = $imageName;
        $animal->category_id =$this->category_id;
        $animal->save();
        session()->flash('message','animal has been add successfuly! ');

    }
    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.user.user-add-animal-component',['categories'=>$categories]);
    }
}

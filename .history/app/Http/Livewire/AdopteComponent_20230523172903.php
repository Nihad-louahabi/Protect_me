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

    public function addToWishlist($animal_id, $animal_name, $animal_age)
{
    // Ajouter l'animal à votre liste de souhaits
    $this->wishlist[] = [
        'id' => $animal_id,
        'name' => $animal_name,
        'age' => $animal_age
    ];

    $this->emitTo('wishlist-icon-component', 'refreshComponent');
}

public function removeFromWishlist($animal_id)
{
    // Rechercher l'animal dans la liste de souhaits
    foreach ($this->wishlist->content() as $witem) {
        if ($witem->id==$animal_id) {
            // Supprimer l'animal de la liste de souhaits
             remove($witem->rowId);

            $this->emitTo('wishlist-icon-component', 'refreshComponent');
            return;
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

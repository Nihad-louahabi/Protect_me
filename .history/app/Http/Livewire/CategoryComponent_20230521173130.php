<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Animal;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy ='Default Sorting';
    public $slug;


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
    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $category_name =$category->name;
        if($this->orderBy == 'age: Low to High')
        {
            $animals = Animal::whereBetween('age',[$this->min_value,$this->max_value])->orderBy('age','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low')
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
        return view('livewire.category-component',['products'=>$products,'categories'=>$categories,'category_name'=>$category_name]);
    }
}

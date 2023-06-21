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
       
        return view('livewire.category-component',['products'=>$products,'categories'=>$categories,'category_name'=>$category_name]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.category-component');
    }
}

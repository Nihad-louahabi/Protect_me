<?php

namespace App\Http\Livewire\User;
use App\Models\Category;
use App\Models\Animal;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

use Livewire\Component;

class UserAddAnimalComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-add-animal-component');
    }
}

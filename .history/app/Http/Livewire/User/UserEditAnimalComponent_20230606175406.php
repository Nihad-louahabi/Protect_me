<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Category;
use App\Models\Animal;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class UserEditAnimalComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-edit-animal-component');
    }
}

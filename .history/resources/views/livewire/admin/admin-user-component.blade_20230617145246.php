<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminUsersComponent extends Component
{
    public $user_id;

    use WithPagination;

    public function  deleteUser(){
        $user = User::find($this->user_id);
        $user->delete();
        session()->flash('message','user has been deleted successfully!');
    }
    public function render()
    {
        $user = User::orderBy('name','ASC')->where('utype','USR')->paginate('5');
        return view('livewire.admin.admin-users-component',['user'=>$user]);
    }
}

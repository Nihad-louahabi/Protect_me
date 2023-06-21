<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Animal;
use App\Models\Review;

class DetailsComponent extends Component
{
    public $slug;
    public $animal_id;
    public $rating;
    public $comment;

    public function mount($slug,$animal_id)
    {
        $this->slug = $slug;
        $this->animal_id= $animal_id;

    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'rating'=> 'required',
            'comment'=> 'required'
        ]);
    }
    Public function addReview()
    {
        $this->validate([
            'rating'=> 'required',
            'comment'=> 'required'
        ]);

        $review = new Review();
        $review->rating = $this->rating;
        $review->comment = $this->comment;
        $review->animal_id= $this->animal_id;
        $review->save();
        $animal = Animal::find($this->animal_id);
        $review->rstatus = true;
        $orderItem->save();
        session()->flash('message','Your review has added successfully!');
    }
    public function render()
    {
        $orderItem = OrderItem::find($this->order_item_id);
        $animal = Animal::where('slug',$this->slug)->first();
        $ranimals = Animal::where('category_id',$animal->category_id)->inRandomOrder()->limit(4)->get();
        $nanimals = Animal::latest()->take(4)->get();
        return view('livewire.details-component',['animal'=>$animal,'ranimals'=>$ranimals,'nanimals'=>$nanimals]);
    }
}

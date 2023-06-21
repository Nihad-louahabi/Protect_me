<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
class Review extends Model
{
    use HasFactory;
    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}

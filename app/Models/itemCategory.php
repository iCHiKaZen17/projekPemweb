<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Item;

class ItemCategory extends Model
{
    protected $guarded = [];

    public function items() {
    	return $this->hasMany(Item::class);
    }
}
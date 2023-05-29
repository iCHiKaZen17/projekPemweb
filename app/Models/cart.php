<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Item;


class cart extends Model
{
    protected $guarded = [];

    public function item() {
    	return $this->belongsTo(Item::class);
    }
}

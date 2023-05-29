<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Transaction;
use App\Item;

class TransactionDetail extends Model
{
    protected $guarded = [];

    public function transaction() {
    	return $this->belongsTo(Transaction::class);
    }

    public function item() {
    	return $this->belongsTo(Item::class);
    }
}
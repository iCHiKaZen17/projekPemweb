<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\TransactionDetail as Detail;

class Transaction extends Model
{
    protected $guarded = [];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function details() {
    	return $this->hasMany(Detail::class);
    }
}
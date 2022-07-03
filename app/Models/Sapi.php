<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}

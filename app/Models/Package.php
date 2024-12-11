<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'credits'];  

    public function trasactions()
    {
        return $this->hasMany(Transaction::class);
    }
}

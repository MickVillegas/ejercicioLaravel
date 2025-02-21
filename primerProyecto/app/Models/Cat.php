<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    /** @use HasFactory<\Database\Factories\CatFactory> */
    use HasFactory;
    public function users(){
        return $this->hasOne(User::class);
    }
}

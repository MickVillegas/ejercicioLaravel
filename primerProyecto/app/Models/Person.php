<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function gatos(){
        return $this->hasMany(Cat::class);
    }
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

}

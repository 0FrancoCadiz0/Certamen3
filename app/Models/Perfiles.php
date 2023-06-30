<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    use HasFactory;

    protected $table = 'perfiles';

    public function usuarios(){
        return $this->hasMany('App\Models\Usuarios');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use DateTime;

class Usuarios extends Authenticable
{
    use HasFactory;

    protected $table = 'cuentas';
    //public function registrarUltimoLogin(){
        //$this->ultimo_login = new DateTime('NOW');
        //$this->save();
    //}

    public function perfil(){
        return $this->belongsTo('App\Models\Perfiles');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistaRegister;

class HomeController extends Controller
{
    public function login(){
        return view('home.login');
    }
    public function home(){
        return view('home.index');
    }
    public function register(){
        return view('home.register');
    }

    public function store(Request $request){
        $newArtista = new ArtistaRegister();
        $newArtista->user = $request->username;
        $newArtista ->password = $request->password;
        $newArtista ->nombre = $request->nombre;
        $newArtista->apellido = $request->apellido;
        $newArtista->perfil_id = 2;
        $newArtista->save();
        return redirect()->route('home.login');
        }
}

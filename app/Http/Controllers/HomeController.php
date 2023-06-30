<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistaRegister;
use App\Models\Artista;
class HomeController extends Controller
{
    public function login(){
        return view('home.login');
    }
    public function home(){
        $imagenes = Artista::all();
        return view('home.index', compact('imagenes'));
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

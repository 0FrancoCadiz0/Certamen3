<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistaRegister;
use App\Models\Artista;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    public function login(){
        return view('home.login');
    }
    public function home(){
        $imagenes = Artista::all();
        $u = ArtistaRegister::all();
        return view('home.index', compact('imagenes', 'u'));
    }
    public function register(){
        return view('home.register');
    }

    public function registrarArtista(Request $request){
        $newArtista = new ArtistaRegister();
        $newArtista->user = $request->username;
        $newArtista->password = Hash::make($request->password);
        $newArtista ->nombre = $request->nombre;
        $newArtista->apellido = $request->apellido;
        $newArtista->perfil_id = 2;
        $newArtista->save();
        return redirect()->route('home.login');
        }
}

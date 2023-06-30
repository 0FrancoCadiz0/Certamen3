<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function login(Request $request){
        $credenciales = $request->only('user','password');
        if (Auth::attempt($credenciales)){
            //credenciales correctas
            $usuario = Usuarios::where('user',$request->user)->first();
            return redirect()->route('artista.index');
        }
        else{
            //credenciales incorrectas
            return back()->withErrors('Credenciales incorrectas');
        }
    }
}

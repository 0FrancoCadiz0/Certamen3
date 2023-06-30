<?php

namespace App\Http\Controllers;
use App\Models\ArtistaRegister;
use App\Models\Artista;
use App\Models\Cuentas;

use Illuminate\Http\Request;

class AdmiController extends Controller
{
    public function admin(){
    $imagenes = Artista::all();
    $u = ArtistaRegister::all();
    return view('administrador.admin', compact('u','imagenes'));
    }
    public function update(Artista $img,Request $request){
        $img->motivo_ban = $request->baneo;
        $img ->baneada = true;
        $img->save();
        return redirect()->route('administrador.admin');
    }
    public function info(Artista $img){
        return view('administrador.info',compact('img'));
    }
    public function destroy($us)
    {
        $admi =  Cuentas::findOrFail($us);
        $admi->delete();
        return redirect()->route('administrador.admin');
    }
}
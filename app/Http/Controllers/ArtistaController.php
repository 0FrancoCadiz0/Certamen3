<?php

namespace App\Http\Controllers;
use App\Models\Artista;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function artista(){
        $imagenes = Artista::all();
        return view('artista.index', compact('imagenes'));
    }
    public function store(Request $request){
        $img = new Artista();
        $img->titulo = $request->titulo;
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $nombreArchivo = $archivo->getClientOriginalName();
            $rutaArchivo = $archivo->storeAs('imagenes', $nombreArchivo, 'public');
            $img->archivo = $rutaArchivo;
        }
        $img ->baneada = false;
        $img ->motivo_ban = "";
        $img->cuenta_user = $request->usuario;
        $img->save();
        return redirect()->route('artista.index');
        }

        public function destroy($id)
        {
            $img = Artista::findOrFail($id);
            $img->delete();
            return redirect()->route('artista.index');
        }
        
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistaController;



Route::get('/',[HomeController::class,'home'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
Route::get('/artista',[ArtistaController::class,'artista'])->name('artista.index');

Route::post('/artista',[ArtistaController::class,'store'])->name('artista.store');
Route::delete('/artista/{id}', [ArtistaController::class, 'destroy'])->name('artista.destroy');

Route::get('/register',[HomeController::class,'register'])->name('home.register'); 
Route::post('/register',[HomeController::class,'store'])->name('newArtista.store');

Route::get('/artista/{img}/edit',[ArtistaController::class,'edit'])->name('artista.editar');
Route::put('/artista/{img}',[ArtistaController::class,'update'])->name('artista.update');
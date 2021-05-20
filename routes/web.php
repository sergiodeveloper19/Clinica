<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;


Route::get('/', function () {
    return view('modulos.Seleccionar');
});

Route::get('/ingresar', function () {
    return view('modulos.ingresar');
});



Route::get('Inicio',[InicioController::class,'index']);

Auth::routes();


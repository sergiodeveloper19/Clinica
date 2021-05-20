<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConsultoriosController;

Route::get('/', function () {
    return view('modulos.Seleccionar');
});

Route::get('/ingresar', function () {
    return view('modulos.ingresar');
});



Route::get('Inicio',[InicioController::class,'index']);

Route::get('Consultorios', [ConsultoriosController::class, 'index']);

Route::post('Consultorios',[ConsultoriosController::class, 'store']);

Route::put('Consultorios/{id}',[ConsultoriosController::class, 'update']);

Auth::routes();


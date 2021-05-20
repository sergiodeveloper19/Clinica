<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('modulos.Seleccionar');
});

Route::get('/ingresar', function () {
    return view('modulos.ingresar');
});





Auth::routes();


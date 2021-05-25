<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\PacientesController;

Route::get('/', function () {
    return view('modulos.Seleccionar');
});

Route::get('/ingresar', function () {
    return view('modulos.ingresar');
});


// Consultorios
Route::get('Inicio',[InicioController::class,'index']);

Route::get('Consultorios', [ConsultoriosController::class, 'index']);

Route::post('Consultorios',[ConsultoriosController::class, 'store']);

Route::put('Consultorios/{id}',[ConsultoriosController::class, 'update']);

Route::delete('borrar-Consultorio/{id}', [ConsultoriosController::class, 'destroy']);


// Doctores
Route::get('Doctores', [DoctoresController::class, 'index']);
Route::post('Doctores', [DoctoresController::class, 'store']);
Route::get('Eliminar-Doctor/{id}',[DoctoresController::class, 'destroy']);
// Pacientes
Route::get('Pacientes',[PacientesController::class, 'index']);
Route::get('Crear-Paciente', [PacientesController::class, 'create']);
Route::post('Crear-Paciente', [PacientesController::class, 'store']);
Route::get('Editar-Paciente/{id}', [PacientesController::class, 'edit']);
Route::put('actualizar-paciente/{paciente}', [PacientesController::class, 'update']);
Route::get('Eliminar-Paciente/{id}', [PacientesController::class, 'destroy']);


Auth::routes();


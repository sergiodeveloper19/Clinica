<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\CitasController;


Route::get('/', function () {
    return view('modulos.Seleccionar');
});

Route::get('/Ingresar', function () {
    return view('modulos.Ingresar');
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

// Citas
Route::get('Citas/{id}', [CitasController::class, 'index']);
Route::post('Horario',[CitasController::class,'HorarioDoctor']);
Route::put('editar-horario/{id}', [CitasController::class, 'EditarHorario']);
Route::post('Citas/{id_doctor}',[CitasController::class, 'CrearCita']);

Auth::routes();


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Habitacion.Formulario');
});
Route::get('/Formulario/registrar', [\App\Http\Controllers\HabitacionController::class, 'ingreshabi'])->name('ingresar');
Route::post('/Formulario/guardar', [\App\Http\Controllers\HabitacionController::class, 'savehabita'])->name('guardar');
Route::get('/Formulario/mostrar',[\App\Http\Controllers\HabitacionController::class, 'Mostrar'])->name('mostrar');
Route::delete('/Formulario/eliminarformulario/{habitacion}',[\App\Http\Controllers\HabitacionController::class, 'eliminarhab'])->name('eliminar');


Route::get('/Formulario/registrartipo', [\App\Http\Controllers\HabitacionController::class, 'ingrestipo'])->name('ingresartipo');
Route::post('/Formulario/guardartipo', [\App\Http\Controllers\HabitacionController::class, 'savetipo'])->name('guardartipo');
Route::get('/Formulario/mostrartipo',[\App\Http\Controllers\HabitacionController::class, 'Mostrartipo'])->name('mostrartipo');
Route::delete('/Formulario/eliminartipo/{tipo}',[\App\Http\Controllers\HabitacionController::class, 'eliminarti'])->name('eliminartipo');

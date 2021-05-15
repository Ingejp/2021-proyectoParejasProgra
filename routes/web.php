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
    return view('welcome');
});
Route::get('/huespedes/index', [\App\Http\Controllers\HuespedController::class, 'registerHuesped'])->name('huesped.index');
Route::post('/huespedes/registrar', [\App\Http\Controllers\HuespedController::class, 'saveHuesped'])->name('huesped.registrarHuesped');
Route::get('/huespedes/lista', [\App\Http\Controllers\HuespedController::class, 'showHuesped'])->name('huesped.listarHuesped');
Route::get('/huespedes/edit/{id}',[\App\Http\Controllers\HuespedController::class,'edit'])->name('huesped.editHuesped');
Route::put('/huespedes/update/{id}',[\App\Http\Controllers\HuespedController::class,'update'])->name('huesped.updateHuesped');
Route::get('/huespedes/delete/{id}',[\App\Http\Controllers\HuespedController::class,'deleteHuesped'])->name('hueped.deleteHuesped');




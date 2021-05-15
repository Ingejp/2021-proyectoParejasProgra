<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('get-habitacion',[\App\Http\Controllers\HabitacionController::class, 'gethabitacion'])->name('api-habitacion');
Route::put('guardar-habitacion',[\App\Http\Controllers\HabitacionController::class, 'savehabita'])->name('api-guardar');
Route::delete('eliminar-habitacion/{id}',[\App\Http\Controllers\HabitacionController::class, 'deletehabi'])->name('api-eliminar');
Route::post('editar-habitacion/{id}',[\App\Http\Controllers\HabitacionController::class, 'edithabi'])->name('api-editar');


Route::get('get-huesped', ['\App\Http\Controllers\HuespedController', 'getAll'])->name('api-getAll');
Route::put('save-huesped', ['\App\Http\Controllers\HuespedController', 'saveHuesped'])->name('api-saveHuesped');
Route::delete('delete-huesped/{id}', ['\App\Http\Controllers\HuespedController', 'deleteHuesped2'])->name('api-deleteHuesped2');
Route::post('edit-huesped/{id}', ['\App\Http\Controllers\HuespedController', 'editHuesped2'])->name('api-editHuesped');
Route::get('show-huesped', ['\App\Http\Controllers\HuespedController', 'showHuesped'])->name('api-showHuesped');


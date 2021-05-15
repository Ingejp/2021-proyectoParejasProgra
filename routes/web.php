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
Route::patch('/editp/{id}','Tipo_de_pagoController@edit')->name('editp');
//formulario pago para editar
Route::get('/editformp/{id}','Tipo_de_pagoController@editform')->name('editformp');

//listar Pago
Route::get('/listp','Tipo_de_pagoController@list');
//formulario Pago
Route::get('/formp', 'Tipo_de_pagoController@studentform');
//guardar pago
Route::post('/savep', 'Tipo_de_pagoController@save')->name('savep');


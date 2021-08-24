<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

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


Route::view('/', 'vistainicial');
Route::view('/crearformulario', 'formulariocreacion');
Route::get('/crearformulario', 'App\Http\Controllers\formularioController@formulariocreacion')->name("formulariocreacion");
Route::post('/guardarformulario', 'App\Http\Controllers\formularioController@guardarformulario')->name("guardarformulario");
Route::get('/lista', 'App\Http\Controllers\listaController@index')->name("lista.index");
Route::get('/mostrar/{id}', 'App\Http\Controllers\listaController@show')->name("lista.show");
Route::post('/mostrar/{id}', 'App\Http\Controllers\listaController@delete')->name("lista.delete");



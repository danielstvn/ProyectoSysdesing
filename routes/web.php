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



Route::get('/home','App\Http\Controllers\HomeController@getHome');

// sesiones

Route::POST('/login','App\Http\Controllers\SesionesController@getLogin');

Route::get('/logout','App\Http\Controllers\SesionesController@getlogout');

Route::get('/register','App\Http\Controllers\SesionesController@getRegister');

// productos

Route::get('/productos','App\Http\Controllers\ProductosController@getProductos');

Route::get('/productos/edit','App\Http\Controllers\ProductosController@getEdit');

Route::get('/productos/create','App\Http\Controllers\ProductosController@getCreate');


// clientes

Route::get('/clientes','App\Http\Controllers\ClientesController@getClientes');

Route::get('/clientes/edit','App\Http\Controllers\ClientesController@getEdit');

Route::get('/clientes/create','App\Http\Controllers\ClientesController@getCreate');




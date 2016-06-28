<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('boletas/{boleta}/agregar_producto','BoletasController@vista_agregar_producto')->name('boletas.vista_agregar_producto');
Route::post('boletas/{boleta}/agregar_producto','BoletasController@agregar_producto')->name('boletas.agregar_producto');
Route::resource('productos','ProductosController');
Route::resource('boletas','BoletasController');
Route::auth();

Route::get('/home', 'HomeController@index');

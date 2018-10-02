<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/concesion', 'ConcesionController@index')->name('concesion');

Route::any('buscarConcesion','ConcesionController@show');

Route::post('updateConcesionario','ConcesionController@updateConcesionario');

Route::post('updateTramitador','ConcesionController@updateTramitador');

Route::post('updateVehiculo','ConcesionController@updateVehiculo');

Route::post('acepted','ConcesionController@acepted');

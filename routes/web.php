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
    return view('content/content');
});

Route::get('/categoria','CategoriaController@index');
Route::post('/categoria/registrar','CategoriaController@store');
Route::put('/categoria/actualizar','CategoriaController@update');
Route::put('/categoria/activar','CategoriaController@on');
Route::put('/categoria/desactivar','CategoriaController@off');


Route::get('/articulo','ArticuloController@index');
Route::post('/articulo/registrar','ArticuloController@store');
Route::put('/articulo/actualizar','ArticuloController@update');
Route::put('/articulo/activar','ArticuloController@on');
Route::put('/articulo/desactivar','ArticuloController@off');


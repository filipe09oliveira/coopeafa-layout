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
    return view('/index');
});

Route::get('/proprietarios', 'ProprietariosController@proprietariosindex');
Route::get('/proprietario/create', 'ProprietariosController@create');
Route::post('/proprietarios', 'ProprietariosController@proprietariostore');
Route::get('/proprietario/delete/{id}', 'ProprietariosController@destroy');
Route::get('/proprietario/edit/{id}', 'ProprietariosController@edit');
Route::post('/proprietario/{id}', 'ProprietariosController@proprietarioupdate');


Route::get('/propriedades', 'PropriedadesController@propriedadesindex');
Route::get('/propriedade/create', 'PropriedadesController@create');
Route::post('/propriedades', 'PropriedadesController@propriedadestore');
Route::get('/propriedade/delete/{id}', 'PropriedadesController@destroy');
Route::get('/propriedade/edit/{id}', 'PropriedadesController@edit');
Route::post('/propriedade/{id}', 'PropriedadesController@propriedadeupdate');

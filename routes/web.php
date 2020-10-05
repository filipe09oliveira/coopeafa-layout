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


Route::get('/culturas', 'CulturasController@culturasindex');
Route::get('/cultura/create', 'CulturasController@create');
Route::post('/culturas', 'CulturasController@culturastore');
Route::get('/cultura/delete/{id}', 'CulturasController@destroy');
Route::get('/cultura/edit/{id}', 'CulturasController@edit');
Route::post('/cultura/{id}', 'CulturasController@culturaupdate');


Route::get('/agrotoxicos', 'AgrotoxicosController@agrotoxicosindex');
Route::get('/agrotoxico/create', 'AgrotoxicosController@create');
Route::post('/agrotoxicos', 'AgrotoxicosController@agrotoxicostore');
Route::get('/agrotoxico/delete/{id}', 'AgrotoxicosController@destroy');
Route::get('/agrotoxico/edit/{id}', 'AgrotoxicosController@edit');
Route::post('/agrotoxico/{id}', 'AgrotoxicosController@agrotoxicoupdate');


Route::get('/colheitas', 'ColheitasController@colheitaindex');
Route::get('/colheita/create', 'ColheitasController@create');
Route::post('/colheitas', 'ColheitasController@colheitastore');
Route::get('/colheita/delete/{id}', 'ColheitasController@destroy');
Route::get('/colheita/edit/{id}', 'ColheitasController@edit');
Route::post('/colheita/{id}', 'ColheitasController@colheitaupdate');


Route::get('/tipoPropriedades', 'TipoPropriedadeController@tipoPropriedadeindex');
Route::get('/tipoPropriedade/create', 'TipoPropriedadeController@create');
Route::post('/tipoPropriedades', 'TipoPropriedadeController@tipoPropriedadestore');
Route::get('/tipoPropriedade/delete/{id}', 'TipoPropriedadeController@destroy');
Route::get('/tipoPropriedade/edit/{id}', 'TipoPropriedadeController@edit');
Route::post('/tipoPropriedade/{id}', 'TipoPropriedadeController@tipoPropriedadeupdate');

Route::get('/transportadoras', 'TransportadoraController@transportadoraindex');
Route::get('/transportadora/create', 'TransportadoraController@create');
Route::post('/transportadoras', 'TransportadoraController@transportadorastore');
Route::get('/transportadora/delete/{id}', 'TransportadoraController@destroy');
Route::get('/transportadora/edit/{id}', 'TransportadoraController@edit');
Route::post('/transportadora/{id}', 'TransportadoraController@transportadoraupdate');

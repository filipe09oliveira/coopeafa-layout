<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function() {
    Route::post('registro', 'AutenticadorControlador@registro');
    Route::post('login', 'AutenticadorControlador@login');
    
    Route::middleware('auth:api')->group(function(){
        Route::post('logout', 'AutenticadorControlador@logout');
    });

});

Route::get('home', 'HomeControlador@index')->middleware('auth:api');


Route::post('save', 'ProprietariosController@store');
Route::get('pro', 'ProprietariosController@index');
Route::post('edit/{id}', 'ProprietariosController@update');
Route::post('dell/{id}', 'ProprietariosController@delete');


Route::get('propriedades', 'PropriedadesController@index');
Route::post('savepropriedades', 'PropriedadesController@store');
Route::post('editpropriedades/{id}', 'PropriedadesController@update');
Route::post('dellpropriedades/{id}', 'PropriedadesController@delete');


Route::get('culturas', 'CulturasController@index');
Route::post('saveculturas', 'CulturasController@store');
Route::post('editculturas/{id}', 'CulturasController@update');
Route::post('dellculturas/{id}', 'CulturasController@delete');


Route::get('agrotoxicos', 'AgrotoxicosController@index');
Route::post('saveagrotoxicos', 'AgrotoxicosController@store');
Route::post('editagrotoxicos/{id}', 'AgrotoxicosController@update');
Route::post('dellagrotoxicos/{id}', 'AgrotoxicosController@delete');


Route::get('colheitas', 'ColheitasController@index');
Route::post('savecolheitas', 'ColheitasController@store');
Route::post('editcolheitas/{id}', 'ColheitasController@update');
Route::post('dellcolheitas/{id}', 'ColheitasController@delete');
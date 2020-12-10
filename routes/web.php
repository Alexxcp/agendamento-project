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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'contatos'], function () {
    Route::get('/', 'ContatoController@index');
    Route::get('/add', 'ContatoController@create');
    Route::post('/', 'ContatoController@store');
    Route::get('{id}', 'ContatoController@show');
    Route::get('/edit/{id}', 'ContatoController@edit');
    Route::put('{id}', 'ContatoController@update');
    Route::delete('{id}', 'ContatoController@destroy');
});

//PACIENTE

Route::group(['middleware' => 'auth', 'prefix' => 'pacientes'], function () {
    Route::get('/', 'PacienteController@index');
    Route::get('/add', 'PacienteController@create');
    Route::post('/', 'PacienteController@store');
    Route::get('{id}', 'PacienteController@show');
    Route::get('/edit/{id}', 'PacienteController@edit');
    Route::put('{id}', 'PacienteController@update');
    Route::delete('{id}', 'PacienteController@destroy');
});

//MEDICO

Route::group(['middleware' => 'auth', 'prefix' => 'medicos'], function () {
    Route::get('/', 'MedicoController@index');
    Route::get('/add', 'MedicoController@create');
    Route::post('/', 'MedicoController@store');
    Route::get('{id}', 'MedicoController@show');
    Route::get('/edit/{id}', 'MedicoController@edit');
    Route::put('{id}', 'MedicoController@update');
    Route::delete('{id}', 'MedicoController@destroy');
});
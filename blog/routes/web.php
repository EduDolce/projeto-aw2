<?php

use Illuminate\Http\Request;
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
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/consultoria/solicitar', 'ConsultoriaController@solicitar')->name('consultoria.solicitar');

Route::get('/consultoria/salvar', 'ConsultoriaController@salvar')->name('consultoria.salvar');

Route::get('consultorias', 'ConsultoriaController@listar')->name('consultoria.listar');

Route::get('consultorias/{id}', 'ConsultoriaController@responder')->name('consultoria.responder');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('medicos', 'ApiController@getAllMedicos');

Route::get('medicos/{id}', 'ApiController@getMedico');

Route::post('medicos', 'ApiController@createMedico');

Route::put('mecicos/{id}', 'ApiController@updateMedico');

Route::delete('medicos/{id}', 'ApiController@deleteMedico');
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('medicos', 'ApiController@getAllMedicos'); 
Route::get('medicos/{id}', 'ApiController@getMedico'); 
Route::post('medicos', 'ApiController@createMedico');
Route::put('medicos/{id}', 'ApiController@updateMedico');
Route::delete('medicos/{id}', 'ApiController@deleteMedico');
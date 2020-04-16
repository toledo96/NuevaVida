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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','PrincipalController@index');
Route::get('/predicas','PrincipalController@predicas');
Route::get('/grupos','PrincipalController@grupos');
Route::get('/cultura','PrincipalController@cultura');
Route::get('/ubicacion','PrincipalController@ubicacion');
Route::get('/contacto','PrincipalController@contacto');
Route::post('correo', 'PrincipalController@correo');

Auth::routes();



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

Route::get('/Usuarios', 'usuarioController@index');

Route::get('/Usuarios/{id}', 'usuarioController@show');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/CrearCancion','cancionController@create');
Route::get('/canciones/{nombre}','cancionController@show');


Route::get('/editarAlbum','albumController@index');
Route::post('/editarAlbum/add', 'albumController@store');

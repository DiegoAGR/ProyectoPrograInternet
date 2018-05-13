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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/CrearCancion','cancionController@create');
Route::get('/canciones/{nombre}','cancionController@show');


Route::get('/editarAlbum','albumController@index');
Route::post('/editarAlbum/add', 'albumController@store');


//-----------------------------------------------------------

Route::get('/pUsuario', function () {
    return view('pages.usuarioPrueba');
});
Route::get('/buscar', function () {
    return view('pages.buscar');
});
Route::get('/artista', function () {
    return view('pages.artista');
});
Route::get('/album', function () {
    return view('pages.album');
});
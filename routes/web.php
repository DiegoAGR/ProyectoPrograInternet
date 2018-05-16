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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/Usuarios', 'usuarioController@index')->middleware('admin');

#Route::get('/pUsuario/{id}', 'usuarioController@show'); #No quitar esta linea, es para pruebas
Route::get('/pUsuario', 'usuarioController@show')->name('perfil')->middleware('auth');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/CrearCancion','cancionController@create');
Route::get('/cancion/{id}','cancionController@show');


Route::get('/editarAlbum','albumController@index')->middleware('admin');
Route::post('/editarAlbum/add', 'albumController@store');

Route::get('/album/{id}','albumController@show')->middleware('auth');

Route::get('/ajustes', 'usuarioController@edit')->name('ajustes');
Route::post('/ajustes', 'usuarioController@update_avatar');

Route::get('/usuarioDetalle', 'usuarioController@edit');

Route::get('/salirrrrrrrrrrr', 'usuarioController@salir')->name('salir');



//-----------------------------------------------------------


Route::get('/buscar', function () {
    return view('pages.buscar');
});
Route::get('/artista', function () {
    return view('pages.artista');
});
Route::get('/album', function () {
    return view('pages.album');
});
/*Route::get('/actualizarPerfil', function () {
    return view('pages.actualizarPerfil');
});*/
/*Route::get('/cancion', function () {
    return view('pages.cancion');
});*/

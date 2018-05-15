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

#Route::get('/pUsuario/{id}', 'usuarioController@show'); #No quitar esta linea, es para pruebas
Route::get('/pUsuario', 'usuarioController@show')->name('perfil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/CrearCancion','cancionController@create');
Route::get('/cancion/{id}','cancionController@show');


Route::get('/editarAlbum','albumController@index');
Route::post('/editarAlbum/add', 'albumController@store');



Route::get('/ajustes', 'usuarioController@edit')->name('ajustes');
Route::post('/ajustes', 'usuarioController@update_avatar');


Route::get('/usuarioDetalle', 'usuarioController@edit');

//-----------------------------------------------------------


Route::get('/buscar', function () {
    return view('pages.buscar');
})->name('buscar');
Route::get('/artista', function () {
    return view('pages.artista');
});
Route::get('/album', function () {
    return view('pages.album');
});
Route::get('/admin/canciones', function () {
    return view('pages.admin.listaCanciones');
})-> name('administrarCanciones');
Route::get('/admin/albums', function () {
    return view('pages.admin.listaAlbums');
})-> name('administrarAlbums');
Route::get('/admin/artistas', function () {
    return view('pages.admin.listaArtistas');
})-> name('administrarArtistas');
Route::get('/admin/canciones/agregar', function () {
    return view('pages.admin.agregarCanciones');
})-> name('adminAgregarCanciones');
Route::get('/admin/albums/agregar', function () {
    return view('pages.admin.agregarAlbums');
})-> name('adminAgregarAlbums');
Route::get('/admin/artistas/agregar', function () {
    return view('pages.admin.agregarArtistas');
})-> name('adminAgregarArtistas');
/*Route::get('/actualizarPerfil', function () {
    return view('pages.actualizarPerfil');
});*/
/*Route::get('/cancion', function () {
    return view('pages.cancion');
});*/

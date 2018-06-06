<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use DB;

class cancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canciones = Song::all();
        return view('pages.admin.listaCanciones',compact('canciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $generos = DB::table('generos')->get();
      $artistas = DB::table('artistas')->get();
      return view('pages.admin.agregarCanciones',['generos' =>$generos],['artistas' =>$artistas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $cancion = new Song;
      $cancion->titulo = $request->titulo;
      $cancion->artista = $request->artista;
      $cancion->album_id = '10';
      $cancion->genero_id = $request->genero_id;
      $cancion->duracion = $request->duracion;

      $cancion->save();

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $song = Song::find($id);

      return view('pages.cancion',compact('song'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Song::find($id);
        $c->delete();
    }
}

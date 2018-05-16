<?php

namespace App\Http\Controllers;
use App\Album;
use Illuminate\Http\Request;
use Storage;
class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subirArchivos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
       $nombre = $file->getClientOriginalName();
      \Storage::disk('local')->put($nombre,  \File::get($file));
       $tamanio = Storage::size($nombre);
       $mime = $file->getClientMimeType();
       //obtenemos el nombre del archivo


       //indicamos que queremos guardar un nuevo archivo en el disco local


       return redirect()->back()->with(['message', 'FUNCIONAAAAA!'], ['message','tamanio'], ['message','mime']);

//       return "archivo guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $album = Album::find($id);

      return view('pages.album',compact('album'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('subirArchivos');
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
        //
    }
}

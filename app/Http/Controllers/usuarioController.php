<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Image;
use Auth;
class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return view('listadoUsuarios',compact('users'));

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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      #$usuario = User::find($id);
      $usuario = Auth::user();

      return view('pages.usuarioPrueba',compact('usuario'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      $usuario = Auth::user();
      return view('pages.actualizarPerfil',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $usuario = Auth::User();
    //  dd($usuario);
      if($request->hasFile('inputImagen')){

        $avatar = $request->file('inputImagen');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/subidas/avatars/' . $filename ) );
        $usuario->avatar = $filename;
      }

      if(!($request->nickname==NULL))
      {
        $usuario->nickname = $request->inputNick;
      }
      $usuario->save();

      return view('pages.usuarioPrueba',compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id);
    }

    public function salir()
    {
      Auth::logout();
      return redirect ('home');
    }
}

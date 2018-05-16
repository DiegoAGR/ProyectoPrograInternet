@extends('layouts.custom')
@section('pageTitle', 'Actualizar Perfil')

@section('content')

<div class="row justify-content-md-center">

    <div class="col-xl-6 col-lg-7 col-md-9">
        <div class="card">
        <div class="card-body">
          <form method="POST" action="/usuarioDetalle" accept-charset="UTF-8" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <img class="img-fluid d-block mx-auto" width="220" height="220" src="/subidas/avatars/{{ $usuario->avatar }}" alt="">
        </div>
        <div class="card-body">

        <form>
            <div class="form-group row">
                <label for="inputNick" class="col-sm-3 col-form-label">Nickname</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="inputNick" placeholder="Nuevo Nickname">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputImagen" class="col-sm-3 col-form-label">Imagen Perfil</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="inputImagen" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Contraseña</label>
                <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Confirmar</label>
                <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                </div>

            </div>
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-dark btn-block">Guardar</button>
                </div>
            </div>
        </form>

        </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.custom')
@section('pageTitle', 'Administrar Canciones')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <h2 class="mt-4">Administrador</h2>
        <div class="list-group">
            <p class="list-group-item  list-group-item-dark">Canciones</p>
            <a href="{{ route('administrarAlbums') }}" class="list-group-item list-group-item-light">Albums</a>
            <a href="{{ route('administrarArtistas') }}" class="list-group-item list-group-item-light">Artistas</a>
        </div>
    </div>


    <!-- Post Content Column -->
    <div class="col-lg-9">
        <div class="row mt-4">
            <a href="{{route('administrarCanciones')}}" type="button" class="btn btn-dark btn-lg btn-block">Regresar</a>
        </div>
        <div class="row card mb-3 mt-4">
            <div class="card-body">
              <form method="POST" action="/admin/canciones/agregar" accept-charset="UTF-8" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <form>
                <div class="form-group row">
                    <label for="inputTitulo" class="col-sm-3 col-form-label">Titulo</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="titulo">
                    </div>
                </div>


                <div class="form-group">
                  <label for="inputArtista" class="col-sm-3 col-form-label">Artista</label>
                  <select class="form-control" name="artista">
                    @foreach($artistas as $artista)
                    <option value="{{$artista->nombre}}">{{$artista->nombre}}</option>
                    @endforeach
                  </select>
                </div>


                <div class="form-group">
                  <select class="form-control" name="genero">
                    @foreach($generos as $genero)
                    <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <select class="form-control" name="duracion">
                    <input type="time" name="duracion">
                  </div>

                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-dark btn-block">Agregar</button>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>
<!-- /.row -->

@endsection

@section('customScripts')
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>
@endsection

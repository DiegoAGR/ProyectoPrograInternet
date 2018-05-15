@extends('layouts.custom')
@section('pageTitle', 'Usuario')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">{{$usuario->nickname}}</h5>
            <div class="card-body">
                <img class="img-fluid d-block mx-auto" src="/subidas/avatars/{{ $usuario->avatar }}" alt="">
            </div>
        </div>

        <div class="col-lg-12">
            <a class="btn btn-primary btn-block" width="100%" href="{{route('ajustes')}}">Editar</a>
        </div>
    </div>

    <!-- Post Content Column -->
    <div class="col-lg-9">

        <!-- Title -->
        <h1 class="mt-4">Lista de Reproducciones</h1>

        <hr>
        <br>

        <!-- Example DataTables Card-->
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th style="width:40%">Canción</th>
                <th s2aqtyle="width:30%">Artista</th>
                <th style="width:30%">Última vez escuchado</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($usuario->songs as $song)
            <tr>

                  <td> {{ $song->titulo }} </td>
                  <td> {{ $song->artista }}  </td>
                  <td> {{ $song->created_at }} </td>
            </tr>
            @endforeach

            </tbody>
        </table>
        </div>



        <br>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
        <h5 class="card-header">Deja un comentario:</h5>
        <div class="card-body">
            <form>
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">{{$usuario->nombre}}</h5>
                Breve descripcion de mi ser~
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

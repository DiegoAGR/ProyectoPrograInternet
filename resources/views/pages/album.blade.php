@extends('layouts.custom')
@section('pageTitle', 'Albúm')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Artista: {{$album->artista->nombre}}</h5>
            <div class="card-body">
                <img class="img-fluid d-block mx-auto" src="/subidas/covers/{{$album->cover}}" alt="">
            </div>
        </div>
    </div>

    <!-- Post Content Column -->
    <div class="col-lg-9">

        <!-- Title -->
        <h1 class="mt-4">Albúm: {{$album->nombre}}</h1>

        <hr>
        <br>

        <!-- Lista de canciones -->
        <ul class="list-group">

        @foreach ($album->canciones as $cancion)
          <tr>
          <li class="list-group-item"><a href="/cancion/{{$cancion->id}}" class="card-link">{{$cancion->titulo}}</a></li>
          </tr>
        @endforeach
        </ul>

    </div>
</div>
<!-- /.row -->

@endsection

@extends('layouts.custom')
@section('pageTitle', 'Canción')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Albúm  <strong> {{$song->album->nombre}} </strong> </h5>
            <div class="card-body">
                <img class="img-fluid d-block mx-auto" src="/subidas/covers/{{ $song->album->cover }}" alt="">
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="card-link">Canción 1</a></li>
                <li class="list-group-item list-group-item-dark">Canción Actual</li>
                <li class="list-group-item"><a href="#" class="card-link">Canción 3</a></li>
            </ul>

        </div>

    </div>

    <!-- Post Content Column -->
    <div class="col-lg-9">

        <!-- Title -->
        <h1 class="mt-4">{{$song->titulo}}</h1>
        <h4 class="mt-1">de <strong>{{$song->artista}}</strong></h4>
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Duración: <strong>{{$song->duracion}}</strong></li>
            <li class="list-group-item">Genero <strong>{{$song->genero->nombre}} </strong> </li>
            <li class="list-group-item">Mas info</li>
            <li class="list-group-item">Mas info</li>
            <li class="list-group-item">Mas info</li>
        </ul>
        <br>



        <audio controls>
          <source src="/subidas/canciones/{{$song->id}}.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
        <br>
        <br>
        <br>
        <br>


        <!-- Single Comment -->
                @foreach ($song->comentarios->reverse() as $comentario)
                <div class="media mb-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                  <h5 class="mt-0">Usuario</h5>
                   {{$comentario->created_at->diffForHumans()}}
                   <a href="#"> Borrar</a>

                  <hr>
                  {{ $comentario->texto }}
                  <br> </br>
                </div>
              </div>
                @endforeach


                <!-- Comments Form -->
                <div class="card my-4">
                <h5 class="card-header">Deja un comentario:</h5>
                <div class="card-body">
                    <form method="POST" action="/cancion/{{$song->id}}/comentarios">
                      {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="texto" placeholder="Escribe tu comentario aqui." class="form-control" rows="4"></textarea>
                    </div>
                    <input type="hidden" value="{{$song->id}}" name="song_id" />
                    <input type="hidden" value="App\Song" name="type" />
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                </div>
    </div>
</div>



<!-- /.row -->

@endsection

@extends('layouts.custom')
@section('pageTitle', 'Canción')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Albúm</h5>
            <div class="card-body">
                <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
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
        <h1 class="mt-4">Canción</h1>
        <h4 class="mt-1">de <strong>Artista</strong></h4>
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Duración: <strong>03:00 minutos</strong></li>
            <li class="list-group-item">Mas info</li>
            <li class="list-group-item">Mas info</li>
            <li class="list-group-item">Mas info</li>
            <li class="list-group-item">Mas info</li>
        </ul>
        <br>
        <button type="submit" class="btn btn-dark btn-lg btn-block">Escuchar (no hace nada :v)</button>
        <br>
        <br>
        <br>
        <br>

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
                <h5 class="mt-0">Usuario</h5>
                Breve descripcion de mi ser~
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

@endsection
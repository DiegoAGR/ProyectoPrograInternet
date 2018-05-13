@extends('layouts.custom')
@section('pageTitle', 'Albúm')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Artista</h5>
            <div class="card-body">
                <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
            </div>
        </div>
    </div>

    <!-- Post Content Column -->
    <div class="col-lg-9">

        <!-- Title -->
        <h1 class="mt-4">Albúm</h1>

        <hr>
        <br>

        <!-- Lista de canciones -->
        <ul class="list-group">
            <li class="list-group-item"><a href="#" class="card-link">Canción 1</a></li>
            <li class="list-group-item"><a href="#" class="card-link">Canción 2</a></li>
            <li class="list-group-item"><a href="#" class="card-link">Canción 3</a></li>
        </ul>

    </div>
</div>
<!-- /.row -->

@endsection
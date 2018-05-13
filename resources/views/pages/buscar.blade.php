@extends('layouts.custom')
@section('pageTitle', 'Motor de busqueda')

@section('content')

<!-- Motor de Busqueda -->      
<div class="row">
    <div class="col-lg-12">

        <h1 class="mt-4">Motor de Busqueda</h1>

        <div class="input-group mt-4">
        <input type="text" class="form-control" placeholder="Canciones, Album, Artista..." aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-dark btn-lg" type="button">Buscar</button>
        </div>
        </div>

        <hr>
    </div>
</div>
<!-- /.row -->

<!-- Canciones -->
<div class="row">
    <div class="col-lg-12"><h4 class="mb-3">Canciones</h4></div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card mb-4" style="width: 16rem;">
            <img class="card-img-top" height="220" src="http://placehold.it/200x200&text=Logo" alt="canción">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title mb-1"><a href="#" class="card-link">Canción</a></h5></li>
            <li class="list-group-item">Album: <a href="#" class="card-link">album</a></li>
            <li class="list-group-item">Artista: <a href="#" class="card-link">artista</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card mb-4" style="width: 16rem;">
            <img class="card-img-top" height="220" src="http://placehold.it/200x200&text=Logo" alt="canción">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title mb-1"><a href="#" class="card-link">Canción</a></h5></li>
            <li class="list-group-item">Album: <a href="#" class="card-link">album</a></li>
            <li class="list-group-item">Artista: <a href="#" class="card-link">artista</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card mb-4" style="width: 16rem;">
            <img class="card-img-top" height="220" src="http://placehold.it/200x200&text=Logo" alt="canción">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title mb-1"><a href="#" class="card-link">Canción</a></h5></li>
            <li class="list-group-item">Album: <a href="#" class="card-link">album</a></li>
            <li class="list-group-item">Artista: <a href="#" class="card-link">artista</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card mb-4" style="width: 16rem;">
            <img class="card-img-top" height="220" src="http://placehold.it/200x200&text=Logo" alt="canción">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title mb-1"><a href="#" class="card-link">Canción</a></h5></li>
            <li class="list-group-item">Album: <a href="#" class="card-link">album</a></li>
            <li class="list-group-item">Artista: <a href="#" class="card-link">artista</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card mb-4" style="width: 16rem;">
            <img class="card-img-top" height="220" src="http://placehold.it/200x200&text=Logo" alt="canción">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title mb-1"><a href="#" class="card-link">Canción</a></h5></li>
            <li class="list-group-item">Album: <a href="#" class="card-link">album</a></li>
            <li class="list-group-item">Artista: <a href="#" class="card-link">artista</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card mb-4" style="width: 16rem;">
            <img class="card-img-top" height="220" src="http://placehold.it/200x200&text=Logo" alt="canción">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title mb-1"><a href="#" class="card-link">Canción</a></h5></li>
            <li class="list-group-item">Album: <a href="#" class="card-link">album</a></li>
            <li class="list-group-item">Artista: <a href="#" class="card-link">artista</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Album -->
<div class="row">
    <div class="col-lg-12"><h4 class="mb-3">Albúm</h4></div>

    <div class="col-lg-3">
        <div class="card mb-4" style="width: 16rem;">
            <img class="card-img-top" height="220" src="http://placehold.it/200x200&text=Logo" alt="canción">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title mb-1"><a href="#" class="card-link">Album</a></h5></li>
            <li class="list-group-item">Artista: <a href="#" class="card-link">artista</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /.row -->

<!-- Artista -->
<div class="row">
    <div class="col-lg-12"><h4 class="mb-3">Artista</h4></div>

    <div class="col-lg-3">
        <div class="card" style="width: 16rem;">
            <div class="card-body">
            <h5 class="card-title mb-1"><a href="#" class="card-link">artista</a></h5>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

@endsection
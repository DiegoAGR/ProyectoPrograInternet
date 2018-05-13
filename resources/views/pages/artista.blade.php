@extends('layouts.custom')
@section('pageTitle', 'Artista')

@section('content')

<!-- Titulo -->      
<div class="row">
    <div class="col-lg-12">
        <h1 class="mt-4">Artista</h1>
        <hr>
    </div>
</div>
<!-- /.row -->

<!-- Album -->
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
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

@endsection
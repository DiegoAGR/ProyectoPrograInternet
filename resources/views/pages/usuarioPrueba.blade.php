@extends('layouts.custom')
@section('pageTitle', 'Usuario')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Santiago Alberto Duran Aguilar c:</h5>
            <div class="card-body">
                <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
            </div>
        </div>

        <div class="col-lg-12">
            <a class="btn btn-primary btn-block" width="100%" href="#">Editar</a>
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
            <tr>
                <td>El Murguero</td>
                <td>Los Autenticos Decadentes</td>
                <td>2015/11/09 23:02</td>
            </tr>
            <tr>
                <td>El Murguero</td>
                <td>Los Autenticos Decadentes</td>
                <td>2015/01/09 04:02</td>
            </tr>
            <tr>
                <td>El Murguero</td>
                <td>Los Autenticos Decadentes</td>
                <td>2014/11/09 09:02</td>
            </tr>
            <tr>
                <td>El Murguero</td>
                <td>Los Autenticos Decadentes</td>
                <td>2015/10/20 09:02</td>
            </tr>
            <tr>
                <td>El Murguero</td>
                <td>Los Autenticos Decadentes</td>
                <td>2015/10/20 09:10</td>
            </tr>
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
                <h5 class="mt-0">Nombre del usuario</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                felis in faucibus.
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
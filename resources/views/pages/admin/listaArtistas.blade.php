@extends('layouts.custom')
@section('pageTitle', 'Administrar Artistas')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <h2 class="mt-4">Administrador</h2>
        <div class="list-group">
            <a href="{{ route('administrarCanciones') }}" class="list-group-item list-group-item-light">Canciones</a>
            <a href="{{ route('administrarAlbums') }}" class="list-group-item list-group-item-light">Albums</a>
            <p class="list-group-item  list-group-item-dark">Artistas</p>
        </div>
    </div>

    <!-- Post Content Column -->
    <div class="col-lg-9">
        <div class="row mt-4">
            <a href="{{route('adminAgregarArtistas')}}"  type="button" class="btn btn-dark btn-lg btn-block">Agregar Artista</a>
        </div>
        <div class="row card mb-3 mt-4">
            <div class="card-header">
                <i class="fa fa-table"></i> Artistas
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th style="width:80%">Artista</th>
                            <th style="width:20%">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Artista  </td>
                            <td> <a href="#" class="mr-4">Editar</a> <a href="#">Borrar</a> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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
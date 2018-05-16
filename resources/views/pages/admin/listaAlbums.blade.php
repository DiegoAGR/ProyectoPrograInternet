@extends('layouts.custom')
@section('pageTitle', 'Administrar Albums')

@section('content')

<div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-3">
        <h2 class="mt-4">Administrador</h2>
        <div class="list-group">
            <a href="{{ route('administrarCanciones') }}" class="list-group-item list-group-item-light">Canciones</a>
            <p class="list-group-item  list-group-item-dark">Albums</p>
            <a href="{{ route('administrarArtistas') }}" class="list-group-item list-group-item-light">Artistas</a>
        </div>
    </div>

    <!-- Post Content Column -->
    <div class="col-lg-9">
        <div class="row mt-4">
            <a href="{{route('adminAgregarAlbums')}}"  type="button" class="btn btn-dark btn-lg btn-block">Agregar Albúm</a>
        </div>
        <div class="row card mb-3 mt-4">
            <div class="card-header">
                <i class="fa fa-table"></i> Albums
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th style="width:45%">Albúm</th>
                            <th s2aqtyle="width:35%">Artista</th>
                            <th style="width:20%">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Albúm </td>
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
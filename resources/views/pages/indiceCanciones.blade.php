@extends('layouts.custom')
@section('pageTitle', 'Administrar Canciones')

@section('content')

<div class="row">
    <!-- Sidebar Column -->


    <!-- Post Content Column -->
    <div class="col-lg-12">
        <div class="row card mb-3 mt-4">
            <div class="card-header">
                <i class="fa fa-table"></i> Canciones
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th style="width:45%">Canción</th>
                            <th s2aqtyle="width:15%">Artista</th>
                            <th style="width:30%">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($canciones as $cancion)
                          <tr>
                              <td> {{$cancion->titulo}} </td>
                              <td> {{$cancion->artista}}  </td>
                              <td> <a href="/cancion/{{$cancion->id}}" class="mr-4">Escuchar</a>  </td>
                          </tr>
                          @endforeach

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

@extends('layouts.custom')
@section('pageTitle', 'Administrar Albums')

@section('content')
<div class="container">

<div class="row">
    <!-- Sidebar Column -->



    <!-- Post Content Column -->
    <div class="col-lg-12">

        <div class="row card mb-5 mt-4">
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
                            <td> <a href="#">Escuchar</a> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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

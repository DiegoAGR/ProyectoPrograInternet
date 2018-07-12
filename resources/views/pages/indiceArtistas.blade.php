@extends('layouts.custom')
@section('pageTitle', 'Indice de artistas')

@section('content')
<div class="container">

<div class="row">


    <!-- Post Content Column -->
    <div class="col-lg-12">
        <div class="row card mb-5 mt-4">
            <div class="card-header">
                <i class="fa fa-table"></i> Artistas
            </div>

            <table class="table table-hover">
               <tbody>
                 @foreach($artistas as $artista)
                 <tr>
                     <td> {{$artista->nombre}} </td>
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

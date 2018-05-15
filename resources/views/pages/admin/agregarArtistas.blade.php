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
            <a href="{{route('administrarArtistas')}}" type="button" class="btn btn-dark btn-lg btn-block">Regresar</a>
        </div>
        <div class="row card mb-3 mt-4">
            <div class="card-body">

            <form>
                <div class="form-group row">
                    <label for="inputNick" class="col-sm-3 col-form-label">Nickname</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNick" placeholder="Nickname">
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="inputImagen" class="col-sm-3 col-form-label">Imagen Perfil</label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputImagen" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Contraseña</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Confirmar</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-dark btn-block">Agregar</button>
                    </div>
                </div>
            </form>
    
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
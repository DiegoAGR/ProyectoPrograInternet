@extends('layouts.custom')
@section('pageTitle', 'Albúm')

@section('content')



    <!-- Page Content -->
    <div class="container">

      <h1 class="my-12 text-center text-lg-left">Pagina del artista</h1>
      <img src="/subidas/artistas/default.jpg" class="rounded" alt="" style='vertical-align: center'>

      <div class="row">
      <div class="col-1" style="background-color:gray;"> Nombre: </div>
      <div class="col-8">respuesta</div>
      </div>

      <div class="row">
      <div class="col-1" style="background-color:gray;">A;o:</div>
      <div class="col-8">Fecha</div>
      </div>

      <div class="row">
      <div class="col-1" style="background-color:gray;">Genero(s):</div>
      <div class="col-5">Muchos generos</div>
      </div>

      <div class="row">
      <div class="col-2" style="background-color:gray;">descripcion:</div>
      <div class="col-5">Descripcion</div>
      </div>


      <hr>


      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="/subidas/covers/cover.png" alt="">
          </a>
        </div>

        @for ($i = 0; $i < 10; $i++)
          The current value is {{ $i }}
          <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="/subidas/covers/cover.png" alt="">
            </a>
          </div>
        @endfor
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


@endsection

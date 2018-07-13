@extends('layouts.custom')
@section('pageTitle', 'Albúm')

@section('content')



    <!-- Page Content -->
    <div class="container">
      <!-- Investigar como hacer lo de float en css*/ -->

      <h1 class="my-16 text-center text-lg-left">Pagina del artista</h1>

      <div class="row">
        <div class="column">
          <img src="/subidas/artistas/{{$artista->foto}}" class="rounded" alt="">
        </div>

        <div class="column">
          <table class="table table-borderless">

       <tbody>
         <tr>
           <td>Nombre: </td>
           <td> {{$artista->nombre}} </td>
         </tr>

         <tr>
           <td>Pais: </td>
           <td>{{$artista->pais}}</td>

         </tr>
         <tr>
           <td>Año: </td>
           <td></td>

         </tr>

       </tbody>

     </table>
     <hr>
      </div>
      </div>
      <hr>

      <div class="row text-center text-lg-left">



        @foreach($artista->albumes as $album)
        <tr>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <td> {{$album->nombre}} </td>

            <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="/subidas/covers/cover.png" alt="">
            </a>
          </div>

        </tr>
        @endforeach

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

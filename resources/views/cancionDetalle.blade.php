<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion de la cancion: {{$cancion->titulo}} </title>
</head>
<body>

  <h1>Informacion de la cancion: {{$cancion->titulo}}</h1>
<hr>
      <ul>

        Titulo: {{$cancion->titulo}}<br>
        Artista: {{$cancion->artista}}.<br>
        Album: {{$cancion->album->nombre}}.<br>
        Año: {{$cancion->album->anio}}<br>
        Genero: {{$cancion->genero->nombre}}.<br>
        Duracion: {{$cancion->duracion}}.<br>


      </ul>

        @foreach ($cancion->comentarios as $comentario):
          {{ $comentario->texto }}
        <br>
      @endforeach

</body>
</html>

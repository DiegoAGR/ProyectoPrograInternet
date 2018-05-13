<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion de usuario </title>
</head>
<body>

  <h1>Detalle del usuario {{$user->id}}</h1>
  <img src="/subidas/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

      <ul>
        Hola, {{ $user->nickname }}<br>

        Tus datos son:<br><br>

        Nombre: {{$user->nombre}}<br>
        Correo Electronico: {{$user->correoElectronico}}.<br>
        Fecha de registro: {{$user->created_at }}.<br>

      </ul>

      <form enctype="multipart/form-data" action="/usuarioDetalle/{{$user->id}}" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
</body>
</html>

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

      <ul>
        Hola, {{ $user->nickname }}<br>

        Tus datos son:<br><br>

        Nombre: {{$user->nombre}}<br>
        Correo Electronico: {{$user->correoElectronico}}.<br>
        Fecha de registro: {{$user->created_at }}.<br>

      </ul>

</body>
</html>

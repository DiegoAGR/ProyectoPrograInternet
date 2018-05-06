<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del usuario $user->id </title>
</head>
<body>

  <h1>Asdfalto</h1>

      <ul>
        Hola, {{ $user->nickname }}.

        Tus datos son:

        Nombre: {{$user->nombre}}
        Correo Electronico: {{$user->correoElectronico}}.
        Fecha de registro: {{$user->created_at }}.

      </ul>

</body>
</html>

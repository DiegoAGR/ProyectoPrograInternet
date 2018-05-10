<!DOCTYPE HTML>
<html>
<body>

<form action="welcome_get.php" method="get">
Titulo: <input type="text" name="name"><br>
Artista: <input type="text" name="email"><br>
Album: <input type="text" name="email"><br>


<select name="genero_musical" >
  @foreach ($generos as $genero):
  <option value=" {{ $genero->nombre }}"> {{ $genero->nombre }}</option>
  @endforeach


<input type="submit">



</form>

</body>
</html>

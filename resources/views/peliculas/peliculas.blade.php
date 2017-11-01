<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>


<h3>Lista</h3>

@foreach ($peliculas as $key => $value)
  <li>{{ $value->title }} <a href="{{ route('editmovie', $key)}}">Editar</a> <a href="">Eliminar</a> </li>


@endforeach


<a href="peliculas/formulario">NUEVA PELICULA</a>


  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>

{{ $user->name}}

<h3>Lista</h3>

@foreach ($peliculas as $value)
  <li>{{ $value->title }} <a href="{{ route('editmovie', $value->id)}}">Editar</a> <a href="{{ route('confirmo', $value->id)}}">Eliminar</a> </li>


@endforeach

{{ $peliculas->links()}}


<a href="peliculas/formulario">NUEVA PELICULA</a>


  </body>
</html>

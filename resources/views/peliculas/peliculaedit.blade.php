<pre>
@php
  var_dump ($errors);
  var_dump($pelicula);
@endphp
</pre>
$peliculas['']
$peliculas->fasf

<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>
                <label for="title">Titulo</label>
                <input type="text" name="title" id="titulo" value="{{$pelicula->title}}"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" value="{{ $pelicula->rating}}"/>
            </div>
            <div>
                <label for="awards">Premios</label>
                <input type="text" name="awards" id="premios"value="{{ $pelicula->awards}}"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion"value="{{ $pelicula->length}}"/>
            </div>

            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
        @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>

        @endif

        @if ($errors->has('titulo')) {
          aca estoy
        }
        @endif

    </body>
</html>

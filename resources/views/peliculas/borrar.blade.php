<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{ route('deletemovie',$pelicula->id)}}" method="post">
      <input type="hidden" name="_method" value="delete" />
     {{ csrf_field() }}

    esta seguro de borrar {{ $pelicula->title}}
    <input type="submit" name="" value="BORRAR">
    <input type="submit" name="" value="VOLVER">
    </form>

  </body>
</html>

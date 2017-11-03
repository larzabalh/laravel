<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>


<h3>Lista</h3>

<table class="table table-bordered" id="mitabla">
  <thead>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>RATING</th>
    <th>PELICULA FAVORITA</th>
  </thead>
    <tbody>
      @foreach ($actores as $key => $value)
        <tr>
          <td>{{$value->first_name }}</td>
          <td>{{$value->last_name}}</td>
          <td>{{$value->rating}}</td>
          <td>{{$value->favorite_movie_id}}</td>
        </tr>
      @endforeach
    </tbody>
</table>




  </body>
</html>

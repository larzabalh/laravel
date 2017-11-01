<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>


<h3>Lista</h3>

@foreach ($actores as $key => $value)
  <li>{{ $value->first_name }}</li>
@endforeach



  </body>
</html>

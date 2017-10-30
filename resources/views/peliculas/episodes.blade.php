<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>


<h3>Lista</h3>

@foreach ($episodes as $key => $value)
  <li>{{ $value->title }}</li>
@endforeach


  </body>
</html>

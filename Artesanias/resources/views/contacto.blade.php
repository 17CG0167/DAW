<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: {{ $fondo }}">
    <h1>
    CONTACTO JEJE <br>
    <h2>
    @for($i = 0; $i < $valor; $i++)
    @if( ($i % 2) == 0)
      <h2 style = "color:blue"> {{ $nombre }} <br> </h2>
    @else
      <h2 style = "color:purple"> {{ $nombre }} <br> </h2>
    @endif
    @endfor
    </h2>
  
    {{ $valor }}
    </h1>
</body>
</html>
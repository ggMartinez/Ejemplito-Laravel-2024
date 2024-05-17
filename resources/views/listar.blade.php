<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mis vapitos</h1>
    <h2>Los mejores vapis</h2>

    @if(Session::Has('mensaje'))
        <h2 style="color: red">{{ Session::Get('mensaje') }}</h2>
    @endif

    <a href="/insertar">Agregar</a><br><br>

    <b>ID - Marca - Modelo - Color - Cantidad de pilas - Potencia máxima - Capacidad</b><br>
    @foreach($vapos as $v)
        {{ $v -> id }} - {{ $v->marca }} - {{ $v->modelo }} - {{ $v->color }} - {{ $v->cantidad_de_pilas }} - {{ $v->potencia_maxima }} - {{ $v->capacidad }} <a href="/eliminar/{{ $v -> id}}">Eliminar</a> <a href="/modificar/{{ $v -> id}}">Modificar</a><br>
    @endforeach

   
</body>
</html>
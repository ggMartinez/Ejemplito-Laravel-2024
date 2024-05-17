<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Insertar vapos</h1>

    <form action="/insertar" method="post">
        @csrf
        <input type="text" name="marca" placeholder="Marca">
        <input type="text" name="modelo" placeholder="Modelo">
        <input type="text" name="color" placeholder="Color">
        <input type="text" name="cantidad_de_pilas" placeholder="Cantida de pilas">
        <input type="text" name="potencia_maxima" placeholder="Potencia Maxima">
        <input type="text" name="capacidad" placeholder="Capacidad">

        <input type="submit" value="Insertar">
    </form>

    
</body>
</html>
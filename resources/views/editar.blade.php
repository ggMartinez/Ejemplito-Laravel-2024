<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar vapos</h1>

    <form action="/modificar" method="post">
        @csrf
        <input type="hidden" name="id" value={{ $vapo -> id }}>
        <input type="text" name="marca" value={{ $vapo -> marca }}>
        <input type="text" name="modelo" value={{ $vapo -> modelo }}>
        <input type="text" name="color" value={{ $vapo -> color }}>
        <input type="text" name="cantidad_de_pilas" value={{ $vapo -> cantidad_de_pilas }}>
        <input type="text" name="potencia_maxima" value={{ $vapo -> potencia_maxima }}>
        <input type="text" name="capacidad" value={{ $vapo -> capacidad }}>

        <input type="submit" value="Modificar">
    </form>

    
</body>
</html>
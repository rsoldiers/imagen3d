<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagenes 3D</title>
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

div {
    text-align: center;
    margin-bottom: 50px;
}

iframe {
    max-width: 200%;
   
}

a {
    text-decoration: none;
    padding: 20px 30px;
    background-color: #3498db;
    color: #fff;
    border-radius: 10px;
    margin: 0 10px;
}

</style>
</head>
<body>
    <div>
        <h3>{{ $imagenActual->titulo }}</h3>
        <iframe {{ $imagenActual->titulo }} frameborder="0" allowfullscreen mozallowfullscreen="true"
            webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
            xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
            width="640" height="480" src="{{ $imagenActual->imagenUrl }}">
        </iframe>
    </div>

    <div>
        @if (isset($imagenAnterior))
            <a href="{{ url('/imagenes/' . $imagenAnterior->id) }}">Anterior</a>
        @endif

        @if (isset($imagenSiguiente))
            <a href="{{ url('/imagenes/' . $imagenSiguiente->id) }}">Siguiente</a>
        @endif
    </div>
</body>
</html>
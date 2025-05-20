<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Juegos</title>
</head>

<body>

    <a href="{{ route('juego.index') }}">Volver a juegos</a>

    <h1>Título: {{ $juego->nombre }}</h1>

    <p>

        <b>Categoría: </b> {{ $juego->id_categoria }} <br>

    </p>

    <p>

        {{ $juego->descripcion }}

    </p>

    <a href="{{ route('juego.edit', $juego) }}">Editar juego</a>
    <br>
    <form action="{{ route('juego.destroy', $juego) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar juego</button>
    </form>
</body>

</html>

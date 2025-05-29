<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>Formulario para editar un juego</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h2>Errores:</h2>
            <ul>

                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach

            </ul>
        </div>
    @endif

    <form action="{{ route('juego.update', $juego) }}" method="POST">

        @csrf

        @method('PUT')

        <label for="title">
            Nombre del juego:
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>
        <br><br>
        <label for="precio">
            Precio:
            <input type="text" name="precio" value="{{ old('precio') }}">
        </label>
        <br><br>
        <label for="descripcion">
            Contenido:
            <textarea name="descripcion">{{ old('descripcion') }}</textarea>
            </textarea>
        </label>
        <br><br>
        <label for="categoria">
            Categoría:
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>
        <br><br>
        <button type="submit">Crear juego</button>
    </form>

</body>

</html>

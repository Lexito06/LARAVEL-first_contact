<x-app-layout>
    <h1>Formulario para crear un nuevo juego</h1>

    <div>

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

    </div>

    <form action="{{ route('juego.store') }}" method="POST">

        @csrf

        <label for="title">
            Nombre del juego:
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>
        {{--
        @error('title')
            <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        --}}
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

</x-app-layout>

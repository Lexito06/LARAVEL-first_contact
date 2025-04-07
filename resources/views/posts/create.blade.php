<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>

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

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <label for="title">
            Título:
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        {{--
        @error('title')
            <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        --}}
        <br><br>
        <label for="slug">
            Slug:
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>
        <br><br>
        <label for="category">
            Categoría:
            <input type="text" name="category" value="{{ old('category') }}">
        </label>
        <br><br>
        <label for="content">
            Contenido:
            <textarea name="content">{{ old('content') }}</textarea>
            </textarea>
        </label>
        <br><br>
        <button type="submit">Crear post</button>
    </form>

</x-app-layout>

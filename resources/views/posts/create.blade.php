<x-app-layout>
    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <label for="title">
            Título:
            <input type="text" name="title" id="">
        </label>
        <br><br>
        <label for="category">
            Categoría:
            <input type="text" name="category" id="">
        </label>
        <br><br>
        <label for="content">
            Contenido:
            <textarea name="content"></textarea>
        </label>
        <br><br>
        <button type="submit">Crear post</button>
    </form>

</x-app-layout>

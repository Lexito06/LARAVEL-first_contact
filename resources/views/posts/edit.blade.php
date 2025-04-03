<x-app-layout>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">

        @csrf

        @method('PUT')

        <label for="title">
            Título:
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br><br>
        <label for="category">
            Categoría:
            <input type="text" name="category" value="{{ $post->category }}">
        </label>
        <br><br>
        <label for="content">
            Contenido:
            <textarea name="content">{{ $post->content }}</textarea>
        </label>
        <br><br>
        <button type="submit">Actualizar post</button>
    </form>

</x-app-layout>

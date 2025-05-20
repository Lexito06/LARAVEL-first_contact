<?php

use App\Http\Controllers\BibliotecaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\LoginController;
use App\Models\Post;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

// No agrego método porque la clase solo tiene un método
// y lo llamo __invoke



Route::get('/', [HomeController::class, 'home']);

/*
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Poner esto por encima del de abajo para que entre aquí y no ahí primero
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts',[PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
*/

// Login y tal
Route::view('/login', 'login')->name('login');

Route::view('/register', 'register')->name('register');

Route::get('/juego/logged', [JuegoController::class, 'logged'])->middleware('auth')->name('logged');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Perfil
Route::get('/perfil/{user}', [PerfilController::class, 'show'])->name('show')->middleware('auth');
Route::get('/perfil', function () {
    $user = Auth::user();
    return redirect()->route('show', ['user' => $user->id]);
})->name('perfil')->middleware('auth');

Route::get('/perfil/{user}/edit', [PerfilController::class, 'edit'])->name('perfil-edit')->middleware('auth');
Route::put('/perfil/{user}', [PerfilController::class, 'update'])->middleware('auth')->name('perfil-update')->middleware('auth');

// Biblioteca
Route::get('/juego/biblioteca', [BibliotecaController::class, 'biblioteca'])->name('biblioteca')->middleware('auth');

// Rutas de los posts
Route::resource('posts', PostController::class);

// Rutas de los juegos
Route::resource('juego', JuegoController::class);

/* con ApiResource se hacen las rutas necesarias para poner usar una API */
/* ->except('destroy') | ->except(['destroy', 'algo']) - para exceptuar las q no queires */
/* se puede cambiar el nombre de las rutas por el nombre que quieras y luego poner*/
/* ->names('posts') para definir los posts.strore y eso */
/* y ->parameters(['articulos' => 'post']) para que las variables de la url se sigan llamando $post */

/*
Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aquí estará el post {$post} de la categoría {$category}";
    }
    return "Aquí estará el post {$post}";
});


Route::get('/posts/{post}/{category}', function ($post, $category) {
    return "Aquí estará el post {$post} de la categoría {$category}";
});
*/

Route::get('prueba', function () {

    /*
    // Crear un nuevo registro en la tabla posts
    $post = new Post;

    $post->title = 'Título de prueba';
    $post->content = 'Contenido de prueba';
    $post->categoria = 'Categoría de prueba';

    $post->save();

    return $post;
    */
    /*
    $post = Post::find(1);

    return $post;
    */

    /* Actualizar un registro en la tabla posts
    $post = Post::where('title', 'Titulo de prueba')->first();

    $post->categoria = 'Desarrollo web';
    $post->save();

    return $post;
    */

    // Devolvería todos los registros
    // $posts = Post::get();

    // Devolvería todos los registros con un filtro en el id
    // $posts = Post::where('id', '>=', '2')->get();

    // Devolvería todos los registros
    // Ordenados "asc" | "desc"
    // Haciendo una consulta de las columnas que queremos
    // La cantidad de registros que queremos que devuelva (take)
    // $posts = Post::orderBy('id', 'desc')->select('id', 'title', 'content')->take(2)->get();

    /*
    $post = Post::find(1);
    $post->delete();

    return 'Eliminado correctamente';
    */

    $post = Post::find(1);

    dd($post->is_active);

    // return $post->published_at->format('d/m/Y');
    // return $post->created_at->diffForHumans()->format('d/m/Y');
});

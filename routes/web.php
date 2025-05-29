<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BibliotecaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

// No agrego método porque la clase solo tiene un método
// y lo llamo __invoke


/*
Route::get('/', function () {
    return redirect()->route('juego.index');
})->name('juego.index');
 */


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
Route::view('/login', 'login')->name('login')->middleware('guest');

Route::view('/register', 'register')->name('register')->middleware('guest');

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
Route::put('/perfil/{user}', [PerfilController::class, 'update'])->name('perfil-update')->middleware('auth');

// Biblioteca
Route::get('/juego/biblioteca', [BibliotecaController::class, 'biblioteca'])->name('biblioteca')->middleware('auth');
// Añadir un juego a la biblioteca y crear un pedido
Route::post('/biblioteca/agregar/{juego}', [BibliotecaController::class, 'agregar'])->name('biblioteca.agregar')->middleware('auth');

// Ruta para admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'admin']);

// Para admin borrar pedido
Route::delete('/admin/pedidos/{pedido}', [AdminController::class, 'destroyPedido'])->name('destroyPedido')->middleware(['auth', 'admin']);

// Para admin borrar usuario
Route::delete('/admin/usuarios/{usuario}', [AdminController::class, 'destroyUsuario'])->name('destroyUsuario')->middleware(['auth', 'admin']);
// Para admin editar usuario
Route::get('/admin/usuarios/{usuario}/edit', [AdminController::class, 'editUsuario'])->name('editUsuario')->middleware(['auth', 'admin']);
// Para admin actualizar usuario
Route::put('/admin/usuarios/{usuario}', [AdminController::class, 'updateUsuario'])->name('updateUsuario');

// Para admin borrar juego
Route::delete('/admin/juegos/{juego}', [AdminController::class, 'destroyJuego'])->name('destroyJuego')->middleware(['auth', 'admin']);
// Para admin editar juego
Route::get('/admin/juegos/{juego}/edit', [AdminController::class, 'editJuego'])->name('editJuego')->middleware(['auth', 'admin']);
// Para admin actualizar juego
Route::put('/admin/juegos/{juego}', [AdminController::class, 'updateJuego'])->name('updateJuego')->middleware(['auth', 'admin']);

//Para admin borrar categoría
Route::delete('/admin/categorias/{categoria}', [AdminController::class, 'destroyCategoria'])->name('destroyCategoria')->middleware(['auth', 'admin']);
// Para admin editar categoría
Route::get('/admin/categorias/{categoria}/edit', [AdminController::class, 'editCategoria'])->name('editCategoria')->middleware(['auth', 'admin']);
// Para admin actualizar categoría
Route::put('/admin/categorias/{categoria}', [AdminController::class, 'updateCategoria'])->name('updateCategoria')->middleware(['auth', 'admin']);
// Para admin crear categoría
Route::get('/admin/categorias/create', [AdminController::class, 'createCategoria'])->name('createCategoria')->middleware(['auth', 'admin']);
// Para admin almacenar categoría
Route::post('/admin/categorias', [AdminController::class, 'storeCategoria'])->name('storeCategoria')->middleware(['auth', 'admin']);

// Ruta para desarrollador
Route::get('/developer/crear', [JuegoController::class, 'create'])->name('create')->middleware(['auth', 'developer']);
Route::post('/developer', [JuegoController::class, 'store'])->name('store')->middleware(['auth', 'developer']);

// Tienda
Route::get('/juego/tienda', [JuegoController::class, 'tienda'])->name('tienda');
Route::get('/juego/tienda/all', [JuegoController::class, 'all'])->name('all');

// Footer
Route::view('tyc', 'tyc')->name('tyc');
Route::view('privacidad', 'privacidad')->name('privacidad');
Route::view('acerca', 'acerca')->name('acerca');

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

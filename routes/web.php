<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// No agrego método porque la clase solo tiene un método
// y lo llamo __invoke
Route::get('/', [HomeController::class , 'home']);

Route::get('/posts', [PostController::class, 'index']);

// Poner esto por encima del de abajo para que entre aquí y no ahí primero
Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);


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
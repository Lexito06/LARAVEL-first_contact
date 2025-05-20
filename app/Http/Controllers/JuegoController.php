<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJuegoRequest;
use App\Models\Juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuegoController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            return redirect()->route('logged'); // Redirige a la página de posts para usuarios autenticados
        }

        // Con el paginate se hace la paginación y aparecen 15 registros (por defecto)
        $juegos = Juego::orderby('id', 'desc')->paginate(10);

        return view('juego.index', compact('juegos'));
    }

    public function logged()
    {
        $juegos = Juego::orderby('id', 'desc')->paginate(10);
        return view('juego.logged', compact('juegos'));
    }

    public function create()
    {
        return view('juego.create');
    }

    public function store(StoreJuegoRequest $request)
    {
        /*
        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => 'required|unique:posts',
            'content' => 'required',
            'category' => 'required',
        ]);
        */

        //$juego = Juego::create($request->all());

        /*
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        */
        $juego = new Juego();
        $juego->nombre = $request->nombre;
        $juego->descripcion = $request->descripcion;
        $juego->precio = $request->precio;
        $juego->id_categoria = $request->id_categoria;
        $juego->save();

        return redirect()->route('juego.index');
    }

    public function show(Juego $juego)
    {

        // $post = Post::find($post);

        return view('juego.show', compact('juego'));
    }

    public function edit(Juego $juego)
    {

        // $post = Post::find($post);

        return view('juego.edit', compact('juego'));
    }

    public function update(Request $request, Juego $juego)
    {

        $request->validate([
            'nombre' => 'required|min:5|max:255',
            'descripcion' => 'required',
            'precio' => 'required',
            'id_categoria' => 'required|exists:categorias,id',
        ]);

        $juego->update($request->all());
        // $post = Post::find($post);

        /*
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        */

        return redirect()->route('juego.show', $juego);
    }

    public function destroy(Juego $juego)
    {
        // $post = Post::find($post);
        $juego->delete();

        return redirect()->route('juego.tienda');
    }
}

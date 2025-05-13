<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('logged'); // Redirige a la página de posts para usuarios autenticados
        }
        // Con el paginate se hace la paginación y aparecen 15 registros (por defecto)
        $posts = Post::orderby('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function logged()
    {
        $posts = Post::orderby('id', 'desc')->paginate(10);
        return view('posts.logged', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        /*
        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => 'required|unique:posts',
            'content' => 'required',
            'category' => 'required',
        ]);
        */

        $post = Post::create($request->all());

        /*
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        */

        Mail::to('prueba@prueba.com')->send(new PostCreatedMail($post));

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {

        // $post = Post::find($post);

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {

        // $post = Post::find($post);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => "required|unique:posts,slug,{$post->id}",
            'content' => 'required',
            'category' => 'required',
        ]);

        $post->update($request->all());
        // $post = Post::find($post);

        /*
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        */

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        // $post = Post::find($post);
        $post->delete();

        return redirect()->route('posts.index');
    }
}

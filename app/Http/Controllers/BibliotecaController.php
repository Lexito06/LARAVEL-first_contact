<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function biblioteca()
    {
        $juegos = Juego::orderby('id', 'desc')->paginate(10);

        return view('juego.biblioteca');
    }
}

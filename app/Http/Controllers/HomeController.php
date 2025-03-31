<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Uso el método __invoke porque solo tiene un método la clase
    public function home()
    {
        return view('home');
    }
}

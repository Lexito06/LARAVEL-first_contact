<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Juego;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BibliotecaController extends Controller
{
    public function biblioteca()
    {
        $userId = Auth::id();

        // Obtener los IDs de los juegos que tiene el usuario en su biblioteca
        $juegoIds = DB::table('biblioteca')
            ->where('id_usuario', $userId)
            ->pluck('id_juego');

        // Obtener los juegos correspondientes
        $juegos = \App\Models\Juego::whereIn('id', $juegoIds)
            ->orderBy('id', 'desc')
            ->paginate(10);

        // Número total de juegos que posee el usuario en la biblioteca
        $totalJuegos = \App\Models\Juego::whereIn('id', $juegoIds)->count();

        // Sumar el precio de todos los juegos del usuario
        $totalGastado = \App\Models\Juego::whereIn('id', $juegoIds)->sum('precio');

        // Obtener todas las categorías
        $categorias = Categoria::all();

        return view('juego.biblioteca', compact('juegos', 'totalGastado', 'totalJuegos', 'categorias'));
    }

    public function agregar($juegoId)
    {
        $userId = Auth::id();

        // Evita duplicados en la biblioteca
        $existe = DB::table('biblioteca')
            ->where('id_usuario', $userId)
            ->where('id_juego', $juegoId)
            ->exists();

        // 1. Obtener el precio del juego
        $juego = Juego::findOrFail($juegoId);

        if (!$existe) {
            // 2. Crear el pedido
            $pedidoId = DB::table('pedido')->insertGetId([
                'id_usuario' => $userId,
                'id_juego' => $juegoId,
                'precio' => $juego->precio,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // 3. Añadir a la biblioteca
            DB::table('biblioteca')->insert([
                'id_usuario' => $userId,
                'id_juego' => $juegoId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('biblioteca')->with('success', '¡Juego añadido a tu biblioteca y pedido registrado!');
    }
}

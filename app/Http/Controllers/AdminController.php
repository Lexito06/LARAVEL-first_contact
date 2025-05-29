<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Juego;
use App\Models\Pedido;
use App\Models\Categoria;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $juegos = Juego::all();
        $pedidos = Pedido::all();
        $categorias = Categoria::all();

        $juegosRecientes = Juego::where('created_at', '>=', Carbon::now()->subDay())->get();
        $usuariosRecientes = User::where('created_at', '>=', Carbon::now()->subDay())->get();
        $pedidosRecientes = Pedido::where('created_at', '>=', Carbon::now()->subDay())->get();
        $categoriasRecientes = Categoria::where('created_at', '>=', Carbon::now()->subDay())->get();

        return view('admin.admin', compact(
            'usuarios',
            'juegos',
            'pedidos',
            'categorias',
            'juegosRecientes',
            'usuariosRecientes',
            'pedidosRecientes',
            'categoriasRecientes',
        ));
    }

    // Métodos de usuarios

    public function editUsuario(User $usuario)
    {
        return view('admin.usuario-edit', compact('usuario'));
    }
    public function updateUsuario(Request $request, User $usuario)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $usuario->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = $request->only('name', 'email');

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $usuario->update($data);

        return redirect()->route('admin');
    }
    public function destroyUsuario(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('admin');
    }

    // Métodos de pedidos
    public function destroyPedido(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('admin');
    }

    // Métodos de categorías
    public function editCategoria(Categoria $categoria)
    {
        return view('admin.categoria-edit', compact('categoria'));
    }

    public function updateCategoria(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $categoria->update($request->all());

        return redirect()->route('admin');
    }

    public function destroyCategoria(Categoria $categoria)
    {
        // Busca o crea la categoría "Sin categoría"
        $sinCategoria = Categoria::firstOrCreate(['nombre' => 'Sin categoría']);

        // Recojo todos los juegos de la categoría que se va a eliminar
        $juegos = Juego::where('id_categoria', $categoria->id)->get();

        // Reasignar los juegos a la categoría "sin categoría"
        foreach ($juegos as $juego) {
            $juego->update(['id_categoria' => $sinCategoria->id]);
        }

        // Borra la categoría original
        $categoria->delete();

        return redirect()->route('admin');
    }

    public function createCategoria()
    {
        // Muestra el formulario para crear una nueva categoría
        return view('admin.categoria-create');
    }

    public function storeCategoria(Request $request)
    {
        // Valida y guarda la nueva categoría
        $request->validate([
            'nombre' => 'required|string|max:255|unique:categoria,nombre',
        ]);

        Categoria::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('admin');
    }

    // Métodos de juegos
    public function editJuego(Juego $juego)
    {
        $categorias = Categoria::all();

        return view('admin.juego-edit', compact('juego', 'categorias'));
    }
    public function updateJuego(Request $request, Juego $juego)
    {

        $request->validate([
            'nombre' => 'required|min:5|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric|min:0',
            'nota' => 'integer|min:0|max:5',
            'id_categoria' => 'required|exists:categoria,id',
        ]);

        $juego->update($request->all());

        return redirect()->route('admin');
    }

    public function destroyJuego(Juego $juego)
    {
        $juego->delete();

        return redirect()->route('admin');
    }
}

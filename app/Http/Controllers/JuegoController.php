<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJuegoRequest;
use App\Models\Categoria;
use App\Models\Juego;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Controlador para la gestión de juegos
 * Permite listar, crear, editar, eliminar y mostrar detalles de los juegos
 */
class JuegoController extends Controller
{
    /**
     * Muestra la lista de juegos disponibles en la página principal
     * Si el usuario está autenticado, redirige a la vista 'logged', es decir, la página que ve un usuario logueado
     */
    public function index()
    {

        if (Auth::check()) {
            return redirect()->route('logged');
        }

        // Con el paginate se hace la paginación y aparecen 15 registros (por defecto)
        $juegos = Juego::orderby('id', 'desc')->paginate(10);

        return view('juego.index', compact('juegos'));
    }

    /**
     * Muestra la página principal de juegos para usuarios autenticados
     * Incluye los juegos que el usuario ha agregado a su biblioteca
     */
    public function logged()
    {
        $userId = Auth::id();

        // Obtener los IDs de los juegos que tiene el usuario en su biblioteca
        $juegoIds = DB::table('biblioteca')
            ->where('id_usuario', $userId)
            ->pluck('id_juego');

        // Obtener los juegos correspondientes
        $juegosBiblioteca = \App\Models\Juego::whereIn('id', $juegoIds)
            ->orderBy('id', 'desc')
            ->paginate(4);

        $juegos = Juego::orderby('id', 'desc')->paginate(10);
        return view('juego.logged', compact('juegos', 'juegosBiblioteca'));
    }

    /**
     * Muestra el formulario para crear un nuevo juego
     * Incluye las categorías disponibles para seleccionar
     */
    public function create()
    {
        // Paso las categorías
        $categorias = Categoria::all();

        return view('juego.developer', compact('categorias'));
    }

    /**
     * Almacena un nuevo juego en la base de datos
     * Guarda la imagen que se proporciona y agrega el juego a la biblioteca del usuario que lo creó
     */
    public function store(StoreJuegoRequest $request)
    {
        // Debido a que el desarrollador/admin es el que crea el juego, también se le añadirá a su propia biblioteca propia
        // 1. Crear el juego SIN imagen
        $juego = new Juego();
        $juego->nombre = $request->nombre;
        $juego->descripcion = $request->descripcion;
        $juego->id_categoria = $request->id_categoria;
        $juego->precio = $request->precio;
        $juego->save(); // Ahora $juego->id tiene valor

        // 2. Si hay imagen, la guardo con el nombre "juego{id}.{extensión}"
        if ($request->hasFile('imagen')) {
            $nombreArchivo = 'juego' . $juego->id . '.' . $request->imagen->getClientOriginalExtension();
            $request->imagen->move(public_path('img/'), $nombreArchivo);
            // 3. Actualiza el juego con el nombre de la imagen
            $juego->imagen = $nombreArchivo;
            $juego->save();
        }

        // 4. Agregar el juego a la biblioteca del usuario que lo subió
        DB::table('biblioteca')->insert([
            'id_usuario' => Auth::id(),
            'id_juego' => $juego->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('juego.index');
    }

    /**
     * Muestra los detalles de un juego específico
     * Incluye si el juego está en la biblioteca del usuario autenticado
     */
    public function show($id)
    {
        $juego = Juego::findOrFail($id);
        $user = Auth::user();

        $enBiblioteca = false;
        if ($user) {
            $enBiblioteca = DB::table('biblioteca')
                ->where('id_usuario', $user->id)
                ->where('id_juego', $juego->id)
                ->exists();
        }

        return view('juego.show', compact('juego', 'enBiblioteca'));
    }

    /**
     * Muestra el formulario para editar un juego existente
     */
    public function edit(Juego $juego)
    {
        return view('juego.edit', compact('juego'));
    }

    /**
     * Actualiza un juego existente en la base de datos
     * Valida los datos del juego antes de actualizarlo
     */
    public function update(Request $request, Juego $juego)
    {

        $request->validate([
            'nombre' => 'required|min:5|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric|min:0',
            'nota' => 'integer|min:0|max:5',
            'id_categoria' => 'required|exists:categoria,id',
        ]);

        $juego->update($request->all());

        return redirect()->route('juego.show', $juego);
    }

    /**
     * Elimina un juego de la base de datos
     * Redirige a la tienda después de eliminar el juego
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();

        return redirect()->route('juego.tienda');
    }

    /**
     * Muestra la tienda de juegos
     * Incluye juegos recientes (subidos hace menos de 1 día), destacados(los que tengan una valoración mayor a 3 estrellas) y todas las categorías
     */
    public function tienda()
    {
        $juegos = Juego::orderby('id', 'desc')->paginate(10);

        // Juegos creados hace menos de 1 día
        $juegosRecientes = Juego::where('created_at', '>=', Carbon::now()->subDay())->get();

        // Juegos destacados: nota mayor a 3
        $juegosDestacados = Juego::where('nota', '>', 3)->get()->take(4);

        // Obtener todas las categorías
        $categorias = Categoria::all();

        return view('juego.tienda', compact('juegos', 'juegosRecientes', 'juegosDestacados', 'categorias'));
    }

    /**
     * Muestra todos los juegos disponibles
     * Permite paginar los resultados y muestra todas las categorías
     */
    public function all(Request $request)
    {
        $juegos = Juego::orderby('id', 'desc')->paginate(20);

        // Obtener todas las categorías
        $categorias = Categoria::all();

        return view('juego.all', compact('juegos', 'categorias'));
    }
}

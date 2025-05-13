<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{

    public function show()
    {
        $user = Auth::user(); // Obtén el usuario autenticado

        return view('perfil', compact('user')); // Pasa el usuario a la vista
    }

    public function update(Request $request, User $user)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update($request->all());

        // Redirige con un mensaje de éxito
        return redirect()->route('perfil')->with('success', 'Perfil actualizado correctamente.');
    }

}

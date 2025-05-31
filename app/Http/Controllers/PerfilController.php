<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Controlador para la gestión del perfil del usuario
 * Permite mostrar, editar y actualizar el perfil del usuario autenticado
 */
class PerfilController extends Controller
{

    /**
     * Enseña el perfil del usuario autenticado
     */
    public function show(User $user)
    {
        return view('perfil', compact('user')); // Pasa el usuario a la vista
    }

    /**
     * Muestra el formulario para editar el perfil del usuario autenticado
     */
    public function edit(User $user)
    {
        $user = Auth::user();

        return view('perfil-edit', compact('user'));
    }

    /**
     * Actualiza el perfil del usuario autenticado
     * Valida los datos del formulario y actualiza el usuario en la base de datos
     */
    public function update(Request $request, User $user)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = $request->only('name', 'email');

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('perfil', ['user' => $user->id]);
    }
}

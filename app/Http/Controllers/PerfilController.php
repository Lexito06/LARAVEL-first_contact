<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{

    public function show(User $user)
    {
        return view('perfil', compact('user')); // Pasa el usuario a la vista
    }

    public function edit(User $user)
    {
        $user = Auth::user();

        return view('perfil-edit', compact('user'));
    }

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

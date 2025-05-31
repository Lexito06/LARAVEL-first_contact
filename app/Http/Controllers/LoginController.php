<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Controlador para la gestión de inicio de sesión y registro de usuarios
 * Maneja el registro, inicio de sesión y cierre de sesión de los usuarios
 */
class LoginController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->id_rol = $request->id_rol;

        if ($request->password !== $request->password_confirmation) {
            return redirect()->back()->withErrors(['password' => 'Las contraseñas no coinciden.']);
        } else {
            $user->save();

            Auth::login($user);
        }

        return redirect(route('logged'));
    }

    /**
     * Muestra el formulario de inicio de sesión
     */
    public function login(Request $request)
    {
        //validar los datos del formulario necesarios para el inicio de sesión
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            return redirect()->intended(route('logged'));
        } else {
            return redirect('login');
        }
    }

    /**
     * Invalida la sesión del usuario y lo redirige al inicio
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('juego.index'));
    }
}


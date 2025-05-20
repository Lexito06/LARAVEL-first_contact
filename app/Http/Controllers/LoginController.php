<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $user->id_rol = 3;

        if ($request->password !== $request->password_confirmation) {
            return redirect()->back()->withErrors(['password' => 'Las contraseñas no coinciden.']);
        } else {
            $user->save();

            Auth::login($user);
        }

        return redirect(route('logged'));
    }

    public function login(Request $request)
    {
        //validar los datos del formulario
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('juego.index'));
    }
}


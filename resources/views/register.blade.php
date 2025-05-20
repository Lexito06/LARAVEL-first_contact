<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Estelar Azul</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="back-arrow">
        <a href="{{ route('juego.index') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Volver al Inicio
        </a>
    </div>

    <div class="stars-container" id="stars-container">
        <!-- Las estrellas se generarán mediante JavaScript -->
    </div>
    <div class="glow"></div>
    <div class="login-container">

        <h2>Registrarse</h2>
        <form class="login-form" action="{{ route('validar-registro') }}" method="POST">
            @csrf
            <div class="account-type">
                <button type="button" class="account-btn active" data-type="user">Usuario</button>
                <button type="button" class="account-btn" data-type="developer">Desarrollador</button>
            </div>
            <div class="input-group">
                <input type="text" id="userInput" name="name" required>
                <label>Usuario</label>
            </div>
            <div class="input-group">
                <input type="text" id="emailInput" name="email" required>
                <label>Correo electrónico</label>
            </div>
            <div class="input-group">
                <input type="password" id="passwordInput" name="password" required>
                <label>Contraseña</label>
            </div>
            <div class="input-group">
                <input type="password" id="passwordInputConf" name="password_confirmation" required>
                <label>Confirmar contraseña</label>
            </div>

            <input type="hidden" id="idRolInput" name="id_rol">

            <button type="submit" id="loginBtn">Registrarse</button>

            <div class="divider">
                <span>O</span>
            </div>

            <div class="register-link">
                ¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a>
            </div>
        </form>
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>

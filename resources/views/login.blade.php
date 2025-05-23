<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Estelar Azul</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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

        <h2>Iniciar Sesión</h2>
        <form class="login-form" action="{{ route('inicia-sesion') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" id="emailInput" name="email" required>
                <label>Correo electrónico</label>
            </div>
            <div class="input-group">
                <input type="password" id="passwordInput" name="password" required>
                <label>Contraseña</label>
            </div>

            <button type="submit" id="loginBtn">Ingresar</button>

            <div class="divider">
                <span>O</span>
            </div>

            <div class="register-link">
                ¿No tienes una cuenta? <a href="{{ route('register') }}">Crear cuenta</a>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>

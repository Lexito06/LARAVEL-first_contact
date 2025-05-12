<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Estelar Azul</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css ">
</head>

<body>
    <!-- Flecha para volver a la página principal -->
    <div class="back-arrow">
        <a href="{{ route('posts.index') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Volver al Inicio
        </a>
    </div>

    <div class="stars-container" id="stars-container">
        <!-- Las estrellas se generarán mediante JavaScript -->
    </div>
    <div class="glow"></div>
    <div class="dashboard-container">

        <h2>Bienvenido, {{ Auth::user()->nombre }}!</h2>

        <div class="user-actions">
            <p>Aquí puedes gestionar tus acciones:</p>
            <ul>
                <li><a href="{{ route('profile.show') }}"><i class="fas fa-user"></i> Ver Perfil</a></li>
                <li><a href="{{ route('posts.myPosts') }}"><i class="fas fa-list"></i> Mis Publicaciones</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a></li>
            </ul>

            <!-- Formulario oculto para cerrar sesión -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>

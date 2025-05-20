<x-app-layout>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Principal - Inspirada en Steam</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Iconos de Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>

    <body>
        <!-- Encabezado -->
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{ asset('juego') }}">
                        <img src="{{ asset('img/logoblanco.png') }}" alt="Logo de la web">
                    </a>
                </div>
                <nav class="nav">
                    <ul class="nav-list">
                        <li><a href="#">Soporte</a></li>
                        <li><a href="#">Acerca de</a></li>
                    </ul>
                </nav>
                <div class="user-actions">

                    <a href="{{ route('login') }}">
                        <button class="login-btn">Iniciar Sesión</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="register-btn">Registrarse</button>
                    </a>
                </div>
            </div>
        </header>

        <!-- Carrusel de Destacados -->
        <section class="carousel">
            <div class="carousel-item active">
                <div class="carousel-content">
                    <h2>Juego Destacado 1</h2>
                    <p>Descubre una aventura épica en este mundo abierto.</p>
                    <button class="btn">Comprar Ahora</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-content">
                    <h2>Juego Destacado 2</h2>
                    <p>Vive la emoción de un shooter multijugador.</p>
                    <button class="btn">Comprar Ahora</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-content">
                    <h2>Juego Destacado 3</h2>
                    <p>Explora un universo galáctico lleno de misterios.</p>
                    <button class="btn">Comprar Ahora</button>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
        </section>

        <!-- Juegos Recomendados -->
        <section class="recommended-games">
            <div class="container">
                <h2 class="section-title">Juegos Recomendados</h2>
                <div class="game-grid">
                    @foreach ($juegos as $juego)
                        <div class="game-card">
                            <a href="{{ route('juego.show', $juego /*->id*/) }}">
                                {{ $juego->nombre }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Pie de Página -->
        <footer class="footer">
            <div class="container">
                <div class="footer-links">
                    <ul>
                        <li><a href="#">Acerca de nosotros</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <a href="#"><img src="" alt="Facebook"></a>
                    <a href="#"><img src="" alt="Twitter"></a>
                    <a href="#"><img src="" alt="Instagram"></a>
                </div>
                <div class="footer-copyright">
                    <p>&copy; 2025 Mi Página Web. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/index.js') }}"></script>
    </body>

    </html>


    <heasder>

        </header>

        <body>

            <head>
                <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            </head>

            <!-- Encabezado -->
            <header class="encabezado">
                <div class="logo"><img src="" alt="logo"></div>

                <!-- Barra de búsqueda -->
                <div class="barra-busqueda">
                    <input type="text" placeholder="Buscar..." />
                    <button>🔍</button>
                </div>

                <!-- Botones de inicio de sesión -->
                <div class="botones-sesion">
                    <a href="#" class="btn-login">Iniciar Sesión</a>
                    <a href="#" class="btn-registro">Registrarse</a>
                </div>
            </header>


            <h1>Aquí se mostrarán los juegos</h1>

            <a href="{{ route('juego.create') }}">Crear nuevo juego</a>

            <div class="posts">

                @foreach ($juegos as $juego)
                    <div class="carta">
                        <a href="{{ route('juego.show', $juego /*->id*/) }}">
                            {{ $juego->nombre }}
                        </a>
                    </div>
                @endforeach

            </div>

            {{ $juegos->links() }}



        </body>

</x-app-layout>


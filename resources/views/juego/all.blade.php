<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Games - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Fondo de estrellas -->
    <div class="stars-bg" id="stars"></div>

    <!-- Encabezado -->
    @guest
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{ asset('juego') }}">
                        <img src="{{ asset('img/logoblanco.png') }}" alt="Logo de la web">
                    </a>
                </div>

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
    @endguest

    <!-- Encabezado logged -->
    @auth
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{ asset('juego') }}">
                        <img src="{{ asset('img/logoblanco.png') }}" alt="Logo de la web">
                    </a>
                </div>
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Buscar juegos...">
                    <span class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>

                <div class="user-actions">
                    <a href="{{ route('tienda') }}" class="library-btn">
                        <i class="fas fa-bag-shopping"></i> Tienda
                    </a>
                    <!-- Botón de página principal -->
                    <a href="{{ route('juego.index') }}" class="library-btn">
                        <i class="fas fa-house"></i> Página Principal
                    </a>
                    <!-- Botón de biblioteca -->
                    <a href="{{ route('biblioteca') }}" class="library-btn">
                        <i class="fas fa-book-open"></i> Mi Biblioteca
                    </a>

                    <!-- Menú de usuario -->
                    <div class="user-menu">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="user-dropdown">
                            <div class="user-dropdown-item">
                                <i class="fas fa-user-circle"></i>
                                <a href="{{ asset('perfil') }}">Mi Perfil</a>
                            </div>
                            @auth
                                @if (Auth::user()->id_rol == 1)
                                    <div class="user-dropdown-item">
                                        <i class="fas fa-gear"></i>
                                        <a href="{{ route('admin') }}">Administrar</a>
                                    </div>
                                @endif
                            @endauth
                            @auth
                                @if (Auth::user()->id_rol == 2 || Auth::user()->id_rol == 1)
                                    <div class="user-dropdown-item">
                                        <i class="fas fa-upload"></i>
                                        <a href="{{ route('create') }}">Subir juego</a>
                                    </div>
                                @endif
                            @endauth
                            <div class="user-dropdown-item">
                                <i class="fas fa-sign-out-alt"></i>
                                <a href="{{ asset('logout') }}">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endauth

    <main>
        <!-- Categorías -->
        <div class="main-title">
            <h2 class="section-title">Todos los juegos</h2>
        </div>
        <section>
            <div class="categories">
                <button class="category active">Todos</button>
                @foreach ($categorias as $categoria)
                    <button class="category">{{ $categoria->nombre }}</button>
                @endforeach
            </div>
        </section>

        <!-- Novedades -->
        <section id="novedades">

            <div class="game-grid">
                @foreach ($juegos as $juego)
                    <div class="game-card" data-categoria="{{ strtolower($juego->categoria->nombre) }}">
                        <a href="{{ route('juego.show', $juego) }}">
                            @php
                                $imgPath = null;
                                $basePath = public_path('img/juego' . $juego->id);
                                $extensiones = ['.jpeg', '.jpg', '.png', '.webp'];
                                foreach ($extensiones as $ext) {
                                    if (file_exists($basePath . $ext)) {
                                        $imgPath = 'img/juego' . $juego->id . $ext;
                                        break;
                                    }
                                }
                            @endphp
                            <img src="{{ asset($imgPath ?? 'img/default.jpg') }}" alt="Imagen del juego">
                            <div class="game-info">
                                <div class="game-title">{{ $juego->nombre }}</div>
                                <div class="carousel-category">
                                    <span class="category-tag">{{ $juego->categoria->nombre }}</span>
                                </div>
                                <div class="game-meta">
                                    <span class="rating"><i class="fas fa-star"></i> {{ $juego->nota }}</span>
                                    <span class="price">{{ $juego->precio }}€</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <!-- Pie de Página -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                    <ul>
                        <li><a href="{{ route('acerca') }}">Acerca de nosotros</a></li>
                        <li><a href="{{ route('privacidad') }}">Política de privacidad</a></li>
                        <li><a href="{{ route('tyc') }}">Términos y condiciones</a></li>
                    </ul>
            </div>
            <div class="footer-social">
                <a href="https://x.com/Kansky06_"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/kansky06_/"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/Lexito06"><i class="fab fa-github"></i></a>
                <a href="https://www.youtube.com/@kansky0634"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2025 Lúmina. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/tienda.js') }}"></script>
</body>

</html>

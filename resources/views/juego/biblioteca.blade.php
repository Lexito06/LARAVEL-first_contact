<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estelar - Tu Biblioteca de Juegos</title>
    <link rel="stylesheet" href="{{ asset('css/biblioteca.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Fondo de estrellas -->
    <div class="stars-bg" id="stars"></div>

    <!-- Efectos de brillo -->

    <!-- Encabezado -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="{{ asset('juego') }}">
                    <img src="{{ asset('img/logoblanco.png') }}" alt="Logo de la web">
                </a>
            </div>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Buscar juegos...">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>

            <div class="user-actions">
                <a href="{{ route('tienda') }}" class="library-btn">
                    <i class="fas fa-bag-shopping"></i> Tienda
                </a>
                <!-- Botón de biblioteca -->
                <a href="{{ route('juego.index') }}" class="library-btn">
                    <i class="fas fa-house"></i> Página Principal
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
                        <div class="user-dropdown-item">
                            <i class="fas fa-wallet"></i>
                            <a href="#">Cartera</a>
                        </div>
                        <div class="user-dropdown-item">
                            <i class="fas fa-heart"></i>
                            <a href="#">Lista de deseos</a>
                        </div>
                        <div class="user-dropdown-item">
                            <i class="fas fa-sign-out-alt"></i>
                            <a href="{{ asset('logout') }}">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Info arriba -->
    <main class="main-container">
        <div class="stats-row">
            <div class="stat-card">
                <i class="fas fa-thumbs-up"></i>
                <div class="stat-value">42</div>
                <div class="stat-label">Juegos en posesión</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-tag"></i>
                <div class="stat-value">16</div>
                <div class="stat-label">Dinero gastado</div>
            </div>
        </div>

        <div class="categories">
            <button class="category active">Todos</button>
            <button class="category">Recientes</button>
            <button class="category">Acción</button>
            <button class="category">Aventura</button>
            <button class="category">Deportes</button>
            <button class="category">Carreras</button>
            <button class="category">Lucha</button>
            <button class="category">Simulación</button>
            <button class="category">Estrategia</button>
            <button class="category">Puzzle</button>
            <button class="category">Plataformas</button>
        </div>

        <h2 class="section-title">Todos mis juegos</h2>

        <div class="game-grid">
            @foreach ($juegos as $juego)
                <div class="game-card" data-categoria="{{ strtolower($juego->categoria->nombre) }}">
                    <a href="{{ route('juego.show', $juego) }}">
                        <img src="" alt="Imagen del juego">
                        <div class="game-info">
                            <div class="game-title">{{ $juego->nombre }}</div>
                            <div class="game-meta">
                                <span><i class="fas fa-star"></i> 4.8</span>
                                <span>{{ $juego->precio }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </main>
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
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-discord"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2025 Mi Página Web. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/biblioteca.js') }}"></script>
</body>

</html>

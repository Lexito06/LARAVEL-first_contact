<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Inspirada en Steam</title>
    <link rel="stylesheet" href="{{ asset('css/logged.css') }}">
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
                    <li><a href="#">Tienda</a></li>
                    <li><a href="#">Descubrir</a></li>
                    <li><a href="#">Comunidad</a></li>
                    <li><a href="#">Soporte</a></li>
                </ul>
            </nav>
            <div class="user-actions">
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

    <!-- Carrusel de Destacados -->
    <section class="carousel">
        <div class="carousel-item active">
            <div class="carousel-content">
                <h2>Juego Destacado 1</h2>
                <p>Descubre una aventura épica en este mundo abierto. Explora paisajes impresionantes y enfréntate a
                    desafíos únicos.</p>
                <button class="btn">Comprar Ahora</button>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <h2>Juego Destacado 2</h2>
                <p>Vive la emoción de un shooter multijugador con gráficos de última generación y mecánicas innovadoras.
                </p>
                <button class="btn">Comprar Ahora</button>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <h2>Juego Destacado 3</h2>
                <p>Explora un universo galáctico lleno de misterios y descubre secretos ancestrales en esta experiencia
                    inmersiva.</p>
                <button class="btn">Comprar Ahora</button>
            </div>
        </div>
        <div class="carousel-controls">
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </section>

    <!-- Tu Biblioteca -->
    <section class="library-section">
        <div class="container">
            <div class="library-header">
                <h2 class="section-title">Tu Biblioteca</h2>
                <a href="#" class="view-all">Ver todo <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="game-grid">
                <div class="game-card">
                    <a href="#">
                        <img src="/api/placeholder/400/320" alt="Juego en biblioteca">
                        <div class="game-info">
                            <div class="game-title">The Last Adventure</div>
                            <div class="game-meta">
                                <span>Último juego: 2h</span>
                                <span>23h total</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="game-card">
                    <a href="#">
                        <img src="/api/placeholder/400/320" alt="Juego en biblioteca">
                        <div class="game-info">
                            <div class="game-title">Space Explorer</div>
                            <div class="game-meta">
                                <span>Último juego: 5d</span>
                                <span>47h total</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="game-card">
                    <a href="#">
                        <img src="/api/placeholder/400/320" alt="Juego en biblioteca">
                        <div class="game-info">
                            <div class="game-title">Mystic Kingdoms</div>
                            <div class="game-meta">
                                <span>Último juego: 1s</span>
                                <span>126h total</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="game-card">
                    <a href="#">
                        <img src="/api/placeholder/400/320" alt="Juego en biblioteca">
                        <div class="game-info">
                            <div class="game-title">Racing Evolution</div>
                            <div class="game-meta">
                                <span>Último juego: 3d</span>
                                <span>15h total</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Juegos Recomendados -->
    <section class="recommended-games">
        <div class="container">
            <div class="library-header">
                <h2 class="section-title">Juegos Recomendados</h2>
                <a href="#" class="view-all">Ver todo <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="game-grid">
                @foreach ($juegos as $juego)
                    <div class="game-card">
                        <a href="{{ route('juego.show', $juego /*->id*/) }}">
                            <img src="/api/placeholder/400/320" alt="Imagen del juego">
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

    <script src="{{ asset('js/logged.js') }}"></script>
</body>

</html>

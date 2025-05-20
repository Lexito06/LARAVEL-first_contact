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
    <header class="header">
        <div class="logo">
            <div class="logo-icon">🌌</div>
            <div class="logo-text">Nova Games</div>
        </div>

        <div class="search-bar">
            <span class="search-icon">🔍</span>
            <input type="text" placeholder="Buscar juegos, categorías o desarrolladores...">
        </div>

        <nav class="nav-links">
            <a href="#" class="nav-link">Tienda</a>
            <a href="#" class="nav-link">Biblioteca</a>
            <a href="#" class="nav-link">Comunidad</a>
            <a href="#" class="nav-link">Soporte</a>
        </nav>

        <div class="user-actions">
            <button class="cart-btn">🛒</button>
            <button class="profile-btn">👤</button>
        </div>
    </header>

    <main>
        <!-- Banner principal -->
        <section class="hero">
            <div class="hero-content">
                <h1>Explora nuevos universos</h1>
                <p>Descubre miles de títulos de primera calidad en nuestra plataforma estelar. Ofertas especiales cada
                    semana.</p>
                <button class="btn btn-primary">Ver ofertas especiales</button>
            </div>
        </section>

        <!-- Categorías -->
        <section>
            <h2 class="section-title">Categorías populares</h2>
            <div class="categories">
                <div class="category-tag active">Todos</div>
                <div class="category-tag">Acción</div>
                <div class="category-tag">Aventura</div>
                <div class="category-tag">Rol</div>
                <div class="category-tag">Estrategia</div>
                <div class="category-tag">Simulación</div>
                <div class="category-tag">Deportes</div>
                <div class="category-tag">Indie</div>
            </div>
        </section>

        <!-- Destacados -->
        <section>
            <h2 class="section-title">Destacados de la semana</h2>
            <div class="games-grid">
                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Cosmic Odyssey" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Cosmic Odyssey</h3>
                        <p class="game-genre">Aventura / Exploración espacial</p>
                        <p class="game-description">Explora galaxias desconocidas y descubre secretos cósmicos en esta
                            aventura intergaláctica.</p>
                        <div class="game-footer">
                            <span class="game-price">$49.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Stellar Combat" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Stellar Combat</h3>
                        <p class="game-genre">Acción / Multijugador</p>
                        <p class="game-description">Batallas tácticas en el espacio con una amplia variedad de naves y
                            sistemas de armas.</p>
                        <div class="game-footer">
                            <span class="game-price">$39.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Nebula Kingdoms" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Nebula Kingdoms</h3>
                        <p class="game-genre">Estrategia / Construcción</p>
                        <p class="game-description">Construye tu imperio galáctico y domina la galaxia en este juego de
                            estrategia en tiempo real.</p>
                        <div class="game-footer">
                            <span class="game-price">$29.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Quantum Realm" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Quantum Realm</h3>
                        <p class="game-genre">Rol / Ciencia ficción</p>
                        <p class="game-description">Aventura RPG con mecánicas únicas basadas en la física cuántica y
                            viajes interdimensionales.</p>
                        <div class="game-footer">
                            <span class="game-price">$54.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Novedades -->
        <section>
            <h2 class="section-title">Nuevos lanzamientos</h2>
            <div class="games-grid">
                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Astral Legends" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Astral Legends</h3>
                        <p class="game-genre">MMORPG / Fantasía</p>
                        <p class="game-description">Un mundo de fantasía donde la magia y la tecnología se entrelazan en
                            una experiencia online masiva.</p>
                        <div class="game-footer">
                            <span class="game-price">$59.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Cyber Nexus" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Cyber Nexus</h3>
                        <p class="game-genre">Acción / Cyberpunk</p>
                        <p class="game-description">Sumérgete en una metrópolis futurista donde la tecnología ha
                            transformado la humanidad.</p>
                        <div class="game-footer">
                            <span class="game-price">$45.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Galactic Pioneers" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Galactic Pioneers</h3>
                        <p class="game-genre">Simulación / Construcción</p>
                        <p class="game-description">Establece colonias en planetas distantes y gestiona recursos para
                            la supervivencia.</p>
                        <div class="game-footer">
                            <span class="game-price">$34.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <img src="/api/placeholder/250/150" alt="Lunar Racing" class="game-img">
                    <div class="game-info">
                        <h3 class="game-title">Lunar Racing</h3>
                        <p class="game-genre">Carreras / Arcade</p>
                        <p class="game-description">Compite en circuitos lunares con vehículos futuristas de alta
                            velocidad y baja gravedad.</p>
                        <div class="game-footer">
                            <span class="game-price">$24.99</span>
                            <button class="btn btn-primary btn-small">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Nova Games</h3>
                <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Trabaja con nosotros</a></li>
                    <li><a href="#">Prensa</a></li>
                    <li><a href="#">Afiliados</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Productos</h3>
                <ul>
                    <li><a href="#">Nova Launcher</a></li>
                    <li><a href="#">Nova Mobile</a></li>
                    <li><a href="#">Nova Hardware</a></li>
                    <li><a href="#">Tarjetas de regalo</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Soporte</h3>
                <ul>
                    <li><a href="#">Centro de ayuda</a></li>
                    <li><a href="#">Foros de la comunidad</a></li>
                    <li><a href="#">Política de reembolsos</a></li>
                    <li><a href="#">Estado del servicio</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#">Términos de servicio</a></li>
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Acuerdos legales</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Síguenos</h3>
                <div class="footer-social">
                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">TW</a>
                    <a href="#" class="social-icon">IG</a>
                    <a href="#" class="social-icon">YT</a>
                </div>
            </div>
        </div>

        <div class="copyright">
            © 2025 Nova Games. Todos los derechos reservados.
        </div>
    </footer>

    <script src="{{ asset('js/tienda.js') }}"></script>
</body>

</html>

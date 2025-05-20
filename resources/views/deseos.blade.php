<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Colección de Juegos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #0a0e1a;
            color: #e1e1ff;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .star {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
        }

        .header {
            background: rgba(13, 21, 48, 0.7);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            box-shadow: 0 4px 30px rgba(0, 100, 255, 0.15);
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid rgba(30, 144, 255, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #3a9eff;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            color: #a1c6ff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #ffffff;
        }

        .main {
            padding: 2rem 0;
        }

        .tabs {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .tab {
            padding: 0.8rem 1.5rem;
            background: rgba(20, 30, 60, 0.5);
            border: 1px solid rgba(58, 158, 255, 0.3);
            border-radius: 6px;
            color: #a1c6ff;
            cursor: pointer;
            transition: all 0.3s;
        }

        .tab.active {
            background: rgba(58, 158, 255, 0.2);
            color: #ffffff;
            border-color: #3a9eff;
        }

        .tab:hover {
            background: rgba(58, 158, 255, 0.1);
        }

        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .game-card {
            background: rgba(16, 26, 52, 0.7);
            border: 1px solid rgba(58, 158, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 7px 20px rgba(0, 100, 255, 0.2);
        }

        .game-image {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .game-details {
            padding: 1.2rem;
        }

        .game-title {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .game-developer {
            font-size: 0.9rem;
            color: #a1c6ff;
            margin-bottom: 1rem;
        }

        .game-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .game-tag {
            background: rgba(58, 158, 255, 0.15);
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            font-size: 0.75rem;
        }

        .game-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .price {
            font-size: 1.1rem;
            font-weight: 600;
            color: #3a9eff;
        }

        .discount {
            background: rgba(0, 200, 80, 0.2);
            color: #00c850;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
            margin-left: 0.5rem;
        }

        .action-btns {
            display: flex;
            gap: 0.5rem;
        }

        .btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            color: #a1c6ff;
            padding: 0.3rem;
            border-radius: 4px;
            transition: color 0.3s, background 0.3s;
        }

        .btn:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.1);
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: rgba(16, 26, 52, 0.5);
            border-radius: 10px;
            margin-top: 2rem;
        }

        .empty-state h2 {
            margin-bottom: 1rem;
            color: #a1c6ff;
        }

        .empty-state p {
            color: #7a9cd3;
            margin-bottom: 2rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3a9eff, #2178d8);
            color: #ffffff;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(58, 158, 255, 0.4);
        }

        @media (max-width: 768px) {
            .game-grid {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .tabs {
                overflow-x: auto;
                padding-bottom: 0.5rem;
            }
        }

        .status-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .status-saved {
            background: rgba(58, 158, 255, 0.25);
            color: #3a9eff;
        }

        .status-wishlist {
            background: rgba(255, 90, 95, 0.25);
            color: #ff5a5f;
        }
    </style>
</head>
<body>
    <div class="stars" id="stars"></div>

    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">GameVault</div>
                <nav class="nav-links">
                    <a href="#" class="nav-link">Inicio</a>
                    <a href="#" class="nav-link">Explorar</a>
                    <a href="#" class="nav-link">Perfil</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="tabs">
                <div class="tab active" data-tab="saved">Juegos Guardados</div>
                <div class="tab" data-tab="wishlist">Lista de Deseados</div>
            </div>

            <div id="saved-games" class="game-grid">
                <div class="game-card">
                    <div class="status-badge status-saved">Guardado</div>
                    <img src="/api/placeholder/400/320" alt="Starfield" class="game-image">
                    <div class="game-details">
                        <h3 class="game-title">Starfield</h3>
                        <p class="game-developer">Bethesda Game Studios</p>
                        <div class="game-tags">
                            <span class="game-tag">RPG</span>
                            <span class="game-tag">Espacio</span>
                            <span class="game-tag">Aventura</span>
                        </div>
                        <div class="game-actions">
                            <div>
                                <span class="price">59.99€</span>
                            </div>
                            <div class="action-btns">
                                <button class="btn remove-btn">✕</button>
                                <button class="btn wishlist-btn">♡</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <div class="status-badge status-saved">Guardado</div>
                    <img src="/api/placeholder/400/320" alt="Cyberpunk 2077" class="game-image">
                    <div class="game-details">
                        <h3 class="game-title">Cyberpunk 2077</h3>
                        <p class="game-developer">CD Projekt RED</p>
                        <div class="game-tags">
                            <span class="game-tag">RPG</span>
                            <span class="game-tag">Acción</span>
                            <span class="game-tag">Cyberpunk</span>
                        </div>
                        <div class="game-actions">
                            <div>
                                <span class="price">49.99€</span>
                                <span class="discount">-25%</span>
                            </div>
                            <div class="action-btns">
                                <button class="btn remove-btn">✕</button>
                                <button class="btn wishlist-btn">♡</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <div class="status-badge status-saved">Guardado</div>
                    <img src="/api/placeholder/400/320" alt="Elden Ring" class="game-image">
                    <div class="game-details">
                        <h3 class="game-title">Elden Ring</h3>
                        <p class="game-developer">FromSoftware</p>
                        <div class="game-tags">
                            <span class="game-tag">Souls-like</span>
                            <span class="game-tag">Mundo abierto</span>
                            <span class="game-tag">Fantasía</span>
                        </div>
                        <div class="game-actions">
                            <div>
                                <span class="price">59.99€</span>
                            </div>
                            <div class="action-btns">
                                <button class="btn remove-btn">✕</button>
                                <button class="btn wishlist-btn">♡</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <div class="status-badge status-saved">Guardado</div>
                    <img src="/api/placeholder/400/320" alt="Horizon Forbidden West" class="game-image">
                    <div class="game-details">
                        <h3 class="game-title">Horizon Forbidden West</h3>
                        <p class="game-developer">Guerrilla Games</p>
                        <div class="game-tags">
                            <span class="game-tag">Acción</span>
                            <span class="game-tag">Aventura</span>
                            <span class="game-tag">Post-apocalíptico</span>
                        </div>
                        <div class="game-actions">
                            <div>
                                <span class="price">69.99€</span>
                                <span class="discount">-20%</span>
                            </div>
                            <div class="action-btns">
                                <button class="btn remove-btn">✕</button>
                                <button class="btn wishlist-btn">♡</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="wishlist-games" class="game-grid" style="display: none;">
                <div class="game-card">
                    <div class="status-badge status-wishlist">Deseado</div>
                    <img src="/api/placeholder/400/320" alt="God of War Ragnarök" class="game-image">
                    <div class="game-details">
                        <h3 class="game-title">God of War Ragnarök</h3>
                        <p class="game-developer">Santa Monica Studio</p>
                        <div class="game-tags">
                            <span class="game-tag">Acción</span>
                            <span class="game-tag">Aventura</span>
                            <span class="game-tag">Mitología</span>
                        </div>
                        <div class="game-actions">
                            <div>
                                <span class="price">69.99€</span>
                            </div>
                            <div class="action-btns">
                                <button class="btn remove-btn">✕</button>
                                <button class="btn save-btn">★</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <div class="status-badge status-wishlist">Deseado</div>
                    <img src="/api/placeholder/400/320" alt="Assassin's Creed Mirage" class="game-image">
                    <div class="game-details">
                        <h3 class="game-title">Assassin's Creed Mirage</h3>
                        <p class="game-developer">Ubisoft</p>
                        <div class="game-tags">
                            <span class="game-tag">Acción</span>
                            <span class="game-tag">Histórico</span>
                            <span class="game-tag">Sigilo</span>
                        </div>
                        <div class="game-actions">
                            <div>
                                <span class="price">49.99€</span>
                                <span class="discount">-15%</span>
                            </div>
                            <div class="action-btns">
                                <button class="btn remove-btn">✕</button>
                                <button class="btn save-btn">★</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="game-card">
                    <div class="status-badge status-wishlist">Deseado</div>
                    <img src="/api/placeholder/400/320" alt="Final Fantasy XVI" class="game-image">
                    <div class="game-details">
                        <h3 class="game-title">Final Fantasy XVI</h3>
                        <p class="game-developer">Square Enix</p>
                        <div class="game-tags">
                            <span class="game-tag">JRPG</span>
                            <span class="game-tag">Fantasía</span>
                            <span class="game-tag">Acción</span>
                        </div>
                        <div class="game-actions">
                            <div>
                                <span class="price">79.99€</span>
                            </div>
                            <div class="action-btns">
                                <button class="btn remove-btn">✕</button>
                                <button class="btn save-btn">★</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="empty-state" id="empty-state" style="display: none;">
                <h2>No hay juegos en tu colección</h2>
                <p>Explora la tienda y guarda los juegos que te interesen para verlos más tarde.</p>
                <button class="btn-primary">Explorar juegos</button>
            </div>
        </div>
    </main>

    <script>
        // Creación de estrellas en el fondo
        function createStars() {
            const starsContainer = document.getElementById('stars');
            const numStars = 200;

            for (let i = 0; i < numStars; i++) {
                const star = document.createElement('div');
                star.className = 'star';

                // Tamaño aleatorio entre 1px y 3px
                const size = Math.random() * 2 + 1;
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;

                // Posición aleatoria
                const x = Math.random() * 100;
                const y = Math.random() * 100;
                star.style.left = `${x}%`;
                star.style.top = `${y}%`;

                // Opacidad aleatoria entre 0.3 y 1
                const opacity = Math.random() * 0.7 + 0.3;
                star.style.opacity = opacity;

                // Animación de parpadeo
                const duration = Math.random() * 3 + 2;
                star.style.animation = `twinkle ${duration}s infinite ease-in-out`;

                starsContainer.appendChild(star);
            }
        }

        // Cambio entre pestañas
        function setupTabs() {
            const tabs = document.querySelectorAll('.tab');
            const savedGames = document.getElementById('saved-games');
            const wishlistGames = document.getElementById('wishlist-games');
            const emptyState = document.getElementById('empty-state');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Quitar la clase 'active' de todas las pestañas
                    tabs.forEach(t => t.classList.remove('active'));
                    // Añadir la clase 'active' a la pestaña seleccionada
                    tab.classList.add('active');

                    const tabType = tab.getAttribute('data-tab');

                    if (tabType === 'saved') {
                        savedGames.style.display = 'grid';
                        wishlistGames.style.display = 'none';
                        emptyState.style.display = 'none';
                    } else if (tabType === 'wishlist') {
                        savedGames.style.display = 'none';
                        wishlistGames.style.display = 'grid';
                        emptyState.style.display = 'none';
                    }
                });
            });
        }

        // Funcionalidad para los botones de acción
        function setupActionButtons() {
            // Botones de eliminar
            const removeButtons = document.querySelectorAll('.remove-btn');
            removeButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const card = this.closest('.game-card');
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.remove();
                        checkEmpty();
                    }, 300);
                });
            });

            // Botones de guardar/desear
            const wishlistButtons = document.querySelectorAll('.wishlist-btn');
            wishlistButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const card = this.closest('.game-card');
                    const clone = card.cloneNode(true);

                    // Cambiar el estado y el botón
                    const badge = clone.querySelector('.status-badge');
                    badge.className = 'status-badge status-wishlist';
                    badge.textContent = 'Deseado';

                    const actionBtns = clone.querySelector('.action-btns');
                    actionBtns.innerHTML = `
                        <button class="btn remove-btn">✕</button>
                        <button class="btn save-btn">★</button>
                    `;

                    // Añadir a la lista de deseados
                    document.getElementById('wishlist-games').appendChild(clone);

                    // Eliminar de guardados
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.remove();
                        checkEmpty();
                        setupActionButtons(); // Actualizar los event listeners
                    }, 300);
                });
            });

            // Botones de guardar desde lista de deseados
            const saveButtons = document.querySelectorAll('.save-btn');
            saveButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const card = this.closest('.game-card');
                    const clone = card.cloneNode(true);

                    // Cambiar el estado y el botón
                    const badge = clone.querySelector('.status-badge');
                    badge.className = 'status-badge status-saved';
                    badge.textContent = 'Guardado';

                    const actionBtns = clone.querySelector('.action-btns');
                    actionBtns.innerHTML = `
                        <button class="btn remove-btn">✕</button>
                        <button class="btn wishlist-btn">♡</button>
                    `;

                    // Añadir a guardados
                    document.getElementById('saved-games').appendChild(clone);

                    // Eliminar de deseados
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.remove();
                        checkEmpty();
                        setupActionButtons(); // Actualizar los event listeners
                    }, 300);
                });
            });
        }

        // Verificar si alguna lista está vacía
        function checkEmpty() {
            const savedGames = document.getElementById('saved-games');
            const wishlistGames = document.getElementById('wishlist-games');
            const emptyState = document.getElementById('empty-state');

            const activeTab = document.querySelector('.tab.active').getAttribute('data-tab');

            if (activeTab === 'saved' && savedGames.children.length === 0) {
                savedGames.style.display = 'none';
                emptyState.style.display = 'block';
            } else if (activeTab === 'wishlist' && wishlistGames.children.length === 0) {
                wishlistGames.style.display = 'none';
                emptyState.style.display = 'block';
            }
        }

        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            createStars();
            setupTabs();
            setupActionButtons();
        });

        // Estilos CSS para la animación de parpadeo
        const styleSheet = document.createElement('style');
        styleSheet.textContent = `
            @keyframes twinkle {
                0% { opacity: 0.3; }
                50% { opacity: 1; }
                100% { opacity: 0.3; }
            }
        `;
        document.head.appendChild(styleSheet);
    </script>
</body>
</html>

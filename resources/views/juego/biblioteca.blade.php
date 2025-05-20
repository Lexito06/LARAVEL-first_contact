<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estelar - Tu Biblioteca de Juegos</title>
    <link rel="stylesheet" href="{{ asset('css/biblioteca.css') }}">

</head>

<body>
    <!-- Fondo de estrellas -->
    <div class="stars-bg" id="stars"></div>

    <!-- Efectos de brillo -->

    <!-- Encabezado -->
    <header class="header">
        <div class="logo">
            <div class="logo-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                </svg>
            </div>
            <span class="logo-text">Estelar</span>
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

        <div class="nav-links">
            <a href="#" class="nav-link">Inicio</a>
            <a href="#" class="nav-link">Tienda</a>
            <a href="#" class="nav-link">Biblioteca</a>
            <a href="#" class="nav-link">Comunidad</a>
        </div>

        <div class="avatar">JS</div>
    </header>

    <main class="main-container">
        <div class="stats-row">
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#7e9be8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                    </path>
                </svg>
                <div class="stat-value">42</div>
                <div class="stat-label">Juegos Jugados</div>
            </div>
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#7e9be8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <div class="stat-value">16</div>
                <div class="stat-label">Logros Desbloqueados</div>
            </div>
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#7e9be8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <div class="stat-value">387</div>
                <div class="stat-label">Horas Totales</div>
            </div>
            <div class="stat-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="#7e9be8" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <div class="stat-value">12</div>
                <div class="stat-label">Amigos en línea</div>
            </div>
        </div>

        <div class="categories">
            <div class="category active">Todos</div>
            <div class="category">Recientes</div>
            <div class="category">Favoritos</div>
            <div class="category">Acción</div>
            <div class="category">Aventura</div>
            <div class="category">RPG</div>
            <div class="category">Estrategia</div>
            <div class="category">Indie</div>
        </div>

        <h2 class="section-title">Juegos recientes</h2>
        <div class="games-container">
            <div class="game-card">
                <img src="/api/placeholder/250/150" alt="Juego 1" class="game-img" />
                <div class="game-info">
                    <h3 class="game-title">Stellar Odyssey</h3>
                    <div class="game-developer">Nebula Studios</div>
                    <div class="game-meta">
                        <div class="game-stats">
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                24h
                            </div>
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                5/12
                            </div>
                        </div>
                        <div class="game-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="game-progress">
                        <div class="progress-bar" style="width: 75%;"></div>
                    </div>
                </div>
            </div>

            <div class="game-card">
                <img src="/api/placeholder/250/150" alt="Juego 2" class="game-img" />
                <div class="game-info">
                    <h3 class="game-title">Neon Horizon</h3>
                    <div class="game-developer">Quantum Games</div>
                    <div class="game-meta">
                        <div class="game-stats">
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                42h
                            </div>
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                8/15
                            </div>
                        </div>
                        <div class="game-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="game-progress">
                        <div class="progress-bar" style="width: 40%;"></div>
                    </div>
                </div>
            </div>

            <div class="game-card">
                <img src="/api/placeholder/250/150" alt="Juego 3" class="game-img" />
                <div class="game-info">
                    <h3 class="game-title">Cosmic Defenders</h3>
                    <div class="game-developer">Starlight Interactive</div>
                    <div class="game-meta">
                        <div class="game-stats">
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                16h
                            </div>
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                3/10
                            </div>
                        </div>
                        <div class="game-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="game-progress">
                        <div class="progress-bar" style="width: 90%;"></div>
                    </div>
                </div>
            </div>

            <div class="game-card">
                <img src="/api/placeholder/250/150" alt="Juego 4" class="game-img" />
                <div class="game-info">
                    <h3 class="game-title">Astral Kingdoms</h3>
                    <div class="game-developer">Eclipse Games</div>
                    <div class="game-meta">
                        <div class="game-stats">
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                65h
                            </div>
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                12/20
                            </div>
                        </div>
                        <div class="game-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="game-progress">
                        <div class="progress-bar" style="width: 60%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="section-title">Todos mis juegos</h2>
        <div class="games-container">
            <div class="game-card">
                <img src="/api/placeholder/250/150" alt="Juego 5" class="game-img" />
                <div class="game-info">
                    <h3 class="game-title">Galactic Conquerors</h3>
                    <div class="game-developer">Nova Entertainment</div>
                    <div class="game-meta">
                        <div class="game-stats">
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                32h
                            </div>
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                6/18
                            </div>
                        </div>
                        <div class="game-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="game-progress">
                        <div class="progress-bar" style="width: 30%;"></div>
                    </div>
                </div>
            </div>

            <div class="game-card">
                <img src="/api/placeholder/250/150" alt="Juego 6" class="game-img" />
                <div class="game-info">
                    <h3 class="game-title">Space Explorers</h3>
                    <div class="game-developer">Orion Studios</div>
                    <div class="game-meta">
                        <div class="game-stats">
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                56h
                            </div>
                            <div class="game-stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                14/25
                            </div>
                        </div>
                        <div class="game-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/biblioteca.js') }}"></script>
</body>

</html>

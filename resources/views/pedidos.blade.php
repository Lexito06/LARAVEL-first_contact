<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Pedidos de Juegos</title>
    <style>
        :root {
            --primary-color: #0a2351;
            --secondary-color: #1e88e5;
            --accent-color: #64b5f6;
            --text-color: #e0e0e0;
            --background-dark: #030b1a;
            --card-bg: rgba(6, 20, 45, 0.8);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--background-dark);
            color: var(--text-color);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Fondo de estrellas */
        #stars-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .star {
            position: absolute;
            background-color: #fff;
            border-radius: 50%;
            opacity: 0.6;
            animation: twinkle 4s infinite;
        }

        @keyframes twinkle {
            0% {
                opacity: 0.2;
            }

            50% {
                opacity: 0.8;
            }

            100% {
                opacity: 0.2;
            }
        }

        header {
            padding: 2rem;
            background: linear-gradient(to bottom, rgba(10, 35, 81, 0.9), rgba(10, 35, 81, 0.7));
            border-bottom: 1px solid var(--accent-color);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 2.5rem;
            text-shadow: 0 0 10px var(--accent-color);
            text-align: center;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #e0e0e0, #64b5f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .user-info {
            text-align: center;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            color: var(--accent-color);
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .tabs {
            display: flex;
            margin-bottom: 2rem;
            border-bottom: 1px solid var(--accent-color);
        }

        .tab {
            padding: 1rem 2rem;
            background: transparent;
            border: none;
            color: var(--text-color);
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .tab:after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 50%;
            background: var(--accent-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .tab.active {
            color: var(--accent-color);
        }

        .tab.active:after,
        .tab:hover:after {
            width: 80%;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .orders {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .order-card {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(100, 181, 246, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .order-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(100, 181, 246, 0.4);
        }

        .order-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(100, 181, 246, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .order-card:hover::before {
            opacity: 1;
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(100, 181, 246, 0.3);
        }

        .order-id {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--accent-color);
        }

        .order-date {
            color: #9e9e9e;
        }

        .game-item {
            display: flex;
            align-items: center;
            margin: 1rem 0;
            padding: 0.8rem;
            background: rgba(10, 35, 81, 0.5);
            border-radius: 8px;
            border-left: 3px solid var(--accent-color);
        }

        .game-img {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            background: linear-gradient(135deg, #0a2351, #1e88e5);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            overflow: hidden;
        }

        .game-info {
            flex-grow: 1;
        }

        .game-title {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 0.3rem;
        }

        .game-price {
            font-weight: bold;
            color: var(--accent-color);
        }

        .order-total {
            text-align: right;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(100, 181, 246, 0.3);
            font-size: 1.2rem;
        }

        .total-label {
            color: #9e9e9e;
        }

        .total-amount {
            font-weight: bold;
            color: var(--accent-color);
        }

        .dev-games {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .dev-game-card {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(100, 181, 246, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .dev-game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(100, 181, 246, 0.4);
        }

        .dev-game-img {
            width: 100%;
            height: 150px;
            border-radius: 8px;
            background: linear-gradient(135deg, #0a2351, #1e88e5);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .dev-game-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--accent-color);
        }

        .dev-game-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            padding-top: 0.5rem;
            border-top: 1px solid rgba(100, 181, 246, 0.3);
        }

        .stat {
            text-align: center;
        }

        .stat-value {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--accent-color);
        }

        .stat-label {
            font-size: 0.8rem;
            color: #9e9e9e;
        }

        .login-message {
            text-align: center;
            padding: 3rem 1rem;
            background: var(--card-bg);
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        }

        .empty-message {
            text-align: center;
            padding: 3rem 1rem;
            color: #9e9e9e;
        }

        .btn {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            margin-top: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .btn:hover {
            background: linear-gradient(45deg, var(--secondary-color), var(--accent-color));
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .login-btn {
            margin-top: 1.5rem;
        }

        footer {
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
            background: linear-gradient(to top, rgba(10, 35, 81, 0.9), rgba(10, 35, 81, 0.7));
            border-top: 1px solid var(--accent-color);
        }

        .developer-badge {
            display: inline-block;
            background: linear-gradient(45deg, #ff4081, #e91e63);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-left: 1rem;
            vertical-align: middle;
        }

        @media (max-width: 768px) {

            .orders,
            .dev-games {
                grid-template-columns: 1fr;
            }

            .tab {
                padding: 1rem;
                font-size: 1rem;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Contenedor de estrellas generadas por JS -->
    <div id="stars-container"></div>

    <header>
        <h1>Portal de Juegos</h1>
        <div class="user-info">
            Bienvenido, <span id="username">Usuario</span>
            <span id="developer-badge" class="developer-badge" style="display: none;">Desarrollador</span>
        </div>
    </header>

    <div class="container">
        <div class="tabs">
            <button class="tab active" id="orders-tab">Mis Pedidos</button>
            <button class="tab" id="dev-tab" style="display: none;">Mis Juegos Desarrollados</button>
        </div>

        <div id="orders-content" class="tab-content active">
            <div id="orders-container" class="orders">
                <!-- Los pedidos se cargarán aquí dinámicamente -->
            </div>
        </div>

        <div id="dev-content" class="tab-content">
            <div id="dev-games-container" class="dev-games">
                <!-- Los juegos desarrollados se cargarán aquí dinámicamente -->
            </div>
        </div>
    </div>

    <footer>
        <p>© 2025 Portal de Juegos - Todos los derechos reservados</p>
    </footer>

    <script>
        // Datos de ejemplo (en una aplicación real, estos vendrían de una API)
        let currentUser = {
            id: 1,
            name: "Carlos Rodríguez",
            isDeveloper: true
        };

        const sampleOrders = [{
                id: "ORD-8542",
                date: "15/05/2025",
                items: [{
                        id: 1,
                        title: "Galactic Explorer",
                        price: 59.99,
                        image: "game1.jpg"
                    },
                    {
                        id: 2,
                        title: "Mystic Realms",
                        price: 45.50,
                        image: "game2.jpg"
                    }
                ],
                total: 105.49
            },
            {
                id: "ORD-7391",
                date: "02/05/2025",
                items: [{
                    id: 3,
                    title: "Shadow Tactics",
                    price: 29.99,
                    image: "game3.jpg"
                }],
                total: 29.99
            },
            {
                id: "ORD-6270",
                date: "18/04/2025",
                items: [{
                        id: 4,
                        title: "Cyber Defenders",
                        price: 49.99,
                        image: "game4.jpg"
                    },
                    {
                        id: 5,
                        title: "Eternal Kingdoms",
                        price: 39.99,
                        image: "game5.jpg"
                    },
                    {
                        id: 6,
                        title: "Racing Evolution",
                        price: 35.50,
                        image: "game6.jpg"
                    }
                ],
                total: 125.48
            }
        ];

        const developedGames = [{
                id: 101,
                title: "Cosmic Adventures",
                description: "Un juego de exploración espacial con gráficos inmersivos y una historia cautivadora.",
                releaseDate: "10/01/2025",
                image: "dev1.jpg",
                sales: 1250,
                rating: 4.7
            },
            {
                id: 102,
                title: "Legends of Valor",
                description: "Un RPG épico ambientado en un mundo de fantasía medieval con combates tácticos.",
                releaseDate: "05/03/2025",
                image: "dev2.jpg",
                sales: 875,
                rating: 4.5
            },
            {
                id: 103,
                title: "Neo Tokyo Drift",
                description: "Un juego de carreras futurista con vehículos personalizables y circuitos dinámicos.",
                releaseDate: "20/04/2025",
                image: "dev3.jpg",
                sales: 650,
                rating: 4.2
            }
        ];

        // Generar estrellas para el fondo
        function generateStars() {
            const starsContainer = document.getElementById('stars-container');
            const starsCount = 150;

            for (let i = 0; i < starsCount; i++) {
                const star = document.createElement('div');
                star.className = 'star';

                // Tamaño aleatorio para las estrellas
                const size = Math.random() * 3;
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;

                // Posición aleatoria
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                star.style.left = `${posX}%`;
                star.style.top = `${posY}%`;

                // Tiempo de animación aleatorio
                const animationDuration = 3 + Math.random() * 5;
                star.style.animationDuration = `${animationDuration}s`;

                // Retraso aleatorio
                const animationDelay = Math.random() * 5;
                star.style.animationDelay = `${animationDelay}s`;

                starsContainer.appendChild(star);
            }
        }

        // Cargar los pedidos del usuario
        function loadOrders() {
            const ordersContainer = document.getElementById('orders-container');
            ordersContainer.innerHTML = '';

            if (sampleOrders.length === 0) {
                ordersContainer.innerHTML = '<div class="empty-message">No tienes pedidos realizados todavía</div>';
                return;
            }

            sampleOrders.forEach(order => {
                const orderElement = document.createElement('div');
                orderElement.className = 'order-card';

                let itemsHTML = '';
                order.items.forEach(item => {
                    itemsHTML += `
                        <div class="game-item">
                            <div class="game-img">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <div class="game-info">
                                <div class="game-title">${item.title}</div>
                                <div class="game-price">€${item.price.toFixed(2)}</div>
                            </div>
                        </div>
                    `;
                });

                orderElement.innerHTML = `
                    <div class="order-header">
                        <div class="order-id">${order.id}</div>
                        <div class="order-date">${order.date}</div>
                    </div>
                    <div class="order-items">
                        ${itemsHTML}
                    </div>
                    <div class="order-total">
                        <span class="total-label">Total:</span>
                        <span class="total-amount">€${order.total.toFixed(2)}</span>
                    </div>
                `;

                ordersContainer.appendChild(orderElement);
            });
        }

        // Cargar los juegos desarrollados (solo para desarrolladores)
        function loadDevelopedGames() {
            const devGamesContainer = document.getElementById('dev-games-container');
            devGamesContainer.innerHTML = '';

            if (developedGames.length === 0) {
                devGamesContainer.innerHTML = '<div class="empty-message">No has desarrollado ningún juego todavía</div>';
                return;
            }

            developedGames.forEach(game => {
                const gameElement = document.createElement('div');
                gameElement.className = 'dev-game-card';

                gameElement.innerHTML = `
                    <div class="dev-game-img">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <div class="dev-game-title">${game.title}</div>
                    <div class="dev-game-description">${game.description}</div>
                    <div class="dev-game-release">Publicado: ${game.releaseDate}</div>
                    <div class="dev-game-stats">
                        <div class="stat">
                            <div class="stat-value">${game.sales}</div>
                            <div class="stat-label">Ventas</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">${game.rating}</div>
                            <div class="stat-label">Valoración</div>
                        </div>
                    </div>
                `;

                devGamesContainer.appendChild(gameElement);
            });
        }

        // Inicializar la interfaz
        function initInterface() {
            // Actualizar la información del usuario
            document.getElementById('username').textContent = currentUser.name;

            if (currentUser.isDeveloper) {
                document.getElementById('developer-badge').style.display = 'inline-block';
                document.getElementById('dev-tab').style.display = 'block';
            }

            // Manejar cambios de pestañas
            document.getElementById('orders-tab').addEventListener('click', function() {
                document.getElementById('orders-tab').classList.add('active');
                document.getElementById('dev-tab').classList.remove('active');
                document.getElementById('orders-content').classList.add('active');
                document.getElementById('dev-content').classList.remove('active');
            });

            document.getElementById('dev-tab').addEventListener('click', function() {
                document.getElementById('dev-tab').classList.add('active');
                document.getElementById('orders-tab').classList.remove('active');
                document.getElementById('dev-content').classList.add('active');
                document.getElementById('orders-content').classList.remove('active');
            });
        }

        // Inicializar la aplicación
        window.addEventListener('DOMContentLoaded', () => {
            generateStars();
            initInterface();
            loadOrders();
            loadDevelopedGames();
        });
    </script>
</body>

</html>

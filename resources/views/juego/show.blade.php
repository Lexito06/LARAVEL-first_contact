<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Juego</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #05071b;
            color: #e0e6ff;
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
        }

        .star {
            position: absolute;
            background-color: #ffffff;
            border-radius: 50%;
            animation: twinkle 5s infinite;
        }

        @keyframes twinkle {
            0% { opacity: 0.2; }
            50% { opacity: 0.8; }
            100% { opacity: 0.2; }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .back-button {
            display: inline-block;
            background-color: rgba(23, 55, 125, 0.7);
            color: #e0e6ff;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 30px;
            border: 2px solid #3a5caa;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: rgba(42, 82, 165, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }

        .game-card {
            background: linear-gradient(135deg, rgba(23, 55, 125, 0.7), rgba(12, 29, 65, 0.9));
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(66, 99, 197, 0.3);
        }

        .game-header {
            display: flex;
            align-items: flex-start;
            padding: 30px;
        }

        .game-image {
            width: 300px;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            border: 2px solid rgba(100, 149, 237, 0.3);
        }

        .game-info {
            margin-left: 30px;
            flex: 1;
        }

        .game-title {
            font-size: 36px;
            margin-bottom: 15px;
            color: #99c1ff;
            font-weight: 700;
            text-shadow: 0 0 10px rgba(100, 149, 237, 0.5);
        }

        .game-meta {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .meta-item {
            margin-right: 25px;
            margin-bottom: 15px;
        }

        .meta-label {
            font-size: 14px;
            color: #7d9ad7;
            margin-bottom: 5px;
        }

        .meta-value {
            font-size: 18px;
            font-weight: 600;
        }

        .price {
            font-size: 24px;
            font-weight: 700;
            color: #62efff;
            text-shadow: 0 0 5px rgba(98, 239, 255, 0.5);
        }

        .description-section {
            padding: 30px;
            border-top: 1px solid rgba(100, 149, 237, 0.2);
        }

        .section-title {
            font-size: 22px;
            margin-bottom: 20px;
            color: #99c1ff;
        }

        .description {
            line-height: 1.8;
            font-size: 16px;
            color: #dbe4ff;
        }

        .buy-button {
            display: inline-block;
            background: linear-gradient(135deg, #2a52a5, #1c3672);
            color: white;
            padding: 15px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 25px;
            border: none;
            transition: all 0.3s ease;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 89, 255, 0.3);
        }

        .buy-button:hover {
            background: linear-gradient(135deg, #3669d4, #2a52a5);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 89, 255, 0.5);
        }

        .features-section {
            padding: 30px;
            border-top: 1px solid rgba(100, 149, 237, 0.2);
        }

        .features-list {
            list-style-type: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .feature-item {
            background-color: rgba(23, 55, 125, 0.4);
            padding: 15px;
            border-radius: 10px;
            border-left: 3px solid #3a5caa;
        }

        @media (max-width: 768px) {
            .game-header {
                flex-direction: column;
            }

            .game-image {
                width: 100%;
                height: 250px;
                margin-bottom: 20px;
            }

            .game-info {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="stars" id="stars"></div>

    <div class="container">
        <a href="#" class="back-button">← Volver a la tienda</a>

        <div class="game-card">
            <div class="game-header">
                <img src="/api/placeholder/400/320" alt="Cosmic Adventure" class="game-image">

                <div class="game-info">
                    <h1 class="game-title">Cosmic Adventure: Beyond Stars</h1>

                    <div class="game-meta">
                        <div class="meta-item">
                            <div class="meta-label">Desarrollador</div>
                            <div class="meta-value">Nova Games Studio</div>
                        </div>

                        <div class="meta-item">
                            <div class="meta-label">Fecha de lanzamiento</div>
                            <div class="meta-value">15 de Marzo de 2025</div>
                        </div>

                        <div class="meta-item">
                            <div class="meta-label">Categoría</div>
                            <div class="meta-value">Aventura Espacial / RPG</div>
                        </div>

                        <div class="meta-item">
                            <div class="meta-label">Plataforma</div>
                            <div class="meta-value">PC, PlayStation 6, Xbox Series X</div>
                        </div>

                        <div class="meta-item">
                            <div class="meta-label">Clasificación</div>
                            <div class="meta-value">PEGI 12+</div>
                        </div>
                    </div>

                    <div class="meta-item">
                        <div class="meta-label">Precio</div>
                        <div class="price">€59.99</div>
                    </div>

                    <button class="buy-button">Comprar ahora</button>
                </div>
            </div>

            <div class="description-section">
                <h2 class="section-title">Descripción</h2>
                <p class="description">
                    Cosmic Adventure: Beyond Stars te sumerge en una experiencia intergaláctica sin precedentes. Explora planetas desconocidos, establece alianzas con civilizaciones alienígenas y descubre los secretos ocultos del universo en esta aventura espacial de mundo abierto.
                </p>
                <p class="description">
                    Asume el papel de un explorador espacial en una misión para salvar tu planeta natal. Con gráficos de última generación y una banda sonora inmersiva, cada momento en Cosmic Adventure está diseñado para llevarte a un viaje épico a través de las estrellas.
                </p>
                <p class="description">
                    El sistema de combate revolucionario y las mecánicas de construcción te permiten personalizar tu nave espacial y adaptar tu estilo de juego mientras navegas por un universo vasto y dinámico lleno de peligros y descubrimientos.
                </p>
            </div>

            <div class="features-section">
                <h2 class="section-title">Características principales</h2>
                <ul class="features-list">
                    <li class="feature-item">Mundo abierto con más de 100 planetas para explorar</li>
                    <li class="feature-item">Sistema de personalización de naves con más de 1,000 componentes</li>
                    <li class="feature-item">Historia ramificada con múltiples finales</li>
                    <li class="feature-item">Gráficos de última generación con trazado de rayos</li>
                    <li class="feature-item">Multijugador cooperativo hasta 4 jugadores</li>
                    <li class="feature-item">Sistema de comercio intergaláctico dinámico</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Crear estrellas en el fondo
        document.addEventListener('DOMContentLoaded', function() {
            const starsContainer = document.getElementById('stars');
            const numberOfStars = 200;

            for (let i = 0; i < numberOfStars; i++) {
                const star = document.createElement('div');
                star.classList.add('star');

                // Tamaño aleatorio para las estrellas
                const size = Math.random() * 3 + 1;
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;

                // Posición aleatoria
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                star.style.left = `${posX}%`;
                star.style.top = `${posY}%`;

                // Animación con retraso aleatorio
                star.style.animationDelay = `${Math.random() * 5}s`;

                starsContainer.appendChild(star);
            }
        });
    </script>
</body>
</html>

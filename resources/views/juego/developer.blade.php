<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Juego - GameDev Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0a0a1a;
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
            overflow: hidden;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            animation: twinkle 4s infinite;
        }

        @keyframes twinkle {
            0% { opacity: 0.2; }
            50% { opacity: 1; }
            100% { opacity: 0.2; }
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            text-align: center;
            margin-bottom: 3rem;
            padding-top: 2rem;
        }

        h1 {
            font-size: 2.5rem;
            color: #4dabff;
            text-shadow: 0 0 10px rgba(73, 171, 255, 0.5);
            margin-bottom: 1rem;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #a0c8ff;
            font-weight: 300;
        }

        .form-container {
            background-color: rgba(15, 32, 70, 0.7);
            border-radius: 15px;
            padding: 2.5rem;
            backdrop-filter: blur(5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5),
                        0 0 20px rgba(73, 171, 255, 0.3);
            border: 1px solid rgba(73, 171, 255, 0.2);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #a0c8ff;
        }

        input, textarea, select {
            width: 100%;
            padding: 0.8rem 1rem;
            border-radius: 8px;
            background-color: rgba(13, 23, 48, 0.8);
            border: 1px solid rgba(73, 171, 255, 0.3);
            color: #e0e6ff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #4dabff;
            box-shadow: 0 0 10px rgba(73, 171, 255, 0.5);
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        .file-upload {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            border: 2px dashed rgba(73, 171, 255, 0.4);
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }

        .file-upload:hover {
            border-color: #4dabff;
            background-color: rgba(73, 171, 255, 0.05);
        }

        .file-upload input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            height: 100%;
            width: 100%;
        }

        .upload-icon {
            font-size: 2.5rem;
            color: #4dabff;
            margin-bottom: 1rem;
        }

        .preview-image {
            max-width: 150px;
            max-height: 150px;
            margin-top: 1rem;
            border-radius: 5px;
            display: none;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            align-items: center;
        }

        .back-btn {
            background-color: transparent;
            border: 1px solid rgba(73, 171, 255, 0.5);
            color: #a0c8ff;
            padding: 0.7rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .back-btn:hover {
            background-color: rgba(73, 171, 255, 0.1);
            color: #4dabff;
        }

        .back-icon {
            margin-right: 0.5rem;
        }

        .submit-btn {
            background: linear-gradient(135deg, #4dabff 0%, #2160b5 100%);
            color: white;
            border: none;
            padding: 0.9rem 2.5rem;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(73, 171, 255, 0.4);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(73, 171, 255, 0.5);
        }

        .required {
            color: #ff6b6b;
        }

        .category-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .category-tag {
            background-color: rgba(73, 171, 255, 0.2);
            color: #a0c8ff;
            border-radius: 20px;
            padding: 0.3rem 0.8rem;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
        }

        .price-group {
            position: relative;
        }

        .price-symbol {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #a0c8ff;
            font-weight: 600;
        }

        .price-input {
            padding-left: 2rem;
        }
    </style>
</head>
<body>
    <div class="stars" id="stars"></div>

    <div class="container">
        <header>
            <h1>GAMEDEV PORTAL</h1>
            <p class="subtitle">Publica tu juego en nuestra plataforma</p>
        </header>

        <div class="form-container">
            <form id="gameUploadForm">
                <div class="form-group">
                    <label for="gameTitle">Título del Juego <span class="required">*</span></label>
                    <input type="text" id="gameTitle" name="gameTitle" required placeholder="Ingresa el título de tu juego">
                </div>

                <div class="form-group">
                    <label for="gameImage">Imagen Principal <span class="required">*</span></label>
                    <div class="file-upload" id="imageUpload">
                        <div class="upload-icon">📷</div>
                        <p>Arrastra una imagen o haz clic para seleccionar</p>
                        <p style="font-size: 0.8rem; opacity: 0.7; margin-top: 0.5rem;">Formatos aceptados: JPG, PNG (Max: 5MB)</p>
                        <input type="file" id="gameImage" name="gameImage" accept="image/jpeg, image/png" required>
                        <img id="previewImg" class="preview-image" src="" alt="Vista previa">
                    </div>
                </div>

                <div class="form-group">
                    <label for="gameDescription">Descripción <span class="required">*</span></label>
                    <textarea id="gameDescription" name="gameDescription" required placeholder="Describe tu juego, sus características y lo que lo hace especial..."></textarea>
                </div>

                <div class="form-group">
                    <label for="gameCategory">Categoría <span class="required">*</span></label>
                    <select id="gameCategory" name="gameCategory" required>
                        <option value="" disabled selected>Selecciona una categoría</option>
                        <option value="action">Acción</option>
                        <option value="adventure">Aventura</option>
                        <option value="rpg">RPG</option>
                        <option value="strategy">Estrategia</option>
                        <option value="simulation">Simulación</option>
                        <option value="sports">Deportes</option>
                        <option value="racing">Carreras</option>
                        <option value="puzzle">Puzzle</option>
                        <option value="platformer">Plataformas</option>
                        <option value="shooter">Disparos</option>
                        <option value="horror">Terror</option>
                        <option value="casual">Casual</option>
                    </select>

                    <div class="category-tags">
                        <div class="category-tag">Acción</div>
                        <div class="category-tag">Aventura</div>
                        <div class="category-tag">RPG</div>
                        <div class="category-tag">Estrategia</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="gamePrice">Precio <span class="required">*</span></label>
                    <div class="price-group">
                        <span class="price-symbol">$</span>
                        <input type="number" id="gamePrice" name="gamePrice" min="0" step="0.01" required placeholder="0.00" class="price-input">
                    </div>
                </div>

                <div class="button-group">
                    <button type="button" class="back-btn">
                        <span class="back-icon">←</span> Volver
                    </button>
                    <button type="submit" class="submit-btn">Publicar Juego</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Crear estrellas en el fondo
        function createStars() {
            const stars = document.getElementById('stars');
            const starsCount = 150;

            for (let i = 0; i < starsCount; i++) {
                const star = document.createElement('div');
                star.className = 'star';

                // Posición aleatoria
                const left = Math.random() * 100;
                const top = Math.random() * 100;

                // Tamaño aleatorio
                const size = Math.random() * 3;

                // Delay de animación aleatorio
                const delay = Math.random() * 4;

                star.style.left = `${left}%`;
                star.style.top = `${top}%`;
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;
                star.style.animationDelay = `${delay}s`;

                stars.appendChild(star);
            }
        }

        // Vista previa de la imagen
        document.getElementById('gameImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const previewImg = document.getElementById('previewImg');
                    previewImg.src = event.target.result;
                    previewImg.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        // Prevenir envío real del formulario en este ejemplo
        document.getElementById('gameUploadForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('¡Juego enviado con éxito! (En un sistema real, aquí se procesaría el envío)');
        });

        // Botón de volver
        document.querySelector('.back-btn').addEventListener('click', function() {
            // En una implementación real, aquí iría el código para volver a la página anterior
            alert('Volviendo a la página anterior...');
        });

        // Inicializar la página
        document.addEventListener('DOMContentLoaded', function() {
            createStars();
        });
    </script>
</body>
</html>

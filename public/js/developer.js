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
        document.getElementById('imagen').addEventListener('change', function(e) {
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

        // Inicializar la página
        document.addEventListener('DOMContentLoaded', function() {
            createStars();
        });

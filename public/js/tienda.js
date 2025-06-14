// Script para crear estrellas en el fondo
document.addEventListener('DOMContentLoaded', function () {
    const starsContainer = document.getElementById('stars');
    const starCount = 200;

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';

        // Tamaño aleatorio
        const size = Math.random() * 3;
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;

        // Posición aleatoria
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        star.style.left = `${posX}%`;
        star.style.top = `${posY}%`;

        // Opacidad aleatoria para crear efecto de profundidad
        star.style.opacity = Math.random();

        // Añadir animación de parpadeo para algunas estrellas
        if (Math.random() > 0.7) {
            const animationDuration = 3 + Math.random() * 5;
            star.style.animation = `twinkle ${animationDuration}s infinite ease-in-out`;
        }

        starsContainer.appendChild(star);
    }

    // Añadir regla de animación CSS para el parpadeo
    const style = document.createElement('style');
    style.textContent = `
                @keyframes twinkle {
                    0% { opacity: 0.3; }
                    50% { opacity: 1; }
                    100% { opacity: 0.3; }
                }
            `;
    document.head.appendChild(style);
});

// Script para filtrar juegos por categoría
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.category');
    const gameCards = document.querySelectorAll('.game-card');

    categoryButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Quitar 'active' de todos los botones
            categoryButtons.forEach(b => b.classList.remove('active'));
            // Poner 'active' en el botón pulsado
            this.classList.add('active');

            const categoria = this.textContent.trim().toLowerCase();

            gameCards.forEach(card => {
                const cardCategoria = card.getAttribute('data-categoria');
                if (categoria === 'todos' || cardCategoria === categoria) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

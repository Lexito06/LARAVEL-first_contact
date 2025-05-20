// Crear estrellas dinámicamente
function createStars() {
    const starsContainer = document.getElementById('stars');
    const starCount = 200; // Cantidad de estrellas

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';

        // Posición aleatoria
        const x = Math.random() * 100;
        const y = Math.random() * 100;

        // Tamaño aleatorio
        const size = Math.random() * 2 + 1;

        // Brillo aleatorio
        const opacity = Math.random() * 0.8 + 0.2;

        // Retraso aleatorio en la animación
        const delay = Math.random() * 4;

        star.style.left = `${x}%`;
        star.style.top = `${y}%`;
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        star.style.opacity = opacity;
        star.style.animationDelay = `${delay}s`;

        starsContainer.appendChild(star);
    }
}

// Ejecutar cuando se cargue la página
window.addEventListener('load', createStars);

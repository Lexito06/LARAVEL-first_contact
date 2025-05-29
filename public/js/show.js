// Crear estrellas en el fondo
document.addEventListener('DOMContentLoaded', function () {
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

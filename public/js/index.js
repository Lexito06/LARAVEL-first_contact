document.addEventListener('DOMContentLoaded', function () {
    // Carrusel de imágenes
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;
    const nextBtn = document.querySelector('.carousel-controls .next');
    const prevBtn = document.querySelector('.carousel-controls .prev');

    // Configurar las estrellas de fondo
    createStars();

    // Funciones del carrusel
    function showSlide(n) {
        slides.forEach(slide => slide.classList.remove('active'));
        currentSlide = (n + totalSlides) % totalSlides;
        slides[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Configurar eventos del carrusel
    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
    }

    // Avanzar automáticamente el carrusel cada 5 segundos
    setInterval(nextSlide, 5000);

    // Función para crear estrellas en el fondo
    function createStars() {
        const starsContainer = document.createElement('div');
        starsContainer.classList.add('stars');
        document.body.appendChild(starsContainer);

        // Crear estrellas fijas
        for (let i = 0; i < 100; i++) {
            const star = document.createElement('div');
            star.style.position = 'absolute';
            star.style.width = `${Math.random() * 2 + 1}px`;
            star.style.height = star.style.width;
            star.style.backgroundColor = 'white';
            star.style.borderRadius = '50%';
            star.style.top = `${Math.random() * 100}%`;
            star.style.left = `${Math.random() * 100}%`;

            // Añadir animación de brillo
            const duration = Math.random() * 3 + 2;
            star.style.animation = `twinkle ${duration}s infinite`;
            star.style.animationDelay = `${Math.random() * 5}s`;

            starsContainer.appendChild(star);
        }
    }

    // Inicializar el carrusel
    showSlide(0);
});

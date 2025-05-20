// Carrusel funcionalidad
document.addEventListener('DOMContentLoaded', function () {
    const carouselItems = document.querySelectorAll('.carousel-item');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;

    function showSlide(index) {
        carouselItems.forEach(item => {
            item.classList.remove('active');
        });

        if (index >= carouselItems.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = carouselItems.length - 1;
        } else {
            currentIndex = index;
        }

        carouselItems[currentIndex].classList.add('active');
    }

    nextBtn.addEventListener('click', () => {
        showSlide(currentIndex + 1);
    });

    prevBtn.addEventListener('click', () => {
        showSlide(currentIndex - 1);
    });

    // Auto-rotate cada 5 segundos
    setInterval(() => {
        showSlide(currentIndex + 1);
    }, 5000);

    // Toggle para el menú de usuario en versiones móviles
    const userAvatar = document.querySelector('.user-avatar');
    const userDropdown = document.querySelector('.user-dropdown');

    userAvatar.addEventListener('click', function (e) {
        e.stopPropagation();
        userDropdown.classList.toggle('show-mobile');
    });

    document.addEventListener('click', function (e) {
        if (!userDropdown.contains(e.target) && !userAvatar.contains(e.target)) {
            userDropdown.classList.remove('show-mobile');
        }
    });

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

    // Función para crear estrellas fugaces
    function createShootingStars() {
        setInterval(() => {
            if (Math.random() > 0.9) { // 10% de probabilidad
                const shootingStar = document.createElement('div');
                shootingStar.classList.add('shooting-star');

                // Posición aleatoria
                shootingStar.style.top = `${Math.random() * 70}%`;
                shootingStar.style.left = `${Math.random() * 100}%`;

                // Duración aleatoria
                const duration = Math.random() * 2 + 3;
                shootingStar.style.animationDuration = `${duration}s`;

                document.body.appendChild(shootingStar);

                // Eliminar la estrella fugaz después de la animación
                setTimeout(() => {
                    document.body.removeChild(shootingStar);
                }, duration * 1000);
            }
        }, 2000);
    }
    // Inicializar las estrellas y estrellas fugaces
    createStars();
    createShootingStars();
    // Inicializar el carrusel
    showSlide(currentIndex);

});

// Barra de búsqueda
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-input');
    const gameCards = document.querySelectorAll('.game-card');

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchText = this.value.toLowerCase();

            gameCards.forEach(card => {
                const titleElement = card.querySelector('.game-title');
                const title = titleElement ? titleElement.textContent.toLowerCase() : '';
                if (title.includes(searchText)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }
});

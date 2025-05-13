
        // Carrusel funcionalidad
        document.addEventListener('DOMContentLoaded', function() {
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

            userAvatar.addEventListener('click', function(e) {
                e.stopPropagation();
                userDropdown.classList.toggle('show-mobile');
            });

            document.addEventListener('click', function(e) {
                if (!userDropdown.contains(e.target) && !userAvatar.contains(e.target)) {
                    userDropdown.classList.remove('show-mobile');
                }
            });
        });

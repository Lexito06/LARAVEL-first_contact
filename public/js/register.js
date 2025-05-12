// Crear estrellas cayendo y constelaciones
document.addEventListener('DOMContentLoaded', function () {
    const starsContainer = document.getElementById('stars-container');

    // Crear estrellas cayendo
    const starCount = 100;
    for (let i = 0; i < starCount; i++) {
        createStar(starsContainer);
    }

    // Crear constelaciones en el fondo
    const constellationCount = 50;
    for (let i = 0; i < constellationCount; i++) {
        createConstellation();
    }

    // Seguimiento del mouse para efecto de resplandor
    // Claramente no sigue el mouse, pero bueno
    const glow = document.querySelector('.glow');
    document.addEventListener('mousemove', function (e) {
        const x = e.clientX;
        const y = e.clientY;
        glow.style.left = `${x}px`;
        glow.style.top = `${y}px`;
    });

    // Efecto de resplandor al interactuar con el formulario
    const inputFields = document.querySelectorAll('.input-group input');
    inputFields.forEach(input => {
        input.addEventListener('focus', function () {
            glow.style.opacity = '1';
            glow.style.transition = 'transform 0.3s';
        });

        input.addEventListener('blur', function () {
            glow.style.opacity = '0.7';
        });
    });
});

// Función para crear una estrella cayendo
function createStar(container) {
    const star = document.createElement('div');
    star.style.position = 'absolute';
    star.style.top = '-10px';

    star.classList.add('star');

    // Posición aleatoria
    const xPos = Math.random() * 100;
    star.style.left = `${xPos}%`;

    // Tamaño aleatorio
    const size = Math.random() * 3 + 1;
    star.style.width = `${size}px`;
    star.style.height = `${size}px`;

    // Brillo aleatorio
    const opacity = Math.random() * 0.8 + 0.2;
    star.style.opacity = opacity;

    // Velocidad aleatoria
    const duration = Math.random() * 8 + 3;
    star.style.animationDuration = `${duration}s`;

    // Retraso aleatorio
    const delay = Math.random() * 5;
    star.style.animationDelay = `${delay}s`;

    // Color aleatorio (tonos azules y blancos)
    const colors = ['#fff', '#f8f8ff', '#e6eeff', '#b8c6ff', '#d6e4ff'];
    const colorIndex = Math.floor(Math.random() * colors.length);
    star.style.backgroundColor = colors[colorIndex];

    // Brillo adicional para algunas estrellas
    if (Math.random() > 0.7) {
        star.style.boxShadow = `0 0 ${size * 2}px ${size / 2}px ${colors[colorIndex]}`;
    }

    container.appendChild(star);

    // Reemplazar la estrella cuando termine su animación
    star.addEventListener('animationend', function () {
        star.remove();
        createStar(container);
    });
}

// Función para crear constelaciones estáticas
function createConstellation() {
    const constellation = document.createElement('div');
    constellation.classList.add('constellation');

    // Posición aleatoria
    const xPos = Math.random() * 100;
    const yPos = Math.random() * 100;
    constellation.style.left = `${xPos}%`;
    constellation.style.top = `${yPos}%`;

    // Tamaño aleatorio
    const size = Math.random() * 2 + 1;
    constellation.style.width = `${size}px`;
    constellation.style.height = `${size}px`;

    // Brillo aleatorio
    const opacity = Math.random() * 0.7 + 0.1;
    constellation.style.opacity = opacity;

    // Parpadeo aleatorio
    if (Math.random() > 0.7) {
        const blinkDuration = Math.random() * 3 + 2;
        constellation.style.animation = `blink ${blinkDuration}s infinite`;

        // Agregar keyframes para parpadeo
        if (!document.querySelector('#blink-keyframes')) {
            const style = document.createElement('style');
            style.id = 'blink-keyframes';
            style.textContent = `
        @keyframes blink {
          0%, 100% { opacity: ${opacity}; }
          50% { opacity: ${opacity * 0.3}; }
        }
      `;
            document.head.appendChild(style);
        }
    }

    document.body.appendChild(constellation);
}

// Efecto para el botón de login
const loginBtn = document.getElementById('loginBtn');
loginBtn.addEventListener('click', function (e) {
    e.preventDefault();

    // Efecto de onda al hacer click
    const circle = document.createElement('div');
    const d = Math.max(this.clientWidth, this.clientHeight);

    circle.style.width = circle.style.height = `${d}px`;
    circle.style.position = 'absolute';
    circle.style.borderRadius = '50%';
    circle.style.backgroundColor = 'rgba(255, 255, 255, 0.2)';
    circle.style.left = `${e.clientX - this.offsetLeft - d / 2}px`;
    circle.style.top = `${e.clientY - this.offsetTop - d / 2}px`;
    circle.style.transform = 'scale(0)';
    circle.style.animation = 'ripple 0.6s linear';

    this.appendChild(circle);

    setTimeout(() => {
        circle.remove();
        // Simulación de login
        simulateLogin();
    }, 600);
});

// Simulación del proceso de login
function simulateLogin() {
    const form = document.querySelector('.login-form');
    const container = document.querySelector('.login-container');

    // Efecto de spinner de carga
    loginBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>';
    loginBtn.disabled = true;

    setTimeout(() => {
        // Animación de salida
        container.style.animation = 'fadeOut 0.5s forwards';

        setTimeout(() => {
            // Redirección exitosa
            const overlay = document.createElement('div');
            overlay.style.position = 'fixed';
            overlay.style.top = '0';
            overlay.style.left = '0';
            overlay.style.width = '100%';
            overlay.style.height = '100%';
            overlay.style.backgroundColor = 'rgba(5, 10, 28, 0.85)';
            overlay.style.display = 'flex';
            overlay.style.justifyContent = 'center';
            overlay.style.alignItems = 'center';
            overlay.style.zIndex = '999';
            overlay.style.opacity = '0';
            overlay.style.transition = 'opacity 0.5s';

            const message = document.createElement('div');
            message.innerHTML = '<i class="fas fa-check-circle" style="color:#4f7cf7; font-size:40px; margin-bottom:15px;"></i><br>Acceso exitoso';
            message.style.color = '#e6eeff';
            message.style.fontSize = '18px';
            message.style.textAlign = 'center';
            message.style.padding = '30px 40px';
            message.style.borderRadius = '8px';
            message.style.backgroundColor = 'rgba(8, 19, 48, 0.95)';
            message.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.5), 0 0 15px rgba(79, 124, 247, 0.3)';
            message.style.border = '1px solid rgba(79, 124, 247, 0.2)';

            overlay.appendChild(message);
            document.body.appendChild(overlay);

            setTimeout(() => {
                overlay.style.opacity = '1';
            }, 100);

            // Restablecer después de un tiempo
            setTimeout(() => {
                overlay.style.opacity = '0';
                setTimeout(() => {
                    overlay.remove();
                    container.style.animation = 'fadeIn 1s forwards';
                    form.reset();
                    loginBtn.innerHTML = 'Ingresar';
                    loginBtn.disabled = false;
                }, 500);
            }, 2000);
        }, 500);
    }, 1500);
}

// Añadir keyframes
const style = document.createElement('style');
style.textContent = `
  @keyframes ripple {
    to {
      transform: scale(3);
      opacity: 0;
    }
  }
  @keyframes fadeOut {
    to {
      opacity: 0;
      transform: translateY(10px);
    }
  }
`;
document.head.appendChild(style);


// Script para manejar la selección de tipo de cuenta
document.addEventListener('DOMContentLoaded', () => {
    const accountButtons = document.querySelectorAll('.account-btn');

    accountButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remover la clase 'active' de todos los botones
            accountButtons.forEach(btn => btn.classList.remove('active'));

            // Agregar la clase 'active' al botón seleccionado
            button.classList.add('active');

            // Obtener el tipo de cuenta seleccionada
            const accountType = button.getAttribute('data-type');
            console.log(`Tipo de cuenta seleccionada: ${accountType}`);
        });
    });
});

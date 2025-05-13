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

// Asignar rol al usuario que se registra

document.querySelectorAll('.account-btn').forEach(button => {
    button.addEventListener('click', function () {
        document.querySelectorAll('.account-btn').forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
        document.getElementById('idRolInput').value = this.dataset.type === 'developer' ? 2 : 3;
    });
});

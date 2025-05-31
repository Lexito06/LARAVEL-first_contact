// Campo de estrellas animado
class StarField {
    constructor() {
        this.canvas = document.getElementById('starfield');
        this.ctx = this.canvas.getContext('2d');
        this.stars = [];
        this.numStars = 200;
        this.init();
        this.animate();
        this.handleResize();
    }

    init() {
        this.resize();
        this.createStars();
    }

    resize() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
    }

    createStars() {
        this.stars = [];
        for (let i = 0; i < this.numStars; i++) {
            this.stars.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                size: Math.random() * 2 + 0.5,
                speed: Math.random() * 0.5 + 0.2,
                opacity: Math.random() * 0.8 + 0.2,
                twinkle: Math.random() * 0.02 + 0.01
            });
        }
    }

    updateStars() {
        this.stars.forEach(star => {
            star.y += star.speed;
            star.opacity += Math.sin(Date.now() * star.twinkle) * 0.01;
            star.opacity = Math.max(0.1, Math.min(1, star.opacity));
            if (star.y > this.canvas.height) {
                star.y = -5;
                star.x = Math.random() * this.canvas.width;
            }
        });
    }

    drawStars() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.stars.forEach(star => {
            this.ctx.save();
            this.ctx.globalAlpha = star.opacity;
            this.ctx.fillStyle = '#ffffff';
            this.ctx.shadowColor = '#3b82f6';
            this.ctx.shadowBlur = star.size * 2;
            this.ctx.beginPath();
            this.ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2);
            this.ctx.fill();
            this.ctx.restore();
        });
    }

    animate() {
        this.updateStars();
        this.drawStars();
        requestAnimationFrame(() => this.animate());
    }

    handleResize() {
        window.addEventListener('resize', () => {
            this.resize();
            this.createStars();
        });
    }
}

// Inicializar el campo de estrellas
document.addEventListener('DOMContentLoaded', () => {
    new StarField();
    adjustStarIntensity();
});

// Smooth scroll para los enlaces internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Mostrar/ocultar botón de volver arriba
const backToTop = document.querySelector('.back-to-top');
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        backToTop.style.opacity = '1';
        backToTop.style.visibility = 'visible';
    } else {
        backToTop.style.opacity = '0';
        backToTop.style.visibility = 'hidden';
    }
});

// Volver arriba
backToTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Efecto de paralaje sutil en las estrellas durante el scroll
let lastScrollY = window.scrollY;
window.addEventListener('scroll', () => {
    const scrollDelta = window.scrollY - lastScrollY;
    const starfield = document.getElementById('starfield');
    if (starfield) {
        const currentTransform = starfield.style.transform || 'translateY(0px)';
        const currentY = parseFloat(currentTransform.match(/translateY\(([^)]+)px\)/)?.[1] || 0);
        const newY = currentY - (scrollDelta * 0.1);
        starfield.style.transform = `translateY(${newY}px)`;
    }
    lastScrollY = window.scrollY;
});

// Cambiar la intensidad de las estrellas según la hora
function adjustStarIntensity() {
    const hour = new Date().getHours();
    const canvas = document.getElementById('starfield');
    if (!canvas) return;
    // Más intensidad durante la noche (20-6h)
    canvas.style.opacity = (hour >= 20 || hour <= 6) ? '1' : '0.7';
}
setInterval(adjustStarIntensity, 3600000); // Cada hora

// Animación de entrada para las tarjetas
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.querySelectorAll('.card, .team-member').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

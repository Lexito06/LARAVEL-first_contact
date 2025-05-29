document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', function() {
        // Quitar 'active' de todos los nav-items
        document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
        // Poner 'active' al actual
        this.classList.add('active');

        // Ocultar todas las secciones
        document.querySelectorAll('.section').forEach(sec => sec.classList.remove('active'));
        // Mostrar la sección correspondiente
        const sectionId = this.getAttribute('data-section');
        document.getElementById(sectionId).classList.add('active');
    });
});

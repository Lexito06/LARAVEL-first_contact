<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <canvas id="starfield"></canvas>

    <nav class="nav-header">
        <div class="logo">
            <a href="{{ asset('juego') }}">
                <img src="{{ asset('img/logoblanco.png') }}" alt="Logo de la web">
            </a>
        </div>
        <a href="{{ route('juego.index') }}" class="library-btn">
            <i class="fas fa-house"></i> Página Principal
        </a>
    </nav>

    <div class="container">
        <header>
            <h1>Acerca de Nosotros</h1>
            <p>Conoce nuestra historia, misión y el equipo que hace posible todo</p>
        </header>

        <main>
            <section class="hero-section">
                <h2>Nuestra Historia</h2>
                <p>Fundada con la visión de transformar ideas innovadoras en soluciones digitales excepcionales, nuestra
                    empresa ha crecido desde sus humildes comienzos hasta convertirse en un referente en el sector
                    tecnológico. Con años de experiencia y un equipo apasionado por la excelencia, nos dedicamos a crear
                    experiencias digitales que marquen la diferencia.</p>

            </section>

            <div class="cards-grid">
                <div class="card">
                    <span class="card-icon">🎯</span>
                    <h3>Nuestra Misión</h3>
                    <p>Empoderar a empresas y emprendedores con soluciones tecnológicas innovadoras que impulsen su
                        crecimiento y les permitan alcanzar sus objetivos más ambiciosos en el mundo digital.</p>
                </div>

                <div class="card">
                    <span class="card-icon">👁️</span>
                    <h3>Nuestra Visión</h3>
                    <p>Ser la empresa líder en soluciones digitales, reconocida por nuestra capacidad de transformar
                        ideas en realidades tecnológicas que generen impacto positivo en la sociedad.</p>
                </div>

                <div class="card">
                    <span class="card-icon">⭐</span>
                    <h3>Nuestros Valores</h3>
                    <p>Innovación constante, excelencia en cada proyecto, transparencia total con nuestros clientes,
                        trabajo en equipo y compromiso con la sostenibilidad y responsabilidad social.</p>
                </div>
            </div>

            <div class="highlight">
                <p>"La innovación distingue entre un líder y un seguidor. Nosotros elegimos liderar el camino hacia el
                    futuro digital."</p>
            </div>

            <section class="team-section">
                <h2 class="section-title">Nuestro Equipo</h2>
                <p style="text-align: center; color: #94a3b8; margin-bottom: 20px;">
                    Conoce a las personas talentosas que hacen posible nuestra misión cada día
                </p>

                <div class="team-grid">
                    <div class="team-member">
                        <div class="team-avatar">DS</div>
                        <h4>Dalian Stetcu</h4>
                        <div class="team-role">CEO & Fundadora</div>
                        <p>Visionario tecnológica con más de 10 años de experiencia en videojuegos y
                            desarrollo de páginas web.</p>
                    </div>
                    <div class="team-member">
                        <div class="team-avatar">MG</div>
                        <h4>Mencía Gamonal</h4>
                        <div class="team-role">CEO & Fundadora</div>
                        <p>Seleccionadora de colores para esta página</p>
                    </div>
                </div>
            </section>

            <section class="team-section">
                <h2 class="section-title">¿Por Qué Elegirnos?</h2>

                <div class="cards-grid">
                    <div class="card">
                        <span class="card-icon">🚀</span>
                        <h3>Innovación Constante</h3>
                        <p>Mantenemos el pulso de las últimas tendencias tecnológicas para ofrecer soluciones
                            vanguardistas que te den ventaja competitiva.</p>
                    </div>

                    <div class="card">
                        <span class="card-icon">🤝</span>
                        <h3>Enfoque Personalizado</h3>
                        <p>Cada proyecto es único. Desarrollamos soluciones a medida que se adaptan perfectamente a tus
                            necesidades específicas y objetivos de negocio.</p>
                    </div>

                    <div class="card">
                        <span class="card-icon">🏆</span>
                        <h3>Calidad Garantizada</h3>
                        <p>Nuestros rigurosos procesos de control de calidad aseguran que cada entregable cumpla con los
                            más altos estándares de la industria.</p>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2025 Lúmina. Todos los derechos reservados.</p>
        </footer>
    </div>

    <a href="#" class="back-to-top" title="Volver arriba">↑</a>

    <script src="{{ asset('js/footer.js') }}"></script>

</body>

</html>

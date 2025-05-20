<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }

        body {
            background: linear-gradient(to bottom, #0a192f, #0d253f);
            color: #fff;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .star {
            position: absolute;
            background-color: #fff;
            border-radius: 50%;
            opacity: 0;
            animation: twinkle 3s infinite ease-in-out;
        }

        @keyframes twinkle {
            0% {opacity: 0;}
            50% {opacity: 1;}
            100% {opacity: 0;}
        }

        header {
            padding: 2rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: #64ffda;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2rem;
        }

        nav ul li a {
            color: #ccd6f6;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        nav ul li a:hover {
            color: #64ffda;
        }

        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #ccd6f6;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 60%;
            height: 2px;
            background-color: #64ffda;
            bottom: -8px;
            left: 0;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: #8892b0;
            margin-bottom: 3rem;
            max-width: 600px;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 6rem;
        }

        .about-text p {
            margin-bottom: 1.5rem;
            line-height: 1.7;
            color: #8892b0;
        }

        .about-text p strong {
            color: #ccd6f6;
        }

        .about-image {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 20px 80px -20px rgba(0, 0, 0, 0.5);
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(100, 255, 218, 0.1), transparent);
            z-index: 1;
        }

        .values {
            margin-top: 5rem;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .value-card {
            background: rgba(10, 25, 47, 0.7);
            border: 1px solid rgba(100, 255, 218, 0.3);
            padding: 2rem;
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px -15px rgba(100, 255, 218, 0.2);
        }

        .value-icon {
            color: #64ffda;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .value-title {
            color: #ccd6f6;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .value-text {
            color: #8892b0;
            line-height: 1.6;
        }

        .team {
            margin-top: 6rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 3rem;
        }

        .team-member {
            text-align: center;
        }

        .member-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 1.5rem;
            border: 3px solid rgba(100, 255, 218, 0.3);
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .member-name {
            color: #ccd6f6;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .member-role {
            color: #64ffda;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .member-bio {
            color: #8892b0;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .cta {
            margin-top: 6rem;
            text-align: center;
            padding: 4rem 2rem;
            background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)),
                       url('/api/placeholder/1200/300') center/cover;
            border-radius: 12px;
        }

        .cta h2 {
            font-size: 2.5rem;
            color: #ccd6f6;
            margin-bottom: 1.5rem;
        }

        .cta p {
            color: #8892b0;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: transparent;
            color: #64ffda;
            border: 1px solid #64ffda;
            border-radius: 4px;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
            margin: 0 0.5rem;
        }

        .btn:hover {
            background-color: rgba(100, 255, 218, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px -10px rgba(100, 255, 218, 0.3);
        }

        footer {
            padding: 3rem 5%;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: left;
        }

        .footer-column h3 {
            color: #ccd6f6;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.8rem;
        }

        .footer-column ul li a {
            color: #8892b0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #64ffda;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(100, 255, 218, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64ffda;
            transition: all 0.3s;
        }

        .social-link:hover {
            background-color: rgba(100, 255, 218, 0.2);
            transform: translateY(-3px);
        }

        .copyright {
            margin-top: 3rem;
            color: #8892b0;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .team-grid {
                gap: 2rem;
            }

            nav ul {
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="stars" id="stars"></div>

    <header>
        <div class="logo">SU EMPRESA</div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="about">
            <h1 class="section-title">Acerca de Nosotros</h1>
            <p class="section-subtitle">Descubra nuestra historia, misión y los valores que nos han convertido en líderes de la industria.</p>

            <div class="about-content">
                <div class="about-text">
                    <p>Fundada en 2010, <strong>Su Empresa</strong> ha evolucionado de una pequeña startup a una compañía innovadora reconocida por su excelencia y compromiso con la calidad. Nuestra trayectoria está marcada por el continuo deseo de superar límites y transformar ideas revolucionarias en soluciones tangibles.</p>

                    <p>En <strong>Su Empresa</strong>, entendemos que el éxito no se mide solo por los resultados financieros, sino por el impacto positivo que generamos en nuestros clientes y en la sociedad. Nuestra filosofía se centra en la creación de valor sostenible mediante la combinación perfecta de tecnología avanzada, creatividad sin límites y un profundo entendimiento de las necesidades del mercado actual.</p>

                    <p>Lo que nos diferencia es nuestra capacidad para anticipar tendencias y adaptarnos rápidamente a un entorno en constante evolución. Nuestro equipo multidisciplinario de expertos trabaja incansablemente para garantizar que cada proyecto no solo cumpla, sino que supere las expectativas de nuestros clientes más exigentes.</p>
                </div>
                <div class="about-image">
                    <img src="/api/placeholder/600/400" alt="Nuestra empresa">
                </div>
            </div>
        </section>

        <section class="values">
            <h2 class="section-title">Nuestros Valores</h2>
            <p class="section-subtitle">Los principios fundamentales que guían nuestras acciones y decisiones cada día.</p>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="value-title">Excelencia</h3>
                    <p class="value-text">Nos esforzamos constantemente por alcanzar los más altos estándares en todo lo que hacemos, desde la atención al cliente hasta el desarrollo de productos innovadores.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title">Innovación</h3>
                    <p class="value-text">Fomentamos un ambiente donde las ideas creativas florezcan y se transformen en soluciones pioneras que definan el futuro de nuestra industria.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Integridad</h3>
                    <p class="value-text">Actuamos con honestidad, transparencia y ética en todas nuestras interacciones, construyendo relaciones basadas en la confianza y el respeto mutuo.</p>
                </div>
            </div>
        </section>

        <section class="team">
            <h2 class="section-title">Nuestro Equipo</h2>
            <p class="section-subtitle">Conozca a los talentosos profesionales que hacen posible nuestra visión.</p>

            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="/api/placeholder/180/180" alt="Director Ejecutivo">
                    </div>
                    <h3 class="member-name">Alejandro Torres</h3>
                    <p class="member-role">Director Ejecutivo</p>
                    <p class="member-bio">Con más de 15 años de experiencia en el sector, Alejandro ha sido fundamental en el crecimiento y la visión estratégica de la empresa.</p>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="/api/placeholder/180/180" alt="Directora de Operaciones">
                    </div>
                    <h3 class="member-name">María González</h3>
                    <p class="member-role">Directora de Operaciones</p>
                    <p class="member-bio">Su capacidad para optimizar procesos y liderar equipos ha transformado nuestra eficiencia operativa y calidad de servicio.</p>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="/api/placeholder/180/180" alt="Director de Tecnología">
                    </div>
                    <h3 class="member-name">Carlos Ramírez</h3>
                    <p class="member-role">Director de Tecnología</p>
                    <p class="member-bio">La visión tecnológica de Carlos ha permitido a la empresa mantenerse a la vanguardia de la innovación digital.</p>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="/api/placeholder/180/180" alt="Directora de Marketing">
                    </div>
                    <h3 class="member-name">Sofía Méndez</h3>
                    <p class="member-role">Directora de Marketing</p>
                    <p class="member-bio">Su enfoque creativo y analítico ha impulsado el crecimiento de nuestra marca en el mercado global.</p>
                </div>
            </div>
        </section>

        <section class="cta">
            <h2>¿Listo para colaborar con nosotros?</h2>
            <p>Descubra cómo podemos ayudarle a alcanzar sus objetivos empresariales y crear soluciones que marquen la diferencia.</p>
            <a href="#" class="btn">Contáctenos</a>
            <a href="#" class="btn">Ver Servicios</a>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Su Empresa</h3>
                <p style="color: #8892b0; line-height: 1.6;">Transformando ideas en soluciones innovadoras desde 2010.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Servicios</h3>
                <ul>
                    <li><a href="#">Consultoría Estratégica</a></li>
                    <li><a href="#">Desarrollo Tecnológico</a></li>
                    <li><a href="#">Marketing Digital</a></li>
                    <li><a href="#">Diseño e Innovación</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contacto</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt" style="color:#64ffda; margin-right:8px;"></i> Calle Principal 123, Ciudad</li>
                    <li><i class="fas fa-phone" style="color:#64ffda; margin-right:8px;"></i> +123 456 7890</li>
                    <li><i class="fas fa-envelope" style="color:#64ffda; margin-right:8px;"></i> info@suempresa.com</li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2025 Su Empresa. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        // Crear estrellas en el fondo
        const starsContainer = document.getElementById('stars');
        const starsCount = 200;

        for (let i = 0; i < starsCount; i++) {
            const star = document.createElement('div');
            star.classList.add('star');

            // Tamaño aleatorio para las estrellas
            const size = Math.random() * 3;
            star.style.width = `${size}px`;
            star.style.height = `${size}px`;

            // Posición aleatoria
            const posX = Math.random() * 100;
            const posY = Math.random() * 100;
            star.style.left = `${posX}%`;
            star.style.top = `${posY}%`;

            // Animación con retraso aleatorio
            star.style.animationDelay = `${Math.rando   m() * 3}s`;

            starsContainer.appendChild(star);
        }   
    </script>
</body>
</html>

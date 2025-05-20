<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidad</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', 'Helvetica Neue', sans-serif;
            background-color: #0a1529;
            color: #e0e6f0;
            background-image:
                radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            line-height: 1.6;
        }

        /* Contenedor principal */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #1a2a4d 0%, #0d1b33 100%);
            padding: 40px 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        /* Estrellas en el header */
        .stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .star {
            position: absolute;
            background-color: #fff;
            border-radius: 50%;
            animation: twinkle 4s infinite ease-in-out;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.2; }
            50% { opacity: 0.8; }
        }

        /* Título principal */
        h1 {
            font-size: 2.8rem;
            color: #ffffff;
            text-align: center;
            margin: 0;
            font-weight: 300;
            letter-spacing: 1px;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 10px rgba(0, 100, 255, 0.3);
        }

        /* Secciones */
        section {
            background: rgba(22, 38, 71, 0.8);
            backdrop-filter: blur(10px);
            margin: 40px 0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(79, 122, 214, 0.2);
            position: relative;
            overflow: hidden;
        }

        section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, #4f7ad6, #2a4580);
        }

        /* Títulos de secciones */
        h2 {
            color: #5d9aff;
            font-size: 1.8rem;
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(93, 154, 255, 0.3);
        }

        h3 {
            color: #8ab4ff;
            font-size: 1.4rem;
            margin-top: 25px;
        }

        /* Enlaces */
        a {
            color: #5d9aff;
            text-decoration: none;
            border-bottom: 1px dotted #5d9aff;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #96c2ff;
            border-bottom-color: #96c2ff;
        }

        /* Lista */
        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 30px 0;
            margin-top: 60px;
            color: #8ab4ff;
            font-size: 0.9rem;
            border-top: 1px solid rgba(93, 154, 255, 0.2);
        }

        /* Botón de contacto */
        .contact-btn {
            background: linear-gradient(135deg, #4f7ad6 0%, #375497 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(79, 122, 214, 0.3);
            margin-top: 20px;
        }

        .contact-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79, 122, 214, 0.4);
        }

        /* Fecha de actualización */
        .update-date {
            font-style: italic;
            color: #8ab4ff;
            text-align: center;
            margin-bottom: 40px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            section {
                padding: 20px;
            }

            h2 {
                font-size: 1.5rem;
            }

            h3 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Generación dinámica de estrellas con JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const createStars = (element, count) => {
                const container = document.createElement('div');
                container.className = 'stars';

                for (let i = 0; i < count; i++) {
                    const star = document.createElement('div');
                    star.className = 'star';

                    // Tamaño aleatorio entre 1-3px
                    const size = Math.random() * 2 + 1;
                    star.style.width = `${size}px`;
                    star.style.height = `${size}px`;

                    // Posición aleatoria
                    star.style.left = `${Math.random() * 100}%`;
                    star.style.top = `${Math.random() * 100}%`;

                    // Animación con delay aleatorio
                    star.style.animationDelay = `${Math.random() * 4}s`;

                    container.appendChild(star);
                }

                element.appendChild(container);
            };

            // Añadir estrellas al header
            const header = document.querySelector('header');
            createStars(header, 50);

            // Añadir estrellas a cada sección
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                createStars(section, 20);
            });
        });
    </script>

    <header>
        <div class="container">
            <h1>Política de Privacidad</h1>
        </div>
    </header>

    <div class="container">
        <p class="update-date">Última actualización: 20 de mayo de 2025</p>

        <section>
            <h2>Introducción</h2>
            <p>En [Nombre de la Empresa], respetamos su privacidad y nos comprometemos a proteger sus datos personales. Esta política de privacidad le informará sobre cómo cuidamos sus datos personales cuando visita nuestro sitio web y le informará sobre sus derechos de privacidad y cómo la ley lo protege.</p>
            <p>Por favor, lea detenidamente esta política de privacidad para entender nuestras políticas y prácticas con respecto a sus datos personales y cómo los trataremos.</p>
        </section>

        <section>
            <h2>Información que recopilamos</h2>
            <p>Podemos recopilar, utilizar, almacenar y transferir diferentes tipos de datos personales sobre usted, que hemos agrupado de la siguiente manera:</p>
            <ul>
                <li><strong>Datos de identidad:</strong> Incluye nombre, apellidos, nombre de usuario o identificador similar.</li>
                <li><strong>Datos de contacto:</strong> Incluye dirección de correo electrónico y números de teléfono.</li>
                <li><strong>Datos técnicos:</strong> Incluye dirección IP, datos de inicio de sesión, tipo y versión del navegador, configuración de zona horaria, tipos y versiones de plugins del navegador, sistema operativo y plataforma.</li>
                <li><strong>Datos de perfil:</strong> Incluye su nombre de usuario y contraseña, compras o pedidos realizados por usted, sus intereses, preferencias, comentarios y respuestas a encuestas.</li>
                <li><strong>Datos de uso:</strong> Incluye información sobre cómo utiliza nuestro sitio web y servicios.</li>
            </ul>

            <h3>Cookies y tecnologías similares</h3>
            <p>Utilizamos cookies y tecnologías de seguimiento similares para rastrear la actividad en nuestro sitio web y almacenar cierta información. Las cookies son archivos con una pequeña cantidad de datos que pueden incluir un identificador único anónimo.</p>
            <p>Puede instruir a su navegador para que rechace todas las cookies o para que le avise cuando se envía una cookie. Sin embargo, si no acepta cookies, es posible que no pueda utilizar algunas partes de nuestro servicio.</p>
        </section>

        <section>
            <h2>Cómo utilizamos su información</h2>
            <p>Utilizamos los datos que recopilamos para diversos fines, incluyendo:</p>
            <ul>
                <li>Proporcionar y mantener nuestro servicio</li>
                <li>Notificarle sobre cambios en nuestro servicio</li>
                <li>Permitirle participar en funciones interactivas de nuestro servicio cuando decida hacerlo</li>
                <li>Proporcionar atención y soporte al cliente</li>
                <li>Proporcionar análisis o información valiosa para que podamos mejorar el servicio</li>
                <li>Monitorear el uso del servicio</li>
                <li>Detectar, prevenir y abordar problemas técnicos</li>
                <li>Cumplir con cualquier otro propósito para el cual la proporcione</li>
            </ul>
        </section>

        <section>
            <h2>Divulgación de sus datos personales</h2>
            <p>Podemos compartir su información personal con las siguientes partes:</p>
            <ul>
                <li><strong>Proveedores de servicios:</strong> Para realizar tareas de servicio en nuestro nombre.</li>
                <li><strong>Socios comerciales:</strong> Para ofrecerle ciertos productos, servicios o promociones.</li>
                <li><strong>Autoridades:</strong> Cuando sea requerido por la ley o en respuesta a solicitudes legales válidas.</li>
            </ul>
            <p>No venderemos, alquilaremos ni compartiremos su información personal con terceros sin su consentimiento, excepto según lo descrito en esta Política de Privacidad.</p>
        </section>

        <section>
            <h2>Seguridad de datos</h2>
            <p>La seguridad de sus datos es importante para nosotros, pero recuerde que ningún método de transmisión por Internet o método de almacenamiento electrónico es 100% seguro. Mientras nos esforzamos por utilizar medios comercialmente aceptables para proteger sus datos personales, no podemos garantizar su seguridad absoluta.</p>
            <p>Hemos implementado medidas técnicas y organizativas apropiadas para proteger sus datos personales contra la pérdida accidental, el acceso no autorizado, la alteración y la divulgación.</p>
        </section>

        <section>
            <h2>Sus derechos legales</h2>
            <p>Dependiendo de su ubicación, puede tener ciertos derechos con respecto a sus datos personales, como:</p>
            <ul>
                <li>El derecho a acceder, actualizar o eliminar la información que tenemos sobre usted</li>
                <li>El derecho de rectificación</li>
                <li>El derecho a oponerse</li>
                <li>El derecho a la restricción del procesamiento</li>
                <li>El derecho a la portabilidad de datos</li>
                <li>El derecho a retirar el consentimiento</li>
            </ul>
            <p>Si desea ejercer alguno de estos derechos, contáctenos utilizando la información proporcionada a continuación.</p>
        </section>

        <section>
            <h2>Cambios a esta política de privacidad</h2>
            <p>Podemos actualizar nuestra Política de Privacidad de vez en cuando. Le notificaremos cualquier cambio publicando la nueva Política de Privacidad en esta página.</p>
            <p>Le recomendamos que revise esta Política de Privacidad periódicamente para cualquier cambio. Los cambios a esta Política de Privacidad son efectivos cuando se publican en esta página.</p>
        </section>

        <section>
            <h2>Contáctenos</h2>
            <p>Si tiene alguna pregunta sobre esta Política de Privacidad, puede contactarnos:</p>
            <ul>
                <li>Por correo electrónico: privacy@empresa.com</li>
                <li>Por teléfono: +12 345 678 910</li>
                <li>Por correo postal: Calle Principal 123, Ciudad, CP 12345, País</li>
            </ul>
            <a href="#" class="contact-btn">Formulario de contacto</a>
        </section>

        <footer>
            <p>&copy; 2025 [Nombre de la Empresa]. Todos los derechos reservados.</p>
        </footer>
    </div>  
</body>
</html>

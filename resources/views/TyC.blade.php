<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #050A1F;
            color: #e6e6e6;
            line-height: 1.6;
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.2) 1px, transparent 1px),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.2) 1px, transparent 1px);
            background-size: 50px 50px;
            background-attachment: fixed;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(5, 26, 75, 0.9) 0%, rgba(7, 12, 36, 0.85) 100%);
            z-index: -1;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            padding: 20px 0;
            border-bottom: 1px solid rgba(95, 158, 255, 0.3);
        }

        header::after {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 30%;
            right: 30%;
            height: 3px;
            background: linear-gradient(90deg, transparent, #5F9EFF, transparent);
        }

        header h1 {
            font-size: 2.6rem;
            color: #ffffff;
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(95, 158, 255, 0.5);
        }

        header p {
            color: #a3c2ff;
            font-size: 1.1rem;
        }

        main {
            background-color: rgba(15, 23, 42, 0.7);
            padding: 30px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(95, 158, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        section {
            margin-bottom: 30px;
        }

        h2 {
            font-size: 1.8rem;
            color: #5F9EFF;
            margin-bottom: 15px;
            border-bottom: 1px solid rgba(95, 158, 255, 0.3);
            padding-bottom: 8px;
        }

        h3 {
            font-size: 1.4rem;
            color: #a3c2ff;
            margin: 20px 0 10px;
        }

        p, ul, ol {
            margin-bottom: 15px;
        }

        ul, ol {
            padding-left: 20px;
        }

        li {
            margin-bottom: 8px;
        }

        .highlight {
            background: rgba(95, 158, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            border-left: 3px solid #5F9EFF;
            margin: 20px 0;
        }

        .effective-date {
            text-align: right;
            font-style: italic;
            margin-top: 30px;
            color: #a3c2ff;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgba(95, 158, 255, 0.8);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .back-to-top:hover {
            background: rgba(95, 158, 255, 1);
            transform: translateY(-3px);
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #a3c2ff;
            font-size: 0.9rem;
            border-top: 1px solid rgba(95, 158, 255, 0.3);
            padding-top: 20px;
        }

        .table-of-contents {
            background: rgba(15, 30, 60, 0.5);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .table-of-contents h3 {
            margin-top: 0;
            margin-bottom: 15px;
            text-align: center;
        }

        .table-of-contents ul {
            list-style-type: none;
            padding-left: 0;
        }

        .table-of-contents a {
            color: #a3c2ff;
            text-decoration: none;
            transition: color 0.3s;
            display: block;
            padding: 5px 0;
            border-bottom: 1px dashed rgba(95, 158, 255, 0.2);
        }

        .table-of-contents a:hover {
            color: #ffffff;
        }

        a {
            color: #5F9EFF;
            text-decoration: none;
            transition: all 0.3s;
        }

        a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            main {
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
    <div class="container">
        <header>
            <h1>Términos y Condiciones</h1>
            <p>Lee atentamente nuestras políticas y acuerdos</p>
        </header>

        <main>
            <div class="table-of-contents">
                <h3>Contenido</h3>
                <ul>
                    <li><a href="#introduccion">1. Introducción</a></li>
                    <li><a href="#definiciones">2. Definiciones</a></li>
                    <li><a href="#uso-servicio">3. Uso del Servicio</a></li>
                    <li><a href="#cuentas-usuarios">4. Cuentas de Usuario</a></li>
                    <li><a href="#propiedad-intelectual">5. Propiedad Intelectual</a></li>
                    <li><a href="#privacidad">6. Privacidad y Datos Personales</a></li>
                    <li><a href="#limitacion-responsabilidad">7. Limitación de Responsabilidad</a></li>
                    <li><a href="#modificaciones">8. Modificaciones</a></li>
                    <li><a href="#terminacion">9. Terminación</a></li>
                    <li><a href="#ley-aplicable">10. Ley Aplicable y Jurisdicción</a></li>
                    <li><a href="#contacto">11. Contacto</a></li>
                </ul>
            </div>

            <section id="introduccion">
                <h2>1. Introducción</h2>
                <p>Bienvenido a nuestro sitio web. Estos Términos y Condiciones rigen el uso de nuestros servicios, funcionalidades y contenidos disponibles a través de nuestra plataforma. Al acceder o utilizar nuestro sitio web, usted acepta estar legalmente vinculado por estos Términos y Condiciones.</p>

                <div class="highlight">
                    <p>Le recomendamos leer cuidadosamente este documento antes de utilizar nuestros servicios. Si no está de acuerdo con alguna parte de estos términos, le pedimos que se abstenga de utilizar nuestro sitio web.</p>
                </div>
            </section>

            <section id="definiciones">
                <h2>2. Definiciones</h2>
                <p>Para una mejor comprensión de estos Términos y Condiciones, se establecen las siguientes definiciones:</p>
                <ul>
                    <li><strong>"Sitio web"</strong>: Se refiere a nuestra plataforma, incluyendo todos sus contenidos, servicios y funcionalidades.</li>
                    <li><strong>"Usuario"</strong>: Cualquier persona que acceda o utilice nuestro sitio web.</li>
                    <li><strong>"Contenido"</strong>: Incluye textos, gráficos, logotipos, iconos, imágenes, clips de audio, descargas digitales, recopilaciones de datos y software.</li>
                    <li><strong>"Cuenta"</strong>: El registro personal creado por un usuario para acceder a funcionalidades específicas de nuestro sitio web.</li>
                </ul>
            </section>

            <section id="uso-servicio">
                <h2>3. Uso del Servicio</h2>
                <p>Al utilizar nuestro sitio web, usted se compromete a:</p>
                <ul>
                    <li>Usar el servicio de manera lícita y de acuerdo con estos Términos y Condiciones.</li>
                    <li>No utilizar el sitio web de manera que pueda dañar, deshabilitar, sobrecargar o deteriorar nuestros servidores o redes.</li>
                    <li>No intentar acceder de forma no autorizada a cualquier parte del servicio, otras cuentas, sistemas informáticos o redes conectadas a nuestro sitio web.</li>
                    <li>No utilizar robots, arañas web u otros dispositivos automáticos para acceder al sitio web con fines no autorizados.</li>
                </ul>

                <h3>3.1 Restricciones de Uso</h3>
                <p>Queda expresamente prohibido:</p>
                <ul>
                    <li>Utilizar el sitio web para fines ilegales o no autorizados.</li>
                    <li>Transmitir cualquier material que contenga virus informáticos o cualquier código diseñado para interrumpir, destruir o limitar la funcionalidad del sitio web.</li>
                    <li>Realizar actividades que infrinjan los derechos de propiedad intelectual de terceros.</li>
                    <li>Publicar contenido difamatorio, obsceno, ofensivo o contrario a la moral y buenas costumbres.</li>
                </ul>
            </section>

            <section id="cuentas-usuarios">
                <h2>4. Cuentas de Usuario</h2>
                <p>Para acceder a determinadas funcionalidades de nuestro sitio web, puede ser necesario crear una cuenta de usuario. En tal caso, usted se compromete a:</p>
                <ul>
                    <li>Proporcionar información precisa, actualizada y completa durante el proceso de registro.</li>
                    <li>Mantener la confidencialidad de su contraseña y nombre de usuario.</li>
                    <li>Asumir la responsabilidad por todas las actividades realizadas desde su cuenta.</li>
                    <li>Notificarnos inmediatamente sobre cualquier uso no autorizado de su cuenta.</li>
                </ul>

                <div class="highlight">
                    <p>Nos reservamos el derecho de suspender o terminar su cuenta si consideramos que ha violado estos Términos y Condiciones o si su conducta puede perjudicar a nuestro sitio web o a otros usuarios.</p>
                </div>
            </section>

            <section id="propiedad-intelectual">
                <h2>5. Propiedad Intelectual</h2>
                <p>Todo el contenido presente en nuestro sitio web, incluyendo pero no limitado a textos, gráficos, logotipos, iconos, imágenes, clips de audio, descargas digitales y software, es propiedad de nuestra empresa o de nuestros proveedores de contenido y está protegido por las leyes de propiedad intelectual aplicables.</p>

                <h3>5.1 Licencia de Uso</h3>
                <p>Se otorga una licencia limitada, no exclusiva, no transferible y revocable para:</p>
                <ul>
                    <li>Acceder y visualizar el contenido de nuestro sitio web para uso personal y no comercial.</li>
                    <li>No modificar, reproducir, distribuir, transmitir, exhibir, vender, licenciar o explotar de cualquier otra manera el contenido sin nuestro consentimiento previo por escrito.</li>
                </ul>
            </section>

            <section id="privacidad">
                <h2>6. Privacidad y Datos Personales</h2>
                <p>La recolección y tratamiento de datos personales se rige por nuestra Política de Privacidad, que forma parte integral de estos Términos y Condiciones. Al utilizar nuestro sitio web, usted acepta el tratamiento de sus datos personales de acuerdo con nuestra Política de Privacidad.</p>
            </section>

            <section id="limitacion-responsabilidad">
                <h2>7. Limitación de Responsabilidad</h2>
                <p>En la medida máxima permitida por la ley aplicable:</p>
                <ul>
                    <li>Nuestro sitio web se proporciona "tal cual" y "según disponibilidad", sin garantías de ningún tipo, ya sean expresas o implícitas.</li>
                    <li>No garantizamos que el sitio web sea ininterrumpido, oportuno, seguro o libre de errores.</li>
                    <li>No seremos responsables por daños indirectos, incidentales, especiales, consecuentes o punitivos, ni por pérdida de beneficios resultantes de su uso del sitio web.</li>
                </ul>
            </section>

            <section id="modificaciones">
                <h2>8. Modificaciones</h2>
                <p>Nos reservamos el derecho de modificar estos Términos y Condiciones en cualquier momento y a nuestra sola discreción. Las modificaciones entrarán en vigor inmediatamente después de su publicación en el sitio web.</p>
                <p>Es su responsabilidad revisar periódicamente estos Términos y Condiciones para estar al tanto de cualquier cambio. El uso continuado del sitio web después de la publicación de las modificaciones constituirá su aceptación de dichos cambios.</p>
            </section>

            <section id="terminacion">
                <h2>9. Terminación</h2>
                <p>Podemos terminar o suspender su acceso al sitio web de forma inmediata, sin previo aviso ni responsabilidad, por cualquier motivo, incluyendo, sin limitación, si usted incumple estos Términos y Condiciones.</p>
                <p>Tras la terminación, su derecho a utilizar el sitio web cesará inmediatamente.</p>
            </section>

            <section id="ley-aplicable">
                <h2>10. Ley Aplicable y Jurisdicción</h2>
                <p>Estos Términos y Condiciones se regirán e interpretarán de acuerdo con las leyes vigentes en [PAÍS/JURISDICCIÓN], sin considerar sus disposiciones sobre conflictos de leyes.</p>
                <p>Cualquier disputa relacionada con estos Términos y Condiciones estará sujeta a la jurisdicción exclusiva de los tribunales competentes de [CIUDAD/PAÍS].</p>
            </section>

            <section id="contacto">
                <h2>11. Contacto</h2>
                <p>Si tiene preguntas o comentarios sobre estos Términos y Condiciones, no dude en contactarnos:</p>
                <ul>
                    <li>Correo electrónico: info@tuempresa.com</li>
                    <li>Teléfono: +00 123 456 789</li>
                    <li>Dirección: Calle Principal 123, Ciudad, País</li>
                </ul>
            </section>

            <div class="effective-date">
                <p>Última actualización: 20 de mayo de 2025</p>
            </div>
        </main>

        <footer>
            <p>&copy; 2025 Tu Empresa. Todos los derechos reservados.</p>
        </footer>
    </div>

    <a href="#" class="back-to-top" title="Volver arriba">↑</a>
</body>
</html>

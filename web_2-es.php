<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Pixiu X">
    <title>Pixiu X - Create a website with Pixiu X </title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://pixiux.com/Logos/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://pixiux.com/Logos/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://pixiux.com/Logos/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://pixiux.com/Logos/favicon-16x16.png" />
    <link rel="manifest" href="https://pixiux.com/Logos/site.webmanifest" />
    <link rel="mask-icon" href="https://pixiux.com/Logos/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="https://pixiux.com/Logos/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="https://pixiux.com/Logos/mstile-144x144.png" />
    <meta name="msapplication-config" content="https://pixiux.com/Logos/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css" />

    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16633775810"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "AW-16633775810");
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123456789-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-123456789-1');
    </script>

    <!-- Event snippet for Web Form conversion page -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof url != "undefined") {
                    window.location = url;
                }
            };
            gtag("event", "conversion", {
                send_to: "AW-16633775810/IXCmCKqYisEZEMKNzfs9",
                event_callback: callback,
            });
            return false;
        }
    </script>
</head>

<body>
    <!-- Page Content -->
    <?php include 'components/header.php'; ?>

    <h2 class="text-center mb-4" style="font-size: 3rem;">Impulsa tu negocio con un Sitio Web hecho a medida</h2>
    <!-- Nueva Sección -->
    <section style="background-color: #fee4d9; padding: 40px 0;">
        <div class="container-fluid">
            <div class="card border-0">
                <div class="row no-gutters">
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.5rem; font-weight: bold;">Beneficios de tener un sitio web:</h5>
                            <p class="card-text">
                                <span class="benefit-item">
                                    <i class="fas fa-check-circle" style="color: #28a745;"></i> Abre un canal innovador para ventas y comunicación. <i class="fas fa-shopping-cart" style="color: #ff6347;"></i>
                                </span><br>
                                <span class="benefit-item">
                                    <i class="fas fa-check-circle" style="color: #28a745;"></i> Mejora la imagen profesional de tu marca. <i class="fas fa-chart-line" style="color: #1e90ff;"></i>
                                </span><br>
                                <span class="benefit-item">
                                    <i class="fas fa-check-circle" style="color: #28a745;"></i> Amplía tu alcance, permitiéndote vender productos digitales como cursos, sesiones, libros electrónicos, videojuegos y otros recursos descargables. <i class="fas fa-globe" style="color: #ff8c00;"></i>
                                </span><br>
                                <span class="benefit-item">
                                    <i class="fas fa-check-circle" style="color: #28a745;"></i> Facilita la creación y gestión de contenido propio mediante un blog autogestionable. <i class="fas fa-blog" style="color: #6a5acd;"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img src="sources/images/blog_01.jpeg" class="card-img" alt="Imagen Descriptiva">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sección de Servicios -->
    <section class="container-fluid" style="margin-top: 80px;">
        <h2 class="text-center mb-4 section-title">Nuestros Servicios</h2>
        <div class="row">
            <!-- Primera tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="sources/images/blog_01.jpeg" class="service-card-img" alt="Oferta Express">
                    <div class="service-card-body">
                        <h5 class="service-card-title">Oferta Express</h5>
                        <h6 class="service-card-subtitle">3 días de entrega</h6>
                        <p class="service-card-price"><span style="text-decoration: line-through; color: #888;">$499</span> <strong>$199</strong></p>
                        <ul class="service-card-list">
                            <li><i class="fas fa-check-circle" style="color: #28a745;"></i> Number of Pages: 1</li>
                            <li><i class="fas fa-times-circle" style="color: #dc3545;"></i> No es para páginas ecommerce</li>
                            <li><i class="fas fa-paint-brush" style="color: #007bff;"></i> Diseño, Logo, Branding</li>
                        </ul>
                        <h6 class="service-card-subtitle">Adicionales opcionales:</h6>
                        <ul class="service-card-list">
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Diseño de Logo: +$50</li>
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Diseños adicionales: +$25</li>
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Branding (Colores): +$50</li>
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Páginas adicionales: +$50</li>
                        </ul>
                        <p class="card-text"><strong>Entrega en 5 días</strong> desde que recibimos toda la información relevante para completar el proyecto.</p>
                        <button class="custom-btn btn-block">Comprar</button>
                        <p class="text-center" style="color: #ff6347;">¡Oferta limitada!</p>
                        <div class="payment-icons">
                            <i class="fab fa-cc-paypal" style="color: #003087;"></i>
                            <i class="fab fa-cc-visa" style="color: #1a1f71;"></i>
                            <i class="fas fa-credit-card" style="color: #007bff;"></i>
                            <i class="fas fa-money-bill-wave" style="color: #28a745;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="sources/images/blog_01.jpeg" class="service-card-img" alt="Tienda Online">
                    <div class="service-card-body">
                        <h5 class="service-card-title">Tienda Online</h5>
                        <h6 class="service-card-subtitle">Ecommerce Express</h6>
                        <p class="service-card-price"><span style="text-decoration: line-through; color: #888;">$999</span> <strong>$499</strong></p>
                        <ul class="service-card-list">
                            <li><i class="fas fa-check-circle" style="color: #28a745;"></i> Páginas: Inicio, Página de productos, Contacto, Página autogestionable (editor de productos, Agregar/Eliminar productos)</li>
                            <li><i class="fas fa-shopping-cart" style="color: #ff6347;"></i> Cart online</li>
                            <li><i class="fas fa-credit-card" style="color: #007bff;"></i> Acepta pagos online</li>
                            <li><i class="fas fa-user" style="color: #6a5acd;"></i> Login para historial de compras</li>
                        </ul>
                        <h6 class="service-card-subtitle">Adicionales opcionales:</h6>
                        <ul class="service-card-list">
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Diseño de Logo: +$50</li>
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Diseños adicionales: +$25</li>
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Branding (Colores): +$50</li>
                            <li><i class="fas fa-plus-circle" style="color: #ffc107;"></i> Páginas adicionales: +$50</li>
                        </ul>
                        <p class="card-text"><strong>Entrega en 7 días</strong> desde que recibimos toda la información relevante para completar el proyecto.</p>
                        <button class="custom-btn btn-block">Comprar</button>
                        <p class="text-center" style="color: #ff6347;">¡Oferta limitada!</p>
                        <div class="payment-icons">
                            <i class="fab fa-cc-paypal" style="color: #003087;"></i>
                            <i class="fab fa-cc-visa" style="color: #1a1f71;"></i>
                            <i class="fas fa-credit-card" style="color: #007bff;"></i>
                            <i class="fas fa-money-bill-wave" style="color: #28a745;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tercera tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="sources/images/blog_01.jpeg" class="service-card-img" alt="Web Personalizada">
                    <div class="service-card-body">
                        <h5 class="service-card-title">Web Personalizada</h5>
                        <h6 class="service-card-subtitle">¿Buscas algo más personalizado?</h6>
                        <p class="card-text">
                            <i class="fas fa-check-circle" style="color: #28a745;"></i> Necesitas diseño de tu marca y páginas web para convertir a tus posibles clientes.
                        </p>
                        <button class="custom-btn btn-block">Contactanos</button>
                        <div class="payment-icons">
                            <i class="fab fa-cc-paypal" style="color: #003087;"></i>
                            <i class="fab fa-cc-visa" style="color: #1a1f71;"></i>
                            <i class="fas fa-credit-card" style="color: #007bff;"></i>
                            <i class="fas fa-money-bill-wave" style="color: #28a745;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nueva Sección con Imágenes y Botones de Compra -->
    <section class="container-fluid" style="margin-top: 80px;">
        <h2 class="text-center mb-4">Descubre Variedades de Diseño para tu Página Web</h2>
        <h4 class="text-center mb-4">¡Dispones de más de 100 plantillas web para seleccionar o podemos crear una a medida para ti!</h4>
        <hr>
        <h5 class="text-center mb-4">PÁGINA WEB PERSONALIZADA CON PAGOS EN LÍNEA</h5>
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="sources/images/blog_01.jpeg" class="img-fluid rescale-image" alt="Imagen 1">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="sources/images/blog_01.jpeg" class="img-fluid rescale-image" alt="Imagen 2">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="sources/images/blog_01.jpeg" class="img-fluid rescale-image" alt="Imagen 3">
                </div>
            </div>
        </div>
        <div class="text-center mb-4">
            <button class="custom-btn">Comprar</button>
        </div>
        <hr>
        <h5 class="text-center mb-4">PÁGINA WEB SIMPLE CON PLANTILLA ESTÁNDAR</h5>
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="sources/images/blog_01.jpeg" class="img-fluid rescale-image" alt="Imagen 4">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="sources/images/blog_01.jpeg" class="img-fluid rescale-image" alt="Imagen 5">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="sources/images/blog_01.jpeg" class="img-fluid rescale-image" alt="Imagen 6">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="custom-btn">Comprar</button>
        </div>
    </section>

    <!-- Nueva Sección -->
    <section style="margin-top: 120px; background-color: #fee4d9; padding: 40px 0;">
        <div class="container">
            <div class="card border-0">
                <div class="row no-gutters">
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Ventajas de colaborar con Pixiu X</h5>
                            <p class="card-text">
                                <i class="fas fa-check-circle" style="color: #28a745;"></i> Canal de Chat 24/7 exclusivo para tu Marca. <i class="fas fa-comments" style="color: #1e90ff;"></i><br>
                                <i class="fas fa-check-circle" style="color: #28a745;"></i> Plataforma flexible para gestionar tus solicitudes y cada etapa de la comunicación fluida con todo el equipo. <i class="fas fa-tasks" style="color: #ff6347;"></i><br>
                                <i class="fas fa-check-circle" style="color: #28a745;"></i> Asesoramiento para el desarrollo de tu marca. <i class="fas fa-lightbulb" style="color: #ffc107;"></i><br>
                                <i class="fas fa-check-circle" style="color: #28a745;"></i> 1 Sesión de Mentoría Gratuita para asesorarte en Marketing. <i class="fas fa-chalkboard-teacher" style="color: #6a5acd;"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img src="sources/images/blog_01.jpeg" class="card-img" alt="Imagen Descriptiva">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contenido de tu página -->
    <section class="container-fluid" style="margin-top: 80px;">
        <?php include 'components/carousel.php'; ?>
    </section>

    <!-- Nueva Sección para el botón de reserva -->
    <section class="container-fluid text-center my-4" style="max-width: 400px; margin: 0 auto;">
        <h2>¿Todavía tienes dudas?</h2>
        <a class="nav-link custom-btn" href="https://meetings.hubspot.com/pixiu" style="color: #fff; max-width: 150px; margin: 0 auto;" target="_blank">Book A Call</a>
    </section>

    <section id="faq" class="faq-section">
        <div class="faq-container">
            <div class="faq-header">FAQ</div>

            <div class="faq">
                <div class="faq-question">
                    Tengo una idea de software, pero no estoy seguro de todas sus
                    características. ¿Pueden ayudarme a validarla?
                </div>
                <div class="faq-answer">
                    Yes, we hold workshops with clients as part of our services. They
                    usually last from 16 hours to 80 hours, during which we deep dive
                    into the software's functionality and help you design the concept.
                </div>
            </div>

            <div class="faq">
                <div class="faq-question">
                    Estoy preocupado por el soporte de mi aplicación o sitio web.
                    ¿También mantienen el software después de su implementación?
                </div>
                <div class="faq-answer">
                    Sí, ofrecemos soporte continuo y paquetes de mantenimiento
                    flexibles. Seguramente podremos encontrar un plan de soporte que
                    funcione para ti. Sin embargo, si decides que no necesitas ningún
                    tipo de soporte, ¡también está bien! Ya que la solución es
                    completamente tuya, al final, la decisión es tuya.
                </div>
            </div>

            <div class="faq">
                <div class="faq-question">
                    ¿Cómo manejan las revisiones y comentarios durante el proceso de
                    diseño?
                </div>
                <div class="faq-answer">
                    En Pixiu, tus comentarios son fundamentales para nuestro proceso de
                    diseño. Valoramos tus ideas, ajustes y momentos "¡aja!",
                    incorporándolos en cada iteración para asegurar que el producto
                    final cumpla con tus expectativas de perfección. Nuestro enfoque
                    colaborativo asegura que tu voz se escuche claramente durante todo
                    el proceso, garantizando que entreguemos un producto que supere tus
                    expectativas.
                </div>
            </div>

            <div class="faq">
                <div class="faq-question">
                    ¿Cuánto cuesta típicamente el diseño y desarrollo web??
                </div>
                <div class="faq-answer">
                    En Pixiu, la mayoría de nuestros proyectos de diseño y desarrollo
                    web oscilan alrededor de $500. Sin embargo, el costo final depende
                    del alcance específico de cada proyecto. Generalmente tenemos un
                    tamaño mínimo de proyecto y preferimos acordar un costo fijo con
                    pagos por hitos para garantizar claridad y satisfacción durante todo
                    el proceso de desarrollo.
                </div>
            </div>

            <div class="faq">
                <div class="faq-question">
                    ¿Quién es dueño del software o sitio web después de que lo
                    construyen?
                </div>
                <div class="faq-answer">
                    Una vez que el proyecto se completa e implementa, legalmente posees
                    todo lo necesario para construir, mantener o extender el software en
                    el futuro, como archivos ejecutables, scripts, archivos de proyecto,
                    código fuente, etc.
                </div>
            </div>
        </div>
    </section>

    


    <?php include 'components/footer-es.php'; ?>

    <!-- Scripts at the end of the body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 5000,
                cssEase: 'linear',
                infinite: true,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                draggable: true, // Permite arrastrar con el mouse
                variableWidth: true // Ajusta el ancho de los slides para un desplazamiento continuo
            });
        });

        document.querySelectorAll(".faq-question").forEach((item) => {
            item.addEventListener("click", (event) => {
                const faq = item.parentElement;
                faq.classList.toggle("open");
            });
        });
    </script>

</body>

</html>
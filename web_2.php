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

    <!-- Nueva Sección -->
    <section class="container-fluid" style="margin-top: 120px;">
        <h2 class="text-center mb-4">Nuevo Título</h2>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <h5 class="card-title">Título de la Tarjeta</h5>
                        <p class="card-text">Este es un ejemplo de texto para la tarjeta. Aquí puedes incluir una descripción o cualquier otra información relevante.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <img src="sources/images/blog_01.jpeg" class="card-img" alt="Imagen Descriptiva">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="container-fluid" style="margin-top: 80px;">
        <h2 class="text-center mb-4 section-title">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="ruta/a/imagen1.jpg" class="service-card-img" alt="Servicio 1">
                    <div class="service-card-body">
                        <h5 class="service-card-title">Servicio 1</h5>
                        <h6 class="service-card-subtitle">Descripción del Servicio 1</h6>
                        <p class="service-card-price">$99.99</p>
                        <ul class="service-card-list">
                            <li><i class="fas fa-check-circle"></i> Item 1</li>
                            <li><i class="fas fa-check-circle"></i> Item 2</li>
                            <li><i class="fas fa-check-circle"></i> Item 3</li>
                        </ul>
                        <button class="btn btn-primary btn-block">Comprar</button>
                        <div class="payment-icons">
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-visa"></i>
                            <i class="fas fa-credit-card"></i>
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="ruta/a/imagen2.jpg" class="service-card-img" alt="Servicio 2">
                    <div class="service-card-body">
                        <h5 class="service-card-title">Servicio 2</h5>
                        <h6 class="service-card-subtitle">Descripción del Servicio 2</h6>
                        <p class="service-card-price">$149.99</p>
                        <ul class="service-card-list">
                            <li><i class="fas fa-check-circle"></i> Item 1</li>
                            <li><i class="fas fa-check-circle"></i> Item 2</li>
                            <li><i class="fas fa-check-circle"></i> Item 3</li>
                        </ul>
                        <button class="btn btn-primary btn-block">Comprar</button>
                        <div class="payment-icons">
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-visa"></i>
                            <i class="fas fa-credit-card"></i>
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="ruta/a/imagen3.jpg" class="service-card-img" alt="Servicio 3">
                    <div class="service-card-body">
                        <h5 class="service-card-title">Servicio 3</h5>
                        <h6 class="service-card-subtitle">Descripción del Servicio 3</h6>
                        <p class="service-card-price">$199.99</p>
                        <ul class="service-card-list">
                            <li><i class="fas fa-check-circle"></i> Item 1</li>
                            <li><i class="fas fa-check-circle"></i> Item 2</li>
                            <li><i class="fas fa-check-circle"></i> Item 3</li>
                        </ul>
                        <button class="btn btn-primary btn-block">Comprar</button>
                        <div class="payment-icons">
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-visa"></i>
                            <i class="fas fa-credit-card"></i>
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nueva Sección con Imágenes y Botones de Compra -->
    <section class="container-fluid" style="margin-top: 80px;">
        <h2 class="text-center mb-4">Título de la Sección</h2>
        <h4 class="text-center mb-4">Subtítulo de la Sección</h4>
        <hr>
        <h5 class="text-center mb-4">Subtítulo de Imágenes 1</h5>
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
            <button class="btn btn-primary">Comprar</button>
        </div>
        <hr>
        <h5 class="text-center mb-4">Subtítulo de Imágenes 2</h5>
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
            <button class="btn btn-primary">Comprar</button>
        </div>
    </section>

    <!-- Contenido de tu página -->
    <section class="container-fluid" style="margin-top: 80px;">
        <?php include 'components/carousel.php'; ?>
    </section>

    <?php include 'components/footer.php'; ?>

    <!-- Scripts at the end of the body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 3000,
                cssEase: 'linear',
                infinite: true,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                draggable: true, // Permite arrastrar con el mouse
                variableWidth: true // Ajusta el ancho de los slides para un desplazamiento continuo
            });
        });
    </script>


</body>

</html>

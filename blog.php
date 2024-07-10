<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/blog.css" />

  <!-- Logos -->
  <link rel="apple-touch-icon" sizes="180x180" href="Logos/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="Logos/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="Logos/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="Logos/favicon-16x16.png" />
  <link rel="manifest" href="Logos/site.webmanifest" />
  <link rel="mask-icon" href="Logos/safari-pinned-tab.svg" color="#5bbad5" />
  <link rel="shortcut icon" href="Logos/favicon.ico" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="msapplication-TileImage" content="Logos/mstile-144x144.png" />
  <meta name="msapplication-config" content="Logos/browserconfig.xml" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16633775810"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "AW-16633775810");
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

  <title>Pixiu X | Blog | Pixiu X</title>
</head>

<body>
  <!-- Page Content -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="sources/images/logo.png" alt="Pixiu X Logo" width="100" height="auto" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                <a class="dropdown-item" href="web.php">Custom Software Development</a>
                <a class="dropdown-item" href="hubspot.php">HubSpot implementation and consulting</a>
                <a class="dropdown-item" href="scrap.php">Data Extraction</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link custom-btn" href="https://meetings.hubspot.com/pixiu" style="color: #fff" target="_blank">
                Book A Call
              </a>
            </li>
            <li class="nav-item">
              <a id="language-toggle" class="nav-link flag-spain" href="index-es.php">
                <img src="sources/icons/spain.svg" alt="Bandera de México" class="flag-icon" />
                Es
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Sección de Bienvenidos -->
<section id="welcome-section" style="background: linear-gradient(to bottom, #fee4d9, #dd6d2c);" class="section">
  <div class="container-fluid h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <div class="welcome-content text-center">
          <h1 style="font-size: 4rem">Blog</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección del Buscador -->
<section id="search-section" class="section" style="padding: 20px 0;">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 text-center">
        <form action="search.php" method="GET">
          <div class="input-group">
            <input type="text" class="form-control rounded-pill" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary rounded-pill" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
<!-- Tarjetas debajo del buscador -->
<div class="row mt-4">
  <div class="col-12 col-md-3 mb-4">
    <div class="card border-0 rounded-lg">
      <img src="sources/images/blog_01.jpeg" class="card-img-top rounded-lg-top" alt="Imagen de la tarjeta">
      <div class="card-body">
        <h5 class="card-title">Título de la tarjeta 1</h5>
        <p class="card-text">Breve descripción o contenido de la tarjeta 1.</p>
        <a href="#" class="btn btn-primary" style="background-color: #dd6d2c; border-color: #dd6d2c;">Read more</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3 mb-4">
    <div class="card border-0 rounded-lg">
      <img src="sources/images/blog_01.jpeg" class="card-img-top rounded-lg-top" alt="Imagen de la tarjeta">
      <div class="card-body">
        <h5 class="card-title">Título de la tarjeta 2</h5>
        <p class="card-text">Breve descripción o contenido de la tarjeta 2.</p>
        <a href="#" class="btn btn-primary" style="background-color: #dd6d2c; border-color: #dd6d2c;">Read more</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3 mb-4">
    <div class="card border-0 rounded-lg">
      <img src="sources/images/blog_01.jpeg" class="card-img-top rounded-lg-top" alt="Imagen de la tarjeta">
      <div class="card-body">
        <h5 class="card-title">Título de la tarjeta 3</h5>
        <p class="card-text">Breve descripción o contenido de la tarjeta 3.</p>
        <a href="#" class="btn btn-primary" style="background-color: #dd6d2c; border-color: #dd6d2c;">Read more</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3 mb-4">
    <div class="card border-0 rounded-lg">
      <img src="sources/images/blog_01.jpeg" class="card-img-top rounded-lg-top" alt="Imagen de la tarjeta">
      <div class="card-body">
        <h5 class="card-title">Título de la tarjeta 4</h5>
        <p class="card-text">Breve descripción o contenido de la tarjeta 4.</p>
        <a href="#" class="btn btn-primary" style="background-color: #dd6d2c; border-color: #dd6d2c;">Read more</a>
      </div>
    </div>
  </div>
</div>
<!-- Fin de las tarjetas -->
  </div>
</section>

  <!-- Footer -->
  <footer id="footer" class="footer text-white" style="background-color: black">
    <div class="container-fluid">
      <div class="row">
        <!-- Columna 1: Logo, párrafo y redes sociales -->
        <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
          <img src="sources/images/logo.png" alt="Logo" class="img-fluid mb- logo-footer" />
          <p>
            At Pixiu, we focus on excellent service and innovation,
            specializing in custom software development, HubSpot consulting,
            and data scraping services. Contact us for inquiries on how we can
            improve your business.
          </p>
          <div class="wrapper">
            <a href="https://www.linkedin.com/company/pixiu-x" target="_blank">
              <li class="icon linkedin">
                <span class="tooltip">LinkedIn</span>
                <img src="sources/icons/linkedin.svg" alt="" />
              </li>
            </a>
            <a href="" target="_blank">
              <li class="icon github">
                <span class="tooltip">GitHub</span>
                <img src="sources/icons/GitHub.svg" alt="" />
              </li>
            </a>
            <a href="" target="_blank">
              <li class="icon Upwork">
                <span class="tooltip">Upwork</span>
                <img src="sources/icons/UpWork.svg" alt="" />
              </li>
            </a>
            <a href="" target="_blank">
              <li class="icon Whatsapp">
                <span class="tooltip">Whatsapp</span>
                <img src="sources/icons/Whatsapp.svg" alt="" />
              </li>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4 mb-lg-0"></div>
        <!-- Columna 2: Servicios -->
        <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
          <h5>Services</h5>
          <ul class="list-unstyled">
            <li><a href="web.php">Custom Web Development</a></li>
            <li><a href="hubspot.php">HubSpot Consulting</a></li>
            <li><a href="scrap.php">Data Extraction</a></li>
          </ul>
        </div>
        <!-- Columna 3: Oficina en EE.UU. -->
        <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
          <h5>Office Locations</h5>
          <ul class="list-unstyled">
            <li>Miami Beach, FL, US</li>
            <li>+1 (786) 798-8207</li>
          </ul>
          <ul class="list-unstyled">
            <li>Buenos Aires, Argentina</li>
            <li>+54 9 11 3510-8922</li>
          </ul>
        </div>
        <!-- Columna 5: Columna vacía para espacio -->
        <div class="col-lg-4 col-md-12">
          <!-- Espacio en blanco -->
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts at the end of the body -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</body>

</html>
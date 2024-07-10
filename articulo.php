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

  <title>Pixiu X | Blog</title>

  <style>
    /* Estilos adicionales personalizados */
    .custom-section {
      padding: 80px 0; /* Espaciado interno */
      background-color: #f8f9fa; /* Color de fondo */
    }

    .custom-column {
      padding: 20px;
      border: 1px solid #ccc; /* Borde para visualización */
    }
  </style>
</head>

<body>
  <!-- Page Content -->
  <?php include 'components/header.php'; ?>

  <!-- Sección de Bienvenida -->
  <section id="welcome-section" style="background-image: url('sources/images/blog_01.jpeg'); background-size: cover; background-position: center;" class="section">
    <div class="overlay"></div> <!-- Capa superpuesta para oscurecer la imagen -->
    <div class="container-fluid h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="welcome-content text-center">
            <h1 style="font-size: 4rem; color: white;">Blog</h1> <!-- Título blanco -->
            <p style="color: white;">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de dos columnas -->
  <section class="custom-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4" style="padding-left: 7.5rem;">
          <div class="custom-column">
            <h2>Columna 1</h2>
            <p>Contenido de la columna 1.</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="custom-column">
            <h2>Columna 2</h2>
            <p>Contenido de la columna 2.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'components/footer.php'; ?>

  <!-- Scripts al final del body -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</body>

</html>

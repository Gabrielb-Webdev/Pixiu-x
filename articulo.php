<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Artículos sobre desarrollo web, IA, HubSpot consulting, data scraping, diseño web y más en el blog de Pixiu X.">
  <meta name="keywords" content="desarrollo web, web development, IA, artificial intelligence, machine learning, HubSpot, data scraping, data extraction, diseño web, web design, UX design, desarrollo de software, software development, consultoría HubSpot, HubSpot consulting, análisis de datos, data analytics, programación web, web programming, Pixiu X, tecnología, tecnología de la información, IT solutions">
  <meta name="author" content="Pixiu X">
  <title>Pixiu X | Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/articulos.css">

  <!-- Logos -->
  <link rel="apple-touch-icon" sizes="180x180" href="Logos/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Logos/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="192x192" href="Logos/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Logos/favicon-16x16.png">
  <link rel="manifest" href="Logos/site.webmanifest">
  <link rel="mask-icon" href="Logos/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="Logos/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="Logos/mstile-144x144.png">
  <meta name="msapplication-config" content="Logos/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Tag Manager -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16633775810"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-16633775810');
  </script>

</head>

<body>
  <!-- Header -->
  <?php include 'components/header.php'; ?>

  <!-- Sección de Bienvenida -->
  <section id="welcome-section" style="background-image: url('sources/images/blog_01.jpeg'); background-size: cover; background-position: center;" class="section">
    <div class="overlay"></div> <!-- Capa superpuesta para oscurecer la imagen -->
    <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="col-12">
          <div class="welcome-content text-center">
            <h1 style="font-size: 4rem; color: white;">Articulo 1</h1> <!-- Título blanco -->
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
            <h2>Tabla de contenido</h2>
            <div class="row">
              <div class="col-12">
                <h6>Texto 1</h6>
                <h6>Texto 2</h6>
                <h6>Texto 3</h6>
                <h6>Texto 4</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="custom-column" style="padding: 0 7.5rem 0 3rem;">
            <h3>Título 1</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eius temporibus. Molestiae ipsum facere est! Enim atque consequuntur, consequatur temporibus quod aspernatur eum, iure expedita dolor vero, sit qui nobis? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta praesentium omnis explicabo ratione dicta repudiandae voluptas provident voluptatibus consequuntur cupiditate, doloribus, sed animi molestias odio rerum. Dolore ab voluptate perferendis.</p>
            <h3>Título 2</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, inventore earum a explicabo dolore alias ut modi aliquid quibusdam! Adipisci sequi Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, corrupti. Quidem repudiandae voluptatum fuga dolorum sunt ipsa excepturi quaerat sapiente soluta. Dolores officia laborum consequuntur dignissimos tempore consequatur, quisquam ullam. accusantium neque atque veniam repellat? Natus doloremque quasi esse?</p>
            <h3>Título 3</h3>
            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum suscipit, nobis minus nesciunt provident quod ad quidem dolores voluptatum architecto. Quaerat quibusdam odio modi maiores hic nesciunt debitis numquam pariatur! consectetur adipisicing elit. Eveniet, voluptate quidem voluptatum nisi ab incidunt nostrum culpa, voluptates, vitae hic facilis aliquam tenetur quibusdam. Nisi deleniti nostrum provident nemo quos?</p>
            <h3>Título 4</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus laborum esse consequatur assumenda, Lorem ipsum dolor sit amet consectetur adipisicing elit. Non molestiae, odit, soluta at animi consequatur inventore nam, natus eum suscipit perferendis dolor totam debitis necessitatibus placeat. Reiciendis non blanditiis repellat! sapiente laudantium magnam. Totam quisquam quas vero fugit alias, rem voluptates nam autem beatae eius vel cupiditate!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'components/footer.php'; ?>

  <!-- Scripts al final del body -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</body>

</html>
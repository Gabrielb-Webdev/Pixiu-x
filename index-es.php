<?php
require_once('database/session.php');
check_session();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre los servicios de desarrollo de software personalizado y consultoría de HubSpot en Pixiu X. Ofrecemos soluciones avanzadas en data extraction y diseño web. Contáctanos para potenciar tu negocio.">
  <meta name="keywords" content="desarrollo de software personalizado, consultoría de HubSpot, data extraction, diseño web, soluciones tecnológicas, consultoría empresarial, desarrollo de aplicaciones, integración de sistemas, automatización de procesos, servicios digitales, tecnología avanzada, optimización web, desarrollo backend, frontend responsive, consultoría IT, soluciones innovadoras">
  <meta name="author" content="Pixiu X">
  <title>Pixiu X - Inicio</title>

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


  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="css/styles.css">

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

  <!-- Event snippet for Web Form conversion page -->
  <script>
    function gtag_report_conversion(url) {
      var callback = function() {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
        'send_to': 'AW-16633775810/IXCmCKqYisEZEMKNzfs9',
        'event_callback': callback
      });
      return false;
    }
  </script>
</head>

<body>
  <!-- Page Content -->
  <?php include 'components/header-es.php'; ?>

  <section id="home" class="section">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div>
            <h1 class="responsive-heading">
              Impulsa tus Proyectos con Pixiu X
            </h1>
            <p>Descubre cómo Pixiu puede elevar tu negocio hoy</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <a href="#contact" class="btn btn-custom-orange btn-lg btn-block">Contáctanos</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="text-center">
            <img src="sources/images/construction.webp" alt="Wireframe Example" class="img-fluid floating-image" style="max-width: 100%" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Custom Software Development with compact cards (borderless) -->
  <section id="services" class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 d-flex justify-content-start align-items-center">
          <img src="sources/images/Imagenes Pixiu/Programming-pana.png" alt="Descripción de la imagen" class="img-fluid custom-img" />
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <h2>Desarrollo de Software Personalizado</h2>
              <p>
                Nos especializamos en crear soluciones de software
                personalizadas que satisfacen las necesidades específicas de
                tu negocio. Nuestro equipo garantiza software de alta calidad,
                eficiente y escalable que mejora tus operaciones y impulsa el
                crecimiento.
              </p>
            </div>
            <div class="col-md-14 mt-4">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="card border-0">
                    <div class="card-body">
                      <h5 class="card-title">Desarrollo Web Personalizado</h5>
                      <p class="card-text">
                        Aplicaciones web tecnológicamente competentes y de
                        alta precisión que elevan tu presencia digital.
                      </p>
                      <a href="web-es.php" style="color: #dd6d2c">Saber Más<img src="sources/icons/arrow.svg" alt="Arrow" class="ml-2" /></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="card border-0">
                    <div class="card-body">
                      <h5 class="card-title">Desarrollo Web</h5>
                      <p class="card-text">
                        Creación profesional de sitios web basada en tu
                        visión, convirtiendo ideas en experiencias online
                        convincentes.
                      </p>
                      <a href="web-es.php" style="color: #dd6d2c">Saber Más<img src="sources/icons/arrow.svg" alt="Arrow" class="ml-2" /></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="card border-0">
                    <div class="card-body">
                      <h5 class="card-title">Diseño Web</h5>
                      <p class="card-text">
                        Diseños digitales únicos que dan vida a tu marca,
                        creando experiencias visuales que resuenan con tu
                        audiencia.
                      </p>
                      <a href="web-es.php" style="color: #dd6d2c">Saber Más<img src="sources/icons/arrow.svg" alt="Arrow" class="ml-2" /></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="card border-0">
                    <div class="card-body">
                      <h5 class="card-title">Desarrollo de E-commerce</h5>
                      <p class="card-text">
                        Soluciones simplificadas para crear y lanzar tu tienda
                        online rápidamente y sin complicaciones, facilitando
                        las ventas de productos.
                      </p>
                      <a href="web-es.php" style="color: #dd6d2c">Saber Más<img src="sources/icons/arrow.svg" alt="Arrow" class="ml-2" /></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Title, paragraphs, button, and wireframe image -->
  <section class="section" id="hubspot">
    <div class="container-fluid">
      <h2 class="responsive-heading mb-4 text-center">
        Implementación y Consultoría de HubSpot
      </h2>
      <div class="row align-items-center">
        <div class="col-md-6 text-left">
          <img src="sources/images/hubspot.webp" alt="Ejemplo de Wireframe" class="img-fluid mb-4" />
        </div>
        <div class="col-md-6 d-flex align-items-end justify-content-center">
          <div class="text-justify">
            <p>
              <strong>Implementación de HubSpot: </strong>Maximiza el
              potencial de HubSpot con una Implementación y capacitación
              personalizadas, integrándose de manera perfecta en tu ecosistema
              empresarial.
            </p>
            <p>
              <strong>Optimización de HubSpot: </strong>Enfrenta los desafíos
              diarios y mejora el rendimiento de tu sistema con informes
              personalizados, gestión de datos, creación de objetos
              personalizados, flujos de trabajo y automatizaciones.
            </p>
            <p>
              <strong>Consultoría Personalizada de HubSpot: </strong>Nuestros
              expertos certificados ofrecen consultas individuales para
              optimizar la infraestructura de HubSpot, resolver problemas
              existentes y mejorar el uso de Hubspot en tu empresa.
            </p>
            <a href="hubspot-es.php" class="btn btn-custom-orange btn-lg mt-4">Saber Más</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Title, paragraphs, button, and wireframe image -->
  <section class="section" id="Data">
    <div class="container-fluid">
      <h2 class="mb-4 text-center" style="font-size: 3rem">
        Extracción de Datos (Data Scraping)
      </h2>
      <div class="row align-items-center">
        <div class="col-md-6 d-flex align-items-end justify-content-center">
          <div class="text-justify">
            <p>
              <strong>Extracción de datos del sitio web: </strong>Obtén datos
              web precisos de manera rápida mediante APIs, scripts y métodos
              manuales. Organizamos estos datos en una base de datos para
              facilitar su recuperación.
            </p>
            <p>
              <strong>Extracción de Datos de Prospectos/Leads: </strong>Mejora
              tus esfuerzos de ventas y marketing identificando y extrayendo
              información de leads de clientes, proporcionándote listas de
              prospectos personalizadas.
            </p>
            <p>
              <strong>Extracción de Datos de Redes Sociales: </strong>Recopila
              datos completos de LinkedIn, Facebook, X (anteriormente Twitter)
              y otras redes sociales utilizando diversos criterios de
              búsqueda.
            </p>
            <p>
              <strong>Investigación de Mercado y Extracción de Datos: </strong>Agiliza tu investigación con datos precisos sobre audiencias
              objetivo, tendencias de mercado, análisis competitivo e insights
              de clientes.
            </p>
            <a href="scrap-es.php" class="btn btn-custom-orange btn-lg mt-4">Saber Más</a>
          </div>
        </div>
        <div class="col-md-6 text-right">
          <img src="sources/images/Data.webp" alt="Ejemplo de Wireframe" class="img-fluid mb-4" style="width: 85%" />
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Title and step timeline -->
  <section class="section section-how-we-work" style="background-color: #fee4d9">
    <div class="container-fluid">
      <h2 style="margin-bottom: 1rem">Nuestro Proceso de Trabajo</h2>
      <div class="steps">
        <div class="step" id="step1">
          <div class="step-title">1er Paso</div>
          <div class="step-content">
            <h3>Consulta Inicial</h3>
            <p>
              Nuestra primera interacción comienza con la comprensión de tus
              requisitos, industria, pilas tecnológicas, arquitectura, plazos
              y presupuesto para desarrollo de software personalizado,
              consultoría de HubSpot o servicios de extracción de datos.
            </p>
          </div>
        </div>
        <div class="step" id="step2">
          <div class="step-title">2do Paso</div>
          <div class="step-content">
            <h3>Análisis de Requisitos</h3>
            <p>
              Luego, te conectarás con nuestro equipo técnico para simplificar
              tu proyecto y explorar posibilidades técnicas adaptadas a tus
              necesidades.
            </p>
          </div>
        </div>
        <div class="step" id="step3">
          <div class="step-title">3er Paso</div>
          <div class="step-content">
            <h3>Estimación Final del Proyecto</h3>
            <p>
              Prepararemos una estimación detallada con el alcance y los
              objetivos del proyecto. Te la compartiremos para su revisión y,
              una vez acordada, procederemos con la firma del acuerdo de
              confidencialidad (NDA).
            </p>
          </div>
        </div>
        <div class="step" id="step4">
          <div class="step-title">4to Paso</div>
          <div class="step-content">
            <h3>Inicio del Proyecto</h3>
            <p>
              Una vez aprobado el proyecto, comenzaremos de inmediato. Nuestro
              equipo trabajará estrechamente contigo, funcionando como una
              extensión de tu equipo interno para asegurar una colaboración
              fluida y exitosa.
            </p>
          </div>
        </div>
      </div>
      <div class="navigation">
        <button id="prev" onclick="prevStep()">←</button>
        <button id="next" onclick="nextStep()">→</button>
      </div>
    </div>
  </section>

  <?php include 'components/slider-es.php'; ?>

  <!-- Section 6: Calendar for scheduling calls/meetings -->
  <section id="contact" class="section" style="padding-top: calc(5vh + 20px)">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 d-flex justify-content-center">
          <form id="contact-form" class="form" action="https://hooks.zapier.com/hooks/catch/19364540/23ky1q3/" method="post" onsubmit="gtag_report_conversion(); return true;">
            <div class="flex">
              <label>
                <input required placeholder="Nombre" type="text" class="input" name="firstName" />
              </label>

              <label>
                <input required placeholder="Apellido" type="text" class="input" name="lastName" />
              </label>
            </div>

            <label>
              <input required placeholder="Correo" type="email" class="input" name="email" />
            </label>

            <label>
              <select required class="input" id="service-select" name="service">
                <option value="" selected disabled>
                  Selecciona Un Servicio
                </option>
                <option value="Custom Software Development">
                  Desarrollo de Software Personalizado
                </option>
                <option value="HubSpot implementation and consulting">
                  Implementación y consultoría de HubSpot
                </option>
                <option value="Data Extraction">Extracción de datos</option>
              </select>
            </label>

            <!-- Segundo dropdown que se muestra cuando se selecciona "Custom Software Development" -->
            <div class="custom-software-dropdown" style="display: none">
              <label>
                <select class="input" name="customOption">
                  <option value="" selected disabled>Select a Service</option>
                  <option value="Web Design">Diseño web</option>
                  <option value="Custom Web Development">
                    Desarrollo web a medida
                  </option>
                  <option value="Mobile Applications">
                    Aplicaciones móviles
                  </option>
                  <option value="E-Commerce Web Development">
                    Desarrollo web de comercio electrónico
                  </option>
                </select>
              </label>
            </div>

            <label>
              <textarea required rows="3" placeholder="Hola, estoy interesado en contratar sus servicios para....." class="input01" name="Message"></textarea>
            </label>

            <button type="submit" class="fancy">
              <span class="top-key"></span>
              <span class="text">Enviar</span>
              <span class="bottom-key-1"></span>
              <span class="bottom-key-2"></span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal de alerta -->
  <div id="success-modal" class="modal">
    <div class="modal-content">
      <span class="close-button">×</span>
      <p>
        Formulario completado correctamente. Nos estaremos contactando con
        usted en breve.
      </p>
      <button id="accept-button">Aceptar</button>
    </div>
  </div>

  <style>
    .input:focus {
      border-color: #fee4d9;
      /* Cambia el color del borde al hacer clic */
      outline: none;
      /* Quita el contorno por defecto */
      box-shadow: none;
      /* Quita la sombra por defecto */
    }
  </style>

  <!-- Section 7: Dark orange background with centered title and paragraph -->
  <section id="fast-track" class="section bg-darkorange text-white" style="min-height: calc(5vh + 100px)">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Acelera el Éxito de tus Proyectos con Pixiu X</h2>
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
  <!-- <script src="js/scripts.js"></script> -->
  <script>
    let currentStep = 0;
    const stepsVisible = 1; // Number of steps visible at a time
    const totalSteps = document.querySelectorAll(".step").length;

    document.addEventListener("DOMContentLoaded", () => {
      updateView();
      updateButtons();
    });

    function updateView() {
      const stepsElement = document.querySelector(".steps");
      const stepWidth = stepsElement.querySelector(".step").offsetWidth;
      stepsElement.style.transform = `translateX(-${
                    currentStep * stepWidth * 1.1
        }px)`;
    }

    function updateButtons() {
      document.getElementById("prev").disabled = currentStep === 0;
      document.getElementById("next").disabled =
        currentStep >= totalSteps - stepsVisible;
    }

    function prevStep() {
      if (currentStep > 0) {
        currentStep--;
        updateView();
        updateButtons();
      }
    }

    function nextStep() {
      if (currentStep < totalSteps - stepsVisible) {
        currentStep++;
        updateView();
        updateButtons();
      }
    }

    document.querySelectorAll(".faq-question").forEach((item) => {
      item.addEventListener("click", (event) => {
        const faq = item.parentElement;
        faq.classList.toggle("open");
      });
    });

    const inputs = document.querySelectorAll(".form .input, .form .input01");

    inputs.forEach(function(input) {
      input.addEventListener("input", function() {
        const label = input.parentElement.querySelector("span");
        if (label) {
          if (input.value.trim() !== "") {
            label.style.display = "none";
          } else {
            label.style.display = "block";
          }
        }
      });
    });

    const serviceSelect = document.getElementById("service-select");
    if (serviceSelect) {
      serviceSelect.addEventListener("change", function() {
        const serviceValue = this.value;
        const dropdown = document.querySelector(".custom-software-dropdown");
        if (dropdown) {
          dropdown.style.display =
            serviceValue === "Custom Software Development" ? "block" : "none";
        }
      });
    }

    // jQuery document ready
    $(document).ready(function() {
      $("#date").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd",
      });
    });

    document
      .getElementById("contact-form")
      .addEventListener("submit", function(event) {
        event.preventDefault(); // Prevenir el envío por defecto del formulario

        // Obtener los datos del formulario
        const formData = new FormData(this);

        // Enviar los datos a través de fetch
        fetch(this.action, {
            method: this.method,
            body: formData,
          })
          .then((response) => {
            if (response.ok) {
              // Mostrar el modal
              const modal = document.getElementById("success-modal");
              modal.style.display = "block";

              // Manejar el clic en el botón de cerrar
              document.querySelector(".close-button").onclick = function() {
                modal.style.display = "none";
                location.reload();
              };

              // Manejar el clic en el botón de aceptar
              document.getElementById("accept-button").onclick = function() {
                modal.style.display = "none";
                location.reload();
              };

              // Cerrar el modal al hacer clic fuera de él
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                  location.reload();
                }
              };
            } else {
              // Manejar errores si es necesario
              console.error("Error al enviar el formulario");
            }
          })
          .catch((error) => {
            console.error("Error:", error);
          });
      });
  </script>
</body>

</html>
<?php
require_once('database/session.php');
check_session();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pixiu se especializa en la creación de potentes herramientas de extracción de datos y automatización de procesos para mejorar la eficiencia de su negocio. Explore nuestros servicios de extracción de datos web, prospectos/leads, redes sociales y investigación de mercado.">
  <meta name="keywords" content="Pixiu, extracción de datos, herramientas de extracción de datos, automatización de procesos, extracción de datos web, APIs, scripts de extracción de datos, bases de datos, extracción de datos de prospectos, personalización de datos de clientes, extracción de datos de redes sociales, perfiles de usuarios, análisis de mercado, investigación de mercado, análisis competitivo, insights de clientes, tendencias de mercado">
  <meta name="author" content="Pixiu X">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/card.css">

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

  <title>Pixiu | Extracción de Datos (ES)</title>
</head>

<body>
  <?php include 'components/header-es.php'; ?>

  <!-- Sección de Bienvenidos -->
  <section id="welcome-section" style="background: linear-gradient(to bottom, #fee4d9, #dd6d2c)" class="section">
    <div class="container-fluid h-100">
      <div class="row h-100 align-items-center">
        <div class="col-md-6">
          <div class="welcome-content text-left">
            <h1 style="font-size: 3.5rem">Crea scrapers web eficientes</h1>
            <p>
              Pixiu automatiza la extracción de datos para mejorar tu negocio.
            </p>
            <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn" target="_blank">Agenda una llamada</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="welcome-image floating-image">
            <img src="sources/images/Imagenes Pixiu/Data extraction-cuate.png" alt="Imagen de bienvenida" style="max-width: 100%; height: auto" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Servicios de HubSpot -->
  <section id="servicios-hubspot" style="padding-top: 50px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="service-icon" style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                ">
              <img src="sources/icons/web-data.svg" alt="Icono 1" style="max-width: 80px; height: auto" />
            </div>
            <h4 style="color: #dd6d2c">Extracción de Datos Web</h4>
            <p>
              Pixiu extrae datos web usando APIs, scripts, organizándolos en
              bases de datos.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="service-icon" style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                ">
              <img src="sources/icons/data.svg" alt="Icono 2" style="max-width: 80px; height: auto" />
            </div>
            <h4 style="color: #dd6d2c">Extracción de Prospectos/Leads</h4>
            <p>
              Personalizamos la extracción de datos de prospectos,
              recolectando información de clientes.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="service-icon" style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                ">
              <img src="sources/icons/social-media.svg" alt="Icono 3" style="max-width: 80px; height: auto" />
            </div>
            <h4 style="color: #dd6d2c">
              Extracción de Datos de Redes Sociales
            </h4>
            <p>
              Recopilamos perfiles, publicaciones y comentarios de redes
              sociales usando palabras clave.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="service-icon" style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                ">
              <img src="sources/icons/market-research.svg" alt="Icono 4" style="max-width: 80px; height: auto" />
            </div>
            <h4 style="color: #dd6d2c">
              Extracción de Datos de Investigación de Mercado
            </h4>
            <p>
              Pixiu acelera tu investigación con datos precisos sobre
              audiencias objetivo.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Detalles de Servicios de HubSpot -->
  <section id="detalle-servicios-hubspot" style="padding: 50px">
    <div class="container-fluid">
      <div class="row mb-5" style="margin-bottom: -4rem !important">
        <div class="col-md-6 d-flex align-items-center">
          <div class="service-detail-item">
            <h3>Extracción de Datos de Sitios Web</h3>
            <p>
              Aproveche nuestros servicios de extracción de datos de Pixiu
              para obtener información precisa de la web de manera eficiente.
              Nuestro equipo utiliza APIs, scripts y métodos manuales para
              recopilar datos de diversos sitios web, organizándolos
              meticulosamente en una base de datos para su fácil acceso
              futuro.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="sources/images/Imagenes Pixiu/Data extraction-amico.png" alt="Implementación y Entrenamiento de HubSpot" class="service-detail-img" />
        </div>
      </div>
      <div class="row mb-5" style="margin-bottom: -1.5rem !important">
        <div class="col-md-6 order-md-2 d-flex align-items-center">
          <div class="service-detail-item">
            <h3>Extracción de Prospectos y Leads</h3>
            <p>
              Mejore sus estrategias de ventas y marketing con nuestros
              servicios de extracción de prospectos y leads. Adoptamos un
              enfoque personalizado para profundizar en su audiencia objetivo,
              identificar fuentes de datos confiables, extraer información de
              leads y proporcionarle una lista personalizada de prospectos
              potenciales.
            </p>
          </div>
        </div>
        <div class="col-md-6 order-md-1">
          <img src="sources/images/Imagenes Pixiu/Data extraction-rafiki.png" alt="Optimización de HubSpot" class="service-detail-img" />
        </div>
      </div>
      <div class="row mb-5" style="margin-bottom: -2.5rem !important">
        <div class="col-md-6 d-flex align-items-center">
          <div class="service-detail-item">
            <h3>Extracción de Datos de Redes Sociales</h3>
            <p>
              Recopilamos una amplia variedad de datos, como perfiles de
              usuario, publicaciones, comentarios e información de usuarios de
              plataformas sociales destacadas como LinkedIn, Facebook, X
              (anteriormente Twitter) y otras más. Nuestro método incluye el
              uso de diversos criterios de búsqueda, palabras clave y temas
              relevantes para sus redes sociales clave.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="sources/images/Imagenes Pixiu/Data extraction-cuate.png" alt="Consultoría Personalizada de HubSpot" class="service-detail-img" />
        </div>
      </div>
      <div class="row mb-5" style="margin-bottom: -2.5rem !important">
        <div class="col-md-6 order-md-2 d-flex align-items-center">
          <div class="service-detail-item">
            <h3>Extracción de Datos para Investigación de Mercado</h3>
            <p>
              Impulse su investigación y análisis con datos precisos y
              relevantes sobre su audiencia objetivo, tendencias de mercado,
              análisis competitivo, insights de clientes y estudios
              anteriores. Nuestros servicios de extracción de datos están
              diseñados a medida para satisfacer sus necesidades específicas
              de investigación de mercado.
            </p>
          </div>
        </div>
        <div class="col-md-6 order-md-1">
          <img src="sources/images/Imagenes Pixiu/Telecommuting-rafiki.png" alt="Optimización de HubSpot" class="service-detail-img" />
        </div>
      </div>
    </div>
  </section>

  <!-- Step timeline -->
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

  <!-- Sección de Preguntas Frecuentes -->
  <section id="faq" class="faq-section">
    <div class="faq-container">
      <div class="faq-header">FAQ</div>
      <div class="faq">
        <div class="faq-question">¿Qué incluye el paquete de consulta?</div>
        <div class="faq-answer">
          Nuestro paquete de consulta incluye:
          <ul>
            <li>
              Consultas individuales con un experto certificado en HubSpot,
              disponibles mediante videollamada.
            </li>
            <li>
              Una revisión exhaustiva de su configuración actual de HubSpot,
              incluyendo integraciones, gestión de datos y flujos de trabajo.
            </li>
            <li>
              Recomendaciones para optimizaciones, mejoras tecnológicas y
              soluciones personalizadas para abordar sus desafíos únicos.
            </li>
            <li>
              Un taller y fase de descubrimiento para soluciones más grandes,
              analizando su configuración actual y creando un concepto para
              una nueva. ¡También estamos disponibles para ayudar con
              cualquier otra necesidad que pueda tener!
            </li>
          </ul>
        </div>
      </div>
      <div class="faq">
        <div class="faq-question">
          Tengo un equipo interno que usa HubSpot. ¿Pueden unirse a una
          llamada con ellos y ayudarlos a resolver mi problema?
        </div>
        <div class="faq-answer">
          Sí, podemos colaborar con su equipo interno. Nos uniremos a una
          llamada con su equipo para ayudar a desarrollar o solucionar sus
          problemas relacionados con HubSpot.
        </div>
      </div>
      <div class="faq">
        <div class="faq-question">
          Estoy teniendo problemas con una integración/herramienta/aplicación
          que no está estrechamente conectada con HubSpot. ¿Pueden ayudarme
          igualmente con eso?
        </div>
        <div class="faq-answer">
          Sí, por supuesto. Aunque muchos de nuestros clientes buscan ayuda
          con HubSpot, también estamos encantados de ayudar con problemas de
          software o integración más generales, incluidos aquellos que
          necesitan conectarse con HubSpot.
        </div>
      </div>
      <div class="faq">
        <div class="faq-question">
          Tengo algunas preguntas, pero no estoy seguro si pueden ayudarme.
        </div>
        <div class="faq-answer">
          No dude en comunicarse y programar una llamada introductoria. Es
          gratuita, y le informaremos si podemos resolver su problema con
          nuestras soluciones o a través de consultas.
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Calendar for scheduling calls/meetings -->
  <section id="contact" class="section" style="padding-top: calc(5vh + 20px)">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Contacto</h2>
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

  <?php include 'components/footer-es.php'; ?>

  <!-- Scripts at the end of the body -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- FontAwesome for icons -->
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
  <!-- <script src="js/scripts_services.js"></script> -->
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
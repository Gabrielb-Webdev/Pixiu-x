<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css""
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/card.css" />

    <!-- Logos -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="Logos/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="Logos/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="Logos/android-chrome-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="Logos/favicon-16x16.png"
    />
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16633775810');
</script>


  <!-- Event snippet for Web Form conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
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


<title>Pixiu X | Data Extraction (EN)</title>
  </head>

  <body>
      <?php include 'components/header.php'; ?>


    <!-- Sección de Bienvenidos -->
    <section
      id="welcome-section"
      style="background: linear-gradient(to bottom, #fee4d9, #dd6d2c)"
      class="section"
    >
      <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
          <div class="col-md-6">
            <div class="welcome-content text-left">
              <h1 style="font-size: 4rem">
                Craft powerful data extraction tools swiftly
              </h1>
              <p>
                Pixiu specializes in creating robust web scrapers and automating
                data extraction processes to enhance your business's efficiency.
              </p>
              <a
                href="https://meetings.hubspot.com/pixiu"
                class="btn mt-5 custom-btn"
                target="_blank"
                >Book A Call</a
              >
            </div>
          </div>
          <div class="col-md-6">
            <div class="welcome-image floating-image">
              <img
                src="sources/images/Imagenes Pixiu/Data extraction-cuate.png"
                alt="Imagen de bienvenida"
                style="max-width: 100%; height: auto"
              />
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
              <div
                class="service-icon"
                style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                "
              >
                <img
                  src="sources/icons/web-data.svg"
                  alt="Icono 1"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">Website Data Extraction</h4>
              <p>
                Pixiu extracts web data using APIs, scripts, organizing into
                databases.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item text-center">
              <div
                class="service-icon"
                style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                "
              >
                <img
                  src="sources/icons/data.svg"
                  alt="Icono 2"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">Prospect/Lead Data Extraction</h4>
              <p>
                We personalize prospect data extraction, gathering customer
                information.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item text-center">
              <div
                class="service-icon"
                style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                "
              >
                <img
                  src="sources/icons/social-media.svg"
                  alt="Icono 3"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">Social Media Data Extraction</h4>
              <p>
                We collect profiles, posts, comments from social networks using
                keywords.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item text-center">
              <div
                class="service-icon"
                style="
                  background-color: #dd6d2c;
                  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                "
              >
                <img
                  src="sources/icons/market-research.svg"
                  alt="Icono 4"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">Market Research Data Extraction</h4>
              <p>
                Pixiu accelerates your research with precise data on target
                audiences.
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
              <h3>Website data extraction</h3>
              <p>
                Leverage Pixiu's data extraction services to obtain precise web
                data promptly. Our team of specialists utilizes APIs, scripts,
                and manual methods to collect data from various websites,
                meticulously organizing it into a database for easy future
                retrieval
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="sources/images/Imagenes Pixiu/Data extraction-amico.png"
              alt="HubSpot Implementation and Training"
              class="service-detail-img"
            />
          </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -1.5rem !important">
          <div class="col-md-6 order-md-2 d-flex align-items-center">
            <div class="service-detail-item">
              <h3>Prospect/Lead Data Extraction</h3>
              <p>
                Elevate your sales and marketing efforts with our prospect and
                lead data extraction services. We employ a personalized approach
                to delve into your target audience, identify permanent data
                sources, extract customer lead information, and provide you with
                a tailored list of potential prospects
              </p>
            </div>
          </div>
          <div class="col-md-6 order-md-1">
            <img
              src="sources/images/Imagenes Pixiu/Data extraction-rafiki.png"
              alt="HubSpot Optimization"
              class="service-detail-img"
            />
          </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -2.5rem !important">
          <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
              <h3>Social Media Data Extraction</h3>
              <p>
                We retrieve a comprehensive range of data, including user
                profiles, posts, comments, and user information from prominent
                social media platforms like LinkedIn, Facebook, X (formerly
                Twitter), and others. Our approach involves using diverse search
                criteria, keywords, and topics from your key social and
                professional networks
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="sources/images/Imagenes Pixiu/Data extraction-cuate.png"
              alt="Personalized HubSpot Consulting"
              class="service-detail-img"
            />
          </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -2.5rem !important">
          <div class="col-md-6 order-md-2 d-flex align-items-center">
            <div class="service-detail-item">
              <h3>Market Research Data Extraction</h3>
              <p>
                Accelerate your research and analytics with accurate and
                relevant data on your target audience, market trends,
                competitive analysis, customer insights, and previous studies.
                Pixiu's data extraction services are tailored to meet your
                market research needs
              </p>
            </div>
          </div>
          <div class="col-md-6 order-md-1">
            <img
              src="sources/images/Imagenes Pixiu/Telecommuting-rafiki.png"
              alt="HubSpot Optimization"
              class="service-detail-img"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Step timeline -->
    <section
      class="section section-how-we-work"
      style="background-color: #fee4d9"
    >
      <div class="container-fluid">
        <h2 style="margin-bottom: 1rem">How we work</h2>
        <div class="steps">
          <div class="step" id="step1">
            <div class="step-title">1st Step</div>
            <div class="step-content">
              <h3>Initial Consultation</h3>
              <p>
                Our first interaction begins with understanding your
                requirements, industry, tech stacks, architecture, deadlines,
                and budget for custom software development, HubSpot consulting,
                or data scraping services.
              </p>
            </div>
          </div>
          <div class="step" id="step2">
            <div class="step-title">2nd Step</div>
            <div class="step-content">
              <h3>Requirement Analysis</h3>
              <p>
                Next, you connect with our tech team to simplify your project
                and explore technical possibilities tailored to your needs.
              </p>
            </div>
          </div>
          <div class="step" id="step3">
            <div class="step-title">3rd Step</div>
            <div class="step-content">
              <h3>Final Project Estimation</h3>
              <p>
                We’ll prepare an estimation with scope and objectives and share
                it with you for review. Once agreed, we can proceed with signing
                the NDA.
              </p>
            </div>
          </div>
          <div class="step" id="step4">
            <div class="step-title">4th Step</div>
            <div class="step-content">
              <h3>Project Kickoff</h3>
              <p>
                After you sign off on the project, we will immediately begin.
                Our team will work closely with you, functioning as an extension
                of your in-house team.
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
          <div class="faq-question">
            What is included in the consultation package?
          </div>
          <div class="faq-answer">
            Our consultation package includes:
            <ul>
              <li>
                One-on-one consultations with a certified HubSpot expert,
                available via video call.
              </li>
              <li>
                A thorough review of your current HubSpot setup, including
                integrations, data management, and workflows.
              </li>
              <li>
                Recommendations for optimizations, tech improvements, and
                tailored solutions to address your unique challenges.
              </li>
              <li>
                A workshop and discovery phase for larger solutions, analyzing
                your current setup and creating a concept for a new one. We are
                also available to assist with any other needs you might have!
              </li>
            </ul>
          </div>
        </div>
        <div class="faq">
          <div class="faq-question">
            I have an in-house team that uses HubSpot. Can you get on a call
            with them and help them solve my problem?
          </div>
          <div class="faq-answer">
            Yes, we can collaborate with your in-house team. We’ll join a call
            with your team to help develop or fix your HubSpot-related
            solutions.
          </div>
        </div>
        <div class="faq">
          <div class="faq-question">
            I am having issues with an integration/tool/app that is not closely
            connected with HubSpot. Can you still help me with that?
          </div>
          <div class="faq-answer">
            Yes, of course. While many of our clients seek help with HubSpot, we
            are also happy to assist with more general software or integration
            issues, including those that need to connect with HubSpot.
          </div>
        </div>
        <div class="faq">
          <div class="faq-question">
            I have some questions, but I am unsure if you can help me out.
          </div>
          <div class="faq-answer">
            Don’t hesitate to reach out and schedule an introductory call. It is
            free of charge, and we will let you know if we can solve your issue
            with our solutions or through consultations.
          </div>
        </div>
      </div>
    </section>

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
            <form
              id="contact-form"
              class="form"
              action="https://hooks.zapier.com/hooks/catch/19364540/23ky1q3/"
              method="post"
              onsubmit="gtag_report_conversion(); return true;"
            >
              <div class="flex">
                <label>
                  <input
                    required
                    placeholder="First Name"
                    type="text"
                    class="input"
                    name="firstName"
                  />
                </label>

                <label>
                  <input
                    required
                    placeholder="Last Name"
                    type="text"
                    class="input"
                    name="lastName"
                  />
                </label>
              </div>

              <label>
                <input
                  required
                  placeholder="Email"
                  type="email"
                  class="input"
                  name="email"
                />
              </label>

              <label>
                <select
                  required
                  class="input"
                  id="service-select"
                  name="service"
                >
                  <option value="" selected disabled>Select a Service</option>
                  <option value="Custom Software Development">
                    Custom Software Development
                  </option>
                  <option value="HubSpot implementation and consulting">
                    HubSpot implementation and consulting
                  </option>
                  <option value="Data Extraction">Data Extraction</option>
                </select>
              </label>

              <!-- Segundo dropdown que se muestra cuando se selecciona "Custom Software Development" -->
              <div class="custom-software-dropdown" style="display: none">
                <label>
                  <select class="input" name="customOption">
                    <option value="" selected disabled>Select an Option</option>
                    <option value="Web Design">Web Design</option>
                    <option value="Custom Web Development">
                      Custom Web Development
                    </option>
                    <option value="Mobile Applications">
                      Mobile Applications
                    </option>
                    <option value="E-Commerce Web Development">
                      E-Commerce Web Development
                    </option>
                  </select>
                </label>
              </div>

              <label>
                <textarea
                  required
                  rows="3"
                  placeholder="Hello, I am interested in hiring your services for....."
                  class="input01"
                  name="Message"
                ></textarea>
              </label>

              <button type="submit" class="fancy">
                <span class="top-key"></span>
                <span class="text">Submit</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Success Modal -->
    <div id="success-modal" class="modal">
      <div class="modal-content">
        <span class="close-button">&times;</span>
        <p>
          Form successfully completed. We will be in touch with you shortly.
        </p>
        <button id="accept-button">Accept</button>
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

    <?php include 'components/footer.php'; ?>

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

      inputs.forEach(function (input) {
        input.addEventListener("input", function () {
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
        serviceSelect.addEventListener("change", function () {
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
        .addEventListener("submit", function (event) {
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
                document.querySelector(".close-button").onclick = function () {
                  modal.style.display = "none";
                  location.reload();
                };

                // Manejar el clic en el botón de aceptar
                document.getElementById("accept-button").onclick = function () {
                  modal.style.display = "none";
                  location.reload();
                };

                // Cerrar el modal al hacer clic fuera de él
                window.onclick = function (event) {
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
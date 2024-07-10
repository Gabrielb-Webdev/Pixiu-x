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
    <link rel="stylesheet" href="css/styles.css" />

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
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=AW-16633775810"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "AW-16633775810");
    </script>

    <!-- Event snippet for Web Form conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
      function gtag_report_conversion(url) {
        var callback = function () {
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

    <title>Pixiu X - Home</title>
  </head>

  <body>
    <!-- Page Content -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img
              src="sources/images/logo.png"
              alt="Pixiu X Logo"
              width="100"
              height="auto"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="servicesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                  <a class="dropdown-item" href="web.php"
                    >Custom Software Development</a
                  >
                  <a class="dropdown-item" href="hubspot.php"
                    >HubSpot implementation and consulting</a
                  >
                  <a class="dropdown-item" href="scrap.php">Data Extraction</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link custom-btn"
                  href="https://meetings.hubspot.com/pixiu"
                  style="color: #fff"
                  target="_blank"
                >
                  Book A Call
                </a>
              </li>
              <li class="nav-item">
                <a
                  id="language-toggle"
                  class="nav-link flag-spain"
                  href="index-es.php"
                >
                  <img
                    src="sources/icons/spain.svg"
                    alt="Bandera de México"
                    class="flag-icon"
                  />
                  Es
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="home" class="section">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Column for text content -->
          <div class="col-md-6">
            <div>
              <h1 class="responsive-heading">
                Accelerate Your Project With Pixiu X
              </h1>
              <p>Discover how Pixiu can elevate your business today</p>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a
                  href="#contact"
                  class="btn btn-custom-orange btn-lg btn-block"
                  >Contact us</a
                >
              </div>
            </div>
          </div>
          <!-- Column for image -->
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="text-center">
              <img
                src="sources/images/construction.webp"
                alt="Wireframe Example"
                class="img-fluid floating-image"
                style="max-width: 100%"
              />
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
            <img
              src="sources/images/Imagenes Pixiu/Programming-pana.png"
              alt="Descripción de la imagen"
              class="img-fluid custom-img"
            />
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <h2>Custom Software Development</h2>
                <p>
                  We specialize in creating tailored software solutions that
                  meet your specific business needs. Our team ensures
                  high-quality, efficient, and scalable software that enhances
                  your operations and drives growth.
                </p>
              </div>
              <div class="col-md-14 mt-4">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="card border-0">
                      <div class="card-body">
                        <h5 class="card-title">Custom Web Development</h5>
                        <p class="card-text">
                          High-accuracy, technologically competent web
                          applications that elevate your digital presence.
                        </p>
                        <a href="web.php" style="color: #dd6d2c"
                          >Learn More
                          <img
                            src="sources/icons/arrow.svg"
                            alt="Arrow"
                            class="ml-2"
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="card border-0">
                      <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">
                          Professional website creation based on your vision,
                          turning ideas into compelling online experiences.
                        </p>
                        <a href="web.php" style="color: #dd6d2c"
                          >Learn More
                          <img
                            src="sources/icons/arrow.svg"
                            alt="Arrow"
                            class="ml-2"
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="card border-0">
                      <div class="card-body">
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">
                          Unique digital designs that bring your brand to life,
                          creating visual experiences that resonate with your
                          audience.
                        </p>
                        <a href="web.php" style="color: #dd6d2c"
                          >Learn More
                          <img
                            src="sources/icons/arrow.svg"
                            alt="Arrow"
                            class="ml-2"
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="card border-0">
                      <div class="card-body">
                        <h5 class="card-title">E-commerce Web Development</h5>
                        <p class="card-text">
                          Streamlined solutions to create and launch your online
                          store quickly and easily, enabling hassle-free product
                          sales.
                        </p>
                        <a href="web.php" style="color: #dd6d2c"
                          >Learn More
                          <img
                            src="sources/icons/arrow.svg"
                            alt="Arrow"
                            class="ml-2"
                        /></a>
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
          HubSpot implementation and consulting
        </h2>
        <div class="row align-items-center">
          <div class="col-md-6 text-left">
            <img
              src="sources/images/hubspot.webp"
              alt="Wireframe Example"
              class="img-fluid mb-4"
            />
          </div>
          <div class="col-md-6 d-flex align-items-end justify-content-center">
            <div class="text-justify">
              <p>
                <strong>HubSpot Implementation: </strong>Maximize HubSpot's
                potential with tailored onboarding and training, seamlessly
                integrating it into your ecosystem.
              </p>
              <p>
                <strong>HubSpot Optimization: </strong>Address daily challenges,
                enhance performance with custom reporting, data management,
                custom objects, workflows, and automations.
              </p>
              <p>
                <strong>Personalized HubSpot Consulting: </strong>Certified
                experts offer one-on-one consultations to optimize
                infrastructure, resolve issues, and boost your company's use of
                HubSpot.
              </p>
              <a href="hubspot.php" class="btn btn-custom-orange btn-lg mt-4"
                >Learn More</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 4: Title, paragraphs, button, and wireframe image -->
    <section class="section" id="Data">
      <div class="container-fluid">
        <h2 class="mb-4 text-center" style="font-size: 3rem">
          Data Extraction
        </h2>
        <div class="row align-items-center">
          <div class="col-md-6 d-flex align-items-end justify-content-center">
            <div class="text-justify">
              <p>
                <strong>Website data extraction: </strong>Obtain precise web
                data promptly using APIs, scripts, and manual methods, organized
                into a database for easy retrieval.
              </p>
              <p>
                <strong>Prospect/Lead Data Extraction: </strong>Enhance sales
                and marketing by identifying and extracting customer lead
                information, providing tailored prospect lists.
              </p>
              <p>
                <strong>Social Media Data Extraction: </strong>Gather
                comprehensive data from LinkedIn, Facebook, X (formerly
                Twitter), and more, using diverse search criteria.
              </p>
              <p>
                <strong>Market Research Data Extraction: </strong>Accelerate
                research with accurate data on target audiences, market trends,
                competitive analysis, and customer insights.
              </p>
              <a href="scrap.php" class="btn btn-custom-orange btn-lg mt-4"
                >Lear More</a
              >
            </div>
          </div>
          <div class="col-md-6 text-right">
            <img
              src="sources/images/Data.webp"
              alt="Wireframe Example"
              class="img-fluid mb-4"
              style="width: 85%"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Section 5: Title and step timeline -->
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

    <?php include 'components/slider.php'; ?>

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

    <!-- Section 7: Dark orange background with centered title and paragraph -->
    <section
      id="fast-track"
      class="section bg-darkorange text-white"
      style="min-height: calc(5vh + 100px)"
    >
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Discover how Pixiu can elevate your business today</h2>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer
      id="footer"
      class="footer text-white"
      style="background-color: black"
    >
      <div class="container-fluid">
        <div class="row">
          <!-- Columna 1: Logo, párrafo y redes sociales -->
          <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
            <img
              src="sources/images/logo.png"
              alt="Logo"
              class="img-fluid mb- logo-footer"
            />
            <p>
              At Pixiu, we focus on excellent service and innovation,
              specializing in custom software development, HubSpot consulting,
              and data scraping services. Contact us for inquiries on how we can
              improve your business.
            </p>
            <div class="wrapper">
              <a
                href="https://www.linkedin.com/company/pixiu-x"
                target="_blank"
              >
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

      // jQuery document ready
      $(document).ready(function () {
        $("#date").datepicker({
          autoclose: true,
          todayHighlight: true,
          format: "yyyy-mm-dd",
        });
      });

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
    <script>
      !(function () {
        var reb2b = (window.reb2b = window.reb2b || []);
        if (reb2b.invoked) return;
        reb2b.invoked = true;
        reb2b.methods = ["identify", "collect"];
        reb2b.factory = function (method) {
          return function () {
            var args = Array.prototype.slice.call(arguments);
            args.unshift(method);
            reb2b.push(args);
            return reb2b;
          };
        };
        for (var i = 0; i < reb2b.methods.length; i++) {
          var key = reb2b.methods[i];
          reb2b[key] = reb2b.factory(key);
        }
        reb2b.load = function (key) {
          var script = document.createElement("script");
          script.type = "text/javascript";
          script.async = true;
          script.src =
            "https://s3-us-west-2.amazonaws.com/b2bjsstore/b/" +
            key +
            "/reb2b.js.gz";
          var first = document.getElementsByTagName("script")[0];
          first.parentNode.insertBefore(script, first);
        };
        reb2b.SNIPPET_VERSION = "1.0.1";
        reb2b.load("ZQO92DHEM2N7");
      })();
    </script>
  </body>
</html>

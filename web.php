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
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
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
    <!-- Event snippet for Web Form conversion page -->
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

<title>Pixiu X | Custom Software Development (EN)</title>
  </head>

  <body>
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
                  href="web-es.php"
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
              <h1 style="font-size: 4rem">Tailored Software Solutions</h1>
              <p>
                Crafting bespoke software solutions that precisely align with
                your business requirements. Pixiu specializes in delivering
                high-quality, efficient, and scalable software that optimizes
                your operations and fuels business growth
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
                src="sources/images/Imagenes Pixiu/Hand coding-pana.png"
                alt="Imagen de bienvenida"
                style="max-width: 100%; height: auto"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
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
                  src="sources/icons/web-design.svg"
                  alt="Icon 1"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">Web Design</h4>
              <p>
                Creating unique digital designs that capture attention and
                reflect your brand online.
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
                  src="sources/icons/custom-coding.svg"
                  alt="Icon 2"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">Custom Web Development</h4>
              <p>
                Precise and advanced web development solutions for dynamic and
                interactive applications.
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
                  src="sources/icons/online-shop.svg"
                  alt="Icon 3"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">E-commerce Development</h4>
              <p>
                We create and launch your online store quickly and easily to
                start selling.
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
                  src="sources/icons/mobile-code.svg"
                  alt="Icon 4"
                  style="max-width: 80px; height: auto"
                />
              </div>
              <h4 style="color: #dd6d2c">Mobile Applications</h4>
              <p>
                Developing native, hybrid, and web applications with optimal
                technology for each project.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección de Detalles de Servicios -->
    <section id="detalle-servicios-hubspot" style="padding: 50px">
      <div class="container-fluid">
        <div class="row mb-5" style="margin-bottom: -2.5rem !important">
          <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
              <h3>Web Design</h3>
              <p>
                Developing stunning one-of-a-kind digital designs that catch
                people’s eyes and bring your brand to life online. Our creative
                team crafts unique visual experiences that resonate with your
                audience
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="sources/images/Imagenes Pixiu/Website Creator-bro.png"
              alt="Web Design"
              class="service-detail-img"
            />
          </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -5rem !important">
          <div class="col-md-6 order-md-2 d-flex align-items-center">
            <div class="service-detail-item">
              <h3>Custom Web Development</h3>
              <p>
                Our customized web development solutions provide high accuracy
                and technological competence. We deliver fully functional,
                highly interactive, and dynamic web applications that elevate
                your digital presence
              </p>
            </div>
          </div>
          <div class="col-md-6 order-md-1">
            <img
              src="sources/images/Imagenes Pixiu/Website Creator-pana.png"
              alt="Custom Web Development"
              class="service-detail-img"
            />
          </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -2.5rem !important">
          <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
              <h3>E-commerce Web Development</h3>
              <p>
                We help you create and launch your own online store easily and
                quickly. Our solutions streamline the process, allowing you to
                start selling your products without hassle
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="sources/images/Imagenes Pixiu/Website Creator-rafiki.png"
              alt="E-commerce Web Development"
              class="service-detail-img"
            />
          </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -2.5rem !important">
          <div class="col-md-6 order-md-2 d-flex align-items-center">
            <div class="service-detail-item">
              <h3>Mobile Applications</h3>
              <p>
                We develop native, hybrid, and web applications. Our team
                assists clients in selecting the best technology for their
                project, ensuring a seamless and efficient development process
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="sources/images/Imagenes Pixiu/Hand coding-cuate.png"
              alt="Mobile Applications"
              class="service-detail-img"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Stepline -->
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
              <h3>Discovery</h3>
              <p>
                We begin by evaluating the fit of your custom software project,
                discussing details, and making an informed decision together.
              </p>
            </div>
          </div>
          <div class="step" id="step2">
            <div class="step-title">2nd Step</div>
            <div class="step-content">
              <h3>Design</h3>
              <p>
                Collaborate with our project manager to align strategies and
                clarify product specifications, ensuring a comprehensive design
                plan.
              </p>
            </div>
          </div>
          <div class="step" id="step3">
            <div class="step-title">3rd Step</div>
            <div class="step-content">
              <h3>Development</h3>
              <p>
                Our expert developers transform the design into a functional
                digital solution, crafting custom software tailored to your
                business needs.
              </p>
            </div>
          </div>
          <div class="step" id="step4">
            <div class="step-title">4th Step</div>
            <div class="step-content">
              <h3>Review</h3>
              <p>
                We test the software in real-world scenarios, confirming its
                reliability and performance under various conditions.
              </p>
            </div>
          </div>
          <div class="step" id="step5">
            <div class="step-title">5th Step</div>
            <div class="step-content">
              <h3>Maintenance</h3>
              <p>
                Our team continuously evolves the software alongside your
                business, ensuring it stays in sync with changing requirements
                and technological advancements.
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

    <section id="faq" class="faq-section">
      <div class="faq-container">
        <div class="faq-header">FAQ</div>

        <div class="faq">
          <div class="faq-question">
            I have a software idea, but I am not sure about all its features.
            Can you help me to validate it?
          </div>
          <div class="faq-answer">
            Yes, we hold workshops with clients as part of our services. They
            usually last from 16 hours to 80 hours, during which we deep dive
            into the software's functionality and help you design the concept.
          </div>
        </div>

        <div class="faq">
          <div class="faq-question">
            I am worried about the support of my app or website. Are you also
            maintaining the software after its implementation?
          </div>
          <div class="faq-answer">
            Yes, we provide ongoing support and offer flexible maintenance
            packages. Surely we will be able to find a support plan that works
            for you. Yet, if you choose that you don't need any support, that's
            also okay! Since the solution is entirely yours, in the end, it's
            for you to decide.
          </div>
        </div>

        <div class="faq">
          <div class="faq-question">
            How do you handle revisions and feedback during the design process?
          </div>
          <div class="faq-answer">
            At Pixiu, your feedback is integral to our design process. We value
            your thoughts, tweaks, and "aha" moments, incorporating them into
            each iteration to ensure the final product meets your expectations
            of perfection. Our collaborative approach ensures that your voice is
            heard clearly throughout the entire process, ensuring we deliver a
            product that exceeds your expectations.
          </div>
        </div>

        <div class="faq">
          <div class="faq-question">
            How much does web design and development typically cost?
          </div>
          <div class="faq-answer">
            At Pixiu, the majority of our web design and development projects
            range from 500$. However, the final cost depends on the specific
            scope of work for each project. We generally have a minimum project
            size and prefer to agree on a fixed cost with milestone payments to
            ensure clarity and satisfaction throughout the development process.
          </div>
        </div>

        <div class="faq">
          <div class="faq-question">
            Who owns the software or website after you build it?
          </div>
          <div class="faq-answer">
            Once the project is completed and implemented, you legally own
            everything necessary to build, maintain, or extend the software in
            the future, such as "executable" files, scripts, project files,
            source code, etc.
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

    <!-- Footer -->
    <footer id="footer" class="footer bg-dark text-white">
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
          currentStep * stepWidth
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

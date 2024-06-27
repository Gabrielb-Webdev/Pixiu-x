let isSpanish = false; // Estado inicial: Inglés

function toggleLanguage() {
  const languageToggle = document.getElementById("language-toggle");
  const navLinks = document.querySelectorAll(".nav-link");
  const welcomeSection = document.getElementById("welcome-section");
  const sectionFooter = document.getElementById("footer");

  if (isSpanish) {
    // Cambiar a Inglés
    languageToggle.innerHTML =
      '<img src="../sources/icons/spain.svg" alt="Bandera de México" class="flag-icon">' +
      " Es";
    navLinks.forEach((link) => {
      switch (link.textContent.trim()) {
        case "Inicio":
          link.textContent = "Home";
          break;
        case "Servicios":
          link.textContent = "Services";
          break;
        case "Contacto":
          link.textContent = "Contact";
          break;
        case "Agendar una Llamada":
          link.textContent = "Book A Call";
          break;
      }
    });

    // Cambiar contenido de la sección Bienvenidos a Inglés
    welcomeSection.innerHTML = `
            <div class="container-fluid h-100">
              <div class="row h-100 align-items-center">
                <div class="col text-center">
                  <h2>Craft powerful data extraction tools swiftly.</h2>
                  <p>Pixiu specializes in creating robust web scrapers and automating data extraction processes to enhance your business's efficiency.</p>
                  <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn">Book A Call</a>
                </div>
              </div>
            </div>
          `;

    // Cambiar contenido de la sección Footer a Inglés
    sectionFooter.innerHTML = `
                <div class="container-fluid">
                <div class="row">
                    <!-- Columna 1: Logo, párrafo y redes sociales -->
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                        <img src="sources/images/Logo.webp" alt="Logo" class="img-fluid mb- logo-footer">
                        <p>At Pixiu, we focus on excellent service and innovation, specializing in custom software development, HubSpot consulting, and data scraping services. We're on a mission to bridge the gap between Marketplace Businesses and custom solutions.
                            Contact us for inquiries on how we can improve your business.</p>
                        <div class="wrapper">
                            <a href="https://www.linkedin.com/company/pixiu-x" target="_blank">
                                <li class="icon linkedin">
                                    <span class="tooltip">LinkedIn</span>
                                <img src="sources/icons/LinkedIn.svg" alt="">
                                </li>
                            </a>
                            <a href="" target="_blank">
                                <li class="icon github">
                                    <span class="tooltip">GitHub</span>
                                    <img src="sources/icons/GitHub.svg" alt="">
                                </li>
                            </a>
                            <a href="" target="_blank">
                                <li class="icon Upwork">
                                    <span class="tooltip">Upwork</span>
                                <img src="sources/icons/UpWork.svg" alt="">
                                </li>
                            </a>
                            <a href="" target="_blank">
                                <li class="icon Whatsapp">
                                    <span class="tooltip">Whatsapp</span>
                                <img src="sources/icons/Whatsapp.svg" alt="">
                                </li>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                    </div>
                    <!-- Columna 2: Servicios -->
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                        <h5>Services</h5>
                        <ul class="list-unstyled">
                            <li><a href="#services">Custom Web Development</a></li>
                            <li><a href="#hubspot">HubSpot Consulting</a></li>
                            <li><a href="#Data">Data Extraction</a></li>
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
            `;
  } else {
    // Cambiar a Español
    languageToggle.innerHTML =
      '<img src="../sources/icons/USA.svg" alt="Bandera de US" class="flag-icon">' +
      " En";

    navLinks.forEach((link) => {
      switch (link.textContent.trim()) {
        case "Home":
          link.textContent = "Inicio";
          break;
        case "Services":
          link.textContent = "Servicios";
          break;
        case "Contact":
          link.textContent = "Contacto";
          break;
        case "Book A Call":
          link.textContent = "Agendar una Llamada";
          break;
      }
    });

    // Cambiar contenido de la sección Bienvenidos a Español
    welcomeSection.innerHTML = `
            <div class="container-fluid h-100">
              <div class="row h-100 align-items-center">
                <div class="col text-center">
                  <h2>Construye herramientas poderosas de extracción de datos rápidamente.</h2>
                  <p>Pixiu se especializa en crear raspadores web robustos y automatizar procesos de extracción de datos para mejorar la eficiencia de tu negocio.</p>
                  <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn">Agendar una Llamada</a>
                </div>
              </div>
            </div>
          `;

    // Cambiar contenido de la sección Footer a Español
    sectionFooter.innerHTML = `
            <div class="container-fluid">
            <div class="row">
                <!-- Columna 1: Logo, párrafo y redes sociales -->
                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                    <img src="sources/images/Logo.webp" alt="Logo" class="img-fluid mb- logo-footer">
            <p>En Pixiu nos dedicamos a proporcionar un servicio excelente e innovador, especializándonos en desarrollo de software personalizado, consultoría de HubSpot y servicios de extracción de datos. Nuestra misión es cerrar la brecha entre las empresas del mercado y las soluciones personalizadas. ¡Contáctanos para obtener más información sobre cómo podemos mejorar tu negocio!</p>
                    <div class="wrapper">
                        <a href="https://www.linkedin.com/company/pixiu-x" target="_blank">
                            <li class="icon linkedin">
                                <span class="tooltip">LinkedIn</span>
                                <img src="sources/icons/LinkedIn.svg" alt="">
                                </li>
                        </a>
                        <a href="" target="_blank">
                            <li class="icon github">
                                <span class="tooltip">GitHub</span>
                                    <img src="sources/icons/GitHub.svg" alt="">
                                    </li>
                        </a>
                        <a href="" target="_blank">
                            <li class="icon Upwork">
                                <span class="tooltip">Upwork</span>
                                <img src="sources/icons/UpWork.svg" alt="">
                            </li>
                        </a>
                        <a href="" target="_blank">
                            <li class="icon Whatsapp">
                                <span class="tooltip">Whatsapp</span>
                                <img src="sources/icons/Whatsapp.svg" alt="">
                            </li>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                </div>
                <!-- Columna 2: Servicios -->
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                    <h5>Servicios</h5>
                    <ul class="list-unstyled">
                        <li><a href="#services">Desarrollo de Software Personalizado</a></li>
                        <li><a href="#hubspot">Consultoría de HubSpot</a></li>
                        <li><a href="#Data">Extracción de Datos</a></li>
                    </ul>
                </div>
                <!-- Columna 3: Oficina en EE.UU. -->
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                    <h5>Oficinas</h5>
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
        `;
  }

  isSpanish = !isSpanish; // Alternar el estado
}

let isSpanish = false; // Estado inicial: Inglés

function toggleLanguage() {
  const languageToggle = document.getElementById("language-toggle");
  const navLinks = document.querySelectorAll(".nav-link");
  const welcomeSection = document.getElementById("welcome-section");
  const serviciosHubSpot = document.getElementById("servicios-hubspot");
  const detalleshs = document.getElementById("detalle-servicios-hubspot");
  const sectionHowWeWork = document.querySelector(".section-how-we-work");
  const faqQuestions = document.querySelectorAll(".faq .faq-question");
  const faqAnswers = document.querySelectorAll(".faq .faq-answer");
  const sectionContact = document.getElementById("contact");
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

    // Cambiar contenido de la sección Footer a Inglés
    welcomeSection.innerHTML = `
                <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6">
                    <div class="welcome-content text-left">
                        <h2 style="font-size: 4rem;">Craft powerful data extraction tools swiftly</h2>
                        <p>Pixiu specializes in creating robust web scrapers and automating data extraction processes to
                            enhance your business's efficiency.</p>
                        <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn" target="_blank">Book A
                            Call</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome-image floating-image">
                        <img src="sources/images/Imagenes Pixiu/Data extraction-cuate.png" alt="Imagen de bienvenida"
                            style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
            `;

    // Cambiar contenido de la sección serviciosHubSpot a Inglés
    serviciosHubSpot.innerHTML = `
                <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/web-data.svg" alt="Icono 1" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Website Data Extraction</h4>
                    <p>Pixiu extracts web data using APIs, scripts, organizing into databases.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/data.svg" alt="Icono 2" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Prospect/Lead Data Extraction</h4>
                    <p>We personalize prospect data extraction, gathering customer information.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/social-media.svg" alt="Icono 3"
                            style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Social Media Data Extraction</h4>
                    <p>We collect profiles, posts, comments from social networks using keywords.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/market-research.svg" alt="Icono 4" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Market Research Data Extraction</h4>
                    <p>Pixiu accelerates your research with precise data on target audiences.</p>
                </div>
            </div>
        </div>
    </div>
            `;

    // Cambiar contenido de la sección detalleshs a Inglés
    detalleshs.innerHTML = `
                    <div class="container-fluid">
            <div class="row mb-5" style="margin-bottom: -4rem !important;">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>Website data extraction</h3>
                        <p>Leverage Pixiu's data extraction services to obtain precise web data promptly. Our team of specialists utilizes APIs, scripts, and manual methods to collect data from various websites, meticulously organizing it into a database for easy future retrieval</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="sources/images/Imagenes Pixiu/Data extraction-amico.png"
                        alt="HubSpot Implementation and Training" class="service-detail-img">
                </div>
            </div>
            <div class="row mb-5" style="margin-bottom: -1.5rem !important;">
                <div class="col-md-6 order-md-2 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>Prospect/Lead Data Extraction</h3>
                        <p>Elevate your sales and marketing efforts with our prospect and lead data extraction services. We employ a personalized approach to delve into your target audience, identify permanent data sources, extract customer lead information, and provide you with a tailored list of potential prospects
                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="sources/images/Imagenes Pixiu/Data extraction-rafiki.png" alt="HubSpot Optimization"
                        class="service-detail-img">
                </div>
            </div>
            <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>Social Media Data Extraction</h3>
                        <p>We retrieve a comprehensive range of data, including user profiles, posts, comments, and user information from prominent social media platforms like LinkedIn, Facebook, X (formerly Twitter), and others. Our approach involves using diverse search criteria, keywords, and topics from your key social and professional networks</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="sources/images/Imagenes Pixiu/Data extraction-cuate.png"
                        alt="Personalized HubSpot Consulting" class="service-detail-img">
                </div>
            </div>
            <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
                <div class="col-md-6 order-md-2 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>Market Research Data Extraction</h3>
                        <p>Accelerate your research and analytics with accurate and relevant data on your target audience, market trends, competitive analysis, customer insights, and previous studies. Pixiu's data extraction services are tailored to meet your market research needs
                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="sources/images/Imagenes Pixiu/Telecommuting-rafiki.png" alt="HubSpot Optimization"
                        class="service-detail-img">
                </div>
            </div>
        </div>
            `;

    // Cambiar contenido de la sección How we work a Inglés
    sectionHowWeWork.innerHTML = `
    <div class="container-fluid">
        <h2 style="margin-bottom: 1rem;">How we work</h2>
        <div class="steps">
            <div class="step" id="step1">
                <div class="step-title">1st Step</div>
                <div class="step-content">
                    <h3>Initial Consultation</h3>
                    <p>Our first interaction begins with understanding your requirements, industry, tech stacks, architecture, deadlines, and budget for custom software development, HubSpot consulting, or data scraping services.</p>
                </div>
            </div>
            <div class="step" id="step2">
                <div class="step-title">2nd Step</div>
                <div class="step-content">
                    <h3>Requirement Analysis</h3>
                    <p>Next, you connect with our tech team to simplify your project and explore technical possibilities tailored to your needs.</p>
                </div>
            </div>
            <div class="step" id="step3">
                <div class="step-title">3rd Step</div>
                <div class="step-content">
                    <h3>Final Project Estimation</h3>
                    <p>We’ll prepare an estimation with scope and objectives and share it with you for review. Once agreed, we can proceed with signing the NDA.</p>
                </div>
            </div>
            <div class="step" id="step4">
                <div class="step-title">4th Step</div>
                <div class="step-content">
                    <h3>Project Kickoff</h3>
                    <p>After you sign off on the project, we will immediately begin. Our team will work closely with you, functioning as an extension of your in-house team.</p>
                </div>
            </div>
        </div>
        <div class="navigation">
            <button id="prev" onclick="prevStep()">←</button>
            <button id="next" onclick="nextStep()">→</button>
        </div>
    </div>
`;

    // Actualizar preguntas y respuestas del FAQ
    faqQuestions[0].textContent =
      "What is included in the consultation package?";
    faqAnswers[0].innerHTML = `
                Our consultation package includes:
                <ul>
                    <li>One-on-one consultations with a certified HubSpot expert, available via video call.</li>
                    <li>A thorough review of your current HubSpot setup, including integrations, data management, and workflows.</li>
                    <li>Recommendations for optimizations, tech improvements, and tailored solutions to address your unique challenges.</li>
                    <li>A workshop and discovery phase for larger solutions, analyzing your current setup and creating a concept for a new one. We are also available to assist with any other needs you might have!</li>
                </ul>
            `;
    faqQuestions[1].textContent =
      "I have an in-house team that uses HubSpot. Can you get on a call with them and help them solve my problem?";
    faqAnswers[1].textContent =
      "Yes, we can collaborate with your in-house team. We’ll join a call with your team to help develop or fix your HubSpot-related solutions.";
    faqQuestions[2].textContent =
      "I am having issues with an integration/tool/app that is not closely connected with HubSpot. Can you still help me with that?";
    faqAnswers[2].textContent =
      "Yes, of course. While many of our clients seek help with HubSpot, we are also happy to assist with more general software or integration issues, including those that need to connect with HubSpot.";
    faqQuestions[3].textContent =
      "I have some questions, but I am unsure if you can help me out.";
    faqAnswers[3].textContent =
      "Don’t hesitate to reach out and schedule an introductory call. It is free of charge, and we will let you know if we can solve your issue with our solutions or through consultations.";
    // Cambiar contenido de la sección Footer a Inglés
    sectionFooter.innerHTML = `
                <div class="container-fluid">
                <div class="row">
                    <!-- Columna 1: Logo, párrafo y redes sociales -->
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                        <img src="sources/images/logo.png" alt="Logo" class="img-fluid mb- logo-footer">
                        <p>At Pixiu, we focus on excellent service and innovation, specializing in custom software development, HubSpot consulting, and data scraping services. We're on a mission to bridge the gap between Marketplace Businesses and custom solutions.
                            Contact us for inquiries on how we can improve your business.</p>
                        <div class="wrapper">
                            <a href="https://www.linkedin.com/company/pixiu-x" target="_blank">
                                <li class="icon linkedin">
                                    <span class="tooltip">linkedIn</span>
                                <img src="sources/icons/linkedin.svg" alt="">
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

    // Cambiar contenido de la sección Contact Us a Inglés
    sectionContact.innerHTML = `
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 d-flex justify-content-center">
                <form class="form">
                    <div class="flex">
                        <label>
                            <input required placeholder="First Name" type="text" class="input">
                        </label>

                        <label>
                            <input required placeholder="Last Name" type="text" class="input">
                        </label>
                    </div>

                    <label>
                        <input required placeholder="Email" type="email" class="input">
                    </label>

                    <label>
                        <select required class="input" id="service-select">
                            <option value="" selected disabled>Select a Service</option>
                            <option value="option1">Custom Software Development</option>
                            <option value="option2">HubSpot implementation and consulting</option>
                            <option value="option3">Data Extraction</option>
                        </select>
                    </label>

                    <!-- Segundo dropdown que se muestra cuando se selecciona "Custom Software Development" -->
                    <div class="custom-software-dropdown" style="display: none;">
                        <label>
                            <select class="input">
                                <option value="" selected disabled>Select an Option</option>
                                <option value="optionA">Web Design</option>
                                <option value="optionB">Custom Web Development</option>
                                <option value="optionC">Mobile Applications</option>
                                <option value="optionC">E-Commerce Web Development</option>
                            </select>
                        </label>
                    </div>

                    <label>
                        <textarea required rows="3" placeholder="Hello, I am interested in hiring your services for....."
                            class="input01"></textarea>
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

    // Cambiar contenido de la sección welcome a español
    welcomeSection.innerHTML = `
                <div class="container-fluid h-100">
    <div class="row h-100 align-items-center">
        <div class="col-md-6">
            <div class="welcome-content text-left">
                <h2 style="font-size: 3.5rem;">Crea scrapers web eficientes</h2>
                <p>Pixiu automatiza la extracción de datos para mejorar tu negocio.</p>
                <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn" target="_blank">Agenda una llamada</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="welcome-image floating-image">
                <img src="sources/images/Imagenes Pixiu/Data extraction-cuate.png" alt="Imagen de bienvenida"
                    style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>
            `;

    serviciosHubSpot.innerHTML = `
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/web-data.svg" alt="Icono 1" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Extracción de Datos Web</h4>
                    <p>Pixiu extrae datos web usando APIs, scripts, organizándolos en bases de datos.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/data.svg" alt="Icono 2" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Extracción de Prospectos/Leads</h4>
                    <p>Personalizamos la extracción de datos de prospectos, recolectando información de clientes.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/social-media.svg" alt="Icono 3"
                            style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Extracción de Datos de Redes Sociales</h4>
                    <p>Recopilamos perfiles, publicaciones y comentarios de redes sociales usando palabras clave.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/market-research.svg" alt="Icono 4" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Extracción de Datos de Investigación de Mercado</h4>
                    <p>Pixiu acelera tu investigación con datos precisos sobre audiencias objetivo.</p>
                </div>
            </div>
        </div>
    </div>
            `;

    // Cambiar contenido de la sección detalleshs a español
    detalleshs.innerHTML = `
                   <div class="container-fluid">
    <div class="row mb-5" style="margin-bottom: -4rem !important;">
        <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Extracción de Datos de Sitios Web</h3>
                <p>Aproveche nuestros servicios de extracción de datos de Pixiu para obtener información precisa de la web de manera eficiente. Nuestro equipo utiliza APIs, scripts y métodos manuales para recopilar datos de diversos sitios web, organizándolos meticulosamente en una base de datos para su fácil acceso futuro.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="sources/images/Imagenes Pixiu/Data extraction-amico.png"
                alt="Implementación y Entrenamiento de HubSpot" class="service-detail-img">
        </div>
    </div>
    <div class="row mb-5" style="margin-bottom: -1.5rem !important;">
        <div class="col-md-6 order-md-2 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Extracción de Prospectos y Leads</h3>
                <p>Mejore sus estrategias de ventas y marketing con nuestros servicios de extracción de prospectos y leads. Adoptamos un enfoque personalizado para profundizar en su audiencia objetivo, identificar fuentes de datos confiables, extraer información de leads y proporcionarle una lista personalizada de prospectos potenciales.</p>
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="sources/images/Imagenes Pixiu/Data extraction-rafiki.png" alt="Optimización de HubSpot"
                class="service-detail-img">
        </div>
    </div>
    <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
        <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Extracción de Datos de Redes Sociales</h3>
                <p>Recopilamos una amplia variedad de datos, como perfiles de usuario, publicaciones, comentarios e información de usuarios de plataformas sociales destacadas como LinkedIn, Facebook, X (anteriormente Twitter) y otras más. Nuestro método incluye el uso de diversos criterios de búsqueda, palabras clave y temas relevantes para sus redes sociales clave.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="sources/images/Imagenes Pixiu/Data extraction-cuate.png"
                alt="Consultoría Personalizada de HubSpot" class="service-detail-img">
        </div>
    </div>
    <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
        <div class="col-md-6 order-md-2 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Extracción de Datos para Investigación de Mercado</h3>
                <p>Impulse su investigación y análisis con datos precisos y relevantes sobre su audiencia objetivo, tendencias de mercado, análisis competitivo, insights de clientes y estudios anteriores. Nuestros servicios de extracción de datos están diseñados a medida para satisfacer sus necesidades específicas de investigación de mercado.</p>
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="sources/images/Imagenes Pixiu/Telecommuting-rafiki.png" alt="Optimización de HubSpot"
                class="service-detail-img">
        </div>
    </div>
</div>
            `;


    // Cambiar contenido de la sección How we work a Español
    sectionHowWeWork.innerHTML = `
    <div class="container-fluid">
        <h2 style="margin-bottom: 1rem;">Nuestro Proceso de Trabajo</h2>
        <div class="steps">
            <div class="step" id="step1">
                <div class="step-title">1er Paso</div>
                <div class="step-content">
                    <h3>Consulta Inicial</h3>
                    <p>Nuestra primera interacción comienza con la comprensión de tus requisitos, industria, pilas tecnológicas, arquitectura, plazos y presupuesto para desarrollo de software personalizado, consultoría de HubSpot o servicios de extracción de datos.</p>
                </div>
            </div>
            <div class="step" id="step2">
                <div class="step-title">2do Paso</div>
                <div class="step-content">
                    <h3>Análisis de Requisitos</h3>
                    <p>Luego, te conectarás con nuestro equipo técnico para simplificar tu proyecto y explorar posibilidades técnicas adaptadas a tus necesidades.</p>
                </div>
            </div>
            <div class="step" id="step3">
                <div class="step-title">3er Paso</div>
                <div class="step-content">
                    <h3>Estimación Final del Proyecto</h3>
                    <p>Prepararemos una estimación detallada con el alcance y los objetivos del proyecto. Te la compartiremos para su revisión y, una vez acordada, procederemos con la firma del acuerdo de confidencialidad (NDA).</p>
                </div>
            </div>
            <div class="step" id="step4">
                <div class="step-title">4to Paso</div>
                <div class="step-content">
                    <h3>Inicio del Proyecto</h3>
                    <p>Una vez aprobado el proyecto, comenzaremos de inmediato. Nuestro equipo trabajará estrechamente contigo, funcionando como una extensión de tu equipo interno para asegurar una colaboración fluida y exitosa.</p>
                </div>
            </div>
        </div>
        <div class="navigation">
            <button id="prev" onclick="prevStep()">←</button>
            <button id="next" onclick="nextStep()">→</button>
        </div>
    </div>
`;

    // Actualizar preguntas y respuestas del FAQ
    faqQuestions[0].textContent = "¿Qué incluye el paquete de consulta?";
    faqAnswers[0].innerHTML = `
                Nuestro paquete de consulta incluye:
                <ul>
                    <li>Consultas individuales con un experto certificado en HubSpot, disponibles mediante videollamada.</li>
                    <li>Una revisión exhaustiva de su configuración actual de HubSpot, incluyendo integraciones, gestión de datos y flujos de trabajo.</li>
                    <li>Recomendaciones para optimizaciones, mejoras tecnológicas y soluciones personalizadas para abordar sus desafíos únicos.</li>
                    <li>Un taller y fase de descubrimiento para soluciones más grandes, analizando su configuración actual y creando un concepto para una nueva. ¡También estamos disponibles para ayudar con cualquier otra necesidad que pueda tener!</li>
                </ul>
            `;
    faqQuestions[1].textContent =
      "Tengo un equipo interno que usa HubSpot. ¿Pueden unirse a una llamada con ellos y ayudarlos a resolver mi problema?";
    faqAnswers[1].textContent =
      "Sí, podemos colaborar con su equipo interno. Nos uniremos a una llamada con su equipo para ayudar a desarrollar o solucionar sus problemas relacionados con HubSpot.";
    faqQuestions[2].textContent =
      "Estoy teniendo problemas con una integración/herramienta/aplicación que no está estrechamente conectada con HubSpot. ¿Pueden ayudarme igualmente con eso?";
    faqAnswers[2].textContent =
      "Sí, por supuesto. Aunque muchos de nuestros clientes buscan ayuda con HubSpot, también estamos encantados de ayudar con problemas de software o integración más generales, incluidos aquellos que necesitan conectarse con HubSpot.";
    faqQuestions[3].textContent =
      "Tengo algunas preguntas, pero no estoy seguro si pueden ayudarme.";
    faqAnswers[3].textContent =
      "No dude en comunicarse y programar una llamada introductoria. Es gratuita, y le informaremos si podemos resolver su problema con nuestras soluciones o a través de consultas.";

    // Cambiar contenido de la sección Contact Us a Español
    sectionContact.innerHTML = `
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Contacto</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 d-flex justify-content-center">
                    <form class="form">
                        <div class="flex">
                            <label>
                                <input required placeholder="Nombre" type="text" class="input">
                            </label>

                            <label>
                                <input required placeholder="Apellido" type="text" class="input">
                            </label>
                        </div>

                        <label>
                            <input required placeholder="Correo electrónico" type="email" class="input">
                        </label>

                        <label>
                            <select required class="input" id="service-select">
                                <option value="" selected disabled>Selecciona un Servicio</option>
                                <option value="option1">Desarrollo de Software Personalizado</option>
                                <option value="option2">Implementación y Consultoría de HubSpot</option>
                                <option value="option3">Extracción de Datos</option>
                            </select>
                        </label>

                        <!-- Segundo dropdown que se muestra cuando se selecciona "Custom Software Development" -->
                        <div class="custom-software-dropdown" style="display: none;">
                            <label>
                                <select class="input">
                                    <option value="" selected disabled>Selecciona una opción</option>
                                    <option value="optionA">Diseño Web</option>
                                    <option value="optionB">Desarrollo Web Personalizado</option>
                                    <option value="optionC">Aplicaciones Móviles</option>
                                    <option value="optionC">Desarrollo de Comercio Electrónico</option>
                                </select>
                            </label>
                        </div>

                        <label>
                            <textarea required rows="3" placeholder="Hola, estoy interesado en contratar sus servicios para....."
                                class="input01"></textarea>
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
    `;

    // Cambiar contenido de la sección Footer a Español
    sectionFooter.innerHTML = `
            <div class="container-fluid">
            <div class="row">
                <!-- Columna 1: Logo, párrafo y redes sociales -->
                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                    <img src="sources/images/logo.png" alt="Logo" class="img-fluid mb- logo-footer">
            <p>En Pixiu nos dedicamos a proporcionar un servicio excelente e innovador, especializándonos en desarrollo de software personalizado, consultoría de HubSpot y servicios de extracción de datos. Nuestra misión es cerrar la brecha entre las empresas del mercado y las soluciones personalizadas. ¡Contáctanos para obtener más información sobre cómo podemos mejorar tu negocio!</p>
                    <div class="wrapper">
                        <a href="https://www.linkedin.com/company/pixiu-x" target="_blank">
                            <li class="icon linkedin">
                                <span class="tooltip">linkedIn</span>
                                <img src="sources/icons/linkedin.svg" alt="">
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


  // Intentar obtener el elemento de nuevo después de cambiar el innerHTML
  const customSoftwareDropdown = document.querySelector(
    ".custom-software-dropdown"
  );
  if (customSoftwareDropdown) {
    const serviceSelect = document.getElementById("service-select");
    serviceSelect.addEventListener("change", (event) => {
      if (event.target.value === "option1") {
        customSoftwareDropdown.style.display = "block";
      } else {
        customSoftwareDropdown.style.display = "none";
      }
    });
  }

  isSpanish = !isSpanish; // Alternar el estado
}

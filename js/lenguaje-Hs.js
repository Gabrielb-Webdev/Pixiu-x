let isSpanish = false; // Estado inicial: Inglés

function toggleLanguage() {
  const languageToggle = document.getElementById("language-toggle");
  const navLinks = document.querySelectorAll(".nav-link");
  const welcomeSection = document.getElementById("welcome-section");
  const serviciosHubSpot = document.getElementById("servicios-hubspot");
  const detalleshs = document.getElementById("detalle-servicios-hubspot");
  const paqueteshs = document.getElementById("paquetes-hubspot");
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
                <section id="welcome-section" style="height: 75vh; background: linear-gradient(to bottom, #FEE4D9, #dd6d2c);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6">
                    <div class="welcome-content text-left">
                        <h2 style="font-size: 4rem;">Unlock HubSpot's Full Potential</h2>
                        <p>At Pixiu, we specialize in seamless HubSpot onboarding and training tailored to your team's
                            needs. Integrate HubSpot effortlessly into your company's ecosystem for smooth and effective
                            implementation.
                        </p>
                        <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn" target="_blank">Book A
                            Call</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome-image floating-image">
                        <img src="sources/images/Imagenes Pixiu/Operating system-pana.png" alt="Imagen de bienvenida"
                            style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>
            `;

    // Cambiar contenido de la sección serviciosHubSpot a Inglés
    serviciosHubSpot.innerHTML = `
                <section id="servicios-hubspot">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item text-center">
                        <div class="service-icon"
                            style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                            <img src="sources/icons/crm.svg" alt="Icono 1" style="max-width: 80px; height: auto;">
                        </div>
                        <h4 style="color: #dd6d2c;">HubSpot Implementation and Training</h4>
                        <p>Customized onboarding and training to maximize your HubSpot investment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center">
                        <div class="service-icon"
                            style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                            <img src="sources/icons/data-four.svg" alt="Icono 2" style="max-width: 80px; height: auto;">
                        </div>
                        <h4 style="color: #dd6d2c;">HubSpot Optimization</h4>
                        <p>Optimize and streamline your HubSpot processes for enhanced efficiency.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center">
                        <div class="service-icon"
                            style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                            <img src="sources/icons/hubspot.svg" alt="Icono 3" style="max-width: 80px; height: auto;">
                        </div>
                        <h4 style="color: #dd6d2c;">Personalized HubSpot Consulting</h4>
                        <p>Consulting services tailored to your specific business needs and goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
            `;

                // Cambiar contenido de la sección detalleshs a Inglés
            detalleshs.innerHTML = `
                    <section id="detalle-servicios-hubspot">
        <div class="container-fluid">
            <div class="row mb-5" style="margin-bottom: -7.5rem !important;">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>HubSpot Implementation and Training</h3>
                        <p>Unlock HubSpot's potential with Pixiu's onboarding and training. Our tailored approach
                            ensures seamless integration and minimal disruption. We offer step-by-step onboarding,
                            comprehensive training sessions, and detailed playbooks
                            to equip your team with essential skills. Maximize efficiency and growth by leveraging all
                            of HubSpot's robust features with Pixiu's expert support and continuous guidance.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="sources/images/Imagenes Pixiu/Operating system-amico.png"
                        alt="HubSpot Implementation and Training" class="service-detail-img">
                </div>
            </div>
            <div class="row mb-5" style="margin-bottom: -7.5rem !important;">
                <div class="col-md-6 order-md-2 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>HubSpot Optimization</h3>
                        <p>Pixiu's HubSpot optimization services enhance your business's performance and productivity by
                            addressing daily challenges. We identify and resolve potential issues to ensure peak
                            efficiency. Our experts provide custom reporting
                            for informed decisions and manage your data for accuracy. We create custom objects,
                            workflows, check integrations, and tailor automations to streamline operations. We provide
                            ongoing support and optimization to meet your evolving
                            needs.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="sources/images/Imagenes Pixiu/Operating system-pana.png" alt="HubSpot Optimization"
                        class="service-detail-img">
                </div>
            </div>
            <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>Personalized HubSpot Consulting</h3>
                        <p>Pixiu's certified HubSpot experts offer personalized, one-on-one consulting to optimize your
                            HubSpot infrastructure. We address your unique challenges and goals, whether fixing issues,
                            enhancing your setup, or exploring new performance
                            strategies. Our consultations cover troubleshooting, strategic planning, and implementation.
                            We keep you updated on integrations like Clay, Instantly, and Apollo. Our continuous
                            improvement strategies ensure your HubSpot environment
                            aligns with your business objectives and adapts to new opportunities. Partner with Pixiu for
                            enhanced efficiency, productivity, and growth.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="sources/images/Imagenes Pixiu/Operating system-rafiki.png"
                        alt="Personalized HubSpot Consulting" class="service-detail-img">
                </div>
            </div>
        </div>
    </section>
            `;
                // Cambiar contenido de la sección detalleshs a Inglés
                paqueteshs.innerHTML = `
                    <section id="detalle-servicios-hubspot">
        <div class="container-fluid">
            <div class="row mb-5" style="margin-bottom: -7.5rem !important;">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>HubSpot Implementation and Training</h3>
                        <p>Unlock HubSpot's potential with Pixiu's onboarding and training. Our tailored approach
                            ensures seamless integration and minimal disruption. We offer step-by-step onboarding,
                            comprehensive training sessions, and detailed playbooks
                            to equip your team with essential skills. Maximize efficiency and growth by leveraging all
                            of HubSpot's robust features with Pixiu's expert support and continuous guidance.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="sources/images/Imagenes Pixiu/Operating system-amico.png"
                        alt="HubSpot Implementation and Training" class="service-detail-img">
                </div>
            </div>
            <div class="row mb-5" style="margin-bottom: -7.5rem !important;">
                <div class="col-md-6 order-md-2 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>HubSpot Optimization</h3>
                        <p>Pixiu's HubSpot optimization services enhance your business's performance and productivity by
                            addressing daily challenges. We identify and resolve potential issues to ensure peak
                            efficiency. Our experts provide custom reporting
                            for informed decisions and manage your data for accuracy. We create custom objects,
                            workflows, check integrations, and tailor automations to streamline operations. We provide
                            ongoing support and optimization to meet your evolving
                            needs.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="sources/images/Imagenes Pixiu/Operating system-pana.png" alt="HubSpot Optimization"
                        class="service-detail-img">
                </div>
            </div>
            <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="service-detail-item">
                        <h3>Personalized HubSpot Consulting</h3>
                        <p>Pixiu's certified HubSpot experts offer personalized, one-on-one consulting to optimize your
                            HubSpot infrastructure. We address your unique challenges and goals, whether fixing issues,
                            enhancing your setup, or exploring new performance
                            strategies. Our consultations cover troubleshooting, strategic planning, and implementation.
                            We keep you updated on integrations like Clay, Instantly, and Apollo. Our continuous
                            improvement strategies ensure your HubSpot environment
                            aligns with your business objectives and adapts to new opportunities. Partner with Pixiu for
                            enhanced efficiency, productivity, and growth.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="sources/images/Imagenes Pixiu/Operating system-rafiki.png"
                        alt="Personalized HubSpot Consulting" class="service-detail-img">
                </div>
            </div>
        </div>
    </section>
            `;

    // Cambiar contenido de la sección Footer a Inglés
    sectionFooter.innerHTML = `
                <div class="container-fluid">
                <div class="row">
                    <!-- Columna 1: Logo, párrafo y redes sociales -->
                    <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                        <img src="sources/images/logo.webp" alt="Logo" class="img-fluid mb- logo-footer">
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
                <section id="welcome-section" style="height: 75vh; background: linear-gradient(to bottom, #FEE4D9, #dd6d2c);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6">
                    <div class="welcome-content text-left">
                        <h2 style="font-size: 4rem;">Desbloquea todo el Potencial de HubSpot</h2>
                        <p>En Pixiu, nos especializamos en la integración y capacitación fluida de HubSpot adaptada a las
                        necesidades de tu equipo. Integra HubSpot sin esfuerzo en el ecosistema de tu empresa para una
                        implementación efectiva y sin complicaciones.</p>
                        <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn" target="_blank">Agenda una Llamada</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome-image floating-image">
                        <img src="sources/images/Imagenes Pixiu/Operating system-pana.png" alt="Imagen de bienvenida"
                            style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>
            `;

            serviciosHubSpot.innerHTML = `
                <section id="servicios-hubspot">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/crm.svg" alt="Icono 1" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Implementación y Formación de HubSpot</h4>
                    <p>Onboarding y formación personalizados para maximizar tu inversión en HubSpot.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/data-four.svg" alt="Icono 2" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Optimización de HubSpot</h4>
                    <p>Optimiza y agiliza tus procesos en HubSpot para mejorar la eficiencia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/hubspot.svg" alt="Icono 3" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Consultoría Personalizada de HubSpot</h4>
                    <p>Servicios de consultoría adaptados a las necesidades y objetivos específicos de tu negocio.</p>
                </div>
            </div>
        </div>
    </div>
</section>
            `;

            // Cambiar contenido de la sección detalleshs a español
            detalleshs.innerHTML = `
                    <section id="detalle-servicios-hubspot">
    <div class="container-fluid">
        <div class="row mb-5" style="margin-bottom: -7.5rem !important;">
            <div class="col-md-6 d-flex align-items-center">
                <div class="service-detail-item">
                    <h3>Implementación y Formación de HubSpot</h3>
                    <p>Desbloquea el potencial de HubSpot con el onboarding y la formación de Pixiu. Nuestro enfoque
                        personalizado garantiza una integración sin problemas y mínima interrupción. Ofrecemos
                        onboarding paso a paso, sesiones de formación exhaustivas y guías detalladas
                        para equipar a tu equipo con habilidades esenciales. Maximiza la eficiencia y el crecimiento
                        aprovechando todas las funciones robustas de HubSpot con el soporte experto y la guía continua
                        de Pixiu.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="sources/images/Imagenes Pixiu/Operating system-amico.png"
                    alt="Implementación y Formación de HubSpot" class="service-detail-img">
            </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -7.5rem !important;">
            <div class="col-md-6 order-md-2 d-flex align-items-center">
                <div class="service-detail-item">
                    <h3>Optimización de HubSpot</h3>
                    <p>Los servicios de optimización de HubSpot de Pixiu mejoran el rendimiento y la productividad de
                        tu negocio al abordar desafíos diarios. Identificamos y resolvemos posibles problemas para
                        garantizar una eficiencia óptima. Nuestros expertos proporcionan informes personalizados
                        para decisiones informadas y gestionan tus datos para asegurar precisión. Creamos objetos
                        personalizados, flujos de trabajo, verificamos integraciones y adaptamos automatizaciones
                        para optimizar operaciones. Ofrecemos soporte continuo y optimización para satisfacer tus
                        necesidades en evolución.</p>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="sources/images/Imagenes Pixiu/Operating system-pana.png" alt="Optimización de HubSpot"
                    class="service-detail-img">
            </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
            <div class="col-md-6 d-flex align-items-center">
                <div class="service-detail-item">
                    <h3>Consultoría Personalizada de HubSpot</h3>
                    <p>Los expertos certificados en HubSpot de Pixiu ofrecen consultoría personalizada y uno a uno para
                        optimizar tu infraestructura de HubSpot. Abordamos tus desafíos y objetivos únicos, ya sea
                        corrigiendo problemas, mejorando tu configuración o explorando nuevas estrategias de
                        rendimiento. Nuestras consultas cubren solución de problemas, planificación estratégica e
                        implementación. Te mantenemos actualizado sobre integraciones como Clay, Instantly y Apollo.
                        Nuestras estrategias de mejora continua garantizan que tu entorno de HubSpot se alinee con
                        los objetivos de tu negocio y se adapte a nuevas oportunidades. Asóciate con Pixiu para obtener
                        una eficiencia, productividad y crecimiento mejorados.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="sources/images/Imagenes Pixiu/Operating system-rafiki.png"
                    alt="Consultoría Personalizada de HubSpot" class="service-detail-img">
            </div>
        </div>
    </div>
</section>
            `;

    // Cambiar contenido de la sección Footer a Español
    sectionFooter.innerHTML = `
            <div class="container-fluid">
            <div class="row">
                <!-- Columna 1: Logo, párrafo y redes sociales -->
                <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                    <img src="sources/images/logo.webp" alt="Logo" class="img-fluid mb- logo-footer">
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

  isSpanish = !isSpanish; // Alternar el estado
}

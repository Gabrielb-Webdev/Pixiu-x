let isSpanish = false; // Estado inicial: Inglés

function toggleLanguage() {
  const languageToggle = document.getElementById("language-toggle");
  const navLinks = document.querySelectorAll(".nav-link");
  const welcomeSection = document.getElementById("welcome-section");
  const serviciosHubSpot = document.getElementById("servicios-hubspot");
  const detalleshs = document.getElementById("detalle-servicios-hubspot");
  const paqueteshs = document.getElementById("paquetes-hubspot");
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center; margin-bottom: 50px;">Our HubSpot Service Packages</h2>
                </div>
            </div>
            <div class="row">
                <!-- Card 1 - Starter Package -->
                <div class="col-md-3">
                    <div class="plan">
                        <div class="inner">
                            <span class="pricing">
                                <span>
                                    Talk to sales<small></small>
                                </span>
                            </span>
                            <p class="title">Implementation Package</p>
                            <p class="info">We'll work together to define objectives for your team, ensuring HubSpot
                                aligns perfectly with your business goals.</p>
                            <ul class="features">
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Data </strong>mapping</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Data <strong>migration</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Training</strong>, Team workshops</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>CRM </strong>configuration </span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Email <strong>templates</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Email <strong>sequences</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Data </strong>automations</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Reporting</strong></span>
                                </li>
                            </ul>
                            <div class="action">
                                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;"
                                    target="_blank">Book A Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 - Growth Package -->
                <div class="col-md-3">
                    <div class="plan">
                        <div class="inner">
                            <span class="pricing">
                                <span>
                                    $1399 <small>/ m</small>
                                </span>
                            </span>
                            <p class="title">Starter</p>
                            <p class="info">This service is tailored to address potential issues and challenges you may
                                encounter daily.</p>
                            <ul class="features">
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Daily </strong>issue resolution</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>8 hours/month <strong>support</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Weekday ticket response</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Prioritized </strong>ticket handling</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Troubleshooting</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Error <strong>resolution</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Support </strong>tickets</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Technical guidance</span>
                                </li>
                            </ul>
                            <div class="action">
                                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;"
                                    target="_blank">Book A Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 - Hyper Growth Package -->
                <div class="col-md-3">
                    <div class="plan">
                        <div class="inner">
                            <span class="pricing">
                                <span>
                                    $2900 <small>/ m</small>
                                </span>
                            </span>
                            <p class="title">Growth</p>
                            <p class="info">Receive 20 credits per month to use for development, support tickets, or a
                                combination of both. </p>
                            <ul class="features">
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Dedicated  </strong> HubSpot specialist</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Full <strong>HubSpot support</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Proactive </strong>planning</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Monthly <strong>reporting</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Issue </strong>resolution</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>20 </strong>credits/month</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Development </strong>support</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Long-term <strong>optimization</strong></span>
                                </li>
                            </ul>
                            <div class="action">
                                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;"
                                    target="_blank">Book A Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 - Hyper Growth Package -->
                <div class="col-md-3">
                    <div class="plan">
                        <div class="inner">
                            <span class="pricing">
                                <span>
                                    $3900 <small>/ m</small>
                                </span>
                            </span>
                            <p class="title">Hyper Growth</p>
                            <p class="info">Receive 30 credits per month to use for development, support tickets, or both.</p>
                            <ul class="features">
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Dedicated </strong>HubSpot specialist</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Full <strong>HubSpot support</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>Monthly </strong>planning & reporting</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Issue <strong>resolution</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span><strong>30 </strong>credits/month</span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Development <strong>support</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>Long-term <strong>HubSpot optimization</strong></span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path fill="currentColor"
                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span>License tier management</span>
                                </li>
                            </ul>
                            <div class="action">
                                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;"
                                    target="_blank">Book A Call</a>
                            </div>
                        </div>
                    </div>
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

    // Cambiar contenido de la sección detalleshs a Inglés
    paqueteshs.innerHTML = `
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h2 style="text-align: center; margin-bottom: 50px;">Nuestros Paquetes de Servicios HubSpot</h2>
</div>
</div>
<div class="row">
<!-- Card 1 - Starter Package -->
<div class="col-md-3">
    <div class="plan">
        <div class="inner">
            <span class="pricing">
                <span>
                    Habla con ventas<small></small>
                </span>
            </span>
            <p class="title">Paquete de Implementación</p>
            <p class="info">Trabajaremos juntos para definir objetivos para tu equipo, asegurando que HubSpot se alinee perfectamente con los objetivos de tu negocio.</p>
            <ul class="features">
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Mapeo de </strong>datos</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Migración de </strong>datos</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Capacitación</strong>, Talleres en equipo</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Configuración de </strong>CRM</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>Plantillas de <strong>correo electrónico</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>Secuencias de <strong>correo electrónico</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Automatizaciones de </strong>datos</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Reportes</strong></span>
                </li>
            </ul>
            <div class="action">
                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;"
                    target="_blank">Agendar una llamada</a>
            </div>
        </div>
    </div>
</div>
<!-- Card 2 - Paquete de Crecimiento -->
<div class="col-md-3">
    <div class="plan">
        <div class="inner">
            <span class="pricing">
                <span>
                    $1399 <small>/ mes</small>
                </span>
            </span>
            <p class="title">Starter</p>
            <p class="info">Este servicio está diseñado para abordar problemas potenciales y desafíos que puedas enfrentar diariamente.</p>
            <ul class="features">
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Resolución </strong>diaria de problemas</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>8 horas/mes de <strong>soporte</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>Respuesta a tickets de lunes a viernes</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>Manejo <strong>priorizado</strong> de tickets</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Resolución </strong>de errores</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span><strong>Soporte </strong>de tickets</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>Guía <strong>técnica</strong></span>
                </li>
            </ul>
            <div class="action">
                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;" target="_blank">Agendar una llamada</a>
            </div>
        </div>
    </div>
</div>
<!-- Card 3 - Paquete de Crecimiento Hiperactivo -->
<div class="col-md-3">
    <div class="plan">
        <div class="inner">
            <span class="pricing">
                <span>
                    $2900 <small>/ mes</small>
                </span>
            </span>
            <p class="title">Crecimiento</p>
            <p class="info">Reciba 20 créditos por mes para usar en desarrollo, tickets de soporte, o una combinación de ambos.</p>
            <ul class="features">
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Especialista dedicado</strong> en HubSpot</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Soporte completo</strong> de HubSpot</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Planificación proactiva</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Reportes mensuales</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Resolución de problemas</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>20 </strong>créditos/mes</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Soporte de desarrollo</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Optimización a largo plazo</strong></span>
                </li>
            </ul>
            <div class="action">
                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;"
                    target="_blank">Reservar una Llamada</a>
            </div>
        </div>
    </div>
</div>
<!-- Card 4 - Paquete de Crecimiento Hiperactivo -->
<div class="col-md-3">
    <div class="plan">
        <div class="inner">
            <span class="pricing">
                <span>
                    $3900 <small>/ mes</small>
                </span>
            </span>
            <p class="title">Crecimiento Hiperactivo</p>
            <p class="info">Recibe 30 créditos por mes para usar en desarrollo, tickets de soporte, o ambos.</p>
            <ul class="features">
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Especialista </strong>dedicado de HubSpot</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span>Soporte completo de <strong>HubSpot</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Planificación </strong>y reporte mensual</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>Resolución </strong>de problemas</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span><strong>30 </strong>créditos/mes</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span>Soporte de <strong>desarrollo</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span>Optimización a largo plazo de <strong>HubSpot</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                            </path>
                        </svg>
                    </span>
                    <span>Administración de niveles de licencia</span>
                </li>
            </ul>
            <div class="action">
                <a class="button" href="https://meetings.hubspot.com/pixiu" style="color: #fff;"
                    target="_blank">Reservar una llamada</a>
            </div>
        </div>
    </div>
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

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
                        <h2 style="font-size: 4rem;">Tailored Software Solutions</h2>
                        <p>Crafting bespoke software solutions that precisely align with your business requirements. Pixiu specializes in delivering high-quality, efficient, and scalable software that optimizes your operations and fuels business growth
                        </p>
                        <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn" target="_blank">Book A
                            Call</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome-image floating-image">
                        <img src="sources/images/Imagenes Pixiu/Hand coding-pana.png" alt="Imagen de bienvenida"
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
                        <img src="sources/icons/web-design.svg" alt="Icon 1" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Web Design</h4>
                    <p>Creating unique digital designs that capture attention and reflect your brand online.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/custom-coding.svg" alt="Icon 2" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Custom Web Development</h4>
                    <p>Precise and advanced web development solutions for dynamic and interactive applications.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/online-shop.svg" alt="Icon 3" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">E-commerce Development</h4>
                    <p>We create and launch your online store quickly and easily to start selling.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-item text-center">
                    <div class="service-icon"
                        style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                        <img src="sources/icons/mobile-code.svg" alt="Icon 4" style="max-width: 80px; height: auto;">
                    </div>
                    <h4 style="color: #dd6d2c;">Mobile Applications</h4>
                    <p>Developing native, hybrid, and web applications with optimal technology for each project.</p>
                </div>
            </div>
        </div>
    </div>
            `;

            detalleshs.innerHTML = `
                <div class="container-fluid">
        <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
            <div class="col-md-6 d-flex align-items-center">
                <div class="service-detail-item">
                    <h3>Web Design</h3>
                    <p>Developing stunning one-of-a-kind digital designs that catch people’s eyes and bring your brand to life online. Our creative team crafts unique visual experiences that resonate with your audience</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="sources/images/Imagenes Pixiu/Website Creator-bro.png"
                    alt="Web Design" class="service-detail-img">
            </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -5rem !important;">
            <div class="col-md-6 order-md-2 d-flex align-items-center">
                <div class="service-detail-item">
                    <h3>Custom Web Development</h3>
                    <p>Our customized web development solutions provide high accuracy and technological competence. We deliver fully functional, highly interactive, and dynamic web applications that elevate your digital presence</p>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="sources/images/Imagenes Pixiu/Website Creator-pana.png" alt="Custom Web Development"
                    class="service-detail-img">
            </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
            <div class="col-md-6 d-flex align-items-center">
                <div class="service-detail-item">
                    <h3>E-commerce Web Development</h3>
                    <p>We help you create and launch your own online store easily and quickly. Our solutions streamline the process, allowing you to start selling your products without hassle</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="sources/images/Imagenes Pixiu/Website Creator-rafiki.png"
                    alt="E-commerce Web Development" class="service-detail-img">
            </div>
        </div>
        <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
            <div class="col-md-6">
                <img src="sources/images/Imagenes Pixiu/Hand coding-cuate.png"
                    alt="Mobile Applications" class="service-detail-img">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="service-detail-item">
                    <h3>Mobile Applications</h3>
                    <p>We develop native, hybrid, and web applications. Our team assists clients in selecting the best technology for their project, ensuring a seamless and efficient development process</p>
                </div>
            </div>
        </div>
    </div>
            `;

            sectionHowWeWork.innerHTML = `
                <div class="container-fluid">
        <h2 style="margin-bottom: 1rem;">How we work</h2>
        <div class="steps">
            <div class="step" id="step1">
                <div class="step-title">1st Step</div>
                <div class="step-content">
                    <h3>Discovery</h3>
                    <p>We begin by evaluating the fit of your custom software project, discussing details, and making an informed decision together.</p>
                </div>
            </div>
            <div class="step" id="step2">
                <div class="step-title">2nd Step</div>
                <div class="step-content">
                    <h3>Design</h3>
                    <p>Collaborate with our project manager to align strategies and clarify product specifications, ensuring a comprehensive design plan.</p>
                </div>
            </div>
            <div class="step" id="step3">
                <div class="step-title">3rd Step</div>
                <div class="step-content">
                    <h3>Development</h3>
                    <p>Our expert developers transform the design into a functional digital solution, crafting custom software tailored to your business needs.</p>
                </div>
            </div>
            <div class="step" id="step4">
                <div class="step-title">4th Step</div>
                <div class="step-content">
                    <h3>Review</h3>
                    <p>We test the software in real-world scenarios, confirming its reliability and performance under various conditions.</p>
                </div>
            </div>
            <div class="step" id="step5">
                <div class="step-title">5th Step</div>
                <div class="step-content">
                    <h3>Maintenance</h3>
                    <p>Our team continuously evolves the software alongside your business, ensuring it stays in sync with changing requirements and technological advancements.</p>
                </div>
            </div>
        </div>
        <div class="navigation">
            <button id="prev" onclick="prevStep()">←</button>
            <button id="next" onclick="nextStep()">→</button>
        </div>
    </div>
            `;

            // Update FAQ questions and answers
faqQuestions[0].textContent = "I have a software idea, but I am not sure about all its features. Can you help me to validate it?";
faqAnswers[0].innerHTML = `
    Yes, we hold workshops with clients as part of our services. They usually last from 16 hours to 80 hours, during which we deep dive into the software's functionality and help you design the concept.
`;

faqQuestions[1].textContent = "I am worried about the support of my app or website. Are you also maintaining the software after its implementation?";
faqAnswers[1].innerHTML = `
    Yes, we provide ongoing support and offer flexible maintenance packages. Surely we will be able to find a support plan that works for you. Yet, if you choose that you don't need any support, that's also okay! Since the solution is entirely yours, in the end, it's for you to decide.
`;

faqQuestions[2].textContent = "How do you handle revisions and feedback during the design process?";
faqAnswers[2].innerHTML = `
    At Pixiu, your feedback is integral to our design process. We value your thoughts, tweaks, and "aha" moments, incorporating them into each iteration to ensure the final product meets your expectations of perfection. Our collaborative approach ensures that your voice is heard clearly throughout the entire process, ensuring we deliver a product that exceeds your expectations.
`;

faqQuestions[3].textContent = "How much does web design and development typically cost?";
faqAnswers[3].innerHTML = `
    At Pixiu, the majority of our web design and development projects range from $500. However, the final cost depends on the specific scope of work for each project. We generally have a minimum project size and prefer to agree on a fixed cost with milestone payments to ensure clarity and satisfaction throughout the development process.
`;

faqQuestions[4].textContent = "Who owns the software or website after you build it?";
faqAnswers[4].innerHTML = `
    Once the project is completed and implemented, you legally own everything necessary to build, maintain, or extend the software in the future, such as "executable" files, scripts, project files, source code, etc.
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
                <h2 style="font-size: 4rem;">Soluciones de Software a Medida</h2>
                <p>Desarrollamos soluciones de software personalizadas que se alinean perfectamente con los requisitos de tu negocio. Pixiu se especializa en ofrecer software de alta calidad, eficiente y escalable que optimiza tus operaciones y impulsa el crecimiento empresarial.</p>
                <a href="https://meetings.hubspot.com/pixiu" class="btn mt-5 custom-btn" target="_blank">Agenda una Llamada</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="welcome-image floating-image">
                <img src="sources/images/Imagenes Pixiu/Hand coding-pana.png" alt="Imagen de bienvenida" style="max-width: 100%; height: auto;">
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
                    <img src="sources/icons/web-design.svg" alt="Icono 1" style="max-width: 80px; height: auto;">
                </div>
                <h4 style="color: #dd6d2c;">Diseño Web</h4>
                <p>Creación de diseños digitales únicos que captan la atención y reflejan tu marca en línea.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item text-center">
                <div class="service-icon"
                    style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                    <img src="sources/icons/custom-coding.svg" alt="Icono 2" style="max-width: 80px; height: auto;">
                </div>
                <h4 style="color: #dd6d2c;">Desarrollo Web Personalizado</h4>
                <p>Soluciones precisas y avanzadas de desarrollo web para aplicaciones dinámicas e interactivas.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item text-center">
                <div class="service-icon"
                    style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                    <img src="sources/icons/online-shop.svg" alt="Icono 3" style="max-width: 80px; height: auto;">
                </div>
                <h4 style="color: #dd6d2c;">Desarrollo de E-commerce</h4>
                <p>Creamos y lanzamos tu tienda en línea de manera rápida y sencilla para que puedas empezar a vender.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item text-center">
                <div class="service-icon"
                    style="background-color: #dd6d2c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                    <img src="sources/icons/mobile-code.svg" alt="Icono 4" style="max-width: 80px; height: auto;">
                </div>
                <h4 style="color: #dd6d2c;">Aplicaciones Móviles</h4>
                <p>Desarrollo de aplicaciones nativas, híbridas y web con la tecnología óptima para cada proyecto.</p>
            </div>
        </div>
    </div>
</div>
        `;

        detalleshs.innerHTML = `
                <div class="container-fluid">
    <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
        <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Diseño Web</h3>
                <p>Desarrollamos impresionantes diseños digitales únicos que captan la atención y dan vida a tu marca en línea. Nuestro equipo creativo crea experiencias visuales únicas que resuenan con tu audiencia.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="sources/images/Imagenes Pixiu/Website Creator-bro.png"
                alt="Diseño Web" class="service-detail-img">
        </div>
    </div>
    <div class="row mb-5" style="margin-bottom: -5rem !important;">
        <div class="col-md-6 order-md-2 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Desarrollo Web Personalizado</h3>
                <p>Nuestras soluciones personalizadas de desarrollo web ofrecen alta precisión y competencia tecnológica. Entregamos aplicaciones web completamente funcionales, altamente interactivas y dinámicas que mejoran tu presencia digital.</p>
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="sources/images/Imagenes Pixiu/Website Creator-pana.png" alt="Desarrollo Web Personalizado"
                class="service-detail-img">
        </div>
    </div>
    <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
        <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Desarrollo de E-commerce</h3>
                <p>Te ayudamos a crear y lanzar tu propia tienda en línea de manera fácil y rápida. Nuestras soluciones agilizan el proceso, permitiéndote comenzar a vender tus productos sin complicaciones.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="sources/images/Imagenes Pixiu/Website Creator-rafiki.png"
                alt="Desarrollo de E-commerce" class="service-detail-img">
        </div>
    </div>
    <div class="row mb-5" style="margin-bottom: -2.5rem !important;">
        <div class="col-md-6">
            <img src="sources/images/Imagenes Pixiu/Hand coding-cuate.png"
                alt="Aplicaciones Móviles" class="service-detail-img">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="service-detail-item">
                <h3>Aplicaciones Móviles</h3>
                <p>Desarrollamos aplicaciones nativas, híbridas y web. Nuestro equipo asiste a los clientes en la selección de la mejor tecnología para su proyecto, asegurando un proceso de desarrollo fluido y eficiente.</p>
            </div>
        </div>
    </div>
</div>
            `;

            sectionHowWeWork.innerHTML = `
                <div class="container-fluid">
    <h2 style="margin-bottom: 1rem;">Cómo trabajamos</h2>
    <div class="steps">
        <div class="step" id="step1">
            <div class="step-title">1er Paso</div>
            <div class="step-content">
                <h3>Descubrimiento</h3>
                <p>Comenzamos evaluando la adecuación de tu proyecto de software personalizado, discutiendo detalles y tomando decisiones informadas juntos.</p>
            </div>
        </div>
        <div class="step" id="step2">
            <div class="step-title">2do Paso</div>
            <div class="step-content">
                <h3>Diseño</h3>
                <p>Colabora con nuestro gerente de proyectos para alinear estrategias y clarificar las especificaciones del producto, asegurando un plan de diseño integral.</p>
            </div>
        </div>
        <div class="step" id="step3">
            <div class="step-title">3er Paso</div>
            <div class="step-content">
                <h3>Desarrollo</h3>
                <p>Nuestros desarrolladores expertos transforman el diseño en una solución digital funcional, creando software personalizado adaptado a las necesidades de tu negocio.</p>
            </div>
        </div>
        <div class="step" id="step4">
            <div class="step-title">4to Paso</div>
            <div class="step-content">
                <h3>Revisión</h3>
                <p>Probamos el software en escenarios del mundo real, confirmando su confiabilidad y rendimiento bajo diversas condiciones.</p>
            </div>
        </div>
        <div class="step" id="step5">
            <div class="step-title">5to Paso</div>
            <div class="step-content">
                <h3>Mantenimiento</h3>
                <p>Nuestro equipo evoluciona continuamente el software junto con tu negocio, asegurando que se mantenga sincronizado con los requisitos cambiantes y los avances tecnológicos.</p>
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
faqQuestions[0].textContent = "Tengo una idea de software, pero no estoy seguro de todas sus características. ¿Pueden ayudarme a validarla?";
faqAnswers[0].innerHTML = `
    Sí, realizamos talleres con clientes como parte de nuestros servicios. Normalmente duran de 16 a 80 horas, durante las cuales profundizamos en la funcionalidad del software y te ayudamos a diseñar el concepto.
`;

faqQuestions[1].textContent = "Estoy preocupado por el soporte de mi aplicación o sitio web. ¿También mantienen el software después de su implementación?";
faqAnswers[1].innerHTML = `
    Sí, ofrecemos soporte continuo y paquetes de mantenimiento flexibles. Seguramente podremos encontrar un plan de soporte que funcione para ti. Sin embargo, si decides que no necesitas ningún tipo de soporte, ¡también está bien! Ya que la solución es completamente tuya, al final, la decisión es tuya.
`;

faqQuestions[2].textContent = "¿Cómo manejan las revisiones y comentarios durante el proceso de diseño?";
faqAnswers[2].innerHTML = `
    En Pixiu, tus comentarios son fundamentales para nuestro proceso de diseño. Valoramos tus ideas, ajustes y momentos "¡aja!", incorporándolos en cada iteración para asegurar que el producto final cumpla con tus expectativas de perfección. Nuestro enfoque colaborativo asegura que tu voz se escuche claramente durante todo el proceso, garantizando que entreguemos un producto que supere tus expectativas.
`;

faqQuestions[3].textContent = "¿Cuánto cuesta típicamente el diseño y desarrollo web?";
faqAnswers[3].innerHTML = `
    En Pixiu, la mayoría de nuestros proyectos de diseño y desarrollo web oscilan alrededor de $500. Sin embargo, el costo final depende del alcance específico de cada proyecto. Generalmente tenemos un tamaño mínimo de proyecto y preferimos acordar un costo fijo con pagos por hitos para garantizar claridad y satisfacción durante todo el proceso de desarrollo.
`;

faqQuestions[4].textContent = "¿Quién es dueño del software o sitio web después de que lo construyen?";
faqAnswers[4].innerHTML = `
    Una vez que el proyecto se completa e implementa, legalmente posees todo lo necesario para construir, mantener o extender el software en el futuro, como archivos ejecutables, scripts, archivos de proyecto, código fuente, etc.
`;

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

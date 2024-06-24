let isSpanish = false; // Estado inicial: Inglés

function toggleLanguage() {
    const languageToggle = document.getElementById('language-toggle');
    const navLinks = document.querySelectorAll('.nav-link');
    const sectionHome = document.getElementById('home');
    const sectionServices = document.getElementById('services');
    const sectionHubSpot = document.getElementById('hubspot');
    const sectionData = document.getElementById('Data');
    const sectionHowWeWork = document.querySelector('.section-how-we-work');
    const sectionContact = document.getElementById('contact');
    const sectionFastTrack = document.getElementById('fast-track');

    if (isSpanish) {
        // Cambiar a Inglés
        languageToggle.textContent = 'Cambiar a Español';
        navLinks.forEach(link => {
            switch (link.textContent.trim()) {
                case 'Inicio':
                    link.textContent = 'Home';
                    break;
                case 'Servicios':
                    link.textContent = 'Services';
                    break;
                case 'Contacto':
                    link.textContent = 'Contact';
                    break;
                case 'Agendar una Llamada':
                    link.textContent = 'Book A Call';
                    break;
            }
        });

        // Cambiar contenido de la sección Home a Inglés
        sectionHome.innerHTML = `
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div>
                            <h2 class="responsive-heading">Accelerate Your Project With Pixiu X</h2>
                            <p>Discover how Pixiu can elevate your business today</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#contact" class="btn btn-custom-orange btn-lg btn-block">Contact us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="text-center">
                            <img src="sources/images/construction.webp" alt="Wireframe Example" class="img-fluid floating-image" style="max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Cambiar contenido de la sección Services a Inglés
        sectionServices.innerHTML = `
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-left">
                        <h2 style="margin-bottom: 1rem;">Custom Software Development</h2>
                        <p>We specialize in creating tailored software solutions that meet your specific business needs. Our team ensures high-quality, efficient, and scalable software that enhances your operations and drives growth.</p>
                        <img src="sources/images/Imagenes Pixiu/Programming-pana.png" alt="Custom Image" class="img-fluid mt-4 mb-4" style="width: 90%;">
                        <a href="#contact" class="btn btn-custom-orange btn-lg">Contact Us</a>
                    </div>
                    <div class="col-lg-7 mt-4 mt-lg-5">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/code.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Web Design</h5>
                                        <p class="card-text">Developing stunning one-of-a-kind digital designs that catch people’s eyes and bring your brand to life online. Our creative team crafts unique visual experiences that resonate with your audience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/web.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Custom Web Development</h5>
                                        <p class="card-text">Our customized web development solutions provide high accuracy and technological competence. We deliver fully functional, highly interactive, and dynamic web applications that elevate your digital presence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/mobile.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Mobile Applications</h5>
                                        <p class="card-text">We develop native, hybrid, and web applications. Our team assists clients in selecting the best technology for their project, ensuring a seamless and efficient development process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/ecommerce.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">E-commerce Web Development</h5>
                                        <p class="card-text">We help you create and launch your own online store easily and quickly. Our solutions streamline the process, allowing you to start selling your products without hassle.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Cambiar contenido de la sección HubSpot a Inglés
        sectionHubSpot.innerHTML = `
            <div class="container-fluid">
                <h2 class="responsive-heading mb-4 text-center">HubSpot implementation and consulting</h2>
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <img src="sources/images/hubspot.webp" alt="Wireframe Example" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-6 d-flex align-items-end justify-content-center">
                        <div class="text-justify">
                            <p><strong>HubSpot Implementation: </strong>Maximize HubSpot's potential with tailored onboarding and training, seamlessly integrating it into your ecosystem.</p>
                            <p><strong>HubSpot Optimization: </strong>Address daily challenges, enhance performance with custom reporting, data management, custom objects, workflows, and automations.</p>
                            <p><strong>Personalized HubSpot Consulting: </strong>Certified experts offer one-on-one consultations to optimize infrastructure, resolve issues, and boost your company's use of HubSpot.</p>
                            <a href="#contact" class="btn btn-custom-orange btn-lg mt-4">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Cambiar contenido de la sección Data a Inglés
        sectionData.innerHTML = `
            <div class="container-fluid">
                <h2 class="mb-4 text-center" style="font-size: 3rem;">Data Extraction</h2>
                <div class="row align-items-center">
                    <div class="col-md-6 d-flex align-items-end justify-content-center">
                        <div class="text-justify">
                            <p><strong>Website data extraction: </strong>Obtain precise web data promptly using APIs, scripts, and manual methods, organized into a database for easy retrieval.</p>
                            <p><strong>Prospect/Lead Data Extraction: </strong>Enhance sales and marketing by identifying and extracting customer lead information, providing tailored prospect lists.</p>
                            <p><strong>Social Media Data Extraction: </strong>Gather comprehensive data from LinkedIn, Facebook, X (formerly Twitter), and more, using diverse search criteria.</p>
                            <p><strong>Market Research Data Extraction: </strong>Accelerate research with accurate data on target audiences, market trends, competitive analysis, and customer insights.</p>
                            <a href="#contact" class="btn btn-custom-orange btn-lg mt-4">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="sources/images/Data.webp" alt="Wireframe Example" class="img-fluid mb-4" style="width: 85%;">
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

        // Cambiar contenido de la sección Fast-Track Your Development Journey With Pixiu X a Inglés
        sectionFastTrack.innerHTML = `
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Fast-Track Your Development Journey With Pixiu X</h2>
                </div>
            </div>
        </div>
    `;

    } else {
        // Cambiar a Español
        languageToggle.textContent = 'Cambiar a Inglés';
        navLinks.forEach(link => {
            switch (link.textContent.trim()) {
                case 'Home':
                    link.textContent = 'Inicio';
                    break;
                case 'Services':
                    link.textContent = 'Servicios';
                    break;
                case 'Contact':
                    link.textContent = 'Contacto';
                    break;
                case 'Book A Call':
                    link.textContent = 'Agendar una Llamada';
                    break;
            }
        });

        // Cambiar contenido de la sección Home a Español
        sectionHome.innerHTML = `
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div>
                            <h2 class="responsive-heading">Acelera Tu Proyecto Con Pixiu X</h2>
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
                            <img src="sources/images/construction.webp" alt="Wireframe Example" class="img-fluid floating-image" style="max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Cambiar contenido de la sección Services a Español
        sectionServices.innerHTML = `
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-left">
                        <h2 style="margin-bottom: 1rem;">Desarrollo de Software Personalizado</h2>
                        <p>Nos especializamos en crear soluciones de software personalizadas que satisfacen las necesidades específicas de tu negocio. Nuestro equipo garantiza software de alta calidad, eficiente y escalable que mejora tus operaciones y impulsa el crecimiento.</p>
                        <img src="sources/images/Imagenes Pixiu/Programming-pana.png" alt="Custom Image" class="img-fluid mt-4 mb-4" style="width: 90%;">
                        <a href="#contact" class="btn btn-custom-orange btn-lg">Contáctanos</a>
                    </div>
                    <div class="col-lg-7 mt-4 mt-lg-5">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/code.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Diseño Web</h5>
                                        <p class="card-text">Desarrollo de diseños digitales impresionantes y únicos que captan la atención y dan vida a tu marca en línea. Nuestro equipo creativo crea experiencias visuales únicas que resuenan con tu audiencia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/web.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Desarrollo Web Personalizado</h5>
                                        <p class="card-text">Nuestras soluciones de desarrollo web personalizadas proporcionan alta precisión y competencia tecnológica. Ofrecemos aplicaciones web totalmente funcionales, altamente interactivas y dinámicas que elevan tu presencia digital.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/mobile.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Aplicaciones Móviles</h5>
                                        <p class="card-text">Desarrollamos aplicaciones nativas, híbridas y web. Nuestro equipo ayuda a los clientes a seleccionar la mejor tecnología para su proyecto, garantizando un proceso de desarrollo fluido y eficiente.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/ecommerce.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Desarrollo de Comercio Electrónico</h5>
                                        <p class="card-text">Te ayudamos a crear y lanzar tu propia tienda en línea de manera fácil y rápida. Nuestras soluciones simplifican el proceso, permitiéndote comenzar a vender tus productos sin complicaciones.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Cambiar contenido de la sección HubSpot a Español
        sectionHubSpot.innerHTML = `
            <div class="container-fluid">
                <h2 class="responsive-heading mb-4 text-center">Implementación y Consultoría de HubSpot</h2>
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <img src="sources/images/hubspot.webp" alt="Ejemplo de Wireframe" class="img-fluid mb-4">
                    </div>
                    <div class="col-md-6 d-flex align-items-end justify-content-center">
                        <div class="text-justify">
                            <p><strong>Implementación de HubSpot: </strong>Maximiza el potencial de HubSpot con una incorporación y capacitación personalizadas, integrándolo perfectamente en tu ecosistema.</p>
                            <p><strong>Optimización de HubSpot: </strong>Aborda los desafíos diarios, mejora el rendimiento con informes personalizados, gestión de datos, objetos personalizados, flujos de trabajo y automatizaciones.</p>
                            <p><strong>Consultoría Personalizada de HubSpot: </strong>Expertos certificados ofrecen consultas individuales para optimizar la infraestructura, resolver problemas y mejorar el uso de HubSpot en tu empresa.</p>
                            <a href="#contact" class="btn btn-custom-orange btn-lg mt-4">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Cambiar contenido de la sección Data a Español
        sectionData.innerHTML = `
            <div class="container-fluid">
                <h2 class="mb-4 text-center" style="font-size: 3rem;">Extracción de Datos</h2>
                <div class="row align-items-center">
                    <div class="col-md-6 d-flex align-items-end justify-content-center">
                        <div class="text-justify">
                            <p><strong>Extracción de datos del sitio web: </strong>Obtén datos web precisos de manera rápida utilizando APIs, scripts y métodos manuales, organizados en una base de datos para facilitar su recuperación.</p>
                            <p><strong>Extracción de Datos de Prospectos/Leads: </strong>Mejora las ventas y el marketing identificando y extrayendo información de leads de clientes, proporcionando listas de prospectos personalizadas.</p>
                            <p><strong>Extracción de Datos de Redes Sociales: </strong>Recopila datos completos de LinkedIn, Facebook, X (anteriormente Twitter) y más, utilizando diversos criterios de búsqueda.</p>
                            <p><strong>Investigación de Mercado y Extracción de Datos: </strong>Agiliza la investigación con datos precisos sobre audiencias objetivas, tendencias de mercado, análisis competitivo e insights de clientes.</p>
                            <a href="#contact" class="btn btn-custom-orange btn-lg mt-4">Contáctanos</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="sources/images/Data.webp" alt="Ejemplo de Wireframe" class="img-fluid mb-4" style="width: 85%;">
                    </div>
                </div>
            </div>
        `;

        // Cambiar contenido de la sección How we work a Español
        sectionHowWeWork.innerHTML = `
                <div class="container-fluid">
                    <h2 style="margin-bottom: 1rem;">Cómo trabajamos</h2>
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
                                <p>Prepararemos una estimación con alcance y objetivos y te la compartiremos para revisión. Una vez acordado, podemos proceder con la firma del NDA.</p>
                            </div>
                        </div>
                        <div class="step" id="step4">
                            <div class="step-title">4to Paso</div>
                            <div class="step-content">
                                <h3>Inicio del Proyecto</h3>
                                <p>Después de que apruebes el proyecto, comenzaremos de inmediato. Nuestro equipo trabajará estrechamente contigo, funcionando como una extensión de tu equipo interno.</p>
                            </div>
                        </div>
                    </div>
                    <div class="navigation">
                        <button id="prev" onclick="prevStep()">←</button>
                        <button id="next" onclick="nextStep()">→</button>
                    </div>
                </div>
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

        // Cambiar contenido de la sección Fast-Track Your Development Journey With Pixiu X a Español
        sectionFastTrack.innerHTML = `
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Acelera Tu Viaje de Desarrollo Con Pixiu X</h2>
                </div>
            </div>
        </div>
    `;
    }

    isSpanish = !isSpanish; // Alternar el estado
}
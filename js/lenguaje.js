let isSpanish = false; // Estado inicial: Inglés

function toggleLanguage() {
    const languageToggle = document.getElementById('language-toggle');
    const navLinks = document.querySelectorAll('.nav-link');
    const sectionHome = document.getElementById('home');
    const sectionServices = document.getElementById('services');

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
                            <img src="sources/images/construction.webp" alt="Ejemplo de Wireframe" class="img-fluid floating-image" style="max-width: 100%;">
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
                                        <p class="card-text">Desarrollamos diseños digitales impresionantes y únicos que captan la atención y dan vida a tu marca en línea. Nuestro equipo creativo crea experiencias visuales únicas que resuenan con tu audiencia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <img src="sources/icons/web.svg" alt="Code Icon" class="icon-image">
                                        <h5 class="card-title">Desarrollo Web Personalizado</h5>
                                        <p class="card-text">Nuestras soluciones de desarrollo web personalizado proporcionan alta precisión y competencia tecnológica. Ofrecemos aplicaciones web completamente funcionales, altamente interactivas y dinámicas que elevan tu presencia digital.</p>
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
    }

    isSpanish = !isSpanish; // Alternar el estado
}
<?php
session_start();

// Configurar la cookie de sesión para que dure más tiempo (30 días en este caso)
$cookie_lifetime = 60 * 60 * 24 * 30; // 30 días
session_set_cookie_params($cookie_lifetime);

// Regenerar la sesión para aplicar los nuevos parámetros de cookie
session_regenerate_id(true);
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="../index-es.php">
                <img src="../sources/images/logo.png" alt="Pixiu X Logo" width="100" height="auto" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index-es.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="/create_a_web_page-es">Crea tu Pagina Web</a>
                            <a class="dropdown-item" href="/custom-software-development-es">Desarrollo de Software Personalizado</a>
                            <a class="dropdown-item" href="/hubSpot-implementation-and-consulting-es">Implementación y Consultoría de HubSpot</a>
                            <a class="dropdown-item" href="/data-extraction-es">Extracción de Datos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-btn" href="https://meetings.hubspot.com/pixiu" style="color: #fff" target="_blank">Agendar una Llamada</a>
                    </li>
                    <li class="nav-item">
                        <a id="language-toggle" class="nav-link flag-spain" href="javascript:void(0);" onclick="switchLanguage()">
                            <img src="../sources/icons/USA.svg" alt="Bandera de EEUU" class="flag-icon" />
                            En
                        </a>
                    </li>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item dropdown custom-dropdown">
                            <a class="nav-link btn-dashboard" href="../admin/dashboard.php" id="userDropdown" role="button">Panel de Control</a>
                            <a class="custom-dropdown-menu dropdown-item btn-logout" href="../database/logout.php">Cerrar Sesión</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Estilos nuevos sin modificar los anteriores */
    .custom-dropdown:hover .custom-dropdown-menu {
        display: block;
        animation: slideDown 0.5s ease;
    }

    .btn-dashboard {
        background-color: #dd6d2c;
        color: white !important;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-dashboard:hover {
        background-color: #c65c25;
        color: white !important;
    }

    .custom-dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #dd6d2c;
        border: none;
        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        transition: display 0.5s ease;
        padding: 0;
    }

    @keyframes slideDown {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-logout {
        background-color: #dd6d2c;
        color: white !important;
        text-align: center;
        padding: 10px;
        transition: background-color 0.3s, color 0.3s;
        border-radius: 5px;
        /* Asegura que no haya bordes redondeados */
    }

    .btn-logout:hover {
        background-color: #c65c25;
        color: white !important;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dashboardBtn = document.querySelector('.btn-dashboard');
        const logoutBtn = document.querySelector('.btn-logout');

        if (dashboardBtn && logoutBtn) {
            const dashboardBtnWidth = dashboardBtn.offsetWidth;
            logoutBtn.style.width = `${dashboardBtnWidth}px`;
        }
    });

    function switchLanguage() {
        const currentURL = window.location.href;
        let newURL = '';

        // Definir los enlaces específicos
        const links = {
            'https://pixiux.com/': 'https://pixiux.com/es',
            'https://pixiux.com/es': 'https://pixiux.com',
            'https://pixiux.com/create_a_web_page': 'https://pixiux.com/create_a_web_page-es',
            'https://pixiux.com/https://pixiux.com/create_a_web_page-es': 'https://pixiux.com/create_a_web_page',
            'https://pixiux.com/custom-software-development': 'https://pixiux.com/custom-software-development-es',
            'https://pixiux.com/custom-software-development-es': 'https://pixiux.com/custom-software-development',
            'https://pixiux.com/hubSpot-implementation-and-consulting': 'https://pixiux.com/hubSpot-implementation-and-consulting-es',
            'https://pixiux.com/hubSpot-implementation-and-consulting-es': 'https://pixiux.com/hubSpot-implementation-and-consulting',
            'https://pixiux.com/data-extraction': 'https://pixiux.com/data-extraction-es',
            'https://pixiux.com/data-extraction-es': 'https://pixiux.com/data-extraction'

        };

        // Obtener la nueva URL
        if (currentURL in links) {
            newURL = links[currentURL];
        } else {
            // Si no se reconoce el URL actual, redirigir a la página principal en inglés
            newURL = 'https://pixiux.com';
        }

        // Redirigir a la nueva URL
        window.location.href = newURL;
    }
</script>
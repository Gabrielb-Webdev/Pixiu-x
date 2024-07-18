<?php
require_once('database/session.php');
$isLoggedIn = check_session();
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="sources/images/logo.png" alt="Pixiu X Logo" width="100" height="auto" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="web.php">Custom Software Development</a>
                            <a class="dropdown-item" href="hubspot.php">HubSpot Implementation and Consulting</a>
                            <a class="dropdown-item" href="scrap.php">Data Extraction</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-btn" href="https://meetings.hubspot.com/pixiu" style="color: #fff" target="_blank">Book A Call</a>
                    </li>
                    <li class="nav-item">
                        <a id="language-toggle" class="nav-link flag-spain" href="javascript:void(0);" onclick="switchLanguage()">
                            <img src="sources/icons/spain.svg" alt="Bandera de España" class="flag-icon" />
                            Es
                        </a>
                    </li>
                    <?php if ($isLoggedIn && basename($_SERVER['PHP_SELF']) == 'blog.php'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
function switchLanguage() {
    const currentURL = window.location.pathname;
    let newURL = '';

    if (currentURL.includes('-es.php')) {
        // Cambiar a la versión en inglés
        newURL = currentURL.replace('-es.php', '.php');
    } else {
        // Cambiar a la versión en español
        newURL = currentURL.replace('.php', '-es.php');
    }

    // Redirigir a la nueva URL
    window.location.href = newURL;
}
</script>

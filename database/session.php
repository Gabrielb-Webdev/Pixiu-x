<?php
session_start();

function check_session() {
    if (isset($_SESSION['username'])) {
        echo "<script>console.log('Sesión iniciada como: " . $_SESSION['username'] . "');</script>";
        return true;
    } else {
        echo "<script>console.log('Sesión no iniciada');</script>";
        return false;
    }
}

function logout() {
    // Destruir todas las variables de sesión
    $_SESSION = array();

    // Si se desea destruir la sesión completamente, es necesario borrar la cookie de sesión
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finalmente, destruir la sesión
    session_destroy();
}

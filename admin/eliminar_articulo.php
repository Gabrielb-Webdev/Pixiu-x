<?php
session_start();

// Verificar si no hay sesión activa
if (!isset($_SESSION['username'])) {
    header("Location: https://pixiux.com");
    exit();
}

// Verificar si se recibió el ID del artículo
if (!isset($_GET['id'])) {
    header("Location: ../admin/dashboard.php");
    exit();
}

// Obtener el ID del artículo desde la URL
$articleId = $_GET['id'];

// Eliminar el artículo de la base de datos
require_once('../database/db_config.php');

try {
    $stmt = $conn->prepare("DELETE FROM articulos_blog WHERE id = :id AND usuario = :usuario");
    $stmt->bindParam(':id', $articleId);
    $stmt->bindParam(':usuario', $_SESSION['username']);
    $stmt->execute();

    // Establecer mensaje de éxito en la sesión
    $_SESSION['message'] = "Artículo eliminado satisfactoriamente.";
    header("Location: ../admin/dashboard.php");
    exit();

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

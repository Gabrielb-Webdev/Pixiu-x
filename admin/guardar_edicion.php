<?php
session_start();

// Verificar si no hay sesión activa
if (!isset($_SESSION['username'])) {
    header("Location: https://pixiux.com");
    exit();
}

// Verificar si se recibieron los datos necesarios
if (!isset($_POST['titulo'], $_POST['descripcion'], $_POST['keywords'], $_GET['id'])) {
    header("Location: ../admin/dashboard.php");
    exit();
}

// Obtener el ID del artículo desde la URL
$articleId = $_GET['id'];

// Obtener los datos del formulario
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$keywords = $_POST['keywords'];

// Procesar la nueva imagen si se subió una
$nuevaImagen = $_FILES['nueva_imagen'];
$imagenUrl = null;

if ($nuevaImagen['error'] == UPLOAD_ERR_OK) {
    $uploadDir = '../sources/articulos/';
    $uploadFile = $uploadDir . basename($nuevaImagen['name']);

    if (move_uploaded_file($nuevaImagen['tmp_name'], $uploadFile)) {
        $imagenUrl = $uploadFile;
    } else {
        // Manejar error en la subida de la imagen
        echo "Error al subir la imagen.";
        exit();
    }
}

// Actualizar los datos del artículo en la base de datos
require_once('../database/db_config.php');

try {
    // Construir la consulta de actualización
    $sql = "UPDATE articulos_blog SET Titulo = :titulo, Descripcion = :descripcion, keywords = :keywords";
    if ($imagenUrl !== null) {
        $sql .= ", img = :img";
    }
    $sql .= " WHERE id = :id AND usuario = :usuario";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':keywords', $keywords);
    if ($imagenUrl !== null) {
        $stmt->bindParam(':img', $imagenUrl);
    }
    $stmt->bindParam(':id', $articleId);
    $stmt->bindParam(':usuario', $_SESSION['username']);

    $stmt->execute();

    // Redirigir al dashboard con un mensaje de éxito
    $_SESSION['message'] = "Artículo actualizado satisfactoriamente.";
    header("Location: ../admin/dashboard.php");
    exit();

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

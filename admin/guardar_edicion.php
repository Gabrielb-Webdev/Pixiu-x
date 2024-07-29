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

// Obtener los datos del formulario
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$keywords = $_POST['keywords'];
$nueva_imagen = $_FILES['nueva_imagen'];

// Consultar los datos del artículo desde la base de datos
require_once('../database/db_config.php');

try {
    // Verificar si se subió una nueva imagen
    if ($nueva_imagen['error'] === UPLOAD_ERR_OK) {
        $imagenRuta = '../sources/articulos/' . basename($nueva_imagen['name']);
        move_uploaded_file($nueva_imagen['tmp_name'], $imagenRuta);
    } else {
        // Mantener la imagen existente si no se subió una nueva
        $stmt = $conn->prepare("SELECT img FROM articulos_blog WHERE id = :id");
        $stmt->bindParam(':id', $articleId);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $imagenRuta = $row['img'];
    }

    // Actualizar el artículo en la base de datos
    $stmt = $conn->prepare("UPDATE articulos_blog SET Titulo = :titulo, Descripcion = :descripcion, keywords = :keywords, img = :img WHERE id = :id AND usuario = :usuario");
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':keywords', $keywords);
    $stmt->bindParam(':img', $imagenRuta);
    $stmt->bindParam(':id', $articleId);
    $stmt->bindParam(':usuario', $_SESSION['username']);
    $stmt->execute();

    header("Location: ../admin/dashboard.php");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

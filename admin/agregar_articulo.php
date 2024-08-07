<?php
session_start();

// Verificar si no hay sesión activa
if (!isset($_SESSION['username'])) {
    header("Location: https://pixiux.com");
    exit();
}

// Configuración de la base de datos
require_once('../database/db_config.php');

// Función para generar un nombre de archivo aleatorio único
function generateRandomFileName($file_extension)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';
    for ($i = 0; $i < 10; $i++) {
        $random_string .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $random_string . '.' . $file_extension;
}

// Validar y procesar el formulario de agregar artículo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];  // Aquí se recibe el contenido de Quill como HTML
    $keywords = $_POST["keywords"];

    // Procesar la imagen subida
    $target_dir = "../sources/articulos/";
    $imageFileType = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . generateRandomFileName($imageFileType);
    $uploadOk = 1;

    // Verificar si el archivo de imagen es una imagen real o falsa
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "El archivo no es una imagen.";
            $uploadOk = 0;
        }
    }

    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "El archivo ya existe.";
        $uploadOk = 0;
    }

    // Verificar el tamaño del archivo
    if ($_FILES["imagen"]["size"] > 500000) {
        echo "Lo siento, tu archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de archivo
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG & GIF.";
        $uploadOk = 0;
    }

    // Verificar si $uploadOk es set a 0 por algún error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            // Insertar datos en la base de datos
            try {
                $stmt = $conn->prepare("INSERT INTO articulos_blog (Titulo, Descripcion, img, usuario, keywords) 
                                       VALUES (:titulo, :descripcion, :img, :usuario, :keywords)");
                $stmt->bindParam(':titulo', $titulo);
                $stmt->bindParam(':descripcion', $descripcion);  // Guardar el contenido HTML en la base de datos
                $stmt->bindParam(':img', $target_file);  // Guardar la ruta de la imagen en la base de datos
                $stmt->bindParam(':usuario', $_SESSION['username']);
                $stmt->bindParam(':keywords', $keywords);

                $stmt->execute();

                // Redirigir a dashboard.php con un parámetro de éxito
                header("Location: dashboard.php?status=success");
                exit();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Artículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .form-container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container .form-group {
            margin-bottom: 15px;
        }

        .form-container .form-control {
            border-radius: 5px;
        }

        .form-container .btn {
            width: 100%;
            background-color: #007bff;
            color: #fff;
        }

        .form-container .btn:hover {
            background-color: #0056b3;
        }

        #editor-container {
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Agregar Artículo</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <div id="editor-container"></div>
                <input type="hidden" name="descripcion" id="descripcion">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen" required>
            </div>
            <div class="form-group">
                <label for="keywords">Palabras clave:</label>
                <input type="text" class="form-control" id="keywords" name="keywords" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Agregar Artículo</button>
        </form>
    </div>

    <!-- Scripts al final del body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, false] }],
                [{ 'font': [] }],
                [{ 'size': ['small', false, 'large', 'huge'] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['link', 'image', 'video'],
                ['blockquote', 'code-block'],
                ['clean']
            ]
        }
    });

    document.querySelector('form').onsubmit = function() {
        var descripcion = document.querySelector('input[name=descripcion]');
        descripcion.value = quill.root.innerHTML; // Asegura que se guarde el HTML correctamente
    };
    </script>
</body>
</html>

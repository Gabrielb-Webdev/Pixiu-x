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

// Consultar los datos del artículo desde la base de datos
require_once('../database/db_config.php');

try {
    $stmt = $conn->prepare("SELECT * FROM articulos_blog WHERE id = :id AND usuario = :usuario");
    $stmt->bindParam(':id', $articleId);
    $stmt->bindParam(':usuario', $_SESSION['username']);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        // El artículo existe y pertenece al usuario actual
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Datos del artículo
        $titulo = $row['Titulo'];
        $descripcion = $row['Descripcion'];
        $keywords = $row['keywords'];
        $imagenUrl = $row['img'];

    } else {
        // El artículo no existe o no pertenece al usuario actual
        header("Location: ../admin/dashboard.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pixiu X - Editar Artículo</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://pixiux.com/Logos/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://pixiux.com/Logos/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://pixiux.com/Logos/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://pixiux.com/Logos/favicon-16x16.png" />
    <link rel="manifest" href="https://pixiux.com/Logos/site.webmanifest" />
    <link rel="mask-icon" href="https://pixiux.com/Logos/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="https://pixiux.com/Logos/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="https://pixiux.com/Logos/mstile-144x144.png" />
    <meta name="msapplication-config" content="https://pixiux.com/Logos/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../css/styles.css" />

    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <style>
        #editor-container {
            height: 300px;
        }
    </style>
</head>
<body>
    <!-- Page Content -->
    <?php include '../components/header.php'; ?>

    <div class="container mt-4">
        <h2>Editar Artículo</h2>
        <!-- Formulario para editar el artículo -->
        <form action="guardar_edicion.php?id=<?php echo $articleId; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo htmlspecialchars($titulo); ?>">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <div id="editor-container"></div>
                <input type="hidden" name="descripcion" id="descripcion">
            </div>
            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" class="form-control" id="keywords" name="keywords" value="<?php echo htmlspecialchars($keywords); ?>">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen Actual</label><br>
                <img src="<?php echo $imagenUrl; ?>" alt="Imagen del artículo" style="max-width: 200px; height: auto;">
            </div>
            <div class="form-group">
                <label for="nueva_imagen">Nueva Imagen</label>
                <input type="file" class="form-control-file" id="nueva_imagen" name="nueva_imagen">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="../admin/dashboard.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Scripts al final del body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
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
                [{ 'size': ['small', 'medium', 'large', 'huge'] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['link', 'image', 'video'],
                ['blockquote', 'code-block'],
                ['clean'],
                [{ 'table': [] }]
            ]
        }
    });

    // Insertar el contenido inicial en el editor Quill
    quill.clipboard.dangerouslyPasteHTML("<?php echo $descripcion; ?>");

    document.querySelector('form').onsubmit = function() {
        var descripcion = document.querySelector('input[name=descripcion]');
        descripcion.value = quill.root.innerHTML; // Asegura que se guarde el HTML correctamente
    };
    </script>
</body>
</html>

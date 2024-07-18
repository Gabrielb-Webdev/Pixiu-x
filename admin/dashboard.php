<?php
session_start();

// Verificar si no hay sesión activa
if (!isset($_SESSION['username'])) {
    header("Location: https://pixiux.com");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Pixiu X">
    <title>Pixiu X - Artículos</title>

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
</head>

<body>
    <!-- Page Content -->
    <?php include '../components/header.php'; ?>

    <div class="container mt-4">
        <h2>Artículos</h2>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Img</th>
                    <th scope="col">Título</th>
                    <th scope="col">Resumen</th>
                    <th scope="col">Keywords</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de fila de artículo -->
                <tr>
                    <td><img src="../sources/articulos/blog_01.jpeg" alt="Imagen del artículo" style="max-width: 100px; height: auto;"></td>
                    <td>titulo_1</td>
                    <td>Resumen_1</td>
                    <td>keywords_1</td>
                    <td><a href="editar_articulo.php" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td><img src="../sources/articulos/blog_01.jpeg" alt="Imagen del artículo" style="max-width: 100px; height: auto;"></td>
                    <td>titulo_2</td>
                    <td>Resumen_2</td>
                    <td>keywords_2</td>
                    <td><a href="editar_articulo.php" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                    <td><img src="../sources/articulos/blog_01.jpeg" alt="Imagen del artículo" style="max-width: 100px; height: auto;"></td>
                    <td>Título_3</td>
                    <td>Resumen_3</td>
                    <td>keywords_3</td>
                    <td><a href="editar_articulo.php" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <!-- Repite esta fila para cada artículo -->

            </tbody>
        </table>

        <!-- Botón para agregar nuevo artículo -->
        <div class="text-center">
            <a href="agregar_articulo.php" class="btn btn-success"><i class="fas fa-plus"></i> Agregar</a>
        </div>
    </div>

    <!-- Scripts al final del body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
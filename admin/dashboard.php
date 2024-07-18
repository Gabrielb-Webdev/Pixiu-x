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
        <?php
        // Mostrar mensaje de éxito si existe
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Img</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Keywords</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consultar los artículos desde la base de datos y mostrar cada uno
                require_once('../database/db_config.php');

                try {
                    $stmt = $conn->prepare("SELECT * FROM articulos_blog WHERE usuario = :usuario");
                    $stmt->bindParam(':usuario', $_SESSION['username']);
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td><img src='" . htmlspecialchars($row['img']) . "' alt='Imagen del artículo' style='max-width: 100px; height: auto;'></td>";
                        echo "<td>" . htmlspecialchars($row['Titulo']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Descripcion']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['keywords']) . "</td>";
                        echo "<td><a href='editar_articulo.php?id=" . $row['id'] . "' class='btn btn-primary'><i class='fas fa-edit'></i></a></td>";
                        echo "<td><button class='btn btn-danger delete-article' data-article-id='" . $row['id'] . "'><i class='fas fa-trash-alt'></i></button></td>";
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
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
    <script>
        $(document).ready(function () {
            // Mostrar alerta si existe mensaje de éxito
            <?php if (isset($_SESSION['message'])) : ?>
                alert('<?php echo $_SESSION['message']; ?>');
            <?php endif; ?>

            // Script para manejar el clic en el botón de eliminar
            $('.delete-article').click(function () {
                var articleId = $(this).data('article-id');
                var confirmation = confirm('¿Estás seguro de que deseas eliminar este artículo?');
                if (confirmation) {
                    window.location.href = 'eliminar_articulo.php?id=' + articleId;
                }
            });
        });
    </script>
</body>

</html>

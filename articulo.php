<?php
// Conectar a la base de datos
require_once('database/db_config.php');

// Verificar si se recibió el ID del artículo
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

// Obtener el ID del artículo desde la URL
$articleId = $_GET['id'];

try {
    $stmt = $conn->prepare("SELECT * FROM articulos_blog WHERE id = :id");
    $stmt->bindParam(':id', $articleId);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        // El artículo existe
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Datos del artículo
        $titulo = $row['Titulo'];
        $descripcion = $row['Descripcion'];
        $keywords = $row['keywords'];
        $imagenUrl = $row['img'];
    } else {
        // El artículo no existe
        header("Location: index.php");
        exit();
    }

    // Obtener artículos relacionados, excluyendo el artículo actual
    $relatedStmt = $conn->prepare("SELECT id, Titulo, img FROM articulos_blog WHERE id != :id ORDER BY RAND() LIMIT 3");
    $relatedStmt->bindParam(':id', $articleId);
    $relatedStmt->execute();
    $relatedArticles = $relatedStmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Extraer los encabezados <h1> del contenido
$dom = new DOMDocument();
@$dom->loadHTML('<?xml encoding="utf-8" ?>' . $descripcion);
$xpath = new DOMXPath($dom);
$headers = $xpath->query('//h1');

$headerList = [];
foreach ($headers as $header) {
    $headerList[] = htmlspecialchars($header->nodeValue);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Artículos sobre desarrollo web, IA, HubSpot consulting, data scraping, diseño web y más en el blog de Pixiu X.">
    <meta name="keywords" content="desarrollo web, web development, IA, artificial intelligence, machine learning, HubSpot, data scraping, data extraction, diseño web, web design, UX design, desarrollo de software, software development, consultoría HubSpot, HubSpot consulting, análisis de datos, data analytics, programación web, web programming, Pixiu X, tecnología, tecnología de la información, IT solutions">
    <meta name="author" content="Pixiu X">
    <title>Pixiu X | Articulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/articulos.css">

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

    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16633775810"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-16633775810');
    </script>
</head>
<body>
    <!-- Header -->
    <?php include 'components/header.php'; ?>

    <!-- Sección de Bienvenida -->
    <section id="welcome-section" style="background-image: url('<?php echo $imagenUrl; ?>'); background-size: cover; background-position: center;" class="section">
        <div class="overlay"></div> <!-- Capa superpuesta para oscurecer la imagen -->
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-content text-center">
                        <h1 style="font-size: 4rem; color: white;"><?php echo htmlspecialchars($titulo); ?></h1> <!-- Título blanco -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 sticky-sidebar" style="padding-left: 7.5rem;">
                    <div class="custom-column" style="background-color: #fee4d9; border-radius: 10px; border: 1px solid #ccc;">
                        <h2>Tabla de contenido</h2>
                        <?php foreach ($headerList as $index => $header): ?>
                            <h6 id="titulo<?php echo $index + 1; ?>-toc"><?php echo $header; ?></h6>
                        <?php endforeach; ?>
                    </div>
                    <!-- Share Button Section -->
                    <div class="container-fluid text-center mt-4">
                        <div class="share-icons">
                            <a href="https://api.whatsapp.com/send?text=Check%20out%20this%20article" target="_blank" class="share-icon whatsapp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.instagram.com/?url=https://yourwebsite.com" target="_blank" class="share-icon instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=https://yourwebsite.com&text=Check%20out%20this%20article" target="_blank" class="share-icon twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://yourwebsite.com" target="_blank" class="share-icon facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="custom-column" id="main-column" style="padding: 0 7.5rem 0 3rem;">
                        <div class="custom-content">
                            <?php echo $descripcion; ?> <!-- Mostrar la descripción con formato HTML -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Row with 3 Cards -->
    <div class="container-fluid">
        <h1 class="related-stories-title">Related Stories</h1>
        <div class="row mt-4">
            <?php foreach ($relatedArticles as $article): ?>
                <div class="col-md-4">
                    <div class="card card-custom">
                        <div class="card-img-container">
                            <img src="<?php echo htmlspecialchars($article['img']); ?>" class="card-img-top" alt="Card Image">
                        </div>
                        <div class="card-body card-body-custom">
                            <h5 class="card-title"><?php echo htmlspecialchars($article['Titulo']); ?></h5>
                            <a href="articulo.php?id=<?php echo $article['id']; ?>" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End of Row with 3 Cards -->

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Scripts al final del body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="js/articulos.js"></script>
</body>
</html>

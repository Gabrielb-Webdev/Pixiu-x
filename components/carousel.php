<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        .slider {
            width: 90%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .slider .slick-slide {
            margin: 0 10px; /* Añade margen entre las imágenes */
        }

        .slider img {
            width: 100%;
            max-width: 150px; /* Ajusta el tamaño máximo de las imágenes */
            border-radius: 15px;
            border: 2px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .slick-list {
            margin: 0 -10px; /* Añade margen negativo para compensar el margen positivo de los slides */
        }
    </style>
</head>

<body>
    <section class="container-fluid" style="margin-top: 80px;">
        <div class="slider">
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 1"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 2"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 3"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 4"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 5"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 6"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 7"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 8"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 9"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 10"></div>
            <!-- Duplicamos las imágenes para crear un bucle perfecto -->
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 1"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 2"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 3"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 4"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 5"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 6"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 7"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 8"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 9"></div>
            <div><img src="../sources/images/blog_01.jpeg" alt="Imagen 10"></div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 3000,
                cssEase: 'linear',
                infinite: true,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                draggable: true, // Permite arrastrar con el mouse
                variableWidth: true // Ajusta el ancho de los slides para un desplazamiento continuo
            });
        });
    </script>
</body>

</html>

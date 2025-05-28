<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../app/controllers/BlogController.php';


$blogController = new BlogController($conexion);
$postsBlog = $blogController->obtenerPostsRecientes(3);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyLink - Inicio</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="stylesheet" href="../../public/css/mediaQueryHome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <!--iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <!-- Encabezado -->
    <?php include_once __DIR__ . '/layouts/header.php'; ?>

    <main class="home_main">
        <section class="home_sec_1">
            <div>
                <h1>StudyLink</h1>
                <button class="butom_ver_tramite"><strong>VER TRAMITES</strong></button>
            </div>
            <div></div>
        </section>
        <section class="home_sec_2">
            <div class="home_sec_2_div">
                <h2>¿Quiénes somos?</h2>
                <img src="<?= BASE_URL ?>/public/images/gestores.png" alt="">
            </div>
            <article class="home_sec_2_article">
                <div>
                    <p>StudyLink es un servicio de asesoría y gestoría surgió bajo la premisa de querer ayudar a
                        personas
                        que quieren estudiar en España.
                    </p>
                    <p>
                        Queremos facilitarle la vida a las familias y alumnos que desean cumplir su sueño de estudiar en
                        el
                        extranjero, pero no cuentan con la información necesaria y el tiempo para hacerlo posible.
                    </p>
                </div>
                <div class="home_sec_2_div_button">
                    <button class="button_mas_informacion"><strong>MÁS INFORMACIÓN</strong></button>
                </div>
            </article>
        </section>
        <section class="home_sec_3">
            <h2 class="home_sec_3_titulo">Nuestros servicios</h2>

            <div class="home_sec_3_contenedor">
                <!-- Primer artículo -->
                <article class="home_sec_3_article_1">
                    <h4>Con mi gente latino</h4>
                    <img src="<?= BASE_URL ?>/public/images/img_sec_tres.png" alt="Grupo de estudiantes latinos">
                    <div class="home_sec_3_button_container">
                        <button class="home_sec_3_button">MÁS INFORMACIÓN</button>
                    </div>
                </article>

                <!-- Segundo artículo -->
                <article class="home_sec_3_article_2">
                    <h4>La combi completa</h4>
                    <img src="<?= BASE_URL ?>/public/images/img_sec_tres_dos.png"
                        alt="Pareja de estudiantes con portátil">
                    <div class="home_sec_3_button_container">
                        <button class="home_sec_3_button">MÁS INFORMACIÓN</button>
                    </div>
                </article>
            </div>
        </section>
        <!---->
        <section class="home_sec_4_blog">
            <h2 class="home_sec_4_titulo">Blog</h2>
            <div class="blog_cards_container">
                <div class="glider-contain">
                    <div class="glider">
                        <?php foreach ($postsBlog as $post): ?>
                            <a href="<?= BASE_URL ?>/app/views/blog.php?id=<?= $post['id'] ?>" class="blog_card_enlace">
                                <article class="blog_card">
                                    <img src="<?= BASE_URL ?>/public/images/<?= htmlspecialchars($post['imagen']) ?>"
                                        alt="<?= htmlspecialchars($post['titulo']) ?>">
                                    <div class="blog_card_texto">
                                        <h3><?= strtoupper(htmlspecialchars($post['titulo'])) ?></h3>
                                        <p><?= htmlspecialchars($post['resumen']) ?></p>
                                    </div>
                                </article>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <button class="glider-prev">«</button>
                    <button class="glider-next">»</button>
                    <div role="tablist" class="dots"></div>
                </div>

            </div>
        </section>

        <section class="home_sec_5_faqs">
            <div class="faqs_container">
                <!-- Columna izquierda: imagen -->
                <div class="faqs_izquierda">
                    <img src="<?= BASE_URL ?>/public/images/mapa_latinoamerica.png" alt="Latinoamérica">
                </div>

                <!-- Columna derecha: preguntas -->
                <div class="faqs_derecha">
                    <h2 class="faqs_titulo">FAQs</h2>
                    <ul class="faqs_lista">
                        <li>¿Cómo se realiza el pago del servicio de StudyLink?</li>
                        <li>¿StudyLink ofrece apoyo después de que llegue a España?</li>
                        <li>¿Puedo estudiar y trabajar en España al mismo tiempo?</li>
                        <li>¿Necesito un seguro médico para estudiar en España?</li>
                        <li>¿Qué pasa si mi visa de estudiante es rechazada?</li>
                    </ul>
                </div>
            </div>
        </section>
    <?php include_once __DIR__ . '/layouts/footer.php'; ?>

    </main>
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    </script>
</body>

</html>
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
    <!-- Favicon -->
    <link rel="icon" href="../../public/images/logo_mejorado.png" type="image/png">

    <!-- css -->
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="stylesheet" href="../../public/css/mediaQueryHome.css">

    <!-- fuentes-->
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
                <button id="abrirModal" class="butom_ver_tramite">VER TRÁMITES</button>
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
                    <a href="<?= BASE_URL ?>/app/views/quienes_somos.php" class="button_mas_informacion">MÁS
                        INFORMACIÓN</a>
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
                        <a href="<?= BASE_URL ?>/app/views/gente_latino.php" class="home_sec_3_button">MÁS
                            INFORMACIÓN</a>

                    </div>
                </article>

                <!-- Segundo artículo -->
                <article class="home_sec_3_article_2">
                    <h4>La combi completa</h4>
                    <img src="<?= BASE_URL ?>/public/images/img_sec_tres_dos.png"
                        alt="Pareja de estudiantes con portátil">
                    <div class="home_sec_3_button_container">
                        <a href="<?= BASE_URL ?>/app/views/combi_completa.php" class="home_sec_3_button">MÁS
                            INFORMACIÓN</a>
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
                        <li><a href="faqs.php#faq-0">¿Cómo se realiza el pago del servicio de StudyLink?</a></li>
                        <li><a href="faqs.php#faq-1">¿StudyLink ofrece apoyo después de que llegue a España?</a></li>
                        <li><a href="faqs.php#faq-2">¿Puedo estudiar y trabajar en España al mismo tiempo?</a></li>
                        <li><a href="faqs.php#faq-3">¿Necesito un seguro médico para estudiar en España?</a></li>
                        <li><a href="faqs.php#faq-4">¿Qué pasa si mi visa de estudiante es rechazada?</a></li>


                    </ul>
                </div>
            </div>
        </section>
        <?php include_once __DIR__ . '/layouts/footer.php'; ?>

    </main>
    <!-- Modal emergente 
<div id="verTramiteModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">

  <div class="bg-white rounded-2xl shadow-lg w-[90%] max-w-lg p-6 relative text-[#012030]">
    
    <!- Botón cerrar 
    <button id="cerrarModal" class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-2xl font-bold">
      &times;
    </button>

    <!-- Contenido del modal 
    <h2 class="text-2xl font-semibold mb-4 text-center">Consulta tu trámite</h2>
    <p class="text-center text-sm text-gray-600">Aquí podrás consultar el estado de tu trámite ingresando tu identificador y correo electrónico.</p>
  </div>
</div>
                        -->

    <!-- Modal de Ver Trámite -->
    <div id="verTramiteModal" class="modal-overlay hidden">
        <div class="modal-content">
            <button id="cerrarModal" class="modal-close">&times;</button>
            <h2 class="modal-titulo">Consulta tu trámite</h2>

            <!-- FORMULARIO -->
            <form id="formularioVerTramite">
                <label for="identificador">Identificador del documento:</label>
                <input type="text" id="identificador" name="identificador" placeholder="Ej: ABC123" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>

                <button type="submit" class="modal-submit">Ver</button>
            </form>

            <!-- RESPUESTA (fuera del formulario) -->
            <div id="resultadoTramite" class="hidden">
                <h3 class="modal-titulo">Información del trámite</h3>
                <div id="contenidoTramite"></div>

                <button type="button" id="consultarOtro" class="modal-submit">
                    Consultar otro trámite
                </button>
            </div>
        </div>

    </div>
    </div>

    <script>
        const BASE_URL = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>/app/scripts/verTramiteModal.js"></script>

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
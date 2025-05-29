<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../controllers/BlogController.php';

// Crear instancia del controlador (usando la conexión a la BD)
$controlador = new BlogController($conexion); // Asegúrate que $db esté definido en config.php

// Obtener el ID desde la URL si existe
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Obtener todos los datos necesarios para la vista
$datos = $controlador->obtenerDatosParaVista($id);

// Asignar las variables
$entradaPrincipal = $datos['entradaPrincipal'];
$sugerencia = $datos['sugerencia'];
$carruselPosts = $datos['carruselPosts'];

// Normalizar saltos de línea (por si vienen como \r\n)
$contenido = str_replace("\r\n", "\n", $entradaPrincipal['contenido']);

// Reemplazar los saltos simples (\n) por espacio
$contenido = preg_replace("/(?<!\n)\n(?!\n)/", ' ', $contenido);

// Separar los párrafos reales
$parrafos = explode("\n\n", trim($contenido));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="../../public/images/logo_mejorado.png" type="image/png">

    <!-- css-->
    <link rel="stylesheet" href="../../public/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Playfair+Display:wght@500;700&display=swap"
        rel="stylesheet">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Blog</title>
</head>

<body>
    <?php include_once __DIR__ . '/layouts/header.php'; ?>

    <!-- Carrusel -->
    <section class="bg-[#012030] text-white py-8 px-16">
        <h2 class="text-3xl font-semibold font-['Playfair_Display'] mb-6 text-center">Blog</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($carruselPosts as $post): ?>
                <a href="blog.php?id=<?= $post['id'] ?>"
                    class="bg-white rounded-xl overflow-hidden shadow-md hover:scale-[1.02] hover:shadow-lg transition-all duration-300">
                    <img src="<?= BASE_URL ?>/public/images/<?= htmlspecialchars($post['imagen']) ?>"
                        alt="<?= htmlspecialchars($post['titulo']) ?>" class="w-full h-52 object-contein">
                    <div class="p-4 text-[#012030]">
                        <h3 class="text-lg font-bold mb-2"><?= $post['titulo'] ?></h3>
                        <p class="text-sm"><?= $post['resumen'] ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Entrada principal -->
    <section class="py-10 px-4 w-full text-[#012030] bg-[white]">
        <div class="max-w-5xl mx-auto">
            <img src="<?= BASE_URL ?>/public/images/<?= htmlspecialchars($entradaPrincipal['imagen']) ?>"
                alt="Imagen de <?= htmlspecialchars($entradaPrincipal['titulo']) ?>"
                class="w-full max-h-[520px] object-contein rounded-xl shadow mb-6">
            <h1 class="text-4xl font-bold font-['Playfair_Display'] mb-2"><?= $entradaPrincipal['titulo'] ?></h1>
            <p class="text-sm text-gray-600 mb-6">Publicado el
                <?= date('d \d\e F \d\e Y', strtotime($entradaPrincipal['fecha_publicacion'])) ?>
            </p>
            <div class="max-w-3xl w-full mx-auto p-4 text-justify text-xl font-['Poppins'] leading-relaxed">
  <?php foreach ($parrafos as $p): ?>
    <p class="mb-6"><?= htmlspecialchars(trim($p)) ?></p>
  <?php endforeach; ?>
</div>

        </div>
    </section>

    <!-- Sugerencia -->
    <section class="bg-[#012030] py-12 px-4 text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold font-['Playfair_Display'] mb-6">También podría interesarte</h2>
            <div
                class="bg-white text-[#012030] rounded-xl overflow-hidden shadow-md hover:scale-[1.02] hover:shadow-lg transition-all duration-300 md:flex">
                <img src="<?= BASE_URL ?>/public/images/<?= htmlspecialchars($sugerencia['imagen']) ?>"
                    alt="Imagen de <?= htmlspecialchars($sugerencia['titulo']) ?>"
                    class="w-full md:w-1/3 h-60 object-cover">
                <div class="p-6 md:w-2/3">
                    <h3 class="text-xl font-semibold mb-2"><?= $sugerencia['titulo'] ?></h3>
                    <p class="text-sm mb-4"><?= $sugerencia['resumen'] ?></p>
                    <a href="blog.php?id=<?= $sugerencia['id'] ?>"
                        class="inline-block bg-[#9AEBA3] hover:bg-[#DAFDBA] text-[#012030] px-4 py-2 rounded transition-colors">Leer
                        más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Botón volver arriba -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed bottom-6 right-6 bg-[#9AEBA3] hover:bg-[#DAFDBA] text-white p-3 rounded-full shadow-lg z-50 transition">
        ↑
    </button>


    <?php include_once __DIR__ . '/layouts/footer.php'; ?>

</body>

</html>
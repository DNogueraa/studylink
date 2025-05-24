<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../models/BlogModel.php';

$blogModel = new BlogModel($conexion);

// Obtener ID desde la URL si existe
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Obtener entrada principal
$entrada = $id ? $blogModel->obtenerPostPorId($id) : $blogModel->obtenerPostMasReciente();

// Obtener una entrada sugerida distinta
$sugerencia = $blogModel->obtenerSugerencia($entrada['id']);

include_once __DIR__ . '/layouts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/styles.css">
    <title>Blog</title>
</head>
<body>
    <?php include_once __DIR__ . '/layouts/header.php';?>

<section class="px-4 py-8 max-w-6xl mx-auto">
  <article class="mb-10" id="top">
    <h2 class="text-4xl font-bold text-[#012030] font-playfair mb-4">
      <?= htmlspecialchars($entrada['titulo']) ?>
    </h2>
    <img src="<?= BASE_URL ?>/public/images/<?= htmlspecialchars($entrada['imagen']) ?>" alt="<?= htmlspecialchars($entrada['titulo']) ?>" class="w-full h-auto rounded-lg shadow mb-6">
    <p class="text-[#012030] text-base leading-relaxed font-poppins">
      <?= nl2br(htmlspecialchars($entrada['contenido'])) ?>
    </p>
  </article>

  <hr class="my-10 border-[#9AEBA3]">

  <section class="bg-[#012030] p-6 rounded-lg text-white">
    <h3 class="text-2xl font-bold font-playfair mb-4 text-[#9AEBA3]">También podría interesarte</h3>
    <div class="flex flex-col md:flex-row items-center gap-6">
      <img src="<?= BASE_URL ?>/public/images/<?= htmlspecialchars($sugerencia['imagen']) ?>" alt="<?= htmlspecialchars($sugerencia['titulo']) ?>" class="w-full md:w-1/3 rounded-lg">
      <div>
        <h4 class="text-xl font-bold mb-2 text-[#DAFDBA]"><?= htmlspecialchars($sugerencia['titulo']) ?></h4>
        <p class="mb-4 font-poppins text-white"><?= htmlspecialchars($sugerencia['resumen']) ?></p>
        <a href="?id=<?= $sugerencia['id'] ?>" class="inline-block px-4 py-2 bg-[#9AEBA3] text-[#012030] font-semibold rounded hover:bg-[#DAFDBA]">Leer más</a>
      </div>
    </div>
  </section>

  <div class="text-right mt-8">
    <a href="#top" class="text-[#45C4B0] font-semibold hover:underline">Volver arriba</a>
  </div>
</section>

<?php include_once __DIR__ . '/layouts/footer.php'; ?>
    
</body>
</html>
<?php
require_once __DIR__ . '/../../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Con mi gente latino</title>
  <!-- Favicon -->
  <link rel="icon" href="../../public/images/logo_mejorado.png" type="image/png">

  <!-- css-->
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@700&display=swap"
    rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <!--iconos-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <!-- Encabezado -->
  <?php include_once __DIR__ . '/layouts/header.php'; ?>

  <section class="bg-cover bg-center bg-no-repeat text-white"
    style="background-image: url('<?= BASE_URL ?>/public/images/hermosa-vista-de-la-plaza-de-espana-en-sevilla-en-espana.jpg');">
    <div class="grid md:grid-cols-2 gap-12 bg-[#012030]/80 p-10 md:p-16 w-full h-full">

      <!-- Columna izquierda -->
      <div class="space-y-6">
        <h2 class="text-4xl md:text-5xl font-title leading-tight">Con mi<br>gente latino</h2>
        <p class="text-lg max-w-md">
          Sabemos que estudiar en España puede generar muchas dudas, por eso creamos un <strong
            class="font-semibold text-white">espacio gratuito</strong> para acompañarte
        </p>
      </div>

      <!-- Columna derecha -->
      <div class="space-y-6 mt-16">
        <div class="border-t border-white pt-4">
          <p class="text-[#9AEBA3] font-medium">Live mensual en Instagram y TikTok</p>
          <p class="text-sm">Respondemos tus preguntas en tiempo real y comentamos las dudas más frecuentes que nos
            dejan en stories de <a href="#" class="underline hover:text-[#9AEBA3]">Instagram</a>.</p>
        </div>

        <div class="border-t border-white pt-4">
          <p class="text-[#9AEBA3] font-medium">Videoconferencia mensual</p>
          <p class="text-sm">Un espacio más directo y detallado donde te resolvemos tus inquietudes cara a cara.</p>
        </div>

        <div class="border-t border-white pt-4">
          <p class="text-sm">Sin coste, solo ganas de ayudarte.</p>
        </div>

        <a href="<?= BASE_URL ?>/app/views/contactanos.php"
          class="inline-block bg-[#9AEBA3] text-[#012030] font-semibold px-6 py-2 rounded-full hover:bg-[#DAFDBA] transition">
          UNIRME
        </a>
      </div>

    </div>
  </section>

  <!-- footer -->
  <?php include_once __DIR__ . '/layouts/footer.php'; ?>
</body>

</html>
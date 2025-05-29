<?php
require_once __DIR__ . '/../../config/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>¿Quiénes somos?</title>
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

<body class="bg-[#012030] text-white">
  <!-- Encabezado -->
  <?php include_once __DIR__ . '/layouts/header.php'; ?>
  <!-- Sección: ¿Quiénes somos? -->
  <section class="py-16 px-6 md:px-16 bg-[#012030] text-white">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-10">

      <!-- Bloque de texto -->
      <div class="md:w-1/2">
        <h1 class="text-4xl md:text-5xl text-[#9AEBA3] font-bold mb-14" id="h1_quines_somos">¿Quiénes somos?</h1>

        <p class="mb-4 text-lg text-justify">
          <strong>StudyLink</strong> nace con el propósito de acompañar a estudiantes latinoamericanos que sueñan con
          estudiar en España,
          transformando el modelo tradicional de asesoría, centrado únicamente en cumplir procedimientos y generar
          beneficios económicos,
          para centrarse en la creación de relaciones duraderas.
        </p>
        <p class="text-lg text-justify">
          Nuestra empresa busca generar un impacto positivo en la sociedad, por medio de una propuesta de valor basada
          en la especialización
          de educación internacional, centrada en las necesidades del estudiante y su familia; el servicio one to one,
          que busca fomentar relaciones
          a largo plazo; y un compromiso social real, reflejado en nuestras sesiones grupales gratuitas que hemos
          mencionado en el punto anterior.
        </p>
      </div>

      <!-- Imagen -->
      <div class="md:w-1/2 flex justify-center md:justify-end">
        <img src="<?= BASE_URL ?>/public/images/gestores.png" alt="Foto del equipo StudyLink"
          class="rounded-lg w-72 md:w-96 h-96 object-cover">
      </div>

    </div>
  </section>

  <!-- Sección: Identidad de marca -->
  <section class="bg-[#012030] text-[#012030] h-auto py-16 px-6 md:px-16">
    <h2 class="text-3xl md:text-4xl font-bold mb-20 text-[#9AEBA3]">Identidad de marca</h2>
    <!--<div class="grid md:grid-cols-3">-->
    <div class="grid md:grid-cols-3 w-full max-w-5xl px-4 ml-auto">

      <!-- Misión -->
      <div class="bg-[#DAFDBA] p-6">
        <h3 class="text-xl font-bold mb-2">Misión</h3>
        <p><strong>Acompañar y facilitar</strong> la vida de personas latinoamericanas que quieren estudiar en
          <strong>España</strong>.</p>
      </div>
      <!-- Visión -->
      <div class="bg-[#9AEBA3] p-6">
        <h3 class="text-xl font-bold mb-2">Visión</h3>
        <p><strong>Convertirnos</strong> en el primer vínculo estudiantil entre <strong>España</strong> y
          <strong>Latinoamérica</strong>.</p>
      </div>
      <!-- Valores -->
      <div class="bg-[#45C4B0] p-6">
        <h3 class="text-xl font-bold mb-2">Valores</h3>
        <ul class="list-disc list-inside space-y-1">
          <li><strong>Compromiso</strong></li>
          <li><strong>Empatía</strong></li>
          <li><strong>Confianza</strong></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Sección: Team -->
  <section class="py-16 px-6 md:px-16 bg-[#012030] text-white">
    <h2 class="text-3xl md:text-4xl text-[#9AEBA3] font-bold mb-10">Team</h2>
    <div class="grid sm:grid-cols-2 gap-10 justify-center">
      <!-- Valeria -->
      <div class="flex flex-col items-center">
        <img src="http://localhost/studylink/public/images/valeria.jpg" alt="Valeria Viveros"
          class="rounded-2xl w-56 h-56 object-cover mb-4">
        <p class="font-bold text-white">Valeria Viveros</p>
        <p class="text-[#9AEBA3]">Directora de marketing</p>
      </div>
      <!-- Daniela -->
      <div class="flex flex-col items-center">
        <img src="http://localhost/studylink/public/images/daniela.jpg" alt="Daniela Noguera"
          class="rounded-2xl w-56 h-56 object-cover mb-4">
        <p class="font-bold text-white">Daniela Noguera</p>
        <p class="text-[#9AEBA3]">Directora de comunicaciones</p>
      </div>
    </div>
  </section>
  <!-- footer -->
  <?php include_once __DIR__ . '/layouts/footer.php'; ?>

</body>

</html>
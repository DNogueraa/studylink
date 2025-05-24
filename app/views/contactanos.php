<?php
session_start();
require_once __DIR__ . '/../../config/config.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contáctanos | StudyLink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>

<body class="bg-white text-[#012030] font-sans">
    <?php include_once __DIR__ . '/layouts/header.php'; ?>
    <!--Errores formulario-->
    <?php if (!empty($_SESSION['errores'])): ?>
        <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
            <ul class="list-disc list-inside">
                <?php foreach ($_SESSION['errores'] as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php unset($_SESSION['errores']); endif; ?>

    <?php if (!empty($_SESSION['mensaje'])): ?>
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
            <?= $_SESSION['mensaje'];
            unset($_SESSION['mensaje']); ?>
        </div>
    <?php endif; ?>


    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-12">

        <!-- Columna izquierda -->
        <div>
            <h1 class="text-4xl font-bold mb-4 font-serif">Contáctanos</h1>
            <p class="mb-8 text-lg">Rellena tus datos</p>

            <div class="flex space-x-4 text-xl">
                <a href="#"><i class="fab fa-facebook-f hover:text-[#9AEBA3]"></i></a>
                <a href="#"><i class="fab fa-instagram hover:text-[#9AEBA3]"></i></a>
                <a href="#"><i class="fab fa-tiktok hover:text-[#9AEBA3]"></i></a>
                <a href="#"><i class="fab fa-linkedin-in hover:text-[#9AEBA3]"></i></a>
            </div>
        </div>

        <!-- Columna derecha: Formulario -->
        <form action="<?= BASE_URL ?>/app/scripts/guardar_contacto.php" method="POST" class="space-y-5">

            <div>
                <label class="text-sm">Nombre:</label>
                <input type="text" name="nombre" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"
                    class="w-full border rounded-full px-4 py-2 focus:ring-2 focus:ring-[#012030]">
            </div>

            <div>
                <label class="text-sm">Apellido:</label>
                <input type="text" name="apellido" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"
                    class="w-full border rounded-full px-4 py-2">
            </div>

            <div>
                <label class="text-sm">Correo electrónico:</label>
                <input type="email" name="email" required class="w-full border rounded-full px-4 py-2">
            </div>

            <div>
                <label class="text-sm">Número de teléfono:</label>
                <input type="tel" name="telefono" required pattern="^\+?\d{9,15}$"
                    class="w-full border rounded-full px-4 py-2">
            </div>

            <div>
                <label class="text-sm">País de residencia:</label>
                <input type="text" name="pais" required class="w-full border rounded-full px-4 py-2">
            </div>

            <div>
                <label class="text-sm">Tipo de trámite:</label>
                <select name="tramite" required class="w-full border rounded-full px-4 py-2">
                    <option value="">Selecciona un trámite</option>
                    <option>Asesoría</option>
                    <option>Guía por país</option>
                    <option>Trámites</option>
                    <option>Apostilla</option>
                    <option>Entrevistas</option>
                    <option>Alojamiento</option>
                    <option>Seguro</option>
                    <option>Recepción</option>
                    <option>Establecimiento</option>
                    <option>Acompañamiento</option>
                    <option>Eventos</option>
                    <option>Permisos</option>
                </select>
            </div>

            <div>
                <label class="text-sm">Descripción del caso:</label>
                <textarea name="nota" rows="4" class="w-full border rounded-xl px-4 py-2 resize-none"></textarea>
            </div>

            <div class="flex items-center space-x-2">
                <input type="checkbox" required>
                <label class="text-sm">Acepto el tratamiento de mis datos personales.</label>
            </div>

            <button type="submit" class="bg-[#012030] text-white rounded-full px-6 py-2 hover:bg-[#023549] transition">
                Enviar
            </button>

        </form>
    </section>

    <?php if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'ok'): ?>
        <p class="text-green-600 text-center mt-6">¡Gracias! Tu mensaje fue enviado correctamente.</p>
    <?php endif; ?>
        <?php include_once __DIR__ . '/layouts/footer.php'; ?>
</body>

</html>
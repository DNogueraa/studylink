<?php
require_once __DIR__ . '/../../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La combi completa</title>
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

    <section class="bg-cover bg-center bg-no-repeat text-white w-full"
        style="background-image: url('<?= BASE_URL ?>/public/images/palacio-de-la-comunicacion-en-el-atardecer-de-verano-madrid.jpg');">
        <div class="bg-[#012030]/80 w-full h-full px-6 py-12 md:px-16 md:py-20">
            <div class="max-w-7xl mx-auto grid md:grid-cols-[40%_1fr] gap-10 items-start px-6 md:px-16">

                <!-- Columna izquierda (30%) -->
                <div class="space-y-6">
                    <h2 class="text-4xl md:text-5xl font-title leading-tight">La combi<br>completa</h2>
                    <a href="<?= BASE_URL ?>/app/views/contactanos.php"
                        class="inline-block bg-[#9AEBA3] text-[#012030] font-semibold px-6 py-2 rounded-full hover:bg-[#DAFDBA] transition">
                        LO QUIERO
                    </a>
                </div>

                <!-- Columna derecha (70%) -->
                <div class="flex flex-col gap-8 mt-16">
                    <!-- Grid interna 2 columnas -->
                    <div class="grid sm:grid-cols-2 gap-6">

                        <!-- Ítem -->
                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Asesoría personalizada</p>
                            <p class="text-sm">Por videollamada, te ayudamos a elegir estudios, gestionar visado y
                                resolver dudas.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Guía según tu país</p>
                            <p class="text-sm">Requisitos, documentos y pasos claros y adaptados a tu lugar de origen.
                            </p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Gestión de trámites académicos y migratorios</p>
                            <p class="text-sm">Visado, matrícula, permiso de residencia... ¡nos encargamos!</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Traducción y apostilla de documentos</p>
                            <p class="text-sm">Con profesionales certificados.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Simuladores de entrevistas consulares</p>
                            <p class="text-sm">Para que llegues preparado.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Búsqueda de alojamiento</p>
                            <p class="text-sm">Residencias, pisos o con familias anfitrionas, lo que más se adapte a ti.
                            </p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Seguro médico</p>
                            <p class="text-sm">Con cobertura total en toda España.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Recogida en aeropuerto</p>
                            <p class="text-sm">Si lo deseas y con traslado a tu alojamiento.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Asistencia al llegar</p>
                            <p class="text-sm">Empadronamiento, cuenta bancaria y adaptación a tu ciudad.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Apoyo académico</p>
                            <p class="text-sm">Tutorías para facilitar tu integración.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Eventos y planes</p>
                            <p class="text-sm">Para conocer personas y hacer comunidad.</p>
                        </div>

                        <div class="border-t border-white pt-4">
                            <p class="text-[#9AEBA3] font-medium">Orientación legal</p>
                            <p class="text-sm">Si deseas quedarte en España tras tus estudios.</p>
                        </div>
                    </div>

                    <!-- Botón inferior centrado -->


                </div>
            </div>
            <div class="flex justify-center mt-6">
                <a href="<?= BASE_URL ?>/app/views/contactanos.php"
                    class="inline-block bg-[#9AEBA3] text-[#012030] font-semibold px-6 py-2 rounded-full hover:bg-[#DAFDBA] transition">
                    LO QUIERO
                </a>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include_once __DIR__ . '/layouts/footer.php'; ?>
</body>

</html>
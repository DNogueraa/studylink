<?php
require_once __DIR__ . '/../../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQS</title>
    <title>¿Quiénes somos? - StudyLink</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../public/css/styles.css">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <!-- Encabezado -->
    <?php include_once __DIR__ . '/layouts/header.php'; ?>

    <section class="bg-[#012030] text-white py-16 px-6 md:px-16">
        <div class="grid md:grid-cols-2 gap-12 items-start">

            <!-- Lado izquierdo -->
            <div class="flex flex-col items-start gap-6">
                <h2 class="text-4xl md:text-5xl text-[#9AEBA3] font-bold">FAQs</h2>

                <div class="w-full flex justify-center">
                    <img src="http://localhost/studylink/public/images/mapa_latinoamerica.png"
                        alt="Mapa de Latinoamérica" class="w-64 md:w-80">
                </div>
            </div>

            <!-- Lado derecho (acordeón) -->
            <div class="flex flex-col gap-4 w-full mt-16">
                <!-- Pregunta -->
                <div class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(0)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Cómo se realiza el pago del servicio de StudyLink?
                        <span class="transform transition-transform duration-200" id="icon-0">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-0">
                        Puedes realizarlo por transferencia bancaria, PayPal o tarjeta de crédito según te indiquemos en
                        el proceso.
                    </p>
                </div>

                <!-- Repite para otras preguntas -->
                <div class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(1)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿StudyLink ofrece apoyo después de que llegue a España?
                        <span class="transform transition-transform duration-200" id="icon-1">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-1">
                        Sí, te acompañamos en el proceso de adaptación con sesiones y asesorías personalizadas.
                    </p>
                </div>

                <!-- Agrega más bloques similares -->
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include_once __DIR__ . '/layouts/footer.php'; ?>
    <script>
        function toggleFaq(index) {
            const answer = document.getElementById(`answer-${index}`);
            const icon = document.getElementById(`icon-${index}`);
            const isHidden = answer.classList.contains("hidden");

            // Oculta todos
            document.querySelectorAll('[id^="answer-"]').forEach(p => p.classList.add("hidden"));
            document.querySelectorAll('[id^="icon-"]').forEach(i => i.classList.remove("rotate-180"));

            if (isHidden) {
                answer.classList.remove("hidden");
                icon.classList.add("rotate-180"); // gira el ícono si quieres animación
            }
        }
    </script>

</body>

</html>
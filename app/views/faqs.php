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
                <!-- Pregunta 1 -->
                <div id="faq-1" class="border-b border-[#9AEBA3] pb-2">
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

                <!-- Pregunta 2 -->
                <div id="faq-1" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(1)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿StudyLink ofrece apoyo después de que llegue a España?
                        <span class="transform transition-transform duration-200" id="icon-1">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-1">
                        Sí, te acompañamos en el proceso de adaptación con sesiones y asesorías personalizadas.
                    </p>
                </div>

                <!-- Pregunta 3 -->
                <div id="faq-2" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(2)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Puedo estudiar y trabajar en España al mismo tiempo?
                        <span class="transform transition-transform duration-200" id="icon-2">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-2">
                        Sí, la visa de estudiante permite trabajar hasta 30 horas semanales siempre que no afecte tu
                        rendimiento académico.
                    </p>
                </div>

                <!-- Pregunta 4 -->
                <div id="faq-3" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(3)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Necesito un seguro médico para estudiar en España?
                        <span class="transform transition-transform duration-200" id="icon-3">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-3">
                        Sí, es obligatorio contar con un seguro médico privado que cubra toda tu estancia en España para
                        obtener la visa.
                    </p>
                </div>

                <!-- Pregunta 5 -->
                <div id="faq-4" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(4)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Qué pasa si mi visa de estudiante es rechazada?
                        <span class="transform transition-transform duration-200" id="icon-4">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-4">
                        En ese caso, te asesoramos para apelar la decisión o reintentarlo corrigiendo los posibles
                        errores detectados en la solicitud.
                    </p>
                </div>




            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include_once __DIR__ . '/layouts/footer.php'; ?>
    <script>
        function toggleFaq(index) {
            const answer = document.getElementById(`answer-${index}`);
            const icon = document.getElementById(`icon-${index}`);
            const isOpen = !answer.classList.contains('hidden');

            // Cierra todos
            document.querySelectorAll("[id^='answer-']").forEach(el => el.classList.add('hidden'));
            document.querySelectorAll("[id^='icon-']").forEach(el => el.classList.remove('rotate-180'));

            // Abre solo el seleccionado si estaba cerrado
            if (!isOpen) {
                answer.classList.remove('hidden');
                icon.classList.add('rotate-180');
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            const hash = window.location.hash;
            if (hash.startsWith("#faq-")) {
                const index = parseInt(hash.replace("#faq-", ""));
                if (!isNaN(index)) {
                    toggleFaq(index);
                    document.getElementById(`faq-${index}`).scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    </script>
</body>

</html>
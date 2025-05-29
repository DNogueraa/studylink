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
                        El pago se puede realizar de forma online, a través de métodos seguros como tarjeta bancaria o
                        transferencia.

                        Una vez que contratas el servicio, te damos acceso a una plataforma donde puedes ver el detalle
                        de tu proceso y realizar los pagos de manera cómoda y transparente.

                        Además, ofrecemos facilidades de pago en función del tipo de asesoría que elijas.
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
                        ¡Sí! En StudyLink te acompañamos antes, durante y después de tu llegada.

                        Una vez estés en España, seguimos disponibles para ayudarte con temas como:

                        Empadronamiento

                        Renovación de visa

                        Adaptación académica

                        Recomendaciones de vivienda, transporte, salud y más

                        No estás solo: nuestro equipo sigue cerca durante tu experiencia en el país.
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
                        Sí, es posible estudiar y trabajar en España con visa de estudiante, pero con ciertas
                        condiciones:

                        Puedes trabajar hasta 30 horas semanales mientras estudias.

                        El trabajo debe ser compatible con tus horarios académicos.

                        La empresa debe gestionarte un permiso adicional ante Extranjería.

                        En StudyLink te orientamos para que entiendas cómo hacerlo y qué tipo de trabajos suelen estar
                        disponibles para estudiantes.
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
                        Sí, es obligatorio tener un seguro médico para tramitar la visa de estudios.

                        Este seguro debe:

                        Cubrir toda tu estancia en España

                        No tener copagos

                        Incluir repatriación y atención médica completa

                        En StudyLink te ayudamos a elegir un seguro válido y económico, para que no tengas problemas con
                        tu solicitud.
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
                        Si tu visa es rechazada, analizamos tu caso para entender los motivos y ayudarte a corregir lo
                        necesario.

                        Dependiendo del país y el consulado, puedes:

                        Presentar un recurso de reposición

                        Volver a aplicar con los cambios recomendados

                        Nuestro equipo te acompaña en todo momento para que no enfrentes este proceso solo.
                    </p>
                </div>

                <!-- Pregunta 6 -->
                <div id="faq-5" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(5)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Cuánto tiempo tarda el proceso con StudyLink?
                        <span class="transform transition-transform duration-200" id="icon-5">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-5">
                        El proceso depende de tu país y del momento en que inicies, pero en general puede tardar entre 2
                        y 6 meses.
                        Te recomendamos comenzar lo antes posible para asegurar cupos y tiempos de visa. Nosotros te
                        guiamos paso a paso.
                    </p>
                </div>

                <!-- Pregunta 7 -->
                <div id="faq-6" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(6)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Qué documentos necesito para aplicar a una visa de estudiante?
                        <span class="transform transition-transform duration-200" id="icon-6">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-6">
                        Generalmente necesitarás: pasaporte vigente, carta de admisión del centro de estudios, prueba de
                        medios económicos,
                        seguro médico, y comprobante de alojamiento. Nosotros revisamos todo contigo antes de
                        presentarlo al consulado.
                    </p>
                </div>

                <!-- Pregunta 8 -->
                <div id="faq-7" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(7)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Puedo cambiar de curso o ciudad una vez en España?
                        <span class="transform transition-transform duration-200" id="icon-7">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-7">
                        Sí, pero debes informar a Extranjería y asegurarte de que el nuevo centro cumpla los requisitos
                        de tu visa.
                        Nosotros te asesoramos en el proceso para que no pierdas tu estatus legal durante el cambio.
                    </p>
                </div>

                <!-- Pregunta 9 -->
                <div id="faq-8" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(8)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Qué pasa si necesito ayuda urgente estando en España?
                        <span class="transform transition-transform duration-200" id="icon-8">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-8">
                        Puedes contactarnos directamente y activamos nuestros recursos para apoyarte: desde orientación
                        hasta emergencias.
                        No estarás solo, incluso a la distancia seguimos contigo durante tu estancia.
                    </p>
                </div>

                <!-- Pregunta 10 -->
                <div id="faq-9" class="border-b border-[#9AEBA3] pb-2">
                    <button onclick="toggleFaq(9)"
                        class="w-full text-left text-white hover:text-[#9AEBA3] flex justify-between items-center">
                        ¿Puedo traer a un familiar conmigo mientras estudio?
                        <span class="transform transition-transform duration-200" id="icon-9">⌄</span>
                    </button>
                    <p class="mt-2 hidden text-sm text-[#DAFDBA]" id="answer-9">
                        En algunos casos, puedes solicitar una visa de acompañante para tu familiar directo. El proceso
                        es más estricto,
                        pero posible si cumples ciertos requisitos. Te explicamos las opciones disponibles según tu
                        situación.
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
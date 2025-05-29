<footer class="footer">
    <div class="footer_contenedor">
        <!-- Columna izquierda -->
        <div class="footer_columna">
            <div class="footer_logo">
                <img src="<?= BASE_URL ?>/public/images/logo_mejorado.png" alt="Logo StudyLink">
                <span>StudyLink</span>
            </div>
            <p class="footer_eslogan">Tu sueño comienza con nosotros</p>
            <p>Teléfono: (+34) 657 495 21 – (+34) 644 039 875</p>
            <p>Correo: studylinklatam@gmail.com</p>
        </div>

        <!-- Columna enlaces -->
        <div class="footer_columna">
            <ul class="footer_enlaces">
                <li><a href="<?= BASE_URL ?>/app/views/home.php">Inicio</a></li>
                <li><a href="<?= BASE_URL ?>/app/views/quienes_somos.php">¿Quiénes somos?</a></li>
                <li><a href="<?= BASE_URL ?>/app/views/combi_completa.php">La combi completa</a></li>
                <li><a href="<?= BASE_URL ?>/app/views/gente_latino.php">Con mi gente latino</a></li>
                <li><a href="<?= BASE_URL ?>/app/views/blog.php">Blog</a></li>
                <li><a href="<?= BASE_URL ?>/app/views/faqs.php">FAQ</a></li>
            </ul>
        </div>

        <!-- Columna redes -->
        <div class="footer_columna">
            <p class="footer_siguenos">Síguenos</p>
            <div class="footer_redes">
                <a href="https://www.facebook.com/people/StudyLink-Espa%C3%B1a/pfbid02tssUhEHgH1j8RacXozyxWMrTaxR9CTD5A6w4HGur7yP69yLEvR5hRcGUoJCVfx39l/?locale=es_ES"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/studylink.es/?hl=es"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@studylink.es"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.linkedin.com/in/studylink-espa%C3%B1a-46a707364/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="footer_copy">
        © 2025 Todos los derechos reservados | <a href="<?= BASE_URL ?>/app/views/legal.php">Aviso legal, de Privacidad y Cookies</a>
    </div>
</footer>

<script>
    function toggleMenu() {
        document.getElementById('mobileMenu').classList.toggle('show');
    }
</script>
<!-- Banner de cookies -->
<div id="cookie-banner" class="cookie-banner hidden">
    <div class="cookie-banner__content">
        <p>
            Usamos cookies para mejorar tu experiencia en StudyLink. Al continuar, aceptas su uso.
            <a href="<?= BASE_URL ?>/app/views/legal.php" class="cookie-banner__link">Leer más</a>
        </p>
        <button onclick="aceptarCookies()" class="cookie-banner__btn">
            Aceptar y continuar
        </button>
    </div>
</div>

<script>
    function aceptarCookies() {
        const d = new Date();
        d.setFullYear(d.getFullYear() + 1);
        document.cookie = "cookies_aceptadas=true; expires=" + d.toUTCString() + "; path=/";
        document.getElementById('cookie-banner').classList.add('hidden');
    }

    document.addEventListener("DOMContentLoaded", function () {
        if (!document.cookie.includes("cookies_aceptadas=true")) {
            document.getElementById('cookie-banner').classList.remove('hidden');
        }
    });
</script>


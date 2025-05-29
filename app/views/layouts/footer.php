<footer class="footer">
    <div class="footer_contenedor">
        <!-- Columna izquierda -->
        <div class="footer_columna">
            <div class="footer_logo">
                <img src="<?= BASE_URL ?>/public/images/logo_mejorado.png" alt="Logo StudyLink">
                <span>StudyLink</span>
            </div>
            <p class="footer_eslogan">De latam a Europa en un click</p>
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
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </div>

        <!-- Columna redes -->
        <div class="footer_columna">
            <p class="footer_siguenos">Síguenos</p>
            <div class="footer_redes">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="footer_copy">
        © 2025 Todos los derechos reservados | <a href="#">Aviso legal, de Privacidad y Cookies</a>
    </div>
</footer>

<script>
    function toggleMenu() {
        document.getElementById('mobileMenu').classList.toggle('show');
    }
</script>
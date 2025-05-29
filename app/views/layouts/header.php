<!--<header class="encabezado">
        <div class="contenedor">
            <img src="<?= BASE_URL ?>/public/images/logo_mejorado.png" alt="Logo StudyLink" class="logo">
            <nav class="navegacion">
                <a href="<?= BASE_URL ?>/app/views/home.php">INICIO</a>
                <a href="<?= BASE_URL ?>/app/views/quienes_somos.php">¿QUIÉNES SOMOS?</a>
                <a href="#">SERVICIOS</a>
                <a href="<?= BASE_URL ?>/app/views/blog.php">BLOG</a>
                <a href="<?= BASE_URL ?>/app/views/faqs.php">FAQS</a>
                <button class="boton-contactanos" onclick="location.href='<?= BASE_URL ?>/app/views/contactanos.php'">
                    <p><strong>CONTÁCTANOS</strong></p>
                </button>
            </nav>
        </div>
    </header>

-->

<header class="encabezado">
  <div class="contenedor">
    <img src="<?= BASE_URL ?>/public/images/logo_mejorado.png" alt="Logo" class="logo">

    <!-- Menú para pantallas grandes -->
    <nav class="navegacion menu-desktop">
      <a href="<?= BASE_URL ?>/app/views/home.php">INICIO</a>
      <a href="<?= BASE_URL ?>/app/views/quienes_somos.php">¿QUIÉNES SOMOS?</a>

      <div class="dropdown">
        <span class="dropdown-trigger">SERVICIOS ▾</span>
        <div class="dropdown-menu">
          <a href="<?= BASE_URL ?>/app/views/combi_completa.php">LA COMBI COMPLETA</a>
          <a href="<?= BASE_URL ?>/app/views/gente_latino.php">CON MI GENTE LATINO</a>
        </div>
      </div>

      <a href="<?= BASE_URL ?>/app/views/blog.php">BLOG</a>
      <a href="<?= BASE_URL ?>/app/views/faqs.php">FAQS</a>
      <a href="<?= BASE_URL ?>/app/views/contactanos.php" class="boton-contactanos">Contáctanos</a>
    </nav>

    <!-- Menú hamburguesa -->
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  </div>

  <!-- Menú móvil -->
  <nav class="navegacion-mobile" id="mobileMenu">
    <a href="<?= BASE_URL ?>/app/views/home.php">INICIO</a>
    <a href="<?= BASE_URL ?>/app/views/quienes_somos.php">¿QUIÉNES SOMOS?</a>
    <a href="combi_completa.php">LA COMBI COMPLETA</a>
    <a href="gente_latino.php">CON MI GENTE LATINO</a>
    <a href="<?= BASE_URL ?>/app/views/blog.php">BLOG</a>
    <a href="<?= BASE_URL ?>/app/views/faqs.php">FAQS</a>
    <a href="<?= BASE_URL ?>/app/views/contactanos.php" class="boton-contactanos">Contáctanos</a>
  </nav>
</header>

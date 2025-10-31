<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body>
    <!-- Menú Sidebar (Desktop) / Menú Offcanvas (Móvil) -->
    <header class="header__sidebar">
        <div class="header__sidebar-container">
            <div class="header__sidebar-logo">
                <a href="#"><img fetchpriority="high" src="<?php echo get_template_directory_uri(); ?>/img/header_ivan.jpg" alt="Ivan Urbano Diseño y Desarrollo Web"/></a>
            </div>
            <div class="header__sidebar-titulo">
                <h1>Ivan Urbano</h1>
            </div>
            <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'main-menu'
                );
                wp_nav_menu($args);
            ?>
            <div class="header__sidebar-busqueda">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
    <!-- /Menú Sidebar (Desktop) / Menú Offcanvas (Móvil) -->

    <!-- Encabezado móvil -->
    <div class="header__movil">
        <div class="header__movil-container">
            <div class="header__movil-logo">
                <a href="/">
                    <img fetchpriority="high" src="<?php echo get_template_directory_uri(); ?>img/header_ivan.jpg" alt="Ivan Urbano Diseño y Desarrollo Web">
                </a>
            </div>
            <div class="header__movil-titulo">
                <a href="#">Ivan Urbano</a>
            </div>
        </div>
        <button class="header__movil-hamburger" id="menuToggle" aria-label="Menú">
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
        </button>
    </div>
    <!-- /Encabezado móvil -->
    
    <main class="main-content">

        <?php 
            while( have_posts() ) : the_post();

            the_title();
            the_content();

            endwhile;
        ?>

    </main>

    <!-- Overlay para menú móvil -->
<div class="offcanvas__menu" id="offcanvasMenu">
    <div class="offcanvas__menu-contenido">
        <div class="offcanvas__menu-logo">
            <a href="#"><img fetchpriority="high" src="img/header_ivan.jpg" alt="Ivan Urbano, diseñador y desarrollador web"></a>
        </div>
        <div class="offcanvas__menu-titulo">
            <a href="#"><h1 class="offcanvas__menu-titulo-h1">Ivan Urbano</h1></a>
        </div>
        <nav class="offcanvas__menu-movil">
            <ul class="offcanvas__menu-movil-lista">
                <li class="offcanvas__menu-item offcanvas__menu-activo"><a href="#">About Me</a></li>
                <li class="offcanvas__menu-item"><a href="#">Resumen</a></li>
                <li class="offcanvas__menu-item"><a href="#">Portafolio</a></li>
                <li class="offcanvas__menu-item"><a href="#">Blog</a></li>
                <li class="offcanvas__menu-item"><a href="#">Contacto</a></li>
                <li class="offcanvas__menu-item"><a href="#">Extra</a></li>
                <li class="offcanvas__menu-item"><a href="#">Get it Now</a></li>
            </ul>
        </nav>
        <div class="offcanvas__menu-cv">
            <button>Descargar CV</button>
        </div>
        <div class="offcanvas__menu-social">
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="offcanvas__menu-copy">
            © 2025 Todos Los derechos reservados.
        </div>
    </div>
</div>
</body>
</html>
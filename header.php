<!DOCTYPE html>
<html class="wide wow-animation desktop rd-navbar-static-linked landscape" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta property="og:title" content="Аврора Консалт">
        <meta property="og:description" content="Команда экспертов в области корпоративного управления и стратегического менеджмента">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/icon.png">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
	<body>

    <section id="mobileMenu">
        <img id="mobileMenuClose" src="<?php echo get_template_directory_uri(); ?>/img/icon-close-menu.svg" alt="">
        <ul class="navbar-nav m-5">
            <li class="nav-item">
                <a class="nav-link" href="#directions">Направления</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#indusries">Отрасли</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#whyWeAre">Почему мы?</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#feedback">Связаться с нами</a>
            </li>
        </ul>
    </section>
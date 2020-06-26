<?php 

/*
Template name: Главная страница
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

 ?>

<?php get_header(); ?>

<section id="start" class="pt-3">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg" style="padding-left: 0">
                <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#directions">Направления</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#industries">Отрасли</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#whyWeAre">Почему мы?</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#feedback">Связаться с нами</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-toggler">
                    <img id="mobileMenuOpen" src="<?php echo get_template_directory_uri(); ?>/img/icon-mobile-menu.svg" alt="">
                </div>
            </nav>
        </div>
    </header>
    <div class="d-flex align-items-center" style="height: calc(100vh - 62px - 1rem)">
        <div class="container">
            <h1 class="text-white">Аврора Консалт — команда экспертов в&nbsp;области корпоративного управления и&nbsp;стратегического менеджмента.</h1>
            <a href="#directions" class="btn mt-5">
                Подробнее
            </a>
        </div>
    </div>
</section>
<section id="directions" class="my-2 py-5">
    <div class="container">
        <div class="d-flex align-items-center">
            <h2>Направления</h2>
            <div class="w-100 ml-3">
                <hr>
            </div>
        </div>
        <div class="pt-2">
            <div class="row ">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <p class="lead">
                        Стратегическое <br> планирование
                    </p>
                    <p>
                        Разработка стратегий развития и&nbsp;их <br> реализация
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <p class="lead">
                        M&A, Сurve Out <br> и&nbsp;проекты интеграции
                    </p>
                    <p>
                        Сопровождение сделок слияния, поглощения, разделения бизнеса и&nbsp;настройка операционных
                        моделей после реализации сделок
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <p class="lead">
                        Операционная <br> эффективность
                    </p>
                    <p>
                        Повышение эффективности продуктового портфеля, организационных структур, бизнес-процессов
                        и&nbsp;оптимизация затрат
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <p class="lead">
                        Бережливое <br> производство
                    </p>
                    <p>
                        Внедрение практик и&nbsp;инструментов бережливого производства
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <p class="lead">
                        Комплексные проекты <br> трансформации
                    </p>
                    <p>
                        Комплексные проекты изменений бизнес-моделей
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <p class="lead">
                        Индустрия <br> 4.0
                    </p>
                    <p>
                        Проекты цифровизации, в&nbsp;том&nbsp;числе разработка цифровых платформ и&nbsp;экосистем
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="industries" class="py-2">
    <div class="container">
        <h2 class="text-center">Отрасли</h2>
        <?php $loop_industries = CFS()->get('loop_industries'); ?>
        <div class="owl-carousel mt-5" id="loopIndustries">
            <?php foreach ($loop_industries as $industry) : ?>
                <div style="
                        background-image: url('<?php echo $industry['loop_industries_image']; ?>');
                        background-color: rgba(178, 188, 218, 0.2);
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-blend-mode: color;
                        height: 325px;
                        width: 100%;
                        ">
                    <div class="position-absolute w-100 text-center py-3 caption" style="background-color: rgba(255, 255, 255, 0.8)">
                        <p class="lead m-0"><?php echo $industry['loop_industries_name'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="py-5 my-3 bg-light-gray" id="whyWeAre">
    <div class="container">
        <h2 class="text-center pb-4">Почему стоит выбрать нас?</h2>
        <div class="row mt-3">
            <div class="col-lg-4 col-sm-12 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-user.svg" alt="">
                <p class="lead py-4 mb-0">
                    Экспертиза
                </p>
                <p>
                    Мы — команда практиков, прежде чем предлагать консалтинговые услуги, мы разрабатывали и
                    реализовывали решения для оптимизации бизнеса своими руками
                </p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-eye.svg" alt="">
                <p class="lead py-4 mb-0">
                    Объективный взгляд <br> со стороны
                </p>
                <p>
                    Мы предлагаем только те решения, которые будут полезны бизнесу
                </p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-settings.svg" alt="">
                <p class="lead py-4 mb-0">
                    Практика
                </p>
                <p>
                    Мы постоянно развиваемся и идем в ногу со временем, перенимая самые современные и эффективные
                    подходы
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-5 my-3" id="figuresOut">
    <div class="container">
        <div class="d-flex align-items-center">
            <h2>Цифры</h2>
            <div class="w-100 ml-3">
                <hr>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 col-12 pt-5">
                <div class="d-flex align-items-center h-100">
                    <img style="width: 100px" src="<?php echo get_template_directory_uri(); ?>/img/icons-people.svg" alt="">
                    <div class="ml-2">
                        <p class="lead m-0">
                            Количество сотрудников в проектах: <br>
                            до <br>
                        </p>
                        <h1 class="m-0 font-weight-bold" style="color: #BF869C; font-size: 4.5rem; line-height: 90%">22&nbsp;000</h1>
                        <p class="lead m-0">
                            человек
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 pt-5">
                <div class="d-flex align-items-center h-100">
                    <img style="width: 100px" src="<?php echo get_template_directory_uri(); ?>/img/icon-money.svg" alt="">
                    <div class="ml-2">
                        <p class="lead m-0">
                            Оборот компаний <br>
                            до <br>
                        </p>
                        <h1 class="m-0 font-weight-bold" style="color: #BF869C; font-size: 4.5rem; line-height: 90%">76&nbsp;млрд</h1>
                        <p class="lead m-0">
                            рублей
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 my-3 bg-light-gray">
    <div class="container">
        <h2 class="text-center">Экспертиза</h2>
        <?php $loop_partners = CFS()->get('loop_partners'); ?>
        <div class="owl-carousel mt-5 d-flex align-items-center" id="loopPartners">
            <?php foreach ($loop_partners as $partner) : ?>
            <div>
                <img src="<?php echo $partner['loop_partners_image']; ?>" alt="" class="mx-auto" style="height: 100px; object-fit: contain; max-width: 70%">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="feedback" class="py-5 my-3">
    <div class="container text-center">
        <h2 class="text-center pb-5">Заказать звонок</h2>
        <p class="mb-0">Вы можете связаться с нами по телефону</p>
        <h2 class="mb-2"><a class="text-decoration-none" style="color: #BF869C;" href="tel:8 (921) 212-85-06">8-921-212-85-06</a></h2>
        <p>или мы сами свяжемся с вами, если вы оставите нам <br> свои данные:</p>
        <?php echo do_shortcode('[caldera_form id="CF5ef5edc5105af"]'); ?>
    </div>
</section>

<?php get_footer(); ?>
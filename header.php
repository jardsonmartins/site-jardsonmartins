<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
    <title><?php wp_title() ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <a href="https://jardsonmartins.com"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="" class="logo"></a>
            <nav>
                <ul>
                    <li><a href="https://jardsonmartins.com">Home</a></li>
                    <li><a href="#portfolio">Portfólio</a></li>
                    <li><a href="#depositions">Depoimentos</a></li>
                    <li><a href="#faq">Faq</a></li>
                </ul>
                <a href="https://wa.me/5585997801390?text=Quero+fazer+um+or%C3%A7amento"><button class="btn">Solicitar proposta</button></a>
                <div class="btn-mobile" id="js-btn-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <div class="menu-mobile">
        <div class="overlay js-overlay">
            <aside>
                <a href=""><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt=""></a>
                <nav>
                    <ul>
                        <li><a href="https://jardsonmartins.com">Home</a></li>
                        <li><a href="#portfolio">Portfólio</a></li>
                        <li><a href="#depositions">Depoimentos</a></li>
                        <li><a href="#faq">Faq</a></li>
                    </ul>
                    <a href="https://wa.me/5585997801390?text=Quero+fazer+um+or%C3%A7amento"><button class="btn">Solicitar proposta</button></a>
                </nav>
            </aside>
        </div>
    </div>
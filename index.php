<?php
    //Template name: Home
?>

<?php get_header(); ?>

    <section class="hero">
        <div class="container">
            <div class="text" data-aos="fade-right">
                <div class="title">
                    <img src="<?php echo get_template_directory_uri() ?>/img/astronaut.png" alt=""><?php the_field('titulo_banner') ?>
                </div>
                <h1><?php the_field('subtitulo_hero') ?></h1>
                <p>J<?php the_field('descricao_hero') ?></p>
                <a href="https://wa.me/5585997801390?text=Quero+fazer+um+or%C3%A7amento"><button class="btn"><?php the_field('texto_do_botao_hero') ?></button></a>
            </div>
        </div>
    </section>

    <section class="line">
        <span>Design</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Code</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Copy</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Seo</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Design</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Code</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Copy</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Seo</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Design</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Code</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Copy</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Seo</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Design</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Code</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Copy</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
        <span>Seo</span>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon/star.svg" alt="">
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="top">
                <h2 data-aos="fade-right"><?php the_field('titulo_portfolio') ?></h2>
                <div class="text-left" data-aos="fade-left">
                    <h4><?php the_field('subtitulo_portfolio') ?></h4>
                    <p><?php the_field('descricao_portfolio') ?></p>
                </div>
            </div>
            <div class="gallery">
                <?php if( have_rows('itens_portfolio') ) : while ( have_rows('itens_portfolio') ) : the_row(); ?>
                    <a href="<?php the_sub_field('link_portfolio') ?>" class="card" target="_blank">
                        <img src="<?php the_sub_field('imagem_porfolio') ?>" alt="" class="image">
                    </a>
                <?php endwhile; else : endif; ?>
            </div>
            <div class="bottom">
                <a href="<?php the_field('link_do_botao_portfolio') ?>" target="_blank"><button class="btn"><?php the_field('texto_do_botao_portfolio') ?></button></a>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="container">
            <div class="top">
                <h2><?php the_field('titulo_processo') ?></h2>
                <p><?php the_field('descricao_processo') ?></p>
            </div>
            <div class="bottom">
                <div class="items" data-aos="fade-right">
                    <?php if( have_rows('itens_processo') ) : while ( have_rows('itens_processo') ) : the_row(); ?>
                        <div class="item">
                            <div class="icon">
                                <img src="<?php the_sub_field('imagem_processo') ?>" alt="">
                            </div>
                            <div class="text">
                                <h5><?php the_sub_field('titulo_item_processo') ?></h5>
                                <p><?php the_sub_field('descricao_item_processo') ?></p>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
                <div class="image" data-aos="fade-in">
                    <img src="<?php echo get_template_directory_uri() ?>/img/processo-de-desenvolvimento.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="performance">
        <div class="container">
            <div class="text" data-aos="fade-right">
                <h2><?php the_field('titulo_performance') ?></span></h2>
                <p><?php the_field('descricao_performance') ?></p>
                <a href="https://wa.me/5585997801390?text=Quero+fazer+um+or%C3%A7amento"><button class="btn"><?php the_field('texto_do_botao_performance') ?></button></a>
            </div>
        </div>
    </section>

    <section class="forWho">
        <div class="container">
            <div class="top">
                <h2><?php the_field('titulo_pra_quem') ?></span></h2>
            </div>
            <div class="bottom">
                <?php if( have_rows('itens_pra_quem') ) : while ( have_rows('itens_pra_quem') ) : the_row(); ?>
                    <div class="card" data-aos="fade-right">
                        <div class="icon">
                            <img src="<?php the_sub_field('icone_pra_quem') ?>" alt="">
                        </div>
                        <h4><?php the_sub_field('titulo_do_card_pra_quem') ?></h4>
                        <p><?php the_sub_field('descricao_do_card_pra_quem') ?></p>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>

    <section class="customers">
        <div class="container">
            <div class="top">
                <h5><?php the_field('titulo_clientes') ?></h5>
                <div class="arrows">
                    <div class="swiper-button-prev">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon/arrow-left.svg" alt="">
                    </div>
                    <div class="swiper-button-next">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon/arrow-right.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="slide-customers">
                <div class="swiper-wrapper">

                    <?php if( have_rows('itens_clientes') ) : while ( have_rows('itens_clientes') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field('logo_clientes') ?>" alt="">
                        </div>
                    <?php endwhile; else : endif; ?>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="depositions" id="depositions">
        <div class="container">
            <div class="top">
                <h3><?php the_field('titulo_depoimentos') ?></h3>
            </div>
            <div class="slide-depositions">
                <div class="swiper-wrapper">
                    <?php if( have_rows('itens_depoimentos') ) : while ( have_rows('itens_depoimentos') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="card-depositions" data-aos="fade-left">
                                <img src="<?php echo get_template_directory_uri() ?>/img/icon/quotes.svg" alt="">
                                <p><?php the_sub_field('texto_depoimentos') ?></p>
                                <h5><?php the_sub_field('nome_depoimentos') ?></h5>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="profile">
        <div class="container">
            <div class="image" data-aos="fade-right">
                <img src="<?php  the_field('imagem_perfil') ?>" alt="">
            </div>
            <div class="content">
                <div class="name">
                    <h2><?php  the_field('nome_perfil') ?></h2>
                    <img src="<?php echo get_template_directory_uri() ?>/img/verified.svg" alt="">
                </div>
                <div class="office"><?php  the_field('funcao_perfil') ?></div>
                <p class="description"><?php  the_field('descricao_perfil') ?></p>
                <p class="social">Me acompanhe nas minhas redes <span><?php  the_field('arroba_do_instagram_perfil') ?></span></p>
                <div class="icons">
                    <a href="https://www.instagram.com/jardsonmartins/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/jardsonmartins/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq" id="faq">
        <div class="container">
            <div class="text">
                <h2><?php  the_field('titulo_faq') ?></h2>
                <p><?php  the_field('descricao_faq') ?></p>
            </div>

            <div class="content">
                <?php if( have_rows('itens_faq') ) : while ( have_rows('itens_faq') ) : the_row(); ?>
                    <details>
                        <summary>
                            <h5><?php the_sub_field('pergunta_faq') ?></h5>
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon/arrow.svg" alt="">
                        </summary>
                        <p><?php the_sub_field('resposta_faq') ?></p>
                    </details>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="items">
                <?php if( have_rows('itens_contato') ) : while ( have_rows('itens_contato') ) : the_row(); ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon/ray.svg" alt="">
                        <p><?php the_sub_field('item_contato') ?></p>
                    </div>      
                <?php endwhile; else : endif; ?>
            </div>
            <h2><?php the_field('titulo_contato') ?></h2>
            <a href="https://wa.me/5585997801390?text=Quero+fazer+um+or%C3%A7amento" data-aos="zoom-in"><button class="btn"><?php the_field('texto_do_botao_contato') ?></button></a>
        </div>
    </section>
    
<?php get_footer(); ?>
   
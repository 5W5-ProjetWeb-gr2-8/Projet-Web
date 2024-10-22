<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <!-- Importation des styles WordPress -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="global">
        <!-- Header ///////////////////////////////////////////////////////////////////////// -->
        <header>
            <!-- Menu ///////////////////////////////////////////////////////////////////////// -->
            <nav class="menu">
                <div class="menu_contenu">
                    <p class="menu_titre">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <!-- Lien vers la page d'accueil -->
                            <img class="logo_img" src="<?php echo get_template_directory_uri(); ?>/images/logo_TIM.png"
                                alt="Logo TIM" />
                        </a>
                    </p>
                    <p class="inscription">Inscription</p>
                    <button class="menu_hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Menu principal -->
                    <?php wp_nav_menu(array("menu" => "menu-principal")); ?>
                </div>
            </nav>
        </header>
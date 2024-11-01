<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">


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
                        <?php
                        // img wordpress du logo
                        $image_id = 89;
                        ?>

                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <!-- Lien vers la page d'accueil -->
                            <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'logo_img', 'alt' => 'Logo TIM')); ?>
                        </a>

                    </p>
                    <p class="inscription">Inscription</p>

                    <button id="menu-burger-wordpress" aria-label="Menu">
                        &#9776; <!-- Icône burger -->
                    </button>
                    <!-- Menu principal -->
                    <?php wp_nav_menu(array("menu" => "menu-principal")); ?>

                </div>
            </nav>
        </header>
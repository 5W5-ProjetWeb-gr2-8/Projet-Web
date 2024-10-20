<?php
add_theme_support('menus');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function ajouter_styles_personnalises()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'ajouter_styles_personnalises');

// // Permet les menus de fonctionner
// function enregistrer_mes_menus()
// {
//     enregistrer_nav_menus(array(
//         'menu-principal' => __('Menu Principal')
//     ));
// }
// add_action('init', 'enregistrer_mes_menus');
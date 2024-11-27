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

// Affiche la requête en cours
add_action( 'wp_head', 'show_current_query' );

function show_current_query() {
    // La requête pour affiche les noms des cours
/* Restore original Post Data */
wp_reset_postdata();
// FONCTIONNE PAS CORRECTEMENT //
$the_query = new WP_Query( [ 
    'post_type' => 'post', 
    'category_name' => 'session1' // catégorie: session 1
    ]);
    global $wp_query;

    if ( !isset( $_GET['q'] ) )
        return;
    echo '<textarea cols="50" rows="10">';
    print_r( $the_query );
    echo '</textarea>';
}

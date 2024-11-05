<?php
/*
Plugin Name: Carrousel
Description: un plugin de carrousel pour WordPress.
Version 1.0
Author: Émile Bécotte, Clovis Gauthier, James Ling, Michael-Ali Soeu, Janne Zhang Ellison
*/

function carrousel_enqueue()
{
  wp_enqueue_style('carrousel-style', plugin_dir_url(__FILE__) . 'style.css');
  wp_enqueue_script('carrousel-script', plugin_dir_url(__FILE__) . 'js/carrousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'carrousel_enqueue');

function genere_html()
{
  // Tableau d'IDs des images depuis la bibliothèque de médias
  $projets_ids = array(64, 66, 63, 65, 62); // Remplace avec les IDs réels des images
  $contenu = '<section class="galerie-projets">
        <h2 class="galerie-titre">Projets étudiants</h2>
        <h3 id="titre-projet" class="titre-projet">Titre du projet</h3>
        <div class="carrousel-container">
            <div class="fleche gauche" onclick="changerImage(-1)">&#9664;</div>
            <!-- Flèche gauche -->
            <div class="carrousel">';

  // Boucle à travers les IDs d'images
  foreach ($projets_ids as $projet_id) {
    // Récupérer l'URL, le titre, et l'attribut alt de l'image
    $image_url = wp_get_attachment_url($projet_id);
    $image_alt = get_post_meta($projet_id, '_wp_attachment_image_alt', true);
    $image_title = get_the_title($projet_id);

    // Ajouter chaque image au contenu
    $contenu .= '<div class="carrousel-item">
                <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" title="' . esc_attr($image_title) . '" />
            </div>';
  }

  // Fermer le carrousel et ajouter les flèches
  $contenu .= '</div>
            <div class="fleche droite" onclick="changerImage(1)">&#9654;</div>
            <!-- Flèche droite -->
        </div>
        <div class="indications">';

  // Générer les indications pour chaque image
  for ($i = 0; $i < count($projets_ids); $i++) {
    $contenu .= '<span class="indication" onclick="montrerImage(' . $i . ')"></span>';
  }

  // Fermer la section
  $contenu .= '</div>
    </section>';

  return $contenu;
}

// Enregistrement du shortcode
add_shortcode('carrousel', 'genere_html');

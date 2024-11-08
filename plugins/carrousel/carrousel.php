<?php
/*
Plugin Name: Carrousel
Description: Un plugin de carrousel pour WordPress.
Version: 1.0
Author: Émile Bécotte, Clovis Gauthier, James Ling, Michael-Ali Soeu, Janne Zhang Ellison
*/

// Fonction pour ajouter le style CSS et le script JavaScript
function carrousel_enqueue()
{
  // Ajoute le fichier CSS
  wp_enqueue_style('carrousel-style', plugin_dir_url(__FILE__) . 'style.css');

  // Ajoute le fichier JavaScript
  wp_enqueue_script('carrousel-script', plugin_dir_url(__FILE__) . 'js/carrousel.js', array('jquery'), null, true);
}
// Enregistre la fonction carrousel_enqueue pour être appelée lorsque WordPress charge les scripts
add_action('wp_enqueue_scripts', 'carrousel_enqueue');

// Fonction pour générer le HTML du carrousel
function genere_html()
{
  // Tableau des IDs d'images pour le carrousel
  $projets_ids = array(64, 66, 63, 65, 62);

  // Début du contenu HTML de la section carrousel
  $contenu = '<section class="galerie-projets">
        <h2 class="galerie-titre">Projets étudiants</h2>
        <h3 id="titre-projet" class="titre-projet">Titre du projet</h3>
        <div class="carrousel-container">
            <div class="fleche gauche" onclick="changerImage(-1)">&#9664;</div>
            <!-- Flèche gauche -->
            <div class="carrousel">';

  // Boucle pour générer un élément HTML pour chaque image dans le carrousel
  foreach ($projets_ids as $projet_id) {
    // Récupère l'URL, le titre et l'attribut alt de chaque image via son ID
    $image_url = wp_get_attachment_url($projet_id);
    $image_alt = get_post_meta($projet_id, '_wp_attachment_image_alt', true);
    $image_title = get_the_title($projet_id);

    // Ajoute l'image au carrousel avec ses attributs URL, alt et titre
    $contenu .= '<div class="carrousel-item">
                <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" title="' . esc_attr($image_title) . '" />
            </div>';
  }

  // Ferme le conteneur carrousel et ajoute une flèche de navigation à droite
  $contenu .= '</div>
            <div class="fleche droite" onclick="changerImage(1)">&#9654;</div>
            <!-- Flèche droite -->
        </div>
        <div class="indications">';

  // Boucle pour générer des indications (les rectangles avec des coins arrondies) pour chaque image
  for ($i = 0; $i < count($projets_ids); $i++) {
    $contenu .= '<span class="indication" onclick="montrerImage(' . $i . ')"></span>';
  }

  // Ferme la section carrousel
  $contenu .= '</div>
    </section>';

  // Retourne le code HTML complet du carrousel
  return $contenu;
}

// Enregistre un shortcode carrousel
add_shortcode('carrousel', 'genere_html');
?>
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
    $contenu = '<section class="galerie-projets">
      <h2 class="galerie-titre">Projets étudiants</h2>
      <h3 id="titre-projet" class="titre-projet">Titre du projet</h3>
      <!-- Ajout du titre du projet -->
      <div class="carrousel-container">
        <div class="fleche gauche" onclick="changerImage(-1)">&#9664;</div>
        <!-- Flèche gauche -->
        <div class="carrousel">
          <div class="carrousel-item">
            <img
              src="images/projets-etudiants/lacryma.png"
              alt="Projet Lacryma"
            />
          </div>
          <div class="carrousel-item">
            <img
              src="images/projets-etudiants/triptyque.png"
              alt="Projet Triptyque"
            />
          </div>
          <div class="carrousel-item">
            <img
              src="images/projets-etudiants/inserxion.png"
              alt="Projet Inserxion"
            />
          </div>
          <div class="carrousel-item">
            <img src="images/projets-etudiants/rv_projet.jpg" alt="Projet RV" />
          </div>
          <div class="carrousel-item">
            <img
              src="images/projets-etudiants/dystopie_chronique.png"
              alt="Projet Dystopie chronique"
            />
          </div>
        </div>
        <div class="fleche droite" onclick="changerImage(1)">&#9654;</div>
        <!-- Flèche droite -->
      </div>
      <div class="indications">
        <span class="indication" onclick="montrerImage(0)"></span>
        <span class="indication" onclick="montrerImage(1)"></span>
        <span class="indication" onclick="montrerImage(2)"></span>
        <span class="indication" onclick="montrerImage(3)"></span>
        <span class="indication" onclick="montrerImage(4)"></span>
      </div>
    </section>';
    return $contenu;
}

// Enregistrement du shortcode
add_shortcode('carrousel', 'genere_html');

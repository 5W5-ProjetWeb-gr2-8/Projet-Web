<?php
/*
Plugin Name: Foire aux Questions (FAQ)
Description: Un plugin pour afficher une foire aux questions (FAQ) avec des réponses interactives.
Version: 1.0
Author: Émile Bécotte, Clovis Gauthier, James Ling, Michael-Ali Soeu, Janne Zhang Ellison
*/

// Enqueue styles et scripts
function faq_enqueue_assets()
{
    wp_enqueue_style('faq-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('faq-script', plugin_dir_url(__FILE__) . 'js/faq.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'faq_enqueue_assets');

// Génération du HTML pour la FAQ
function genere_html_faq()
{
    $contenu = '<section class="faq-section">
    <h3 class="titre_FAQ">Foire aux questions</h3>
    <div class="faq-contenu">
        <div class="questions-et-reponse">
            <div class="questions">
                <button class="question" data-question="question1">
                    <span class="icone-fleche">→</span> Qu\'est-ce que le TIM ?
                </button>
                <button class="question" data-question="question2">
                    <span class="icone-fleche">→</span> Quels logiciels utilise-t-on en TIM ?
                </button>
                <button class="question" data-question="question3">
                    <span class="icone-fleche">→</span> Apprend-on à créer des jeux vidéo en TIM ?
                </button>
                <button class="question" data-question="question4">
                    <span class="icone-fleche">→</span> Est-ce que je vais apprendre à coder ?
                </button>
                <button class="question" data-question="question5">
                    <span class="icone-fleche">→</span> Est-ce que TIM forme à la création 3D ?
                </button>
            </div>
            <div id="boite-reponse" class="boite-reponse">
                <h6 class="reponse-affichee">La réponse s\'affichera ici.</h6>
            </div>
        </div>
        <div class="contact">
            <div class="social-media">
                <a href="https://www.cmaisonneuve.qc.ca/" target="_blank">
                    ' . wp_get_attachment_image(52, 'thumbnail', false, array('alt' => 'Logo Collège de Maisonneuve')) . '
                </a>
                <a href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/" target="_blank">
                    ' . wp_get_attachment_image(53, 'thumbnail', false, array('alt' => 'LinkedIn')) . '
                </a>
                <a href="https://www.behance.net/departement_tim" target="_blank">
                    ' . wp_get_attachment_image(51, 'thumbnail', false, array('alt' => 'Behance')) . '
                </a>
            </div>
            <div class="contact-info">
                <p>Téléphone : (514) 254 7131</p>
                <p>Adresse : 3800 Sherbrooke E.</p>
            </div>
        </div>
    </div></section>';
    return $contenu;
}
add_shortcode('faq', 'genere_html_faq');

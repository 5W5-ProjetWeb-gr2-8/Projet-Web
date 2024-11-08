<?php
/*
Plugin Name: Foire aux Questions (FAQ)
Description: Un plugin pour afficher une foire aux questions (FAQ) avec des réponses interactives.
Version: 1.0
Author: Émile Bécotte, Clovis Gauthier, James Ling, Michael-Ali Soeu, Janne Zhang Ellison
*/

// Fonction pour ajouter les styles et scripts de l'extension FAQ
function faq_enqueue_assets()
{
    // Ajoute le fichier CSS
    wp_enqueue_style('faq-style', plugin_dir_url(__FILE__) . 'style.css');
    // Ajoute le fichier JavaScript
    wp_enqueue_script('faq-script', plugin_dir_url(__FILE__) . 'js/faq.js', array('jquery'), null, true);
}
// Attache la fonction aux scripts de la page pour qu'elle s'exécute quand les scripts front-end sont chargés
add_action('wp_enqueue_scripts', 'faq_enqueue_assets');

// Fonction pour générer le HTML de la section FAQ
function genere_html_faq()
{
    // Contenu HTML de la FAQ
    $contenu = '<section class="faq-section">
    <h3 class="titre_FAQ">Foire aux questions</h3>
    <div class="faq-contenu">
        <div class="questions-et-reponse">
            <div class="questions">
                <!-- Bouton question avec identifiant de donnée pour afficher la réponse associée -->
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
            <!-- Conteneur pour afficher la réponse à la question sélectionnée -->
            <div id="boite-reponse" class="boite-reponse">
                <h6 class="reponse-affichee">La réponse s\'affichera ici.</h6>
            </div>
        </div>
        <!-- Section Contact avec liens vers les réseaux sociaux et informations de contact -->
        <div class="contact">
            <div class="social-media">
                <!-- Logo du Collège de Maisonneuve -->
                <a href="https://www.cmaisonneuve.qc.ca/" target="_blank">
                    ' . wp_get_attachment_image(52, 'thumbnail', false, array('alt' => 'Logo Collège de Maisonneuve')) . '
                </a>
                <!-- Lien vers le profil LinkedIn -->
                <a href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/" target="_blank">
                    ' . wp_get_attachment_image(53, 'thumbnail', false, array('alt' => 'LinkedIn')) . '
                </a>
                <!-- Lien vers la page Behance -->
                <a href="https://www.behance.net/departement_tim" target="_blank">
                    ' . wp_get_attachment_image(51, 'thumbnail', false, array('alt' => 'Behance')) . '
                </a>
            </div>
            <!-- Informations de contact supplémentaires -->
            <div class="contact-info">
                <p>Téléphone : (514) 254 7131</p>
                <p>Adresse : 3800 Sherbrooke E.</p>
            </div>
        </div>
    </div></section>';
    return $contenu;
}
// Crée un shortcode faq
add_shortcode('faq', 'genere_html_faq');
?>
<?php
// Appelle le fichier header.php
get_header();
?>

<!-- Section des compétences -->
<section class="competences-section">
    <div class="competences-container">
        <div class="competence" style="background-color: #f94144" onclick="goToCours('html')">
            HTML
        </div>
        <div class="competence" style="background-color: #f3722c" onclick="goToCours('css')">
            CSS
        </div>
        <div class="competence" style="background-color: #f8961e" onclick="goToCours('js')">
            JavaScript
        </div>
        <div class="competence" style="background-color: #f9c74f" onclick="goToCours('react')">
            React
        </div>
    </div>
</section>

<!-- Section SESSION 1 - 6  -->
<section class="session1-6">
    <div class="session-container">

        <h2 class="session">Session 1</h2>

        <h2 class="session">Session 2</h2>

        <h2 class="session">Session 3</h2>

        <h2 class="session">Session 4</h2>

        <h2 class="session">Session 5</h2>

        <h2 class="session">Session 6</h2>

    </div>

</section>


<!-- Section des cours -->
<section class="cours-section" id="cours">
    <div class="cours-box" id="html">
        <div class="cours-header">
            <span class="cours-nom">Introduction au HTML</span>
            <span class="cours-code">TIM101</span>
            <button class="btn-plus" onclick="toggleCours(this)">+</button>
        </div>
        <div class="cours-details">
            <p>Apprenez les bases du HTML pour structurer vos pages web.</p>
            <p>Heures : 45 heures</p>
        </div>
    </div>

    <div class="cours-box" id="css">
        <div class="cours-header">
            <span class="cours-nom">Styles avec CSS</span>
            <span class="cours-code">TIM102</span>
            <button class="btn-plus" onclick="toggleCours(this)">+</button>
        </div>
        <div class="cours-details">
            <p>
                Maîtrisez les styles CSS pour des designs modernes et adaptatifs.
            </p>
            <p>Heures : 50 heures</p>
        </div>
    </div>

    <div class="cours-box" id="js">
        <div class="cours-header">
            <span class="cours-nom">JavaScript pour Interactivité</span>
            <span class="cours-code">TIM201</span>
            <button class="btn-plus" onclick="toggleCours(this)">+</button>
        </div>
        <div class="cours-details">
            <p>Ajoutez de l'interactivité à vos sites avec JavaScript.</p>
            <p>Heures : 60 heures</p>
        </div>
    </div>

    <div class="cours-box" id="react">
        <div class="cours-header">
            <span class="cours-nom">Développement Frontend avec React</span>
            <span class="cours-code">TIM301</span>
            <button class="btn-plus" onclick="toggleCours(this)">+</button>
        </div>
        <div class="cours-details">
            <p>Apprenez à créer des interfaces réactives avec React.</p>
            <p>Heures : 70 heures</p>
        </div>
    </div>
</section>

<!-- FAQ //////////////////////////////////////////////////////////////////////// -->
<?php get_template_part('template', 'faq'); ?>

<!-- Affiche le footer -->
<?php get_footer() ?>
<?php
// Ceci est l'équivalent du fichier carriere.htm
// Appelle le fichier header.php
get_header();
?>

<!-- Main /////////////////////////////////////////////////////////////////////////////// -->
<main class="carriere">
    <section class="intro-carr">
        <h3>Stages et carrière</h3>

        <div class="trois-cat">
            <a href="">Stage</a>
            <a href="">Université</a>
            <a href="">Marché d'Emploi</a>
        </div>

        <section class="intro-paragraphe">

            <img class="logo_carriere" src="<?php echo wp_get_attachment_url(ID_DE_L_IMAGE); ?>" alt="Diagram Venn TIM" />


            <div class="description-intro">
                <p>Après ce beau programme de 3 ans en Technique d'intégration de multimédia, vous allez avoir deux
                    choix de carrière totalement différents. Toutefois, il faut que vous compléter le stage obligatoire
                    à la fin de la session. Ensuite, vous pouvez choisir entre l'Université ou le Marché d'Emploi !

                </p>
                <p>LES TROIX SECTIONS SUIVANTES VOUS EXPLIQUERONT LES DÉTAILS DE CHAQUE CHOIX.</p>


                <img class="logo_flecheCar" src="<?php echo wp_get_attachment_url(ID_DE_L_IMAGE); ?>" alt="Logo Direction Carrière">

            </div>
        </section>

    </section>



    <section class="detail-carri">

        <div class="detail-universelle">
            <div class="detail">
                <h5>Stage</h5>

                <div class="contenu-image-description">
                    <img src="<?php echo wp_get_attachment_url(ID_DE_L_IMAGE); ?>" alt="image qui illustre un stage">


                    <section class="paragraphe">
                        <p>Une fois que vous atteinds le 5e session, vous allez preparer pour le stage
                            de fin session. La plupart des prérations se font durant november jusqu'à janvier.
                            Il est important de bien se préparer pour ce stage, car il sert principalement à
                            développer vos compétences et à vous familiariser avec le marché d'emploi.
                            Il est aussi préférable d'appliquer par vous même pour augmenter la chance de trouver un stage.

                            Ce stage est obligatoire pour obtenir votre diplôme.
                        </p>
                        <p>Pour savoir d'autre information sur le stage ainsi que l'horaire de stage, consulter notre site officiel
                            du collège: <a href="https://www.cmaisonneuve.qc.ca/">Collège de Maisonneuve</a></p>
                    </section>



                </div>

            </div>
            <div class="detail">
                <h5>Université</h5>

                <div class="contenu-image-description">
                    <img src="<?php echo wp_get_attachment_url(ID_DE_L_IMAGE); ?>" alt="image d'un Université">


                    <section class="paragraphe">
                        <p>Une fois que le stage est terminé, vous aurez aussi la chance de continuer votre
                            étude à l'université pour obtenir un diplôme de votre choix.
                        </p>
                        <p>Le parcous universitaire permet aussi l'amélioration certains de vos compétences
                            aquises durant le programme de TIM.
                        </p>
                    </section>


                </div>

            </div>
            <div class="detail">
                <h5>Marché d'Emploi</h5>


                <div class="contenu-image-description">
                    <img src="<?php echo wp_get_attachment_url(ID_DE_L_IMAGE); ?>" alt="image emploi">


                    <section class="paragraphe">
                        <p>Ce parcours est le meilleur choix si vous choississez d'implémenter les compétences
                            aquises directement dans le marché d'emploi.
                        </p>
                        <p>Il est le choix le plus rapide pour commencer une carrière de rêve !</p>
                        <p>Il est aussi le parcours le plus difficile, car il faut que vous soyez capable de
                            démontrer vos compétences et de les appliquer dans un environnement professionnel.</p>
                    </section>


                </div>
            </div>
        </div>

    </section>

</main>

<!-- FAQ //////////////////////////////////////////////////////////////////////// -->
<section class="faq-section">
    <!-- Titre -->
    <h3 class="titre_FAQ">Foire aux questions</h3>
    <main class="faq-contenu">
        <!-- Section des questions -->
        <div class="questions-et-reponse">
            <!-- Questions -->
            <div class="questions">
                <button class="question" data-question="question1">
                    <span class="icone-fleche">→</span> Qu'est-ce que le TIM ?
                </button>
                <button class="question" data-question="question2">
                    <span class="icone-fleche">→</span> Quels logiciels utilise-t-on en
                    TIMS ?
                </button>
                <button class="question" data-question="question3">
                    <span class="icone-fleche">→</span> Apprend-on à créer des jeux
                    vidéo en TIMS ?
                </button>
                <button class="question" data-question="question4">
                    <span class="icone-fleche">→</span> Est-ce que je vais apprendre à
                    coder ?
                </button>
                <button class="question" data-question="question5">
                    <span class="icone-fleche">→</span> Est-ce que TIMS forme à la
                    création 3D ?
                </button>
            </div>
            <!-- Boîte de réponse blanche -->
            <div id="boite-reponse" class="boite-reponse">
                <h6 class="reponse-affichee">La réponse s'affichera ici.</h6>
            </div>
        </div>
        <!-- Contacts -->
        <div class="contact">
            <!-- Réseaux sociaux -->
            <div class="social-media">
                <!-- Site collège -->
                <a href="https://www.cmaisonneuve.qc.ca/" target="_blank">
                    <img src="<?php echo wp_get_attachment_url(ID_DE_L_IMAGE); ?>" alt="Logo Collège de Maisonneuve" />

                </a>
                <!-- LinkedIn -->
                <a
                    href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/">
                    <img src="<?php echo wp_get_attachment_url(ID_DE_L_IMAGE); ?>" alt="LinkedIn" />

                </a>
                <!-- Behance -->
                <a href="https://www.behance.net/departement_tim" target="_blank">
                    <img src="<?php echo wp_get_attachment_url(51); ?>" alt="Behance" />

                </a>
            </div>
            <!-- Infos -->
            <div class="contact-info">
                <p>Téléphone : (514) 254 7131</p>
                <p>Adresse : 3800 Sherbrooke E.</p>
            </div>
        </div>
    </main>
</section>

<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets 
?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>


<script src="<?php echo get_template_directory_uri(); ?>/js/competences.js"></script>
<!-- Affiche le footer -->
<?php get_footer() ?>
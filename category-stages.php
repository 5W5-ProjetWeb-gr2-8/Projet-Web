<?php
// Ceci est l'équivalent du fichier carriere.htm
// Appelle le fichier header.php
get_header();
?>

<!-- Main /////////////////////////////////////////////////////////////////////////////// -->
<main class="carriere">
    <section class="intro-carr">
        <h3>Stages et carrière</h3>
        <h3 class="section-stage">Stages et carrière</h3>

        <div class="trois-cat">
            <a href="#stage">Stage</a>
            <a href="#univer">Université</a>
            <a href="#emploi">Marché d'Emploi</a>
        </div>

        <section class="intro-paragraphe">
            <img class="logo_carriere" src="<?php echo wp_get_attachment_url(303); ?>" alt="Diagram Venn TIM" />

            <div class="description-intro">
                <p>Après ce beau programme de 3 ans en Technique d'intégration de multimédia, vous allez avoir deux
                    choix de carrière totalement différents. Toutefois, il faut que vous compléter le stage obligatoire
                    à la fin de la session. Ensuite, vous pouvez choisir entre l'Université ou le Marché d'Emploi !
                </p>
                <p>LES TROIX SECTIONS SUIVANTES VOUS EXPLIQUERONT LES DÉTAILS DE CHAQUE CHOIX.</p>

                <img class="logo_flecheCar" src="<?php echo wp_get_attachment_url(309); ?>" alt="Logo Direction Carrière">
            </div>
        </section>
    </section>

    <section class="detail-carri">
        <div class="detail-universelle">
            <div class="detail" id="stage">
                <h5>Stage</h5>
                <div class="contenu-image-description">
                    <img src="<?php echo wp_get_attachment_url(305); ?>" alt="image qui illustre un stage">
                    <section class="paragraphe">
                        <p>Une fois que vous atteinds le 5e session, vous allez preparer pour le stage
                            de fin session. La plupart des préparations se font durant novembre jusqu'à janvier.
                            Il est important de bien se préparer pour ce stage, car il sert principalement à
                            développer vos compétences et à vous familiariser avec le marché d'emploi.
                            Il est aussi préférable d'appliquer par vous même pour augmenter la chance de trouver un stage.
                            Ce stage est obligatoire pour obtenir votre diplôme.
                        </p>
                        <p>Pour savoir d'autres informations sur le stage ainsi que l'horaire de stage, consulter notre site officiel
                            du collège : <a href="https://www.cmaisonneuve.qc.ca/">Collège de Maisonneuve</a></p>
                    </section>
                </div>
            </div>

            <div class="detail" id="univer">
                <h5>Université</h5>
                <div class="contenu-image-description">
                    <img src="<?php echo wp_get_attachment_url(306); ?>" alt="image d'une Université">
                    <section class="paragraphe">
                        <p>Une fois que le stage est terminé, vous aurez aussi la chance de continuer votre
                            étude à l'université pour obtenir un diplôme de votre choix.
                        </p>
                        <p>Le parcours universitaire permet aussi l'amélioration de certaines de vos compétences
                            acquises durant le programme de TIM.
                        </p>
                    </section>
                </div>
            </div>

            <div class="detail" id="emploi">
                <h5>Marché d'Emploi</h5>
                <div class="contenu-image-description">
                    <img src="<?php echo wp_get_attachment_url(307); ?>" alt="image emploi">
                    <section class="paragraphe">
                        <p>Ce parcours est le meilleur choix si vous choisissez d'implémenter les compétences
                            acquises directement dans le marché d'emploi.
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

<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets 
?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le FAQ 
?>

<!-- Affiche le footer -->
<?php get_footer(); ?>
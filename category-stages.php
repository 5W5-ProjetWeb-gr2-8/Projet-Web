<?php
// Appelle le fichier header.php
get_header();

?>

<main class="carriere">
    <section class="intro-carr">
        <h1 class="section-stage">Stages et carrière</h1>
        <div class="trois-cat">
            <a href="#stage" class="animation-stage">Stage</a>
            <a href="#univer" class="animation-universite">Université</a>
            <a href="#emploi" class="animation-emploi">Marché d'Emploi</a>
        </div>
        <section class="intro-paragraphe">
            <img class="logo_carriere" src="<?php echo wp_get_attachment_url(303); ?>" alt="Diagram Venn TIM" />
            <div class="description-intro">
                <p>Après ce beau programme de 3 ans en Technique d'intégration de multimédia, vous allez avoir deux
                    choix de carrière totalement différents. Toutefois, il faut que vous complétiez le stage obligatoire
                    à la fin de la session. Ensuite, vous pouvez choisir entre l'Université ou le Marché d'Emploi !
                </p>
                <p>LES TROIS SECTIONS SUIVANTES VOUS EXPLIQUERONT LES DÉTAILS DE CHAQUE CHOIX.</p>
                <img class="logo_flecheCar" src="<?php echo wp_get_attachment_url(309); ?>" alt="Logo Direction Carrière" />
            </div>
        </section>
    </section>

    <section class="detail-carri">
        <div class="detail-universelle">
            <div class="detail" id="stage">
                <h2 class="couleur_stage">Stage</h2>
                <div class="contenu-image-description">
                    <div class="images-stage">
                        <img class="bordure_stage" src="<?php echo wp_get_attachment_url(472); ?>" alt="image qui illustre un stage" />
                    </div>
                    <section class="paragraphe">
                        <p>Une fois que vous atteignez la 5e session, vous allez vous préparer pour le stage
                            de la fin de session. La plupart des préparations se font durant novembre jusqu'à janvier.
                            Il est important de bien se préparer pour ce stage, car il sert principalement à
                            développer vos compétences et à vous familiariser avec le marché d'emploi.
                            Il est aussi préférable d'appliquer par vous-même pour augmenter la chance de trouver un stage.
                            Ce stage est obligatoire pour obtenir votre diplôme.
                            <br><br>
                            Pour savoir d'autres informations sur le stage ainsi que l'horaire de stage, consulter notre site officiel
                            du collège : <a class="couleur_stage" href="https://www.cmaisonneuve.qc.ca/">Collège de Maisonneuve</a>
                        </p>
                    </section>
                </div>
            </div>
            <div class="detail" id="univer">
                <h2 class="couleur_universite">Université</h2>
                <div class="contenu-image-description">
                    <img class="bordure_universite" src="<?php echo wp_get_attachment_url(474); ?>" alt="image d'un Université" />
                    <section class="paragraphe">
                        <p>Après avoir terminé votre stage, vous aurez également l'opportunité de continuer
                            vos études à l'université pour obtenir un diplôme de votre choix. <br><br>
                            Le parcours universitaire permet aussi l'amélioration certaine de vos compétences
                            acquises durant le programme de TIM.
                        </p>
                    </section>
                </div>
            </div>
            <div class="detail" id="emploi">
                <h2 class="couleur_emploi">Marché d'Emploi</h2>
                <div class="contenu-image-description">
                    <img class="bordure_emploi" src="<?php echo wp_get_attachment_url(470); ?>" alt="image emploi" />
                    <section class="paragraphe">
                        <p>Ce parcours est le meilleur choix si vous choisissez d'implémenter les compétences
                            acquises directement dans le marché d'emploi. Il est le choix le plus rapide pour
                            commencer une carrière de rêve ! <br> <br>Il s'agit également du parcours le plus difficile,
                            car il faut que vous ayez les capacités de montrer vos compétences et les mettre en pratique dans un contexte professionnel.
                            <br><br>
                            Si vous êtes intéressé à commencer votre carrière au Collège de Maisonneuve, veuillez consulter
                            notre site officiel pour plus d'informations.
                        </p>
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
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- Affiche le footer -->
<?php get_footer() ?>
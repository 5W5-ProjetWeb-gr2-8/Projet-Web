<?php
// Appelle le fichier header.php
get_header();
?>

<!-- Section SESSION 1 à 6 avec boutons dynamiques -->
<section class="session1-6">
    <div class="session-container">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <button class="session session-<?php echo $i; ?> animation-session-<?php echo $i; ?>" data-session="session-<?php echo $i; ?>">Session <?php echo $i; ?></button>
        <?php endfor; ?>
    </div>
</section>



<!-- Section des cours -->
<section class="cours-section" id="cours">
    <?php while (have_posts()): the_post(); ?>
        <div class="cours-box">
            <div class="nomDuCours">
                <div class="alignementTextIcon">
                    <h5>Création Video</h5>
                    <button class="btn-cours">
                        <img id="iconCours" src="<?php echo wp_get_attachment_url(312); ?>" alt="Logo Video" />

                    </button>
                </div>
                <div class="alignementTextIcon">
                    <h5>Création Video</h5>
                    <button class="btn-cours">
                        <img id="iconCours" src="<?php echo wp_get_attachment_url(312); ?>" alt="Logo Video" />

                    </button>
                </div>
                <div class="alignementTextIcon">
                    <h5>Création Video</h5>
                    <button class="btn-cours">
                        <img id="iconCours" src="<?php echo wp_get_attachment_url(312); ?>" alt="Logo Video" />

                    </button>
                </div>
                <div class="alignementTextIcon">
                    <h5>Création Video</h5>
                    <button class="btn-cours">
                        <img id="iconCours" src="<?php echo wp_get_attachment_url(312); ?>" alt="Logo Video" />

                    </button>
                </div>
            </div>
            <div class="cours-boxes">
                <div class="leCours">
                    <h2>Conception graphique</h2>
                    <h4>582-1M2-MA</h4>
                    <div class="tempParCours">
                        <ol>
                            <h6>3h Theorie</h6>
                            <h6>2h pratique</h6>
                            <h6>3h A la maison</h6>
                        </ol>
                    </div>
                    <div class="Description">
                        <h6>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                            consequatur vel provident repudiandae suscipit voluptate
                            officiis consequuntur molestiae quod possimus, facere odio
                            inventore magni voluptatibus repellat obcaecati impedit illo
                            exercitationem!
                        </h6>
                    </div>
                    <div class="logicielIcon">
                        <li>
                            <h5>logi</h5>
                            <h5>logi</h5>
                            <h5>logi</h5>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>
<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets 
?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- Affiche le footer -->
<?php get_footer() ?>
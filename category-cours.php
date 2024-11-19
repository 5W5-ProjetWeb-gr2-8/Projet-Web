<?php
// Appelle le fichier header.php
get_header();
?>

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
<div class="cours-box">
        <div class="nomDuCours">
            <?php
                // La requête pour affiche les noms des cours
                // FONCTIONNE PAS CORRECTEMENT //
                $the_query = new WP_Query( [ 
                    'post_type' => 'post', 
                    'category_name' => 'cours', // catégorie: cours
                    'category_and' => '7' // catégorie: session 1
                    ]);

                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
            <?php
                //formatage du titre
                $title = get_the_title();
                $titleLen = stripos($title, "(");
                $titre = substr($title, 8, $titleLen-9);
                $codeCours = substr($title, 0, 7);
            ?>
            <div class="alignementTextIcon">
                <h5><?= $titre ?></h5>
                <button class="btn-cours">
                    <!-- Dynamiser avec ACF -->
                    <img id="iconCours" src="<?php echo wp_get_attachment_url(312); ?>" alt="Logo Video" />

                </button>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="cours-boxes">
            <?php
            // La requête pour le nom et le contenu d'un cours
            $the_query = new WP_Query( [ 
                'post_type' => 'post',
                'category_name' => 'cours',
                'posts_per_page' => 2
                ]);

                /* Restore original Post Data */
                wp_reset_postdata();

            ?>
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
            <?php
                // formatage contenu
                $content = get_the_content();
                $conLen = stripos($content, "-");
                $contenu = substr($content, 0, $conLen-2); // pas 100% fonctionnel
            ?>
            <div class="leCours">
                <h2><?= $titre ?></h2>
                <h4><?= $codeCours ?></h4>
                <div class="tempParCours">
                    <ol>
                        <h6>3h Theorie</h6> <!--dynamiser-->
                        <h6>2h pratique</h6> <!--dynamiser-->
                        <h6>3h A la maison</h6> <!--dynamiser-->
                    </ol>
                </div>
                <div class="Description">
                    <h6><?= $contenu ?></h6>
                </div>
                <div class="logicielIcon">
                    <!--dynamiser avec ACF-->
                    <li>
                        <h5>logi</h5>
                        <h5>logi</h5>
                        <h5>logi</h5>
                    </li>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets 
?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- Affiche le footer -->
<?php get_footer() ?>
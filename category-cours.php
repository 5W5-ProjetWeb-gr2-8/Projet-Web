<?php
// Appelle le fichier header.php
get_header();
// Importe et décode le fichier svg.json 
$svgJson = file_get_contents(__DIR__ . '/js/svg.json');
$svg = json_decode($svgJson, true);
?>

<!-- Section SESSION 1 à 6 avec boutons dynamiques -->
<section class="sessions_conteneur">
    <h1 class="titre_cours">Nos cours offerts</h1>
    <div class="session-container">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <button class="session animation-session-<?php echo $i; ?>" data-session="session-<?php echo $i; ?>">Session <?php echo $i; ?></button>
        <?php endfor; ?>
    </div>
</section>

<!-- Section des cours -->
<section class="cours-section" id="cours">
    <div class="cours-box">
        <?php
            // La requête pour affiche les noms des cours
            /* Restore original Post Data */
            wp_reset_postdata();
            // FONCTIONNE PAS CORRECTEMENT //
            $the_query = new WP_Query( [ 
                'post_type' => 'post', 
                'category_name' => 'session1' // catégorie: session1
            ]);
        ?>
        <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <?php
                    //formatage du titre
                    $title = get_the_title();
                    $titleLen = stripos($title, "(");
                    $titre = substr($title, 8, $titleLen-9);
                    $codeCours = substr($title, 0, 7);
                ?>
        <div class=nomDuCours>
            <div class="alignementTextIcon">
                <h5><?= $titre ?></h5>
                <h5><?php the_field('video') ?></h5>
                <button class="btn-cours">
                    <!-- Dynamiser avec ACF -->
                     <?= $svg["video"] ?>
                    
                </button>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="cours-boxes">
        <?php
            /* Restore original Post Data */
            wp_reset_postdata();
            // La requête pour le nom et le contenu d'un cours
            $the_query2 = new WP_Query( [ 
                'post_type' => 'post',
                'category_name' => 'cours, session1',
                'posts_per_page' => 1, //nb de post affichés
				'p' => 9 //id post
                ]);
        ?>
        <?php if ($the_query2->have_posts()): ?>
        <?php while ($the_query2->have_posts()): $the_query2->the_post(); ?>
        <?php
            // formatage contenu
            $content = get_the_content();
            $conLen = stripos($content, "-");
            $contenu = substr($content, 0, $conLen-2); // pas 100% fonctionnel

            //formatage du titre
            $title = get_the_title();
            $titleLen = stripos($title, "(");
            $titre = substr($title, 8, $titleLen-9);
            $codeCours = substr($title, 0, 7);
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
</section>
<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets 
?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- Affiche le footer -->
<?php get_footer() ?>
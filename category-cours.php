<?php
// Appelle le fichier header.php
get_header();
// Importe et décode le fichier svg.json 
$svgJson = file_get_contents(__DIR__ . '/js/svg.json');
$svg = json_decode($svgJson, true);
//Tableau pour enregistrer les ids des posts
$idCours = [];
$domaine = "";
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
    <!-- Liste de cours -->
    <div class="cours-box">
        <?php
        // Requête
        // reset
        wp_reset_postdata();
        // parametres url
        $session = $_GET['session'] ?? '1';
        // parametres requête
        $the_query = new WP_Query([
            'post_type' => 'post',
            'category_name' => 'session' . $session, // variable à ajouter
            'orderby' => 'name', // tri par nom
            'order' => 'ASC' // nom ascendant
        ]);
        // Boucle
        if ($the_query->have_posts()):
            while ($the_query->have_posts()): $the_query->the_post();
                // Formatage du titre
                $title = get_the_title();
                $titleLen = stripos($title, "(");
                $titre = substr($title, 8, $titleLen - 9);
                $codeCours = substr($title, 0, 7);
                //id posts
                $idPost = get_the_ID();
                array_push($idCours, $idPost);
                $domaine = get_field('domaine');
        ?>
                <div class=nomDuCours>
                    <div class="alignementTextIcon">
                        <h5><?= $titre ?></h5>
                        <button class="btn-cours" id="<?= $domaine ?>" aria-label="<?= $domaine ?>">
                            <!-- svg dynamique -->
                            <?= $svg[get_field('domaine')] ?>
                        </button>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php
    // Requête
    // reset
    wp_reset_postdata();
    // parametres url
    $session = $_GET['session'] ?? '1';
    $idp = isset($_GET['cours']) && $_GET['cours'] ? $idCours[$_GET['cours']] : $idCours[0];
    // Parametres requête
    $the_query2 = new WP_Query([
        'post_type' => 'post',
        'category_name' => $session, //combientième session?
        'posts_per_page' => 1, //nb de post affichés
        'p' => $idp //id post
    ]);
    // Boucle
    if ($the_query2->have_posts()):
        while ($the_query2->have_posts()): $the_query2->the_post();
            //formatage du titre
            $title = get_the_title();
            $titleLen = stripos($title, "(");
            $titre = substr($title, 8, $titleLen - 9);
            $codeCours = substr($title, 0, 7);
            // formatage contenu
            $contenu = get_the_content();
            $heures = explode("-", get_field('ponderation'));
            $prea = get_field('prealables');
            $domaine = get_field('domaine');
    ?>
            <!-- Affiche 1 cours en détail -->
            <div class="cours-boxes" id="<?= $domaine ?>">
                <div class="leCours" id="<?= $domaine ?>">
                    <h2><?= $titre ?></h2>
                    <h4><?= $codeCours ?></h4>
                    <h4 class="prealables">Préalables: <?= $prea; ?></h4>
                    <div class="tempParCours">
                        <ol>
                            <h6><?= $heures[0]; ?>h Theorie</h6>
                            <h6><?= $heures[1]; ?>h pratique</h6>
                            <h6><?= $heures[2]; ?>h A la maison</h6>
                        </ol>
                    </div>
                    <div class="Description">
                        <h6><?= $contenu ?></h6>
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

<!-- fichier js de la page cours -->
<script src="<?php echo get_template_directory_uri(); ?>/js/cours.js"></script>

<!-- Affiche le footer -->
<?php get_footer() ?>
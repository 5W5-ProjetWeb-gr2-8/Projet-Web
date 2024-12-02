<?php
// Appelle le fichier header.php
get_header();
?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal">
    <!-- Contenu de la page //////////////////////////////////////////////////////// -->
    <section class="galerie_projet">
        <!-- Titre de la page -->
        <h1 class="titre_galerie">Galerie projets étudiants</h1>
        <!-- Conteneur des differents filtres de la page ////////////// -->
        <div class="conteneur_section_filtres">
            <!-- Section qui a les filtres ///////////// -->
            <div class="section_filtres">
                <!-- Titre de la section qui a les filtres -->
                <p class="titre_section_filtre">Filtrer :</p>
                <!-- Les differents filtres ////////////////////// -->
                <div class="les_filtres">
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="UI">
                        <label for="UI" class="filtre filtre_ui bordure_ui hover_ui">Design</label>
                    </div>
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="WEB">
                        <label for="WEB" class="filtre filtre_web bordure_web hover_web">Programmation</label>
                    </div>
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="3D">
                        <label for="3D" class="filtre filtre_3d bordure_3d hover_3d">Création</label>
                    </div>
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="JEU">
                        <label for="JEU" class="filtre filtre_jeu bordure_jeu hover_jeu">Jeux</label>
                    </div>
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="VIDEO">
                        <label for="VIDEO" class="filtre filtre_video bordure_video hover_video">Montage</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section qui montre les differents projets//////////////////////////////////////////////////////////////// -->
        <div class="section_galerie">
            <?php
            // Requête pour récupérer les articles de la catégorie "projets"
            $the_query = new WP_Query([
                'post_type' => 'post',       // Type de contenu : articles
                'category_name' => 'projets' // Catégorie : projets
            ]);

            // Vérification de la présence des articles
            if ($the_query->have_posts()):
                while ($the_query->have_posts()): $the_query->the_post();

                    // Récupérer les champs personnalisés et les données nécessaires
                    $filtre = get_field('filtre_classe'); // Classe de filtre (champ personnalisé)
                    $idp = get_the_ID(); // ID de l'article

                    // Récupérer l'URL du thumbnail
                    $thumbnail_url = get_the_post_thumbnail_url($idp, 'full'); // 'full' pour la taille complète
            ?>
                    <div class="conteneur_projet">
                        <div class="projet_galerie">
                            <div class="projet_image">
                                <!-- Lien cliquable vers l'article -->
                                <a href="<?= "https://gftnth00.mywhc.ca/tim52/category/projet/?idp=" . $idp; ?>">
                                    <!-- Affichage de l'image seulement si le thumbnail existe -->
                                    <?php if ($thumbnail_url): ?>
                                        <img class="img_galerie" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="projet_filtre <?= "gal_proj_" . esc_attr($filtre); ?>"></div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;

            // Réinitialiser les données de la requête principale
            wp_reset_postdata();
            ?>
        </div>
        <!-- Fin section ////////////////////// -->
    </section>
</main>
<!-- Fin du contenu de la page ///////////////////////////////////////////////// -->

<!-- FAQ //////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- Inclure les fichiers JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/galerie.js"></script>

<!-- Affiche le footer -->
<?php get_footer(); ?>
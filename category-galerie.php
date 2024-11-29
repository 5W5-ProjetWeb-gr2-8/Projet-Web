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
                <h3 class="titre_section_filtre">Filtrer :</h3>
                <!-- Les differents filtres ////////////////////// -->
                <div class="les_filtres">
                    <!-- Filtre 1 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="UI"><!-- Checkbox pour pouvoir changer l'état du filtre -->
                        <label for="UI" class="filtre filtre_ui bordure_ui hover_ui">Design</label>
                    </div>
                    <!-- Filtre 2 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="WEB"><!-- Checkbox pour pouvoir changer l'état du filtre -->
                        <label for="WEB" class="filtre filtre_web bordure_web hover_web">Programmation</label>
                    </div>
                    <!-- Filtre 3 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="3D"><!-- Checkbox pour pouvoir changer l'état du filtre -->
                        <label for="3D" class="filtre filtre_3d bordure_3d hover_3d">Création</label>
                    </div>
                    <!-- Filtre 4 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="JEU"><!-- Checkbox pour pouvoir changer l'état du filtre -->
                        <label for="JEU" class="filtre filtre_jeu bordure_jeu hover_jeu">Jeux</label>
                    </div>
                    <!-- Filtre 5 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="VIDEO"><!-- Checkbox pour pouvoir changer l'état du filtre -->
                        <label for="VIDEO" class="filtre filtre_video bordure_video hover_video">Montage</label>
                    </div>
                    <!-- Fin des differents filtres ///////////////-->
                </div>
                <!-- Fin de la section qui a les filtres /////////////////-->
            </div>
            <!-- Fin du conteneur des différents filtres /////////////////////////////// -->
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
                    $idIMG = get_field('id_image_wordpress'); // ID de l'image personnalisée (ACF ou autre)
                    $filtre = get_field('filtre_classe');    // Classe de filtre (champ personnalisé)
                    $projet_url = get_permalink();          // URL de l'article
            ?>
                    <div class="conteneur_projet">
                        <div class="projet_galerie">
                            <div class="projet_image">
                                <!-- Lien cliquable vers l'article -->
                                <a href="<?php echo esc_url($projet_url); ?>">
                                    <!-- Affichage de l'image -->
                                    <img class="img_galerie" src="<?php echo esc_url(wp_get_attachment_url($idIMG)); ?>" alt="<?php the_title_attribute(); ?>">
                                </a>
                            </div>
                            <div class="projet_filtre <?php echo esc_attr($filtre); ?>"></div>
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
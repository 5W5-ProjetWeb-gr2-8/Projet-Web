<?php
// Appelle le fichier header.php
get_header();
?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal">
    <!-- Contenu de la page //////////////////////////////////////////////////////// -->
    <section class="galerie_projet">
        <!-- Titre de la page -->
        <h2 class="titre_galerie">Galerie projets étudiants</h2>
        <!-- Conteneur des differents filtres de la page ////////////// -->
        <div class="conteneur_section_filtres">
            <!-- Section qui a les filtres ///////////// -->
            <div class="section_filtres">
                <!-- Titre de la section qui a les filtres -->
                <p class="titre_section_filtre">Filtre:</p>
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
            // Tableau associatif contenant les IDs d'images et leurs classes de filtre
            // Il faut faire un loop pour que sa soit automatique
            $projets = [
                ['id' => 240, 'filtre_classe' => 'gal_proj_web', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/projet_web/'],
                ['id' => 66, 'filtre_classe' => 'gal_proj_jeu', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/projet_tryptique/'],
                ['id' => 248, 'filtre_classe' => 'gal_proj_3d', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/projet_vehicule/'],
                ['id' => 64, 'filtre_classe' => 'gal_proj_jeu', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/projet_lacryma/'],
                ['id' => 207, 'filtre_classe' => 'gal_proj_video', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/projet_souffle/'],
                ['id' => 195, 'filtre_classe' => 'gal_proj_ui', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/ui/'],
                ['id' => 206, 'filtre_classe' => 'gal_proj_video', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/projet_rlyeh/'],
                ['id' => 201, 'filtre_classe' => 'gal_proj_web', 'url' => 'https://gftnth00.mywhc.ca/tim52/category/web/'],
            ];

            // Boucle pour afficher chaque projet
            foreach ($projets as $projet) :
                // Récupérer l'URL de l'image avec wp_get_attachment_url()
                $image_url = wp_get_attachment_url($projet['id']);
            ?>
                <div class="conteneur_projet">
                    <div class="projet_galerie">
                        <div class="projet_image">
                            <!-- Afficher l'image en utilisant l'URL récupérée -->
                            <a href="<?php echo esc_url($projet['url']); ?>">
                                <img class="img_galerie" src="<?php echo esc_url($image_url); ?>" alt="Projet">
                            </a>
                        </div>
                        <div class="projet_filtre <?php echo esc_attr($projet['filtre_classe']); ?>"></div>
                    </div>
                </div>
            <?php endforeach; ?>
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
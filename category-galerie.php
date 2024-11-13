<?php
// Appelle le fichier header.php
get_header();
// // Importe et décode le fichier svg.json 
// $svgJson = file_get_contents(__DIR__ . '/js/svg.json');
// $svg = json_decode($svgJson, true);
// // Importe et décode le fichier texte.json 
// $texteJson = file_get_contents(__DIR__ . '/js/texte.json');
// $texte = json_decode($texteJson, true);
// $_comp = $texte["competences"];
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
                        <input type="checkbox" id="UI/UX"><!-- Checkbox pour pouvoir changer letat du filtre -->
                        <label for="UI/UX" class="filtre filtre_ui">UI/UX</label>
                    </div>
                    <!-- Filtre 2 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="WEB"><!-- Checkbox pour pouvoir changer letat du filtre -->
                        <label for="WEB" class="filtre filtre_web">WEB</label>
                    </div>
                    <!-- Filtre 3 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="3D"><!-- Checkbox pour pouvoir changer letat du filtre -->
                        <label for="3D" class="filtre filtre_3d">3D</label>
                    </div>
                    <!-- Filtre 4 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="JEU"><!-- Checkbox pour pouvoir changer letat du filtre -->
                        <label for="JEU" class="filtre filtre_jeu">JEU</label>
                    </div>
                    <!-- Filtre 5 ///////////// -->
                    <div class="conteneur_filtre">
                        <input type="checkbox" id="VIDEO"><!-- Checkbox pour pouvoir changer letat du filtre -->
                        <label for="VIDEO" class="filtre filtre_video">VIDEO</label>
                    </div>
                    <!-- Fin des differents filtres ///////////////-->
                </div>
                <!-- Fin de la section qui a les filtres /////////////////-->
            </div>
            <!-- Fin du conteneur des différents filtres /////////////////////////////// -->
        </div>

        <!-- Section qui montre les differents projets//////////////////////////////////////////////////////////////// -->
        <div class="section_galerie">
            <!-- Les differents projets ///////////////////-->
            <!-- Exemple projet 1 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_web">
                </div>
            </div>
            <!-- Exemple projet 2 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_jeu">
                </div>
            </div>
            <!-- Exemple projet 3 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_3d">
                </div>
            </div>
            <!-- Exemple projet 4 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_ui">
                </div>
            </div>
            <!-- Exemple projet 5 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_video">
                </div>
            </div>
            <!-- Exemple projet 6 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_ui">
                </div>
            </div>
            <!-- Exemple projet 7 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_video">
                </div>
            </div>
            <!-- Exemple projet 8 -->
            <div class="conteneur_projet">
                <div class="projet_galerie">
                    <p class="projet_image">
                    <p class="projet_filtre gal_proj_ui">
                </div>
            </div>
            <!-- Fin section ////////////////////// -->
        </div>
    </section>
</main>
<!-- Fin du contenu de la page ///////////////////////////////////////////////// -->

<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets ?>
<!-- FAQ //////////////////////////////////////////////////////////////////////// -->
<?php get_template_part('template', 'faq'); ?>

<!-- Affiche le footer -->
<?php get_footer() ?>
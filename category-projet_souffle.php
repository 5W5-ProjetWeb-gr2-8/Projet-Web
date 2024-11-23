<?php
// Appelle le fichier header.php
get_header();

?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal_specifique">
  <section class="presPro" id="projet_specifique">
    <a href="" class="conteneur_fleche">
      <div class="fleche_projet"></div>
    </a>

    <div class="fond_projet">
      <!-- Contenu du projet -->
      <div class="contenu_projet">
        <!-- Image en haut à gauche -->
        <div class="image_projet">
          <img class="video_bordure" src="<?php echo wp_get_attachment_url(207); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <h1 class="titre_projet video_titre">Souffle Court</h1>
          <p class="type_projet"><b class="video_gras">Domaine :</b> Vidéo</p>
          <p class="cours_projet"><b class="video_gras">Cours :</b> 582-2M3-MA - Effets spéciaux et animation</p>
          <p class="auteurs_projet"><b class="video_gras">Auteur :</b> Nicolas Carrière</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans le cadre du cours Effets Spéciaux et Animation, ce projet a été réalisé pour apprendre
          les bases de l'environnement 3D et le mouvement des images 2D. L'<b class="video_gras">animation</b> raconte l'histoire
          d'un monde en <b class="video_gras">guerre</b>, où des soldats bombardent une ville et des personnes <b class="video_gras">pleurent</b> la destruction
          autour d'elles. L'étudiant souhaite rendre hommage à toutes les <b class="video_gras">victimes</b> de
          la guerre en Ukraine.
        </p>
      </div>
    </div>
  </section>

  <!-- Galerie de Projets -->
  <section class="galerie_projets">
    <div class="conteneur_galerie">
      <?php
      // Ajouté le ID de l'image ici
      $projets = [
        ['id' => 590,],
        ['id' => 591,],
        ['id' => 592,],
        ['id' => 593,],
        ['id' => 594,],
        ['id' => 595,],
      ];

      foreach ($projets as $projet) {
        $image_url = wp_get_attachment_url($projet['id']);
        echo "
        <div class='projet_item'>
          <img src='{$image_url}' alt='Projet' class='image_projet_galerie video_bordure'>
        </div>";
      }
      ?>
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
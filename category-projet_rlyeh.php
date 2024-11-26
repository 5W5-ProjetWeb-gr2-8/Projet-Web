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
          <img class="video_bordure" src="<?php echo wp_get_attachment_url(206); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <h1 class="titre_projet video_titre">R'lyeh</h1>
          <p class="type_projet"><b class="video_gras">Domaine :</b> Vidéo</p>
          <p class="cours_projet"><b class="video_gras">Cours :</b> 582-2M3-MA - Effets spéciaux et animation</p>
          <p class="auteurs_projet"><b class="video_gras">Auteur :</b> Vincent Genest</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans le cours Effets Spéciaux et Animation en TIM, Vincent Genest a créé <b class="video_gras">R'lyeh</b>,
          un concept de jeu animé avec <b class="video_gras">After Effects</b> à partir de dessins sur <b class="video_gras">Illustrator</b>.
          La vidéo suit un naufragé explorant une forêt sombre, découvrant une mine, puis
          affrontant un <b class="video_gras">énorme monstre</b>. Ce projet illustre l'<b class="video_gras">imagination</b> de Vincent
          et son talent en animation et création visuelle.
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
        ['id' => 603,],
        ['id' => 604,],
        ['id' => 605,],
        ['id' => 598,],
        ['id' => 599,],
        ['id' => 600,],
        ['id' => 601,],
        ['id' => 602,],
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
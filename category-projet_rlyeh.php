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
          Dans le cadre du cours Effets Spéciaux et Animation en <b class="video_gras">TIM</b>, Vincent Genest a créé
          un <b class="video_gras">concept de jeu</b> original. Il a utilisé des dessins faits sur <b class="video_gras">Illustrator</b> et les
          a animés avec <b class="video_gras">After Effects</b> pour donner vie à son idée. La vidéo raconte l'histoire
          d'un homme dont le bateau se brise pendant une tempête. Il se réveille sur une plage et
          commence à explorer une forêt sombre et <b class="video_gras">effrayante</b>, avec des arbres morts et un ciel de nuit.
          En passant près d'un feu de camp, il trouve une mine et y entre. Là, il se retrouve face à un énorme monstre.
          La vidéo se termine avec le titre du jeu : <b class="video_gras">R'lyeh</b>. Ce projet montre l'imagination de
          Vincent et ses talents en animation et en création visuelle.
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
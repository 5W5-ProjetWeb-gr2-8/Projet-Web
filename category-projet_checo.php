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
          <img class="video_bordure" src="<?php echo wp_get_attachment_url(617); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <div class="espacement_fleche_titre">
            <h1 class="titre_projet video_titre">Chéco</h1>
            <a href="https://gftnth00.mywhc.ca/tim52/category/galerie/" class="conteneur_fleche">
              <div class="fleche_projet"></div>
            </a>
          </div>
          <p class="type_projet"><b class="video_gras">Domaine :</b> Vidéo</p>
          <p class="cours_projet"><b class="video_gras">Cours :</b> 582-2M3-MA - Effets spéciaux et animation</p>
          <p class="auteurs_projet"><b class="video_gras">Autrice :</b> Maëlle Léger</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans le cours Effets Spéciaux et Animation, Maëlle Léger, étudiante en <b class="video_gras">TIM</b>,
          a créé une <b class="video_gras">bande-annonce animée</b> pour son jeu vidéo. Elle met en scène <b class="video_gras">Chéco</b>,
          un chat gris avec un <b class="video_gras">foulard rouge</b>, sauvant le monde de la <b class="video_gras">pollution</b>. Les
          niveaux incluent une usine, une centrale nucléaire et un <b class="video_gras">boss final</b>, une
          machine métallique. Ce projet reflète l'imagination de Maëlle et son engagement pour l'<b class="video_gras">environnement</b>.
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
        ['id' => 624,],
        ['id' => 625,],
        ['id' => 626,],
        ['id' => 618,],
        ['id' => 619,],
        ['id' => 620,],
        ['id' => 621,],
        ['id' => 622,],
        ['id' => 623,],
        ['id' => 627,],
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
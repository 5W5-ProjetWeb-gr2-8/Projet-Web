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
          <img class="programmation_bordure" src="<?php echo wp_get_attachment_url(240); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <h1 class="titre_projet programmation_titre">Projet Web</h1>
          <p class="type_projet"><b class="programmation_gras">Type :</b> Programmation</p>
          <p class="cours_projet"><b class="programmation_gras">Cours :</b> 582-5W5-MA Projet web en équipe</p>
          <p class="auteurs_projet"><b class="programmation_gras">Auteurs :</b> Chloé Blanchette, Rafael Chew-Côté,
            Sacha-Alexandre Collard-Legault, Tien Tien Bill Truong</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans le cadre du cours de projet web en équipe, les finissants en <b class="programmation_gras">TIM</b> ont proposé une refonte
          du site du département. De l'analyse des besoins, à la création de médias, de maquettes jusqu'à
          la réalisation de leurs sites Web adaptatif de leurs sites Web adaptatifs à l'aide de WordPress,
          HTML/CSS, PHP, JavaScript, et React.
        </p>
      </div>
    </div>
  </section>

  <!-- Galerie de Projets -->
  <section class="galerie_projets">
    <h2 class="titre_galerie">Galerie de Projets</h2>
    <div class="conteneur_galerie">
      <?php
      // Ajouté le ID de l'image ici
      $projets = [
        ['id' => 535,],
        ['id' => 536,],
      ];

      foreach ($projets as $projet) {
        $image_url = wp_get_attachment_url($projet['id']);
        echo "
        <div class='projet_item'>
          <img src='{$image_url}' alt='Projet' class='image_projet_galerie programmation_bordure'>
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
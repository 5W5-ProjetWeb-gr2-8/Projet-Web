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
          <img class="creation_bordure" src="<?php echo wp_get_attachment_url(248); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <h1 class="titre_projet creation_titre">Réalisation 3D</h1>
          <p class="type_projet"><b class="creation_gras">Domaine :</b> Création 3D</p>
          <p class="cours_projet"><b class="creation_gras">Cours :</b> 582-3M5-MA Imagerie 3D</p>
          <p class="auteurs_projet"><b class="creation_gras">Auteur :</b> Nicolas Carrière</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans le cadre du cours d'<b class="creation_gras">Imagerie 3D</b>, l'étudiant a conçu une civilisation imaginaire.
          Pour cette partie du projet, il a créé un véhicule <b class="creation_gras">3D</b> inspiré des mouvements d'un animal,
          avec l'objectif qu'il soit simple et adapté aux ressources de l'environnement. Le projet mettait en scène les Djindalis,
          un peuple nomade qui utilise le sable comme source d'énergie. Le véhicule, nommé le <b class="creation_gras">Zandslide</b>, s'inspire du serpent du désert
          pour se déplacer facilement sur le sable. Fabriqué à partir de matériaux locaux, il reflète le mode de vie simple et économique
          des Djindalis.
        </p>
      </div>
    </div>
  </section>

  <!-- Galerie de Projets -->
  <section class=" galerie_projets">
    <div class="conteneur_galerie">
      <?php
      // Ajouté le ID de l'image ici
      $projets = [
        ['id' => 570,],
        ['id' => 569,],
        ['id' => 568,],
        ['id' => 567,],
        ['id' => 571,],
        ['id' => 572,],
      ];

      foreach ($projets as $projet) {
        $image_url = wp_get_attachment_url($projet['id']);
        echo "
        <div class='projet_item'>
          <img src='{$image_url}' alt='Projet' class='image_projet_galerie creation_bordure'>
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
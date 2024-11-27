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
          <div class="espacement_fleche_titre">
            <h1 class="titre_projet creation_titre">Réalisation 3D</h1>
            <a href="https://gftnth00.mywhc.ca/tim52/category/galerie/" class="conteneur_fleche">
              <div class="fleche_projet"></div>
            </a>
          </div>
          <p class="type_projet"><b class="creation_gras">Domaine :</b> Création 3D</p>
          <p class="cours_projet"><b class="creation_gras">Cours :</b> 582-3M5-MA - Imagerie 3D</p>
          <p class="auteurs_projet"><b class="creation_gras">Auteur :</b> Nicolas Carrière</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans le cours d'Imagerie 3D, l'étudiant a conçu une <b class="creation_gras">civilisation imaginaire</b>. Il a créé le <b class="creation_gras">Zandslide</b>,
          un <b class="creation_gras">véhicule 3D</b> inspiré du serpent du <b class="creation_gras">désert</b>, conçu pour glisser sur le sable. Utilisant des matériaux locaux,
          il reflète le mode de vie simple des <b class="creation_gras">Djindalis</b>, un peuple nomade qui puise l'énergie du sable.
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
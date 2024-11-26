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
          <img class="jeux_bordure" src="<?php echo wp_get_attachment_url(64); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <h1 class="titre_projet jeux_titre">Lacryma</h1>
          <p class="type_projet"><b class="jeux_gras">Domaine :</b> Jeu 3D</p>
          <p class="cours_projet"><b class="jeux_gras">Cours :</b> 360-4J4-MA - Création de jeu en équipe</p>
          <p class="auteurs_projet"><b class="jeux_gras">Auteurs :</b> Yannick Bastien, Raymond Beauregard-Casavant, Marguerite Demontigny, James Ling, Anastasia Poissant Ross</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          La planète, vidée de ses ressources, n'est plus qu'un désert aride. <b class="jeux_gras">Aurora</b>, souffrante, quitte sa ville pour chercher de <b class="jeux_gras">l'eau potable</b>,
          vitale pour les derniers survivants. Dans le désert, elle croise <b class="jeux_gras">Ignatia</b>, d'un groupe rival, et doit collaborer avec elle. Ensemble,
          elles affrontent les dangers des ruines où Fonticusto, gardien de la <b class="jeux_gras">source d'eau</b>, les attend. Leur quête décidera du sort de leur cité.
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
        ['id' => 581,],
        ['id' => 580,],
        ['id' => 579,],
        ['id' => 578,],
        ['id' => 577,],
        ['id' => 576,],
        ['id' => 575,],
        ['id' => 586,],
        ['id' => 585,],
        ['id' => 582,],
        ['id' => 584,],
        ['id' => 583,],
      ];

      foreach ($projets as $projet) {
        $image_url = wp_get_attachment_url($projet['id']);
        echo "
        <div class='projet_item'>
          <img src='{$image_url}' alt='Projet' class='image_projet_galerie jeux_bordure'>
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
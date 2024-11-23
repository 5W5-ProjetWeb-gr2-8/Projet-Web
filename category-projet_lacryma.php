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
          <p class="cours_projet"><b class="jeux_gras">Cours :</b> 360-4J4-MA Création de jeu en équipe</p>
          <p class="auteurs_projet"><b class="jeux_gras">Auteurs :</b> Yannick Bastien, Raymond Beauregard-Casavant, Marguerite Demontigny, James Ling, Anastasia Poissant Ross</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          La planète n'est plus l'endroit qu'elle était. Ses habitants, avides de nouvelles technologies
          ont utilisé les ressources mises à leur disposition jusqu'à épuisement. Maintenant recouverte
          d'un immense désert, la planète n'est plus propice pour ses habitants qui ont de la difficulté à survivre.
          Plusieurs rassemblements se sont formés parmi les survivants, chacun totalement indépendant des autres et
          évitant tout contact avec ces derniers. Une des <b class="jeux_gras">villes</b> contenant la plus grande concentration d'humains
          restant à de la difficulté à trouver de <b class="jeux_gras">l'eau potable</b> pour ses habitants. Épuisée de voir autant de malade
          dans sa ville et étant elle-même souffrante, <b class="jeux_gras">Aurora</b> décide d'affronter l'aridité du désert à la recherche d'une
          <b class="jeux_gras">source d'eau</b> afin d'alimenter la cité. Dans la zone désolée, elle rencontre <b class="jeux_gras">Ignatia</b>, une citoyenne d'un rassemblement
          ennemi et sera obligée de collaborer avec celle-ci pour réussir son objectif. Par la suite,
          elles arriveront dans les <b class="jeux_gras">ruines</b> où elles seront confrontées à Fonticusto qui garde la source d'eau.
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
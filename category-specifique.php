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
          <img class="jeux_bordure" src="<?php echo wp_get_attachment_url(66); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <h1 class="titre_projet jeux_titre">Tryptique</h1>
          <p class="type_projet"><b class="jeux_gras">Type :</b> Jeu 3D</p>
          <p class="cours_projet"><b class="jeux_gras">Cours :</b> 360-4J4-MA Création de jeu en équipe</p>
          <p class="auteurs_projet"><b class="jeux_gras">Auteurs :</b> Dylan Carle, Eloi Yuri Chayer, Clovis Gauthier, Vincent Genest,</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Le jeu raconte l'histoire de Mathieu, un jeune artiste avec une enfance difficile, piégé dans ses cauchemars
          sous forme d'une galerie d'art. Pour s'échapper, il doit finir son chef-d'œuvre, un tableau en trois
          parties : son triptyque. Mais la tâche est plus compliquée que prévu : plus il avance dans son rêve,
          plus la réalité devient étrange. Il devra affronter ses peurs pour s'en sortir.
        </p>
      </div>
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
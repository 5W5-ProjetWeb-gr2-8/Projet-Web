<?php
// Appelle le fichier header.php
get_header();

// $idp = $_GET['idp']  ? $idCours[$_GET['cours']] : $idCours[0];

// Requête pour récupérer les articles de la catégorie "projets"
$the_query3 = new WP_Query([
  'post_type' => 'post',       // Type de contenu : articles
  'category_name' => 'projets', // Catégorie : projets
  'p' => "762" //id post
]);

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
          <img class="jeux_bordure" src="<?php echo wp_get_attachment_url(688); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <div class="espacement_fleche_titre">
            <h1 class="titre_projet jeux_titre">Inserxion</h1>
            <a href="https://gftnth00.mywhc.ca/tim52/category/galerie/" class="conteneur_fleche">
              <div class="fleche_projet"></div>
            </a>
          </div>
          <p class="type_projet"><b class="jeux_gras">Domaine :</b> Jeu 3D</p>
          <p class="cours_projet"><b class="jeux_gras">Cours :</b> 360-4J4-MA - Création de jeu en équipe</p>
          <p class="auteurs_projet"><b class="jeux_gras">Auteurs :</b> Syphax Mokraoui, Lenny Tran, Julian Ibanez, Michael-Ali Soeu</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans un <b class="jeux_gras">monde</b> contrôlé par l'armée, le <b class="jeux_gras">Groupe de Libération Nationale</b> (GLN) <b class="jeux_gras">lutte contre la corruption</b>.
          Tyrise Jack, un cadet, vit des simulations <b class="jeux_gras">hallucinantes</b> à cause du programme A.C.R.A. du CSS, tandis que des hackers
          cherchent à transmettre un message <b class="jeux_gras"><b class="jeux_gras"></b></b>, remettant en question la société militaire. <b class="jeux_gras">Tyrise</b> se retrouve pris dans une boucle de folie
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
        ['id' => 679,],
        ['id' => 678,],
        ['id' => 680,],
        ['id' => 690,],
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
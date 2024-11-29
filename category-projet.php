<?php
// Appelle le fichier header.php
get_header();

$idp = $_GET['idp'] ?? '762';

// Requête pour récupérer les articles de la catégorie "projets"
$the_query = new WP_Query([
  'post_type' => 'post',       // Type de contenu : articles
  'category_name' => 'projets', // Catégorie : projets
  'p' => $idp //id post
]);

?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal_specifique">
  <section class="presPro" id="projet_specifique">
    <a href="" class="conteneur_fleche">
      <div class="fleche_projet"></div>
    </a>

    <?php
    // Vérification de la présence des articles
    if ($the_query->have_posts()):
      while ($the_query->have_posts()): $the_query->the_post();

        // Récupérer les champs personnalisés et les données nécessaires
        $idIMG = get_field('id_image_wordpress'); // ID de l'image personnalisée (ACF ou autre)
        $domaine = get_field('domaine');
        $auteur = get_field('auteur_du_projet');
        $cours = get_field('cours');


    ?>
        <div class="fond_projet">
          <!-- Contenu du projet -->
          <div class="contenu_projet">
            <!-- Image en haut à gauche -->
            <div class="image_projet">
              <img class="jeux_bordure" src="<?php echo wp_get_attachment_url($idIMG); ?>" alt="<?php the_title() ?>">
            </div>

            <!-- Informations à droite -->
            <div class="details_projet">
              <div class="espacement_fleche_titre">
                <h1 class="titre_projet jeux_titre"> <?php the_title() ?> </h1>
                <a href="https://gftnth00.mywhc.ca/tim52/category/galerie/" class="conteneur_fleche">
                  <div class="fleche_projet"></div>
                </a>
              </div>
              <p class="type_projet"><b class="jeux_gras">Domaine :</b> <?= $domaine ?></p>
              <p class="cours_projet"><b class="jeux_gras">Cours :</b> <?= $cours ?></p>
              <p class="auteurs_projet"><b class="jeux_gras">Auteurs :</b> <?= $auteur ?></p>
            </div>
          </div>

          <!-- Description en dessous -->
          <div class="description_projet">
            <?php the_content() ?>
          </div>
        </div>
    <?php
      endwhile;
    endif;

    // Réinitialiser les données de la requête principale
    wp_reset_postdata();
    ?>
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
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
        $domaine = get_field('domaine');
        $auteur = get_field('auteur_du_projet');
        $cours = get_field('cours');
        $classeProjet = get_field('filtre_classe');

    ?>
        <div class="fond_projet">
          <!-- Flèche de retour -->
          <a href="https://gftnth00.mywhc.ca/tim52/category/galerie/" class="conteneur_fleche">
              <div class="fleche_projet"></div>
              <h4>Retour</h4>
            </a>
          <!-- Contenu du projet -->
          <div class="contenu_projet">
            <!-- Image en haut à gauche -->
            <div class="image_projet">
              <?php
              // Vérifier si l'article a un thumbnail
              if (has_post_thumbnail()) {
                // Afficher le thumbnail de l'article
                the_post_thumbnail('full', ['class' => 'bordure_' . $classeProjet, 'alt' => get_the_title()]);
              }
              ?>
            </div>

            <!-- Informations à droite -->
            <div class="details_projet">
              <h1 class="titre_projet titre_<?= $classeProjet ?>"> <?php the_title() ?> </h1>
              <p class="type_projet"><b class="gras_<?= $classeProjet ?>">Domaine :</b> <?= $domaine ?></p>
              <p class="cours_projet"><b class="gras_<?= $classeProjet ?>">Cours :</b> <?= $cours ?></p>
              <p class="auteurs_projet"><b class="gras_<?= $classeProjet ?>">Auteurs :</b> <?= $auteur ?></p>
            </div>
          </div>

          <!-- Description en dessous -->
          <div class="description_projet">
          </div>
        </div>
        <?php the_content() ?> <!-- Ajout de la galerie et de la description par Wordpress avec l'éditeur Gutenberg -->
    <?php
      endwhile;
    endif;

    // Réinitialiser les données de la requête principale
    wp_reset_postdata();
    ?>
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
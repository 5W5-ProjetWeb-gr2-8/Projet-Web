<?php
// Appelle le fichier header.php
get_header();
// Importe et décode le fichier svg.json 
$svgJson = file_get_contents(__DIR__ . '/js/svg.json');
$svg = json_decode($svgJson, true);
// Importe et décode le fichier texte.json 
$texteJson = file_get_contents(__DIR__ . '/js/texte.json');
$texte = json_decode($texteJson, true);
$_comp = $texte["competences"];
?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal">
  <section class="debut_accueil">
    <div>
      <h6><?php bloginfo('description'); ?></h6>
      <h1><?php bloginfo('name'); ?></h1>
    </div>
  </section>
  <!-- Présentation Programme -->
  <section class="presPro">
    <h2>C'est quoi le <span>Multimédia ?</span></h2>
    <p><?= $texte["prespro"]; ?></p>
  </section>
  <!-- Compétences ///////////////////////////////////////////////////////////////////// -->
  <section class="competences">
    <?php foreach ($_comp as $nomComp => $comp): ?>
      <!-- Une compétence -->
      <div class="competence-item">
        <!-- Partie non pliable -->
        <div class="competence-header">
          <!-- button Ouverture et fermeture -->
          <button class="top-right-button">
            <?php
            // Initialise le compteur pour chaque compétence
            static $counter = 1;

            // Affiche l'élément svg en fonction du compteur
            if ($counter <= 5) {
              echo $svg["x" . $counter];
              $counter++; // Incrémente le compteur
            }
            ?>
          </button>
          <!-- Logo de la compétence -->
          <div class="logo">
            <!-- nom -->
            <h3><?= $comp["nom"]; ?></h3>
            <!-- cercle contour -->
            <div class="contour" id="<?= $nomComp; ?>">
              <!-- icone -->
              <?= $svg[$nomComp]; ?>
            </div>
          </div>
          <!-- Informations sur la compétence-->
          <div class="info">
            <!-- description -->
            <p><?= $comp["desc"]; ?></p>
            <!-- Outils -->
            <div class="outils">
              <?php foreach ($comp["outils"] as $nomOutil => $outil): ?>
                <div class="outil">
                  <!-- Logo logiciel -->
                  <?= $svg[$outil]; ?>
                  <!-- Nom logiciel -->
                  <h6><?= $nomOutil; ?></h6>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <!-- Partie dépliable -->
        <div class="competence-content">
          <!-- Boucle qui affiche tous les projets -->
          <?php
          // Tableau d'IDs des images depuis la bibliothèque de médias
          $projets_ids = array(64, 66, 63, 65, 62);
          foreach ($comp["projets"] as $projet => $srcProj):
          ?>
            <!-- un projet -->
            <article class="item">
              <!-- image du projet -->
              <div class="miniature inactif">
                <?php
                /////////
                // Récupérer l'URL, le titre, et l'attribut alt de l'image
                /////////
                // Utiliser des images 16:9 directement dans 
                // la médiathèque de wordpress puis mettre 
                // leur id dans le fichier json au bon endroit.
                /////////
                $image_url = wp_get_attachment_url($srcProj);
                $image_alt = get_post_meta($srcProj, '_wp_attachment_image_alt', true);
                $image_title = get_the_title($srcProj);
                ?>
                <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($image_alt); ?>"
                  title="<?= esc_attr($image_title); ?>" />
              </div>
              <!-- nom ou type du projet -->
              <h4><?= $projet; ?></h4>
            </article>
          <?php endforeach ?>
        </div>
      </div>
    <?php endforeach ?>
  </section>
</main>
<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets 
?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- fichier js juste pour l'accueil -->
<script src="<?php echo get_template_directory_uri(); ?>/js/button.js"></script>


<!-- Affiche le footer -->
<?php get_footer() ?>
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
        <?php foreach($_comp as $nomComp => $comp) :?>
          <!-- Une compétence -->
          <div class="competence-item">
            <!-- Partie non pliable -->
            <div class="competence-header">
              <!-- button Ouverture et fermeture -->
              <button class="top-right-button">
                <!-- L'animation fonctionne pas avec la référence -->
                <!-- <?= $svg["x"]; ?> -->
                <svg class="svg_1" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <ellipse
                      ry="30"
                      rx="30"
                      cy="31.25"
                      cx="31.25"
                      stroke-width="2.5"
                      stroke="#00000"
                      fill="transparent"
                    />
                    <ellipse
                      ry="30"
                      rx="30"
                      class="circle"
                      cy="31.25"
                      cx="31.25"
                      stroke-width="2.5"
                      stroke="red"
                      fill="transparent"
                    />
                    <line
                      class="x-symbol"
                      x1="16.25"
                      y1="16.25"
                      x2="46.25"
                      y2="46.25"
                      stroke="green"
                      stroke-width="3.5"
                    />
                    <line
                      class="x-symbol"
                      x1="46.25"
                      y1="16.25"
                      x2="16.25"
                      y2="46.25"
                      stroke="green"
                      stroke-width="3.5"
                    />
                  </g>
                </svg>
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
                <?php foreach($comp["outils"] as $nomOutil => $outil) : ?>
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
              <!-- Flèche gauche -->
              <div class="flecheGauche">
                &#9664;
              </div>
              <!-- un projet -->
              <article>
                <!-- image du projet -->
                <div class="miniature inactif">
                  <img src="images/projets-etudiants/dystopie_chronique.png" alt="image projet">
                </div>
                <!-- nom ou type du projet -->
                <h4><?= $comp["projets"]["Disparu dans le vent"]; ?></h4>
              </article>
              <!-- un projet -->
              <article>
                <!-- image du projet -->
                <div class="miniature">
                  <img src="images/projets-etudiants/dystopie_chronique.png" alt="image projet">
                </div>
                <!-- nom ou type du projet -->
                <h4>Chroniques Dystopiques</h4>
              </article>
              <!-- un projet -->
              <article>
                <!-- image du projet -->
                <div class="miniature inactif">
                  <img src="images/projets-etudiants/dystopie_chronique.png" alt="image projet">
                </div>
                <!-- nom ou type du projet -->
                <h4>Chroniques Dystopiques</h4>
              </article>
              <!-- Flèche droite -->
              <div class="flecheDroite">
                &#9654;
              </div>
            </div>
          </div>
        <?php endforeach ?>
    </section>
</main>
<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets ?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->

<?php get_template_part('template', 'faq'); ?>



</div>
</section>
<!-- Affiche le footer -->
<?php get_footer() ?>
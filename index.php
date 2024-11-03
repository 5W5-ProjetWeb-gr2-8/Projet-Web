<?php
// Appelle le fichier header.php
get_header();
// Importe et décode le fichier svg.json 
$svgJson = file_get_contents(__DIR__ . '/js/svg.json');
$svg = json_decode($svgJson, true);
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
        <p>
            C'est l'ensemble des techniques et des produits qui permettent
            l'utilisation simultanée et interactive de plusieurs modes de
            représentation de l'information (textes, sons, images fixes ou
            animées). La technique est parfaite pour devenir un connaisseur du
            multimédia. Le programme est un mélange de créativité et de logique...
        </p>
    </section>
    <!-- Compétences ///////////////////////////////////////////////////////////////////// -->
    <section class="competences">
          <!-- Une compétence -->
          <div class="competence-item">
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
                <h3>Montage</h3>
                <!-- cercle contour -->
                 <div class="contour" id="video">
                <!-- icone -->
                <?= $svg["video"]; ?>
                 </div>
              </div>
              <!-- Informations sur la compétence-->
              <div class="info">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Doloremque tempore alias recusandae qui quaerat nihil dolorem
                  sint eligendi possimus ex?
                </p>
                <div class="outils">
                  <div class="outil">
                    <!-- Logo premiere pro -->
                    <?= $svg["premiere"]; ?>
                    <!-- nom logiciel -->
                    <h6>Premiere Pro</h6>
                  </div>
                  <div class="outil">
                    <!-- Logo Audition -->
                    <?= $svg["audition"]; ?>
                    <!-- nom logiciel -->
                    <h6>Audition</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Partie dépliable -->
            <div class="competence-content">
              <!-- Flèche gauche -->
              <div>
                <img src="https://placehold.co/50x75?text=<" alt="" />
              </div>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- Flèche droite -->
              <div>
                <img src="https://placehold.co/50x75?text=>" alt="" />
              </div>
            </div>
          </div>
          <!-- Une compétence -->
          <div class="competence-item">
            <div class="competence-header">
              <!-- button Ouverture et fermeture -->
              <button class="top-right-button">
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
                <h3>Création</h3>
                <!-- cercle contour -->
                <div class="contour" id="_3d">
                    <!-- icone -->
                    <!-- Importé depuis figma -->
                    <?= $svg["_3d"]; ?>  
                </div>
              </div>
              <!-- Informations sur la compétence-->
              <div class="info">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Doloremque tempore alias recusandae qui quaerat nihil dolorem
                  sint eligendi possimus ex?
                </p>
                <div class="outils">
                  <div class="outil">
                    <!-- Logo photoshop -->
                    <?= $svg["photoshop"]; ?>
                    <!-- nom logiciel -->
                    <h6>Photoshop</h6>
                  </div>
                  <div class="outil">
                    <!-- Logo Illustrator -->
                    <?= $svg["illustrator"]; ?>
                    <!-- nom logiciel -->
                    <h6>Illustrator</h6>
                  </div>
                  <div class="outil">
                    <!-- Logo Maya -->
                    <?= $svg["maya"]; ?>
                    <!-- nom logiciel -->
                    <h6>Maya</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Partie dépliable -->
            <div class="competence-content">
              <!-- Flèche gauche -->
              <div>
                <img src="https://placehold.co/50x75?text=<" alt="" />
              </div>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- Flèche droite -->
              <div>
                <img src="https://placehold.co/50x75?text=>" alt="" />
              </div>
            </div>
          </div>
          <!-- Une compétence -->
          <div class="competence-item">
            <div class="competence-header">
              <!-- button Ouverture et fermeture -->
              <button class="top-right-button">
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
                <h3>Programmation</h3>
                <!-- cercle contour -->
                <div class="contour" id="web">
                    <!-- icone -->
                    <!-- Importé depuis figma -->
                    <?= $svg["web"]; ?>
                </div>
              </div>
              <!-- Informations sur la compétence-->
              <div class="info">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Doloremque tempore alias recusandae qui quaerat nihil dolorem
                  sint eligendi possimus ex?
                </p>
                <div class="outils">
                  <div class="outil">
                    <!-- Logo html -->
                    <?= $svg["html"]; ?>
                    <!-- nom logiciel -->
                    <h6>HTML</h6>
                  </div>
                  <div class="outil">
                    <!-- Logo css -->
                    <?= $svg["css"]; ?>
                    <!-- nom logiciel -->
                    <h6>CSS</h6>
                  </div>
                  <div class="outil">
                    <!-- Logo javascript -->
                    <?= $svg["javascript"]; ?>
                    <!-- nom logiciel -->
                    <h6>JavaScript</h6>
                  </div>
                  <div class="outil">
                    <!-- Logo wordpress -->
                    <?= $svg["wordpress"]; ?>
                    <!-- nom logiciel -->
                    <h6>WordPress</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Partie dépliable -->
            <div class="competence-content">
              <!-- Flèche gauche -->
              <div>
                <img src="https://placehold.co/50x75?text=<" alt="" />
              </div>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- Flèche droite -->
              <div>
                <img src="https://placehold.co/50x75?text=>" alt="" />
              </div>
            </div>
          </div>
          <!-- Une compétence -->
          <div class="competence-item">
            <div class="competence-header">
              <!-- button Ouverture et fermeture -->
              <button class="top-right-button">
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
                <h3>Design</h3>
                <!-- cercle contour -->
                <div class="contour" id="design">
                    <!-- icone -->
                    <!-- Importé depuis figma -->
                    <?= $svg["design"]; ?>                  
                </div>
              </div>
              <!-- Informations sur la compétence-->
              <div class="info">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Doloremque tempore alias recusandae qui quaerat nihil dolorem
                  sint eligendi possimus ex?
                </p>
                <div class="outils">
                  <div class="outil">
                    <!-- Logo figma -->
                    <?= $svg["figma"]; ?>
                    <!-- nom logiciel -->
                    <h6>Figma</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Partie dépliable -->
            <div class="competence-content">
              <!-- Flèche gauche -->
              <div>
                <img src="https://placehold.co/50x75?text=<" alt="" />
              </div>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- Flèche droite -->
              <div>
                <img src="https://placehold.co/50x75?text=>" alt="" />
              </div>
            </div>
          </div>
          <!-- Une compétence -->
          <div class="competence-item">
            <div class="competence-header">
              <!-- button Ouverture et fermeture -->
              <button class="top-right-button">
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
                <h3>Intégration</h3>
                <!-- cercle contour -->
                <div class="contour" id="jeux">
                  <!-- icone -->
                  <!-- Importé depuis figma -->
                  <?= $svg["jeux"]; ?>                                    
                </div>
              </div>
              <!-- Informations sur la compétence-->
              <div class="info">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Doloremque tempore alias recusandae qui quaerat nihil dolorem
                  sint eligendi possimus ex?
                </p>
                <div class="outils">
                  <div class="outil">
                    <!-- Logo unity -->
                    <?= $svg["unity"]; ?>
                    <!-- nom logiciel -->
                    <h6>Unity</h6>
                  </div>
                  <div class="outil">
                    <!-- Logo c# -->
                    <?= $svg["csharp"]; ?>
                    <!-- nom logiciel -->
                    <h6>C Sharp</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Partie dépliable -->
            <div class="competence-content">
              <!-- Flèche gauche -->
              <div>
                <img src="https://placehold.co/50x75?text=<" alt="" />
              </div>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- // -->
              <article>
                <img
                  src="https://placehold.co/250x250?text=Image+Accueil"
                  alt=""
                />
                <legend>Légende</legend>
              </article>
              <!-- Flèche droite -->
              <div>
                <img src="https://placehold.co/50x75?text=>" alt="" />
              </div>
            </div>
          </div>
    </section>
</main>
</div>
<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<section class="galerie-projets">
    <h2 class="galerie-titre">Projets étudiants</h2>
    <h3 id="titre-projet" class="titre-projet">Titre du projet</h3>
    <div class="carrousel-container">
        <div class="fleche gauche" onclick="changerImage(-1)">&#9664;</div>
        <!-- Flèche gauche -->
        <div class="carrousel">
            <?php
            // Tableau des IDs des images depuis la bibliothèque de médias
            $projets_ids = array(64, 66, 63, 65, 62); // IDs réels des images
            $i = 0;
            foreach ($projets_ids as $projet_id):
                // Récupérer l'URL de l'image
                $image_url = wp_get_attachment_url($projet_id);
                // Récupérer le titre et l'attribut alt de l'image
                $image_alt = get_post_meta($projet_id, '_wp_attachment_image_alt', true);
                $image_title = get_the_title($projet_id);
                ?>
                <div class="carrousel-item">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"
                        title="<?php echo esc_attr($image_title); ?>" />
                </div>
            <?php endforeach; ?>
        </div>
        <div class="fleche droite" onclick="changerImage(1)">&#9654;</div>
        <!-- Flèche droite -->
    </div>
    <div class="indications">
        <?php for ($i = 0; $i < count($projets_ids); $i++): ?>
            <span class="indication" onclick="montrerImage(<?php echo $i; ?>)"></span>
        <?php endfor; ?>
    </div>
</section>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->

<?php get_template_part('template', 'faq'); ?>



</div>
</section>
<!-- Affiche le footer -->
<?php get_footer() ?>
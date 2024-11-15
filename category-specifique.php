<?php
// Appelle le fichier header.php
get_header();

?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal">
  <!-- Contenu de la page //////////////////////////////////////////////////////// -->
  <section class="presPro" id="projet_specifique">
    <a href="" class="conteneur_fleche">
      <div class="fleche_projet"></div>
    </a>

    <div class="fond_projet">
      <!-- Titre de la page -->
      <h2 class="titre_projet projet_3d">Trypitique</h2>
      <div class="infos_projet">

        <div class="infos_specifiques">

          <div class="type_projet projet_3d">
            <h3 class="titre_type">Type:</h3>
            <div class="les_types">
              <a href="" class="type type_projet_3d"><svg width='100' height='100' viewBox='0 0 100 100' fill='none'
                  xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <rect width='100'
                    height='100' fill='url(#pattern0_346_1186)' />
                  <defs>
                    <pattern id='pattern0_346_1186'
                      patternContentUnits='objectBoundingBox' width='1' height='1'>
                      <use xlink:href='#image0_346_1186'
                        transform='scale(0.0078125)' />
                    </pattern>
                    <image id='image0_346_1186' width='128' height='128'
                      xlink:href='data:image/png;base64,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' />
                  </defs>
                </svg>
              </a>

              <a href="" class="type type_projet_jeu">
                <svg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'
                  xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <rect width='100' height='100' fill='url(#pattern0_346_1192)' />
                  <defs>
                    <pattern id='pattern0_346_1192' patternContentUnits='objectBoundingBox' width='1' height='1'>
                      <use xlink:href='#image0_346_1192' transform='scale(0.0078125)' />
                    </pattern>
                    <image id='image0_346_1192' width='128' height='128'
                      xlink:href='data:image/png;base64,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' />
                  </defs>
                </svg>
              </a>
            </div>
          </div>

          <div class="cours_projet projet_3d">
            <h3 class="titre_cours">Cours:</h3>
            <p class="cours">Conception graphique et imagerie matricielle</p>
          </div>

        </div>

        <div class="auteurs_projet">
          <p class="titre_auteur">FAIT PAR:</p>
          <div class="les_auteurs">
            <p class="auteur projet_3d">Rhoshandiatelly-neshiaunneveshenk Koyaanfsquatsiuty Williams</p>
            <p class="auteur projet_3d">Dave Tremblay</p>
            <p class="auteur projet_3d">Rhoshandiatelly-neshiaunneveshenk Koyaanfsquatsiuty Williams</p>
          </div>
        </div>

      </div>

      <div class="img_projet">
        <img class="img" src="<?php echo wp_get_attachment_url(66); ?>" alt="Triptyque">
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Lien: https://www.youtube.com/watch?v=dQw4w9WgXcQ</a>
      </div>

      <div class="desc_projet projet_3d">
        <p class="desc">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi aspernatur facilis ad reprehenderit deserunt
          quaerat alias aut libero, esse saepe nostrum iusto numquam quod, ipsum aliquid officia molestiae tempora quam.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam facilis doloribus quia, nostrum amet omnis
          enim voluptatem, sunt, quibusdam explicabo adipisci suscipit! Consequatur ratione iure est cupiditate enim facere
          ab.
        </p>
      </div>



    </div>


    <!-- Fin du contenu de la page ///////////////////////////////////////////////// -->
  </section>

</main>
</div>





<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets 
?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- Affiche le footer -->
<?php get_footer() ?>
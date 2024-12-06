<?php
    /**
     * Template name: Conference
     * 
     */
?>

<?php
// Appelle le fichier header.php
get_header();
?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal">
        <!-- Contenu de la page //////////////////////////////////////////////////////// -->
        <section class="presPro" id="vie_etudiante">
          <h2 class="titre_page">Vie étudiante</h2>
          <section class="comite_etudiant fond_section">
            <h2 class="titre_section comite_couleurs">Comité étudiants</h2>
            <p class="desc comite_couleurs">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, excepturi? Ullam optio 
              illum recusandae, eum odio rem, consequatur voluptatibus quaerat nemo ducimus quod, 
              reprehenderit provident quam magnam ut. Blanditiis, vel!
              Nam deserunt explicabo magni aspernatur nisi minima magnam exercitationem necessitatibus quae recusandae, 
              labore dolorum sequi eligendi. Unde et labore porro accusantium ratione velit, facilis 
              asperiores magni cum commodi optio ea!
            </p>
            <div class="conteneur_images">
              <img class="image_comite" src="images/projets-etudiants/dystopie_chronique.png" alt="">
              <img class="image_comite element_principal" src="images/projets-etudiants/dystopie_chronique.png" alt="">
              <img class="image_comite" src="images/projets-etudiants/dystopie_chronique.png" alt="">
            </div>
          </section>
          <section class="evenements fond_section">
            <h2 class="titre_evenements titre_section evenements_couleurs">Évenements</h2>
            <p class="desc evenements_couleurs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur 
              asperiores, temporibus blanditiis magni eum nostrum est voluptatibus recusandae culpa ea neque similique impedit molestias possimus velit. Enim asperiores aliquid nisi.
              Aut animi officia corporis accusantium, minus labore consectetur modi veritatis, porro quod eaque, deleniti pariatur dicta fugiat? Unde nemo vel voluptates quam laudantium 
              illo animi optio, corrupti porro repudiandae reprehenderit?
            </p>
            <div class="conteneur_images">
              <div class="evenement">
                <img class="image_comite" src="images/projets-etudiants/dystopie_chronique.png" alt="">
                <a href="">Lien</a>
              </div>
              <div class="evenement element_principal">
                <img class="image_comite" src="images/projets-etudiants/dystopie_chronique.png" alt="">
                <a href="">Lien</a>
              </div>
              <div class="evenement">
                <img class="image_comite" src="images/projets-etudiants/dystopie_chronique.png" alt="">
                <a href="">Lien</a>
              </div>
            </div>
          </section>
          <section class="vie_galerie fond_section">
            <img src="images/sortie-vr/sortie-vr1.jpg" alt="">
            <img src="images/sortie-vr/sortie-vr1.jpg" alt="">
            <img src="images/sortie-vr/sortie-vr1.jpg" alt="">
          </section>
          <section></section>

        <!-- Fin du contenu de la page ///////////////////////////////////////////////// -->
        </section>

      </main>

<!-- Galerie de Projets ////////////////////////////////////////////////////////////-->
<?php echo do_shortcode('[carrousel]'); // Exécution du shortcode pour la galerie de projets ?>

<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php include 'template-faq.php'; ?>


</div>
</section>
<!-- Affiche le footer -->
<?php get_footer(); ?>
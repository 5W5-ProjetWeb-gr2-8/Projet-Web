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
          <img class="ui_bordure" src="<?php echo wp_get_attachment_url(201); ?>" alt="Image du projet">
        </div>

        <!-- Informations à droite -->
        <div class="details_projet">
          <div class="espacement_fleche_titre">
            <h1 class="titre_projet ui_titre">Carolyn's</h1>
            <a href="https://gftnth00.mywhc.ca/tim52/category/galerie/" class="conteneur_fleche">
              <div class="fleche_projet"></div>
            </a>
          </div>
          <p class="type_projet"><b class="ui_gras">Domaine :</b> Design</p>
          <p class="cours_projet"><b class="ui_gras">Cours :</b> 582-3C1-MA - Design d'interactivité</p>
          <p class="auteurs_projet"><b class="ui_gras">Auteurs :</b> Marguerite Demontigny, Lhaissa Jérôme, James Ling</p>
        </div>
      </div>

      <!-- Description en dessous -->
      <div class="description_projet">
        <p>
          Dans un projet <b class="ui_gras">TIM</b>, une équipe de 3 étudiants a refondu un site au design peu attrayant.
          Avec <b class="ui_gras">Adobe XD</b>, ils ont créé des <b class="ui_gras">maquettes interactives</b> modernes pour mobile et ordinateur.
          Ce travail a renforcé leurs compétences en design et en <b class="ui_gras">collaboration</b>, rendant le site plus esthétique et intuitif.
        </p>
      </div>
    </div>
  </section>

  <!-- Galerie de Projets -->
  <section class="galerie_projets">
    <div class="conteneur_galerie">
      <?php
      // Ajouté le ID de l'image ici
      $projets = [
        ['id' => 614,],
        ['id' => 615,],
      ];

      foreach ($projets as $projet) {
        $image_url = wp_get_attachment_url($projet['id']);
        echo "
        <div class='projet_item'>
          <img src='{$image_url}' alt='Projet' class='image_projet_galerie ui_bordure'>
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
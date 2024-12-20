<?php
    /**
     * Template name: Conference
     * 
     */
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Importations Polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap&family=SUSE:wght@100..800&display=swap""
    rel="stylesheet" />
    <!-- //////////////////// -->
    <title>theme TIM</title>
    <!-- Ajouter un favicon -->
  </head>
  <body>
    <div class="global">


      <!-- Header ///////////////////////////////////////////////////////////////////////// -->
      <header>
        <!-- Menu ///////////////////////////////////////////////////////////////////////// -->
        <nav class="menu">
          <div class="menu_contenu">
            <p class="menu_titre">
              <a href="index.htm">
                <!-- Lien vers la page d'accueil -->
                <img
                  class="logo_img"
                  src="images/logo_TIM_fixed.png"
                  alt="Logo TIM"
                />
              </a>
            </p>
            <p class="inscription">Inscription</p>
            <button class="menu_hamburger">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <ul class="menu_liste">
              <li><a href="galerie.htm">Galerie</a></li>
              <li><a href="cours.htm">Cours</a></li>
              <li><a href="#">Projet</a></li>
              <li><a href="#">Personnel</a></li>
              <li><a href="#">Contacter</a></li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Main //////////////////////////////////////////////////////////////////////// -->
      <main class="principal">
        <!-- Contenu de la page //////////////////////////////////////////////////////// -->
        <section class="presPro" id="projet_specifique">

          <div class="fond_projet">
            <!-- Titre de la page -->
            <h2 class="titre_projet projet_3d">Trypitique</h2>
            <div class="infos_projet">

              <div class="infos_specifiques">

                <div class="type_projet projet_3d">
                  <p class="titre_type">Type:</p>
                  <div class="les_types">
                    <div class="type projet_3d"></div>
                    <div class="type projet_jeu"></div>
                  </div>
                </div>

                <div class="cours_projet projet_3d">
                  <p class="titre_cours">Cours:</p>
                  <p class="cours">Conception graphique et imagerie matricielle</p>
                </div>

              </div>

              <div class="auteurs_projet">
                <p class="titre_auteur">FAIT PAR:</p>
                <div class="les_auteurs">
                  <p class="auteur projet_3d">Rhoshandiatelly-neshiaunneveshenk Koyaanfsquatsiuty Williams</p>
                  <p class="auteur projet_3d">
                    Dave Tremblay
                  </p>
                </div>
              </div>

            </div>

            <div class="img_projet">
              <img class="img"></img>
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







    <!-- FAQ //////////////////////////////////////////////////////////////////////// -->
    <section class="faq-section">
      <!-- Titre -->
      <h3 class="titre_FAQ">FAQ Lorem ipsum dolor sit.</h3>
      <main class="faq-contenu">
        <!-- Section des questions -->
        <div class="questions-et-reponse">
          <!-- Questions -->
          <div class="questions">
            <button class="question" data-question="question1">
              <span class="icone-fleche">→</span> Qu'est-ce que le TIM ?
            </button>
            <button class="question" data-question="question2">
              <span class="icone-fleche">→</span> Quels logiciels utilise-t-on en
              TIMS ?
            </button>
            <button class="question" data-question="question3">
              <span class="icone-fleche">→</span> Apprend-on à créer des jeux
              vidéo en TIMS ?
            </button>
            <button class="question" data-question="question4">
              <span class="icone-fleche">→</span> Est-ce que je vais apprendre à
              coder ?
            </button>
            <button class="question" data-question="question5">
              <span class="icone-fleche">→</span> Est-ce que TIMS forme à la
              création 3D ?
            </button>
          </div>
          <!-- Boîte de réponse blanche -->
          <div id="boite-reponse" class="boite-reponse">
            <h6 class="reponse-affichee">La réponse s'affichera ici.</h6>
          </div>
        </div>
        <!-- Contacts -->
        <div class="contact">
          <!-- Réseaux sociaux -->
          <div class="social-media">
            <!-- Site collège -->
            <a href="https://www.cmaisonneuve.qc.ca/" target="_blank">
              <img
                src="images/logo_college.jpg"
                alt="Logo Collège de Maisonneuve"
              />
            </a>
            <!-- LinkedIn -->
            <a
              href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/"
            >
              <img src="images/logo_linkedIn.png" alt="LinkedIn" />
            </a>
            <!-- Behance -->
            <a href="https://www.behance.net/departement_tim" target="_blank">
              <img src="images/logo_behance.jpg" alt="Behance" />
            </a>
          </div>
          <!-- Infos -->
          <div class="contact-info">
            <p>Téléphone : (514) 254 7131</p>
            <p>Adresse : 3800 Sherbrooke E.</p>
          </div>
        </div>
      </main>
    </section>

    <!-- Footer ////////////////////////////////////////////////////////////////// -->
    <footer>
      <div class="footer-gauche">
        <img class="logo" src="images/logo_TIM_fixed.png" alt="Logo TIM" />
        <p>© 2024 Collège de Maisonneuve</p>
      </div>
      <a href="#">Inscription</a>
    </footer>

    <!-- Inclure les fichiers JavaScript -->
    <script src="js/menu-burger.js"></script>
    <script src="js/competences.js"></script>
    <script src="js/faq.js"></script>
    <script src="js/projets-carrousel.js"></script>
  </body>
</html>

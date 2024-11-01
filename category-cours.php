<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compétences et Cours</title>
</head>

<body>
    <!-- Menu ///////////////////////////////////////////////////////////////////////// -->
    <nav class="menu">
        <div class="menu_contenu">
            <p class="menu_titre">
                <a href="index.htm">
                    <!-- Lien vers la page d'accueil -->
                    <img class="logo_img" src="images/logo_TIM.png" alt="Logo TIM" />
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

    <!-- Section des compétences -->
    <section class="competences-section">
        <div class="competences-container">
            <div class="competence" style="background-color: #f94144" onclick="goToCours('html')">
                HTML
            </div>
            <div class="competence" style="background-color: #f3722c" onclick="goToCours('css')">
                CSS
            </div>
            <div class="competence" style="background-color: #f8961e" onclick="goToCours('js')">
                JavaScript
            </div>
            <div class="competence" style="background-color: #f9c74f" onclick="goToCours('react')">
                React
            </div>
        </div>
    </section>

    <!-- Section SESSION 1 - 6  -->
    <section class="session1-6">
        <div class="session-container">

            <h2 class="session">Session 1</h2>

            <h2 class="session">Session 2</h2>

            <h2 class="session">Session 3</h2>

            <h2 class="session">Session 4</h2>

            <h2 class="session">Session 5</h2>

            <h2 class="session">Session 6</h2>

        </div>

    </section>


    <!-- Section des cours -->
    <section class="cours-section" id="cours">
        <div class="cours-box" id="html">
            <div class="cours-header">
                <span class="cours-nom">Introduction au HTML</span>
                <span class="cours-code">TIM101</span>
                <button class="btn-plus" onclick="toggleCours(this)">+</button>
            </div>
            <div class="cours-details">
                <p>Apprenez les bases du HTML pour structurer vos pages web.</p>
                <p>Heures : 45 heures</p>
            </div>
        </div>

        <div class="cours-box" id="css">
            <div class="cours-header">
                <span class="cours-nom">Styles avec CSS</span>
                <span class="cours-code">TIM102</span>
                <button class="btn-plus" onclick="toggleCours(this)">+</button>
            </div>
            <div class="cours-details">
                <p>
                    Maîtrisez les styles CSS pour des designs modernes et adaptatifs.
                </p>
                <p>Heures : 50 heures</p>
            </div>
        </div>

        <div class="cours-box" id="js">
            <div class="cours-header">
                <span class="cours-nom">JavaScript pour Interactivité</span>
                <span class="cours-code">TIM201</span>
                <button class="btn-plus" onclick="toggleCours(this)">+</button>
            </div>
            <div class="cours-details">
                <p>Ajoutez de l'interactivité à vos sites avec JavaScript.</p>
                <p>Heures : 60 heures</p>
            </div>
        </div>

        <div class="cours-box" id="react">
            <div class="cours-header">
                <span class="cours-nom">Développement Frontend avec React</span>
                <span class="cours-code">TIM301</span>
                <button class="btn-plus" onclick="toggleCours(this)">+</button>
            </div>
            <div class="cours-details">
                <p>Apprenez à créer des interfaces réactives avec React.</p>
                <p>Heures : 70 heures</p>
            </div>
        </div>
    </section>
    <!-- FAQ //////////////////////////////////////////////////////////////////////// -->
    <section class="faq-section">
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
                    <img src="images/logo_college.jpg" alt="Logo Collège de Maisonneuve" />
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/">
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
    </section>

    <!-- Footer ////////////////////////////////////////////////////////////////// -->
    <footer>
        <div class="footer-gauche">
            <img class="logo" src="images/logo_TIM.png" alt="Logo TIM" />
            <p>© 2024 Collège de Maisonneuve</p>
        </div>
        <a href="#">Inscription</a>
    </footer>

    <!-- JavaScript -->
    <script src="js/cours.js"></script>
    <script src="js/menu-burger.js"></script>
    <script src="js/faq.js"></script>
</body>

</html>
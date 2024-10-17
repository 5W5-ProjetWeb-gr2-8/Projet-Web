<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <!-- Importation des styles WordPress -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="global">
        <!-- Menu ///////////////////////////////////////////////////////////////////////// -->
        <nav class="menu">
            <div class="menu_contenu">
                <p class="menu_titre">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <!-- Lien vers la page d'accueil -->
                        <img class="logo_img" src="<?php echo get_template_directory_uri(); ?>/images/logo_TIM.png"
                            alt="Logo TIM" />
                    </a>
                </p>
                <p class="inscription">Inscription</p>
                <button class="menu_hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'container' => false,
                    'menu_class' => 'menu_liste',
                    'fallback_cb' => false
                ));
                ?>
            </div>
        </nav>

        <!-- Main //////////////////////////////////////////////////////////////////////// -->
        <main class="principal">
            <section class="debut_accueil">
                <div>
                    <h6>582.A1 TIM</h6>
                    <h1><?php bloginfo('name'); ?></h1>
                    <h1>
                        <?php bloginfo('description'); ?>
                    </h1>
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
                <div class="competence-item">
                    <div class="competence-header">
                        <!-- button Ouverture et fermeture -->
                        <button class="top-right-button">
                            <svg class="svg_1" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <ellipse ry="30" rx="30" cy="31.25" cx="31.25" stroke-width="2.5" stroke="#00000"
                                        fill="transparent" />
                                    <ellipse ry="30" rx="30" class="circle" cy="31.25" cx="31.25" stroke-width="2.5"
                                        stroke="red" fill="transparent" />
                                    <line class="x-symbol" x1="16.25" y1="16.25" x2="46.25" y2="46.25" stroke="green"
                                        stroke-width="3.5" />
                                    <line class="x-symbol" x1="46.25" y1="16.25" x2="16.25" y2="46.25" stroke="green"
                                        stroke-width="3.5" />
                                </g>
                            </svg>
                        </button>
                        <!-- Logo de la compétence -->
                        <div class="logo">
                            <h3>Audio Visuel</h3>
                            <svg width="250px" height="250px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7864 9.74996L10.9999 6.17701L9.21345 9.74996H12.7864ZM7.3291 10.1646L10.3291 4.16455H11.6707L14.6707 10.1646L13.9999 11.25H7.99992L7.3291 10.1646ZM12.75 13.5L13.5 12.75H19.5L20.25 13.5V19.5L19.5 20.25H13.5L12.75 19.5V13.5ZM18.75 14.25H14.25V18.75H18.75V14.25ZM7.5 12.75C5.42893 12.75 3.75 14.4289 3.75 16.5C3.75 18.571 5.42893 20.25 7.5 20.25C9.57107 20.25 11.25 18.571 11.25 16.5C11.25 14.4289 9.57107 12.75 7.5 12.75ZM5.25 16.5C5.25 15.2573 6.25736 14.25 7.5 14.25C8.74264 14.25 9.75 15.2573 9.75 16.5C9.75 17.7426 8.74264 18.75 7.5 18.75C6.25736 18.75 5.25 17.7426 5.25 16.5Z"
                                    fill="#080341" />
                            </svg>
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
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Technologies</p>
                                </div>
                                <div class="outil">
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Logiciels</p>
                                </div>
                                <div class="outil">
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Concepts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Exemples liés à la compétence -->
                    <div class="competence-content">
                        <!-- Flèche gauche -->
                        <div>
                            <img src="https://placehold.co/50x75?text=<" alt="" />
                        </div>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <!-- Flèche droite -->
                        <div>
                            <img src="https://placehold.co/50x75?text=>" alt="" />
                        </div>
                    </div>
                </div>
                <div class="competence-item">
                    <div class="competence-header">
                        <!-- button Ouverture et fermeture -->
                        <button class="top-right-button">
                            <svg class="svg_1" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <ellipse ry="30" rx="30" cy="31.25" cx="31.25" stroke-width="2.5" stroke="#00000"
                                        fill="transparent" />
                                    <ellipse ry="30" rx="30" class="circle" cy="31.25" cx="31.25" stroke-width="2.5"
                                        stroke="red" fill="transparent" />
                                    <line class="x-symbol" x1="16.25" y1="16.25" x2="46.25" y2="46.25" stroke="green"
                                        stroke-width="3.5" />
                                    <line class="x-symbol" x1="46.25" y1="16.25" x2="16.25" y2="46.25" stroke="green"
                                        stroke-width="3.5" />
                                </g>
                            </svg>
                        </button>
                        <!-- Logo de la compétence -->
                        <div class="logo">
                            <h3>Audio Visuel</h3>
                            <svg width="250px" height="250px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7864 9.74996L10.9999 6.17701L9.21345 9.74996H12.7864ZM7.3291 10.1646L10.3291 4.16455H11.6707L14.6707 10.1646L13.9999 11.25H7.99992L7.3291 10.1646ZM12.75 13.5L13.5 12.75H19.5L20.25 13.5V19.5L19.5 20.25H13.5L12.75 19.5V13.5ZM18.75 14.25H14.25V18.75H18.75V14.25ZM7.5 12.75C5.42893 12.75 3.75 14.4289 3.75 16.5C3.75 18.571 5.42893 20.25 7.5 20.25C9.57107 20.25 11.25 18.571 11.25 16.5C11.25 14.4289 9.57107 12.75 7.5 12.75ZM5.25 16.5C5.25 15.2573 6.25736 14.25 7.5 14.25C8.74264 14.25 9.75 15.2573 9.75 16.5C9.75 17.7426 8.74264 18.75 7.5 18.75C6.25736 18.75 5.25 17.7426 5.25 16.5Z"
                                    fill="#080341" />
                            </svg>
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
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Technologies</p>
                                </div>
                                <div class="outil">
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Logiciels</p>
                                </div>
                                <div class="outil">
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Concepts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Exemples liés à la compétence -->
                    <div class="competence-content">
                        <!-- Flèche gauche -->
                        <div>
                            <img src="https://placehold.co/50x75?text=<" alt="" />
                        </div>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <!-- Flèche droite -->
                        <div>
                            <img src="https://placehold.co/50x75?text=>" alt="" />
                        </div>
                    </div>
                </div>
                <div class="competence-item">
                    <div class="competence-header">
                        <!-- button Ouverture et fermeture -->
                        <button class="top-right-button">
                            <svg class="svg_1" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <ellipse ry="30" rx="30" cy="31.25" cx="31.25" stroke-width="2.5" stroke="#00000"
                                        fill="transparent" />
                                    <ellipse ry="30" rx="30" class="circle" cy="31.25" cx="31.25" stroke-width="2.5"
                                        stroke="red" fill="transparent" />
                                    <line class="x-symbol" x1="16.25" y1="16.25" x2="46.25" y2="46.25" stroke="green"
                                        stroke-width="3.5" />
                                    <line class="x-symbol" x1="46.25" y1="16.25" x2="16.25" y2="46.25" stroke="green"
                                        stroke-width="3.5" />
                                </g>
                            </svg>
                        </button>
                        <!-- Logo de la compétence -->
                        <div class="logo">
                            <h3>Audio Visuel</h3>
                            <svg width="250px" height="250px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7864 9.74996L10.9999 6.17701L9.21345 9.74996H12.7864ZM7.3291 10.1646L10.3291 4.16455H11.6707L14.6707 10.1646L13.9999 11.25H7.99992L7.3291 10.1646ZM12.75 13.5L13.5 12.75H19.5L20.25 13.5V19.5L19.5 20.25H13.5L12.75 19.5V13.5ZM18.75 14.25H14.25V18.75H18.75V14.25ZM7.5 12.75C5.42893 12.75 3.75 14.4289 3.75 16.5C3.75 18.571 5.42893 20.25 7.5 20.25C9.57107 20.25 11.25 18.571 11.25 16.5C11.25 14.4289 9.57107 12.75 7.5 12.75ZM5.25 16.5C5.25 15.2573 6.25736 14.25 7.5 14.25C8.74264 14.25 9.75 15.2573 9.75 16.5C9.75 17.7426 8.74264 18.75 7.5 18.75C6.25736 18.75 5.25 17.7426 5.25 16.5Z"
                                    fill="#080341" />
                            </svg>
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
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Technologies</p>
                                </div>
                                <div class="outil">
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Logiciels</p>
                                </div>
                                <div class="outil">
                                    <!-- PlaceHolder -->
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" role="img"
                                        xmlns="http://www.w3.org/2000/svg" aria-labelledby="placeholderIconTitle"
                                        stroke="#000000" stroke-width="1" stroke-linecap="square"
                                        stroke-linejoin="miter" fill="none" color="#000000">
                                        <title id="placeholderIconTitle">Placeholder</title>
                                        <rect width="18" height="18" x="3" y="3" />
                                        <path stroke-linecap="round" d="M21 21L3 3 21 21zM21 3L3 21 21 3z" />
                                    </svg>
                                    <p>Concepts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Exemples liés à la compétence -->
                    <div class="competence-content">
                        <!-- Flèche gauche -->
                        <div>
                            <img src="https://placehold.co/50x75?text=<" alt="" />
                        </div>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
                            <legend>Légende</legend>
                        </article>
                        <article>
                            <img src="https://placehold.co/250x250?text=Image+Accueil" alt="" />
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
    <!-- Galerie de Projets ////////////////////////////////////////////////////////////// -->
    <section class="galerie-projets">
        <h2 class="galerie-titre">Projets étudiants</h2>
        <h3 id="titre-projet" class="titre-projet">Titre du projet</h3>
        <div class="carrousel-container">
            <div class="fleche gauche" onclick="changerImage(-1)">&#9664;</div>
            <div class="carrousel">
                <?php
                // Boucle pour afficher les projets
                $args = array('post_type' => 'projet', 'posts_per_page' => 5);
                $projets = new WP_Query($args);
                if ($projets->have_posts()):
                    while ($projets->have_posts()):
                        $projets->the_post();
                        ?>
                        <div class="carrousel-item">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="fleche droite" onclick="changerImage(1)">&#9654;</div>
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
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_TIM.png" alt="Logo TIM" />
            <p>©
                <?php echo date('Y'); ?> Collège de Maisonneuve
            </p>
        </div>
        <a href="#">Inscription</a>
    </footer>

    </main>

    <!-- Inclure les fichiers JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu-burger.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/competences.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/faq.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/projets-carrousel.js"></script>

    <?php wp_footer(); ?>
</body>

</html>
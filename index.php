<?php
// Appelle le fichier header.php
get_header();
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
                                stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#000000">
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
<?php include 'faq.php'; ?>


<!-- Infos -->
<div class="contact-info">
    <p>Téléphone : (514) 254 7131</p>
    <p>Adresse : 3800 Sherbrooke E.</p>
</div>
</div>
</section>
<!-- Affiche le footer -->
<?php get_footer() ?>
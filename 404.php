<?php
    // Appelle le fichier header.php
    get_header();
?>
        
        
        
<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal">
    <!-- Contenu de la page //////////////////////////////////////////////////////// -->
    <section class="erreur">
        <!-- Titre de la page -->
        <h1 class="titre_erreur">404</h1>
        <!-- Conteneur des differents filtres de la page ////////////// -->
        <div class="textes_erreur">
            <p class="txt_erreur">La page que vous essayez d'avoir accès n'existe pas!</p>
            <p class="txt_erreur">Vous pouvez cliquer le bouton ci-dessous pour revenir à la page d'accueil.</p>
        </div>
        <a href="<?= get_bloginfo("url"); ?>" class="ctr_btn_retour">
            <p class="txt_btn_retour">
                Accueil
            </p>
            <div class="fd_btn_retour">
                <p>
                    Accueil
                </p>
            </div>
        </a>

    <!-- Fin section ////////////////////// -->
    </section>
</main>
<!-- Fin du contenu de la page ///////////////////////////////////////////////// -->



<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->
<?php echo do_shortcode('[faq]'); // Exécution du shortcode pour le faq 
?>

<!-- Affiche le footer -->
<?php get_footer() ?>
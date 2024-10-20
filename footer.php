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
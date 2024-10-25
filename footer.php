<!-- Footer ////////////////////////////////////////////////////////////////// -->
<footer>
    <div class="footer-gauche">
        <?php
        // ID de l'image de la médiathèque pour le logo TIM
        $logo_tim_id = 41;
        ?>

        <!-- Logo TIM -->
        <?php echo wp_get_attachment_image($logo_tim_id, 'full', false, array('class' => 'logo', 'alt' => 'Logo TIM')); ?>

        <!-- Copyright -->
        <p>© <?php echo date('Y'); ?> Collège de Maisonneuve</p>
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
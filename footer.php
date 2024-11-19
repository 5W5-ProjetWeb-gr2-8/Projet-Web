<!-- Footer ////////////////////////////////////////////////////////////////// -->
<footer>
    <div class="footer-gauche">
        <?php
        // ID de l'image de la médiathèque pour le logo TIM
        $logo_tim_id = 89;
        ?>

        <!-- Logo TIM -->
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo wp_get_attachment_image($logo_tim_id, 'full', false, array('class' => 'logo', 'alt' => 'Logo TIM')); ?>
        </a>

        <!-- Copyright -->
        <p>© <?php echo date('Y'); ?> Collège de Maisonneuve</p>
    </div>

    <!-- Section Crédits -->
    <div class="footer-credits">
        <p><strong>Crédits :</strong> Émile Bécotte, Clovis Gauthier, James Ling, Michael-Ali Soeu, Janne Zhang Ellison</p>
    </div>
</footer>

</main>

<!-- Inclure les fichiers JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/wordpress-menu-burger.js"></script>

<?php wp_footer(); ?>
</body>

</html>
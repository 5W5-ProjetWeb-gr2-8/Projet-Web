<?php
// Appelle le fichier header.php
get_header();
?>

<!-- Main //////////////////////////////////////////////////////////////////////// -->
<main class="principal">
    <?php 
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article class="article">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</main>


<!-- FAQ ////////////////////////////////////////////////////////////////////////////////// -->

<?php include 'template-faq.php'; ?>


</div>
</section>
<!-- Affiche le footer -->
<?php get_footer(); ?>
<?php get_header(); ?>

<?php
/*
 * Template Name: Two Column Template
 */
?>

<main class="full-width">
    <h1 class="column-page-header"><?php the_title(); ?></h1>
    <div class="page-content">
        <?php echo get_the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
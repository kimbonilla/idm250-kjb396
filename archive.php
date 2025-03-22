<?php
/**
 * Template Name: Archive
 */
?>

<?php get_header(); ?>

<main class="archive-page">

    <?php if (have_posts()) : ?>
        <h1><?php echo get_the_title(); ?></h1>

    <ul class="grid grid-3">
        <?php while (have_posts()) : the_post(); ?>
            <div class="grid-item">
                <?php get_template_part('components/show-card'); ?>
            </div>
        <?php endwhile; ?>
    </ul>

    <?php the_posts_pagination(); ?> 

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

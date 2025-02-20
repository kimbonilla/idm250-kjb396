<?php get_header(); ?>

<main>
    <div class="page-hero">
        <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <div class="vertical-line">
            <p>&nbsp;</p>
        </div>
        <h1 class="page-header">
            <?php echo get_the_title(); ?>
            </h1>
    </div>
        <div class="page-content">
            <?php echo get_the_content(); ?>
        </div>
</main>

<?php get_footer(); ?>
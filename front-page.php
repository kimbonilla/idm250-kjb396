<?php get_header(); ?>
<main class="front-page">
    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <div class="overlay">
        <p>&nbsp;</p>
    </div>
    <div class="front-page-content">
        <h1 class="front-page-header">
            <?php echo get_the_title(); ?>
        </h1>
        <?php echo get_the_content(); ?>
    </div>
</main>
<?php get_footer(); ?>
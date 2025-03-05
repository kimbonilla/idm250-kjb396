<?php get_header(); ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <div class="show-hero">
                <div class="vertical-line">
                    <p>&nbsp;</p>
                </div>
                <div class="title-excerpt">
                    <h1 class="page-header"><?php the_title(); ?></h1>
                    <div class="show-excerpt">
                            <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <div class="post-content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                
                <?php the_content(); ?>
            </div>
            <div class="post-tags">
                <?php the_tags('Tags: ', ', '); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
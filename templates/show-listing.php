<?php
/**
 * Template Name: Show Listing
 */

get_header(); ?>

<main class="archive-page">
    <h1>Barrio Fiesta</h1>
    <div class="all-shows">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'shows',
        'posts_per_page' => 10,
        'paged' => $paged,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('components/show-card');
        endwhile;

    // Pagination
    $big = 999999999;
    echo paginate_links([
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages
    ]);

        wp_reset_postdata();
    else : ?>
        <p>
            <?php esc_html_e('No shows found.', 'idm250-2025'); ?>
        </p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
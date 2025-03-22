
<a href="<?php the_permalink(); ?>">
    <div class="show-card">
        <h6 class="show-card-title"><?php the_title(); ?></h6>
        <div class="show-card-info">
            <time datetime="<?php echo get_the_date('c'); ?>" class="show-card-date">
                <p><?php echo get_the_date(); ?></p>
            </time>
            <p><?php the_excerpt(); ?></p>
            <?php
                $tags = get_the_terms(get_the_ID(), 'show-categories');
                if (!empty($tags) && !is_wp_error($tags)) :
                    $tag_names = wp_list_pluck($tags, 'name');
                    echo '<span class="show-card-tags">' . implode(', ', $tag_names) . '</span>';
                endif;
            ?>
        </div>
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>
</a>
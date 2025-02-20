<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php
        wp_title('|', true, 'right'); // About
        bloginfo('name'); // IDM250
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <section class="top-nav">
            <div class="header__logo">
                <?php if (has_custom_logo()) : ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <?php else: ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                    <?php bloginfo('name'); ?>
                </a>
                <?php endif; ?>
            </div>
            <input id="menu-toggle" type="checkbox">
                <label class="menu-button-container" for="menu-toggle">
                    <span class="menu-button"></span>
                </label>
            <!--<div class="menu">*/-->
                <?php get_template_part('components/main-header'); ?>
                <?php
                    wp_nav_menu([
                        'theme_location' => 'primary-menu',
                    ]);
                ?>
            <!--</div>-->
        </section>
    </header>
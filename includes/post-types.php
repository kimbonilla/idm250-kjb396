<?php

/**
 * Register custom post types for the theme.
 *
 * This function registers a custom post type "Projects" for managing project-based content.
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 *
 * @return void
 */
function register_custom_post_types()
{
    $post_type_name = 'shows';

    $args = [
        'labels' => [
            'name' => 'Shows',
            'singular_name' => 'Show',
            'add_new' => 'Add New Show',
            'add_new_item' => 'Add New Show',
            'edit_item' => 'Edit Show',
            'new_item' => 'New Show',
            'view_item' => 'View Show',
            'search_items' => 'Search Shows',
            'not_found' => 'No Shows found',
            'not_found_in_trash' => 'No Shows found in Trash',
        ],
        'public' => true,             // Makes it accessible on the front and back end
        'has_archive' => true,             // Enables an archive page
        'rewrite' => ['slug' => 'shows'], // URL slug
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // Enabled post features
        'menu_position' => 5,                // Position in WP admin menu
        'menu_icon' => 'dashicons-tickets-alt', // Optional: Custom icon for the post type
        'show_in_rest' => true,             // Enables Gutenberg support
        //'taxonomies'  => ['project-categories'], // Uncomment if you have a custom taxonomy
    ];

    register_post_type($post_type_name, $args);
}

add_action('init', 'register_custom_post_types');
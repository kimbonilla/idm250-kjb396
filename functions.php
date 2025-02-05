<?php
function theme_styles_and_scripts()
{
    wp_enqueue_style(
        'idm-normalize', // Handle for the stylesheet. Has to be unique
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', // URL for the stylesheet
        [], // No dependencies
        '8.0.1' // Version of Normalize.css
    );

    wp_enqueue_style(
        'idm-main', // Handle for the stylesheet
        get_template_directory_uri() . '/style.css', // Path to the stylesheet
        [], // No dependencies
        filemtime(get_template_directory() . '/style.css') // Cache-busting by file modification time
    );

    /*wp_enqueue_script(
        'idm-main-script', // Handle for the script
        get_template_directory_uri() . '/dist/scripts/main.js', // Path to the script
        [], // No dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // Cache-busting by file modification time
        true // Load in the footer
    );*/
}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');

function theme_setup()
{
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus([
        'primary-menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'theme_setup');


?>
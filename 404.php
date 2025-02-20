<?php get_header(); ?>
<main class="error-404">
    <img class="404-image" src="<?php echo get_template_directory_uri(); ?>/images/error.png" alt="error">
    <h1>404</h1>
    <p class="p-bold">Sorry, this page wasn&apos;t found.</p>
    <p>Go back to our <a href="<?php echo esc_url(home_url('/')); ?>">homepage</a>.</p>
</main>
<?php get_footer(); ?>
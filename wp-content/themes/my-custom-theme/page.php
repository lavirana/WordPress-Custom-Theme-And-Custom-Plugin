<?php

/**
 * Template Name: Page
 * Description: A custom page template for the WordPress website
 * Author: Ashish Rana
 * Author URI: https://thetechinfo.net/
 * Version: 1.0
 */
?>


<?php get_header(); ?>

<main class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>
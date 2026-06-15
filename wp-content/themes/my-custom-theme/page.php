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
<section class="page-hero-banner">
    <div class="hero-overlay"></div>
    <div class="hero-banner-content">
        <nav class="breadcrumb-trail"><a href="<?php echo home_url('/'); ?>">Home</a> &raquo; <?php the_title(); ?></nav>
        <h1><?php the_title(); ?></h1>
        <div class="accent-bar"></div>
    </div>
</section>
<div class="page-container">
    <main class="main-editorial-content">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                the_content(); 
            endwhile; 
        else : 
            echo '<p>No content found for this page.</p>';
        endif; 
        ?>
    </main>
    <!-- Sidebar Widget Area -->
    <?php get_sidebar(); ?>
</div>
<!-- 3. Bottom Engagement CTA Section -->
<section class="bottom-engagement-cta">
    <h2>Ready to transform your technical skills?</h2>
    <p>Join thousands of students building real-world projects today at IYA International.</p>
    <a href="<?php echo home_url('/course'); ?>" class="premium-cta-btn">View Available Batches</a>
</section>
<?php get_footer(); ?>
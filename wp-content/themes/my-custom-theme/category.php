<?php get_header(); ?>

<!-- Category Hero Header Banner Area -->
<section class="course-hero">
    <h1>Category: <?php single_cat_title(); ?></h1>
    <?php 
    // If the category has an administrative description box filled out, display it here
    if ( category_description() ) : 
        echo '<p>' . category_description() . '</p>';
    else : 
        echo '<p>Browsing all professional articles and updates published under ' . single_cat_title('', false) . '.</p>';
    endif; 
    ?>
</section>

<!-- Content Grid Section -->
<div class="category-page-container" style="max-width: 1200px; margin: 50px auto; padding: 0 20px;">
    
    <?php if ( have_posts() ) : ?>
        <div class="category-posts-grid">
            
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('category-post-card'); ?>>
                    
                    <!-- Post Thumbnail Display Frame -->
                    <div class="category-card-thumb">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </a>
                        <?php else : ?>
                            <!-- Fallback solid colorful frame matching theme palette layouts if img is missing -->
                            <div class="fallback-thumb-gradient"></div>
                        <?php endif; ?>
                    </div>

                    <!-- Post Body Info -->
                    <div class="category-card-body">
                        <span class="category-card-date"><?php echo get_the_date('M d, Y'); ?></span>
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more-link">Read Article &rarr;</a>
                    </div>

                </article>
            <?php endwhile; ?>

        </div>

        <!-- Pagination Navigation Links Section -->
        <div class="category-pagination">
            <?php 
            echo paginate_links( array(
                'prev_text' => '&larr; Previous',
                'next_text' => 'Next &larr;',
            ) ); 
            ?>
        </div>

    <?php else : ?>
        <div class="no-posts-found" style="text-align: center; padding: 60px 20px;">
            <h2>No posts found in this category yet.</h2>
            <p>Check back shortly for new educational resources.</p>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
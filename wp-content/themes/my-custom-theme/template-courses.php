<?php
/**
 * Template Name: Courses Page
 * Description: A premium 3-column academy layout displaying courses with duration badges.
 * Author: Ashish Rana
 * Author URI: https://thetechinfo.net/
 * Version: 1.0
 */
get_header(); ?>

<!-- 1. Hero Banner Section -->
<section class="course-hero">
    <h1>Our Professional Courses</h1>
    <p>Upgrade your technical skill set with industry-recognized training programs.</p>
</section>

<!-- 2. Fast Stats Bar Element -->
<div class="stats-bar-container">
    <div class="stat-item"><strong>15+</strong> Professional Modules</div>
    <div class="stat-item"><strong>5,000+</strong> Trained Students</div>
    <div class="stat-item"><strong>100%</strong> Practical Lab Training</div>
</div>


<div class="course-grid-container">
    
<?php 
$wpcourses = array(
    'post_type'   => 'all-courses',
    'post_status' => 'publish'
);

$coursesquery = new WP_Query($wpcourses);

while ( $coursesquery->have_posts() ) {
    $coursesquery->the_post();
    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    $src_url   = !empty($imagepath) ? $imagepath[0] : 'https://via.placeholder.com/600x400.png?text=Course+Preview';

    // Fetch the terms assigned to this specific post
    $course_terms = get_the_terms( get_the_ID(), 'courses_category' );
    
    // Array to hold our HTML links
    $category_links = array();

    if ( ! empty( $course_terms ) && ! is_wp_error( $course_terms ) ) {
        foreach ( $course_terms as $term ) {
            // FIX: Get the correct archive link for custom taxonomy terms
            $term_link = get_term_link( $term );
            
            if ( ! is_wp_error( $term_link ) ) {
                // Build a clean clickable link for each term
                $category_links[] = '<a href="' . esc_url( $term_link ) . '">' . esc_html( $term->name ) . '</a>';
            } else {
                $category_links[] = esc_html( $term->name );
            }
        }
        // Join multiple categories with a comma separator string
        $display_links = implode( ', ', $category_links );
    } else {
        $display_links = 'Uncategorized';
    }
?>
    <!-- Card: Course Layout -->
    <div class="course-card">
        <img src="<?php echo esc_url($src_url); ?>" alt="<?php the_title_attribute(); ?>">
        <div style="position: relative;">
            <span class="duration-badge"><?php echo get_the_date(); ?></span>
        </div>
        <div class="course-card-body">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
            <div class="course-meta" style="overflow: hidden;">
                <strong>Category:</strong> 
                <span style="float: right;">
                    <!-- Renders links inside the custom block layout space nicely -->
                    <?php echo $display_links; ?>
                </span>
            </div>
            <a href="<?php echo home_url('/enquiry'); ?>" class="enroll-btn">Enquire Now</a>
        </div>
    </div>

<?php 
} 
wp_reset_postdata(); 
?>

</div>

<?php get_footer(); ?>
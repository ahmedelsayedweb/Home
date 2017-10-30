<?php
/**
 * Template Name: Page About Us Template
 * Template Post Type: page
 * The template for displaying Page About Us
 */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
    
<?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<?php get_footer(); ?>
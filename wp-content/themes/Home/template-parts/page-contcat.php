<?php
/**
 * Template Name: Page contact Template
 * Template Post Type: page
 * The template for displaying Page Home
 */
?>
<?php get_header(); ?>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_page_about = ot_get_option( 'title_page_about' );
	  $description_page_about = ot_get_option( 'description_page_about' );
	}
    ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="main-container col1-layout">
<div class="main">
<div class="container">
<div class="product-collateral col-xs-12 pull-right">
    <div class="add_info">
        <div class="mapss">
			<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo '<h3 class="floor-plans-label text-right">موقعنا</h3>'; 
						}elseif($lang == 'en'){
						echo '<h3 class="floor-plans-label text-right">location</h3>'; 
					};
				  	?> 
            
            <?php the_content();?>      </div>
        <div class="mapss" style="margin-top: 20px">
            <p class="descp">
                <i class="fa fa-phone"></i>
				<?php the_field('phone1'); ?>
            </p>
            <p class="descp">
                <i class="fa fa-phone"></i>
				<?php the_field('phone2'); ?>
            </p>
            <p class="descp">
                <i class="fa fa-phone"></i>
				<?php the_field('phone3'); ?>
            </p>
            <p class="descp">
                <i class="fa fa-envelope-o"></i>
				<?php the_field('email'); ?> 
			</p>
            <p class="descp">
                 <i class="fa fa-location-arrow"></i>
				<?php the_field('location'); ?> 
			</p>
        </div>
    </div>
</div>
    <div class="product-collateral col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

        <div class="add_info">
            <div class="mapss">
				<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo '<h3 class="floor-plans-label text-right">ارسل لنا رسالة</h3>'; 
						 echo do_shortcode('[contact-form-7 id="120" title="Contact Ar"]');
						}elseif($lang == 'en'){
						echo '<h3 class="floor-plans-label text-left">Contact Us</h3>';
						echo do_shortcode('[contact-form-7 id="121" title="Contact en"]');					
					};
				  	?>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<?php get_footer(); ?>
<?php
/**
 * Template Name: Page service Template
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
<div class="content-page">
	<?php
			$cats = [];
						$args = array(
								'post_type' => 'product',
								'posts_per_page' => 4,
						);
						$product_query = new WP_Query( $args );
							 ?>
						<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 1; ?>
							<?php while ($product_query->have_posts()) : $product_query->the_post(); 
			$categories = get_the_category();
			$cats = array_merge($cats, $categories);
			?>
			<?php endwhile; endif; ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="category-product">
				<div class="navbar nav-menu">
					<div class="navbar-collapse">
						<ul class="nav navbar-nav">
							<li>
								<div class="new_title pull-right">
									<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		echo '<h2>مشروعاتنا</h2>';
		}elseif($lang == 'en'){
		echo '<h2>Our Projects</h2>';
	};
	?> 
									
								</div>
							</li>
							<?php if (!empty($cats)){
								$temp = [];?>
							
							<?php
							$i = 0 ;
							foreach ($cats as $key => $cat) {
										$slug = $cat->slug;
										$name = $cat->name;
								$class = '';
								if ($i++ == 0){
									$class = ' active ';
								}		
									if(!in_array($slug, $temp)){
										$temp [] = $slug;
								?>
							<li class="<?php echo $class; ?>">
								<a href="#<?php echo $slug; ?>" data-toggle="tab"><?php echo $name; ?></a>
							</li>
							<?php }?>
								<?php }?>
								<?php }?>
						</ul>
					</div>
				</div>
<div class="product-bestseller">
<div class="product-bestseller-content">
<div class="product-bestseller-list">
<div class="tab-container">
	<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 0; ?>
			<?php while ($product_query->have_posts()) : $product_query->the_post();
				$class = '';
								if ($i++ == 0){
									$class = ' active ';
								}	
			$categories = get_the_category();
			$slug = '';
			foreach($categories  as $cat){
			if(isset($cat->slug)){
				$slug .= $cat->slug;
			}
			}
			?>
<div class="tab-panel <?php echo $class; ?>" id="<?php echo $slug; ?>">
<div class="category-products">
<ul class="products-grid">
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="<?php the_permalink(); ?>" class="product-image">
					<figure class="img-responsive">
						<img alt=" " src="<?php the_post_thumbnail_url(); ?>" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="link-quickview" href="<?php the_permalink(); ?>" data-product_id="3"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
				</div>
				<div class="item-content">
					<div class="item-price">
						<div class="price-box">
							<span class="regular-price"> <?php the_excerpt(); ?></span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart" href='<?php the_permalink(); ?>'>
									<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		echo '<span>التفاصيل</span>';
		}elseif($lang == 'en'){
		echo '<span>Details</span>';
	};
	?> 
							
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>
</ul>
</div>
</div>
	<?php $i++;
									?>
							
			<?php endwhile; endif; ?>
	
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
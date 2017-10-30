 <?php get_header(); ?>
<div id="magik-slideshow" style=" margin-top: 0 " class="magik-slideshow top-div">
<div class="container-fluid">
<div class="row">
<div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'  style="background: url(<?php bloginfo('template_directory'); ?>/uploads/LxuZNk9DCag72Z76snh4fnwsxudYJApx6cVhDXXf5YafdFA7wKvfFde3.jpg) ">
<div id='rev_slider_4' class='rev_slider fullwidthabanner'>
	<ul>
		<?php 
		if ( function_exists( 'ot_get_option' ) ) {			
		  $slides = ot_get_option( 'banner', array() );	
		  if ( ! empty( $slides ) ) {
			foreach( $slides as $slide ) {
			  echo ' <li data-transition="random" data-slotamount="7" data-masterspeed="1000"
			data-thumb="' . $slide['image'] . '">
			<img src="' . $slide['image'] . '" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat"/>
			<div class="info">
				<div class="tp-caption LargeTitle sfl  tp-resizeme " data-endspeed="500"
					 data-speed="500" data-start="1300" data-easing="Linear.easeNone"
					 data-splitin="none" data-splitout="none" data-elementdelay="0.1"
					 data-endelementdelay="0.1"
					 style="z-index:3;max-width:auto;max-height:auto;white-space:nowrap;font-family:"Droid Arabic Kufi";color:#002857 !important; padding: 3px 0 0"><span style="color:#002857">' . $slide['title'] . '</span>
				</div>
				<div class="tp-caption Title sft  tp-resizeme " data-endspeed="500" data-speed="500"
					 data-start="1450" data-easing="Power2.easeInOut" data-splitin="none"
					 data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
					 style="z-index:4;max-width:auto;max-height:auto;white-space:normal;font-family: "Droid Arabic Kufi";padding: 4px 10px; color:#222;">' . $slide['description'] . '</div>
				<div class="tp-caption sfb  tp-resizeme " data-endspeed="500" data-speed="500"
					 data-start="1500" data-easing="Linear.easeNone" data-splitin="none"
					 data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
					 style="z-index:4;max-width:auto;max-height:auto;white-space:nowrap;font-family:\'Droid Arabic Kufi\';margin-bottom: 15px;margin-top: -20px;
					 }">
					<a  href="' . $slide['link'] . '" class="buy-btn" target="_blank" data-b="">التفاصيل</a></div>
			</div>
		</li>';
			}
		  }
		}	
	  ?>
	</ul>	
	<div class="tp-bannertimer"></div>
</div>
</div>
</div>
</div>
<script type='text/javascript'>
jQuery(document).ready(function () {
"use strict";
jQuery('#rev_slider_4').show().revolution({
dottedOverlay: 'none',
delay: 5000,
startwidth: 1230,
startheight: 650,
hideThumbs: 200,
thumbWidth: 200,
thumbHeight: 50,
thumbAmount: 2,
navigationType: 'thumb',
navigationArrows: 'solo',
navigationStyle: 'round',
touchenabled: 'on',
onHoverStop: 'on',
swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,
spinner: 'spinner0',
keyboardNavigation: 'off',
navigationHAlign: 'center',
navigationVAlign: 'bottom',
navigationHOffset: 0,
navigationVOffset: 20,
soloArrowLeftHalign: 'left',
soloArrowLeftValign: 'center',
soloArrowLeftHOffset: 20,
soloArrowLeftVOffset: 0,
soloArrowRightHalign: 'right',
soloArrowRightValign: 'center',
soloArrowRightHOffset: 20,
soloArrowRightVOffset: 0,
shadow: 0,
fullWidth: 'on',
fullScreen: 'off',
stopLoop: 'off',
stopAfterLoops: - 1,
stopAtSlide: - 1,
shuffle: 'off',
autoHeight: 'off',
forceFullWidth: 'on',
fullScreenAlignForce: 'off',
minFullScreenHeight: 0,
hideNavDelayOnMobile: 1500,
hideThumbsOnMobile: 'off',
hideBulletsOnMobile: 'off',
hideArrowsOnMobile: 'off',
hideThumbsUnderResolution: 0,
hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
startWithSlide: 0,
fullScreenOffsetContainer: ''
});
});
</script>
</div>
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
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
<!-- featured category fashion -->
<div class="category-product">
<div class="navbar nav-menu">
<div class="navbar-collapse">
<ul class="nav navbar-nav" style="padding: 10px !important;">
<li>
<div class="new_title pull-right">
		<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		echo '<h2>تجارى و ادارى</h2>';
		}elseif($lang == 'en'){
		echo '<h2>Commercial and administrative</h2>';
	};
	?> 

</div>
</li>
</ul>
</div>
</div>
<!-- Tab panes -->
<div class="product-bestseller">
<div class="product-bestseller-content">
<div class="product-bestseller-list">
<div class="category-products">
<ul class="products-grid">
	<?php
	$lang = custom_get_current_lang();
	if ($lang == 'ar'){
		$term = get_term_by( 'slug', 'ar_commercial' , 'category' );
		}elseif($lang == 'en'){
		$term = get_term_by( 'slug', 'commercial-and-administrative' , 'category' );
	};
//	print_r($term);exit;
	$args = array( 'posts_per_page' => 4, 'tax_query' => array(
       array(
           'taxonomy' => 'category',
           'field' => 'slug',
           'terms' => $term->slug,
		   'include_children' => true, 
		   'operator' => 'IN'
      ),
   ), 'orderby' => 'post_date', 'order' => 'DESC', 'paged' => 1,'post_type' => 'product'
);	
//	print_r($args);exit;
						$product_query = new WP_Query( $args );
							 ?>
	<?php if ( $product_query->have_posts() ) :?>
			<?php $i = 0; ?>
			<?php while ($product_query->have_posts()) : $product_query->the_post();	
			$categories = get_the_category();
			$slug = ' ';
			foreach($categories  as $cat){
			if(isset($cat->slug)){
				$slug .= $cat->slug;
			}
			}
			?>
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
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>
<?php $i++;	?>
<?php endwhile; endif; ?>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div>
 <?php get_footer(); ?>
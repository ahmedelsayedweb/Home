<?php
/**
 * Template Name: Page Home Template
 * Template Post Type: page
 * The template for displaying Page Home
 */
?> 
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
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="category-product">
				<div class="navbar nav-menu">
					<div class="navbar-collapse">
						<ul class="nav navbar-nav">
							<li>
								<div class="new_title pull-right">
									<h2>مشروعاتنا</h2>
								</div>
							</li>
							<li class="pull-left active ">
								<a href="#cat-3" data-toggle="tab">مشروعات المعادي</a>
							</li>
							<li class="pull-left ">
								<a href="#cat-4" data-toggle="tab">مشروعات مدينة نصر</a>
							</li>
							<li class="pull-left ">
								<a href="#cat-5" data-toggle="tab">مشروعات السادس من اكتوبر</a>
							</li>
							<li class="pull-left ">
								<a href="#cat-6" data-toggle="tab">تجارى و ادارى</a>
							</li>
						</ul>
					</div>
				</div>
<div class="product-bestseller">
<div class="product-bestseller-content">
<div class="product-bestseller-list">
<div class="tab-container">
<div class="tab-panel  active  " id="cat-3">
<div class="category-products">
<ul class="products-grid">
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#"
				   title="وان قطامية" class="product-image">
					<figure class="img-responsive">
						<img alt="وان-قطامية" src="<?php bloginfo('template_directory'); ?>/uploads/snEiYEfaKLrDxxceb3bErvxtthmJNhCbhDHFtkh5uFLc5vvLXnPrmZFE.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="#"
							   data-product_id="3">وان قطامية</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#" title="وان قطامية">وان قطامية</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>يوفر موقع وان قطامية سهولة الوصول إلى جميع المناطق الرئيسية في القاهرة الكب ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="3"
						   href='#'>
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#"
				   title="ريحانا افينيو" class="product-image">
					<figure class="img-responsive">
						<img alt="ريحانا-افينيو" src="<?php bloginfo('template_directory'); ?>/uploads/cji3zYaeu4ZPbtRTigEwxadJJDZwCphD8Bzlg82pZXX6vs9fXVBexzPf.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="#"
							   data-product_id="4">ريحانا افينيو</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#"
					   title="ريحانا افينيو">ريحانا افينيو</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>تعتبر ريحانة افينيو واحدة من أهم 3 مشروعات لمعمار المرشدي في منطقة زهراء ال ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="4"
						   href='#'>
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="project/%d8%a8%d9%81%d8%a7%d8%b1%d9%8a%d8%a7-%d8%aa%d8%a7%d9%88%d9%86.html"
				   title="بفاريا تاون" class="product-image">
					<figure class="img-responsive">
						<img alt="بفاريا-تاون" src="<?php bloginfo('template_directory'); ?>/uploads/piWCJ4ExKB6ezDctfYdMBcwjdWf5lxjmJCithFCYWdXp3jcXFXmlJ6Yj.png" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="project/%d8%a8%d9%81%d8%a7%d8%b1%d9%8a%d8%a7-%d8%aa%d8%a7%d9%88%d9%86.html"
							   data-product_id="5">بفاريا تاون</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="project/%d8%a8%d9%81%d8%a7%d8%b1%d9%8a%d8%a7-%d8%aa%d8%a7%d9%88%d9%86.html"
					   title="بفاريا تاون">بفاريا تاون</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>مشروع بفاريا تاون يتمتع الكمبوند بتصميم ذو رؤية عصرية ومتعة بصرية تبهر كل م ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="5"
						   href='project/%d8%a8%d9%81%d8%a7%d8%b1%d9%8a%d8%a7-%d8%aa%d8%a7%d9%88%d9%86.html'>
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#" title="ريحانا بلازا" class="product-image">
					<figure class="img-responsive">
						<img alt="ريحانا-بلازا" src="<?php bloginfo('template_directory'); ?>/images/1.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="#" data-product_id="6">ريحانا بلازا</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#" title="ريحانا بلازا">ريحانا بلازا</a>
				</div>
				<div class="item-content">
					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>نبدع.. ننمى.. نطور. ليس فقط لخلق مساحة للسكن بل لخلق مساحة مفعمة بالحياة
									م ... </p>
							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="6"
						   href='#'>
							<span>التفاصيل</span>
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
<div class="tab-panel" id="cat-4">
<div class="category-products">
<ul class="products-grid">
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#"
				   title="دجلة لاند مارك" class="product-image">
					<figure class="img-responsive">
						<img alt="دجلة-لاند-مارك" src="<?php bloginfo('template_directory'); ?>/uploads/qPdZwuzNjnVWV4hNAMP2YRFXvX2cBbTMJgHaXywdkAef9xZFZAAR9l4P.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="link-quickview" href="#" data-product_id="11">دجلة لاند مارك</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#"
					   title="دجلة لاند مارك">دجلة لاند مارك</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>في مجال الإعمار يصبح العامل المشترك بين إنجازاتنا المتعددة وتاريخنا ًبخبرة  ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="11"
						   href='#'>
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="project/%d8%af%d8%ac%d9%84%d9%87-%d8%aa%d8%a7%d9%88%d8%b1%d8%b2.html"
				   title="دجله تاورز" class="product-image">
					<figure class="img-responsive">
						<img alt="دجله-تاورز" src="<?php bloginfo('template_directory'); ?>/uploads/uVEZY2hCz4lEJzAHZvP4sctZNy9eJ2ZMhByPHcluxPYsMTWi5VmWqmzp.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="project/%d8%af%d8%ac%d9%84%d9%87-%d8%aa%d8%a7%d9%88%d8%b1%d8%b2.html"
							   data-product_id="12">دجله تاورز</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="project/%d8%af%d8%ac%d9%84%d9%87-%d8%aa%d8%a7%d9%88%d8%b1%d8%b2.html"
					   title="دجله تاورز">دجله تاورز</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>يقــع مشروع دجلة تاورز فــى أكثــر مناطق القاهرة حيوية فــى قلــب مدينة نصر ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="12"
						   href='project/%d8%af%d8%ac%d9%84%d9%87-%d8%aa%d8%a7%d9%88%d8%b1%d8%b2.html'>
							<span>التفاصيل</span>
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

<div class="tab-panel   " id="cat-5">
<div class="category-products">
<ul class="products-grid">
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="project/LAKE-FRONT.html"
				   title="LAKE FRONT" class="product-image">
					<figure class="img-responsive">
						<img alt="LAKE-FRONT" src="<?php bloginfo('template_directory'); ?>/uploads/X9NMtNRs3Yt7LiixLDernWeDAkYraVB6tnwCExFlPZjBkytFcWffxHFc.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="project/LAKE-FRONT.html"
							   data-product_id="19">LAKE FRONT</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="project/LAKE-FRONT.html"
					   title="LAKE FRONT">LAKE FRONT</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>Lake Front

									من احدث مشروعاتنا بالسادس من اكتوبر حيث يتميز بالقرب من جامعه ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="19"
						   href='project/LAKE-FRONT.html'>
							<span>التفاصيل</span>
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

<div class="tab-panel   " id="cat-6">
<div class="category-products">
<ul class="products-grid">
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#"
				   title="حضانات" class="product-image">
					<figure class="img-responsive">
						<img alt="حضانات" src="<?php bloginfo('template_directory'); ?>/uploads/xRTz2RsDLpysEiCleHsRJ7pYJbdnyinyqAFNCPVjRgh5ZHtVZwAd9HP3.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="#"
							   data-product_id="15">حضانات</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#"
					   title="حضانات">حضانات</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>مواصفات التسليم&nbsp;

									نصف تشطيب +سور شجري

									البناء

									البناء علي 30% من ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="15"
						   href='#'>
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#"
				   title="مستشفي" class="product-image">
					<figure class="img-responsive">
						<img alt="مستشفي" src="<?php bloginfo('template_directory'); ?>/images/3.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="#"
							   data-product_id="16">مستشفي</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#"
					   title="مستشفي">مستشفي</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p> ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="16"
						   href='#'>
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#"
				   title="مدرسه" class="product-image">
					<figure class="img-responsive">
						<img alt="مدرسه" src="<?php bloginfo('template_directory'); ?>/uploads/DbvHDJ42dK6ittFbgLE85NFxMjlZZkaxluiAqhJzqKdim9hlaJM6Wc8k.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="#"
							   data-product_id="17">مدرسه</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#"
					   title="مدرسه">مدرسه</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>موصفات المشروع :&nbsp;

									نص تشطيب+سور مباني

									البناء

									​نسبه البناء 33%ل ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="17"
						   href='#'>
							<span>التفاصيل</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
	<div class="item-inner">
		<div class="item-img">
			<div class="item-img-info">
				<a href="#"
				   title="ادارى" class="product-image">
					<figure class="img-responsive">
						<img alt="ادارى" src="<?php bloginfo('template_directory'); ?>/uploads/ALHByFZTjkyWkwrLXNAgKuERgHL6yRWmXiqf4igfqETNJTRPRPN7f9PZ.jpg" style="width: 100%; height: 160px" >
					</figure>
				</a>
				<div class="box-hover">
					<ul class="add-to-links">
						<li>
							<a class="  link-quickview" href="#"
							   data-product_id="18">ادارى</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="item-info" style="height: 160px">
			<div class="info-inner">
				<div class="item-title">
					<a href="#"
					   title="ادارى">ادارى</a>
				</div>
				<div class="item-content">

					<div class="item-price">
						<div class="price-box">
							<span class="regular-price">
								<p>مبنى25000م وقابل للتقسيم&nbsp;
									10% تعاقد والباقي علي سنتين أو حتى4سنوات
									​ ... </p>

							</span>
						</div>
					</div>
					<div class="action">
						<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
						   title='' data-quantity="1" data-product_id="18"
						   href='#'>
							<span>التفاصيل</span>
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
<h2>تجارى و ادارى</h2>
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
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="item-inner">
	<div class="item-img">
		<div class="item-img-info">
			<a href="#"
			   title="حضانات" class="product-image">
				<figure class="img-responsive">
					<img alt="حضانات" src="<?php bloginfo('template_directory'); ?>/uploads/xRTz2RsDLpysEiCleHsRJ7pYJbdnyinyqAFNCPVjRgh5ZHtVZwAd9HP3.jpg" style="width: 100%; height: 160px"  >
				</figure>
			</a>
			<div class="box-hover">
				<ul class="add-to-links">
					<li>
						<a class=" link-quickview" href="#"
						   data-product_id="15">حضانات</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="item-info" style="height: 160px">
		<div class="info-inner">
			<div class="item-title">
				<a href="#"
				   title="حضانات">حضانات</a>
			</div>
			<div class="item-content">

				<div class="item-price">
					<div class="price-box">
						<span class="regular-price">
							<p>مواصفات التسليم&nbsp;

								نصف تشطيب +سور شجري

								البناء

								البناء علي 30% من ... </p>

						</span>
					</div>
				</div>
				<div class="action">
					<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
					   title='' data-quantity="1" data-product_id="15"
					   href='#'>
						<span>التفاصيل</span>
					</a>

				</div>
			</div>
		</div>
	</div>
</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="item-inner">
	<div class="item-img">
		<div class="item-img-info">
			<a href="#"
			   title="مستشفي" class="product-image">
				<figure class="img-responsive">
					<img alt="مستشفي" src="<?php bloginfo('template_directory'); ?>/images/1.jpg" style="width: 100%; height: 160px"  >
				</figure>
			</a>
			<div class="box-hover">
				<ul class="add-to-links">
					<li>
						<a class=" link-quickview" href="#"
						   data-product_id="16">مستشفي</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="item-info" style="height: 160px">
		<div class="info-inner">
			<div class="item-title">
				<a href="#"
				   title="مستشفي">مستشفي</a>
			</div>
			<div class="item-content">

				<div class="item-price">
					<div class="price-box">
						<span class="regular-price">
							<p> ... </p>

						</span>
					</div>
				</div>
				<div class="action">
					<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
					   title='' data-quantity="1" data-product_id="16"
					   href='#'>
						<span>التفاصيل</span>
					</a>

				</div>
			</div>
		</div>
	</div>
</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="item-inner">
	<div class="item-img">
		<div class="item-img-info">
			<a href="#"
			   title="مدرسه" class="product-image">
				<figure class="img-responsive">
					<img alt="مدرسه" src="<?php bloginfo('template_directory'); ?>/uploads/DbvHDJ42dK6ittFbgLE85NFxMjlZZkaxluiAqhJzqKdim9hlaJM6Wc8k.jpg" style="width: 100%; height: 160px"  >
				</figure>
			</a>
			<div class="box-hover">
				<ul class="add-to-links">
					<li>
						<a class=" link-quickview" href="#"
						   data-product_id="17">مدرسه</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="item-info" style="height: 160px">
		<div class="info-inner">
			<div class="item-title">
				<a href="#"
				   title="مدرسه">مدرسه</a>
			</div>
			<div class="item-content">

				<div class="item-price">
					<div class="price-box">
						<span class="regular-price">
							<p>موصفات المشروع :&nbsp;

								نص تشطيب+سور مباني

								البناء

								​نسبه البناء 33%ل ... </p>

						</span>
					</div>
				</div>
				<div class="action">
					<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
					   title='' data-quantity="1" data-product_id="17"
					   href='#'>
						<span>التفاصيل</span>
					</a>

				</div>
			</div>
		</div>
	</div>
</div>
</li>

<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
<div class="item-inner">
	<div class="item-img">
		<div class="item-img-info">
			<a href="#"
			   title="ادارى" class="product-image">
				<figure class="img-responsive">
					<img alt="ادارى" src="<?php bloginfo('template_directory'); ?>/uploads/ALHByFZTjkyWkwrLXNAgKuERgHL6yRWmXiqf4igfqETNJTRPRPN7f9PZ.jpg" style="width: 100%; height: 160px"  >
				</figure>
			</a>
			<div class="box-hover">
				<ul class="add-to-links">
					<li>
						<a class=" link-quickview" href="#"
						   data-product_id="18">ادارى</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="item-info" style="height: 160px">
		<div class="info-inner">
			<div class="item-title">
				<a href="#"
				   title="ادارى">ادارى</a>
			</div>
			<div class="item-content">

				<div class="item-price">
					<div class="price-box">
						<span class="regular-price">
							<p>مبنى25000م وقابل للتقسيم&nbsp;
								10% تعاقد والباقي علي سنتين أو حتى4سنوات
								 ... </p>

						</span>
					</div>
				</div>
				<div class="action">
					<a class="single_add_to_cart_button add_to_cart_button  product_type_simple ajax_add_to_cart button btn-cart"
					   title='' data-quantity="1" data-product_id="18"
					   href='#'>
						<span>التفاصيل</span>
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
</div>
</div>
</div>
</div>
</div>
</div>
 <?php get_footer(); ?>
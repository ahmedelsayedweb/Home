<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $linkedin = ot_get_option( 'linkedin' );
	  $title_about = ot_get_option( 'title_about' );
	  $title_footer = ot_get_option( 'title_footer' );
	  $call = ot_get_option( 'call' );
	  $email = ot_get_option( 'email' );
	  $address = ot_get_option( 'address' );
	  $call_w = ot_get_option( 'call_w' );
	  $description_about = ot_get_option( 'description_about' );
	  $description_footer = ot_get_option( 'description_footer' );
	  $images_footer = ot_get_option( 'images_footer' );
	  $link_footer = ot_get_option( 'link_footer' );
	}
    ?>
<footer>
<div class="footer-inner" id="footerid">
<div class="container">
<div class="row">
<div class="col-xs-12 col-lg-4">
<div class="footer-column-last">
<div class="newsletter-wrap">
<div class="mc4wp-form-fields">
	<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		echo '<span>راسلنا الان</span>';
		 echo do_shortcode('[contact-form-7 id="7" title="Contact form a Ar"]');
		}elseif($lang == 'en'){
		echo '<span>Contact Us</span>';
		echo do_shortcode('[contact-form-7 id="71" title="Contact form En"]'); 
	};
	?> 
</div>
<div class="clearfix"></div>
</div>
<div class="social">
	<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		echo '<h4>تابعنا</h4>';
		}elseif($lang == 'en'){
		echo '<h4>Follow us</h4>';
	};
	?> 
<ul>
<li class="pull-right facebook" >
<a target="_blank" href='<?php echo $facebook; ?>' style="border: 1px solid #666; border-radius: 50%; height: 28px; width:28px;" class="styy"></a>
</li>
<li class="pull-right twitter" >
<a target="_blank" href='<?php echo $twitter; ?>' style="border: 1px solid #666; border-radius: 50%; height: 28px; width:28px;" class="styy"></a>
</li>
<li class="pull-right linkedin" >
<a target="_blank" href='<?php echo $linkedin; ?>' style="border: 1px solid #666; border-radius: 50%; height: 28px; width:28px;" class="styy"></a>
</li>
<li class="pull-right instagram" >
<a target="_blank" href='<?php echo $instagram; ?>' style="border: 1px solid #666; border-radius: 50%; height: 28px; width:28px;" class="styy"></a>
</li>
<li class="clearfix"></li>

</ul>
</div>


</div>
</div>
<div class="col-sm-12 col-xs-12 col-lg-8 ">

<div class=" col-lg-4 footer-column pull-right text-right">
<aside id="text-2" class="widget widget_text">
	<h4><?php echo $title_about; ?></h4>
<div class="textwidget rtl">
	<?php echo $description_about; ?>
	<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		echo '<a style="color:#fff !important;" href="http://localhost/Home/en/about-us/">المزيد</a>';
		}elseif($lang == 'en'){
		echo '<a style="color:#fff !important;" href="http://localhost/Home/aboutar/">More</a>';
	};
	?> 
</div>
</aside>
</div>


<div class=" col-lg-4 footer-column text-right pull-right">
<aside id="text-3" class="widget widget_text">
	<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		echo '<h4>جديد من مشروعاتنا</h4>';
		}elseif($lang == 'en'){
		echo '<h4>New of our projects</h4>';
	};
	?> 
<div class="textwidget">
<a href="<?php echo $link_footer; ?>">
<img src="<?php echo $images_footer; ?>" class="img-responsive"/>
<h3><?php echo $title_footer; ?></h3>
</a>
<p><?php echo $description_footer; ?></p>
</div>
</aside>
</div>
</div>
</div>
</div>
</div>
<div class="footer-middle">
<div class="container">
<div class="row">
<div style="text-align:center">
<a class="logo_botm" href="home-page.html">
<img src="<?php echo $logo_image; ?>" alt="logo">
</a>
</div>
<address class="rtl">
<div class="col-sm-4">
<i class="fa fa-mobile"></i><span><?php echo $call; ?> - <?php echo $call_w; ?></span>
</div>
<div class="col-sm-5">
<i class="fa fa-map-marker"></i><span class="droid"><?php echo $address; ?></span>
</div>
<div class="col-sm-3">
<i class="fa fa-envelope"></i><span><?php echo $email; ?></span>
</div>
</address>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row text-center">
	<?php
  	$lang = custom_get_current_lang();
	if($lang == 'en'){
		echo '<div class="col-sm-12 col-xs-12 coppyright">2017 All rights reserved to psolvingegypt</div>';
		}elseif($lang == 'ar'){
		echo '<div class="col-sm-12 col-xs-12 coppyright">2017 جميع الحقوق محفوظة لدى psolvingegypt</div>';
	};
	?> 

</div>
</div>
</div>
</footer>
  
<?php wp_footer(); ?>

</body>
</html>

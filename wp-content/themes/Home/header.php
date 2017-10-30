 <!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $linkedin = ot_get_option( 'linkedin' );
	  $title_top = ot_get_option( 'title_top' );
	  $call = ot_get_option( 'call' );
	  $call_w = ot_get_option( 'call_w' );
	  $alhagz = ot_get_option( 'alhagz' );
	  $alhagz_write = ot_get_option( 'alhagz_write' );
	}
    ?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel='stylesheet' id='magikBolt-Fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A700%2C600%2C800%2C400&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0'
              type='text/css' media='all'/>
		<link rel="shortcut icon" type="image/ico" href="<?php echo $logo_image; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
         <?php wp_head(); ?>
        <script type='text/javascript'>
            var megamenu = {
            "effect": {
            "fade": {
            "in": {"animate": {"opacity": "show"}},
                    "out": {"animate": {"opacity": "hide"}}
            },
                    "slide": {
                    "in": {"animate": {"height": "show"}, "css": {"display": "none"}},
                            "out": {"animate": {"height": "hide"}}
                    }
            }, "fade_speed": "fast", "slide_speed": "fast", "timeout": "300"
            };
        </script>            
        <script>
            (function(i, s, o, g, r, a, m){i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function(){
            (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-86913655-1', 'auto');
            ga('send', 'pageview');
        </script>
        <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
    </head>
    <body class="home page page-id-193 page-template page-template-homepage page-template-homepage-php siteorigin-panels cms-index-index cms-bolt-home cms-home-page">
        <div id="page" class="page catalog-category-view">
            <header>
                <div class="header-container">
                    <div class="header-top  hidden-xs  no-print">
                        <div class="container">
                            <div class="row">
                                <!-- Header Language -->
                                <div class="col-xs-6 pull-left ">
                                    <!-- Header Top Links -->
                                    <div class="toplinks">
                                        <div class="top-cart-contain topss pull-right">
                                            <div class="social">
                                                <ul>
                                                    <li class="pull-left facebook">
                                                        <a target="_blank" href='<?php echo $facebook; ?>' class="styy"></a>
                                                    </li>
                                                    <li class="pull-left twitter">
                                                        <a target="_blank" href='<?php echo $twitter; ?>' class="styy"></a>
                                                    </li>
                                                    <li class="pull-left linkedin">
                                                        <a target="_blank" href='<?php echo $linkedin; ?>' class="styy"></a>
                                                    </li>
                                                    <li class="pull-left instagram">
                                                        <a target="_blank" href='<?php echo $instagram; ?>' class="styy"></a>
                                                    </li>
                                                    <li class="clearfix"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Header Top Links -->
                                </div>
                                <div class="col-xs-12 col-sm-6 text-right">
                                    <div class="welcome-msg hidden-xs pull-right">
                                       <?php echo $title_top; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="header-m">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
				<div class="search-box" >
					<h2 class="contact-number "><i class="fa fa-phone sh" ></i>
						<span class="desktop-version"><?php echo $call ?></span>
						<span class="outer-strip"></span>
					</h2>
				</div>
				<div class="search-box">
					<h2 class="contact-number">
						<i class="fa hidden-sm fa-whatsapp sh"></i>
						<span class="desktop-version"><?php echo $call_w ?></span>
						<span class="outer-strip"></span>
					</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block">
				<div class="mm-toggle-wrap">
					<div class="mm-toggle">
						<a class="mobile-toggle"><i class="fa fa-reorder"></i></a></div>
				</div>
				<div class="logo">
					<a  href="<?php bloginfo('url'); ?>"> 
						<img alt="logo" src="<?php echo $logo_image; ?>"> 
					</a>
				</div>
				<div class=" mopile-call">
					<h2 class="contact-number hidden-sm visible-xs hidden-lg hidden-md "><i
							class="fa fa-phone sh"></i>
						<a href="tel:01094956397">
						<span class="desktop-version"><?php echo $call; ?></span>
						</a>
						<span class="outer-strip"></span>
					</h2>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs no-print">
				<div class="top-cart-contain pull-right ">
					<div class="search-box" style="    margin-bottom: 0 !important;">
						<p style="text-align: right; white-space: nowrap;padding-right: 10px;height: 30px;margin-top: 6px"> <?php echo $alhagz; ?></p>
						<p style="direction: rtl; text-align:center; height: 20px;margin-top:-18px;"><?php echo $alhagz_write ?></p>
					</div>

				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</header>
			<nav class="no-print">
	<div class="container">
		<div class="nav-inner">
			<div class="mgk-main-menu no-print text-center">
				<div id="main-menu">
				<div class="col-md-2">
				   <?php
					if(is_active_sidebar('header')){
					dynamic_sidebar('header');
					}
					?>	
					</div>	
    <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo ' <ul id="menu-mainmenu" style="text-align: center" class="main-menu mega-menu no-print">
<li id="nav-menu-item-2172" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor   has-sub narrow ">
	<a href="http://localhost/Home" class="current active"><span>الرئيسية</span></a>
</li>
<li id="nav-menu-item-2172"	class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor   has-sub narrow ">
	<a href="http://localhost/Home/aboutar/"><span>من نحن</span></a>
</li>
<li id="nav-menu-item-2259"	class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
	<a href="http://localhost/Home/product_ar/" class=""><span>مشروعاتنا</span></a>
	</li>
	<li id="nav-menu-item-2258"
		class="menu-item menu-item-type-taxonomy menu-item-object-product_cat   wide  col-6  ">
		<a href="#" class=""><span>فيديوهاتنا</span></a>
	</li>
	<li id="nav-menu-item-2208" class="menu-item menu-item-type-post_type menu-item-object-page narrow">
	<a href="http://localhost/Home/contactar/" class=""><span>اتصل بنا</span></a>
	</li>
                        
          </ul> '; 
		}elseif($lang == 'en'){
		echo ' <ul id="menu-mainmenu" style="text-align: center" class="main-menu mega-menu no-print">
<li id="nav-menu-item-2172" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor  has-sub narrow ">
	<a href="http://localhost/Home" class=" current "><span>Home</span></a>
</li>
<li id="nav-menu-item-2172"	class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor   has-sub narrow ">
	<a href="http://localhost/Home/en/about-us" class=" current "><span>About Us</span></a>
</li>
<li id="nav-menu-item-2259"	class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
	<a href="http://localhost/Home/en/product/" class=""><span>Our Projects</span></a>
	</li>
	<li id="nav-menu-item-2258"
		class="menu-item menu-item-type-taxonomy menu-item-object-product_cat wide col-6">
		<a href="#" class=""><span>Our Videos</span></a>
	</li>
	<li id="nav-menu-item-2208" class="menu-item menu-item-type-post_type menu-item-object-page narrow">
	<a href="http://localhost/Home/en/contact-us/" class=""><span>Contact Us</span></a>
	</li>                
          </ul> '; 
	};
	?>         <!-- end header -->                
</div>
</div>
</div>
</div>
</nav>
</div>
        
/**************************************************************************
* Common js

**************************************************************************/
jQuery(document).ready(function() { 
	"use strict";
	 /* Navigation */
	jQuery("#nav > li").hover(function() {
		var el = jQuery(this).find(".level0-wrapper");
		el.hide();
		el.css("left", "0");
		el.stop(true, true).delay(150).fadeIn(300, "easeOutCubic");
	}, function() {
		jQuery(this).find(".level0-wrapper").stop(true, true).delay(300).fadeOut(300, "easeInCubic");
	});
	var scrolled = false;
	jQuery("#nav li.level0.drop-menu").mouseover(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul.level1').fadeIn(100);
		}
		return false;
	}).mouseleave(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul.level1').fadeOut(100);
		}
		return false;
	});
	jQuery("#nav li.level0.drop-menu li").mouseover(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul').css({
				top: 0,
				left: "165px"
			});
			var offset = jQuery(this).offset();
			if (offset && (jQuery(window).width() < offset.left + 325)) {
				jQuery(this).children('ul').removeClass("right-sub");
				jQuery(this).children('ul').addClass("left-sub");
				jQuery(this).children('ul').css({
					top: 0,
					left: "-167px"
				});
			} else {
				jQuery(this).children('ul').removeClass("left-sub");
				jQuery(this).children('ul').addClass("right-sub");
			}
			jQuery(this).children('ul').fadeIn(100);
		}
	}).mouseleave(function() {
		if (jQuery(window).width() >= 740) {
			jQuery(this).children('ul').fadeOut(100);
		}
	});
	/* Bestsell slider */
	jQuery("#bestsell-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [980, 2], // 3 items betweem 900px and 601px
		itemsTablet: [768, 2], //2 items between 600 and 0;
		itemsMobile: [360, 1],
		navigation: false,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true
	});
	/* Featured slider */
	jQuery("#featured-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [980, 2], // 3 items betweem 900px and 601px
		itemsTablet: [768, 2], //2 items between 600 and 0;
		itemsMobile: [360, 1],
		navigation: false,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true
	});
	/* Featured slider for version3 */
	jQuery("#featured-slider-fresh .slider-items").owlCarousel({
	items : 5, //10 items above 1000px browser width
	itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [600,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : false
    });

    /* Featured slider for version4 */
    jQuery("#featured-products-slider .slider-items").owlCarousel({
	items : 1, //10 items above 1000px browser width
	itemsDesktop : [1024,1], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
	itemsTablet: [600,1], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : false
    });
     
    /* New accessories-slider  */
     jQuery("#accessories-slider .slider-items").owlCarousel({
	items : 3, //10 items above 1000px browser width
	itemsDesktop : [1024,3], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
	itemsTablet: [640,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : true
    });
	/* New arrivals slider */
	jQuery("#new-arrivals-slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
		itemsTablet: [768, 2], //2 items between 600 and 0;
		itemsMobile: [360, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});

   /* New products slider */
	jQuery("#new-products-slider .slider-items").owlCarousel({
	items : 3, //10 items above 1000px browser width
	itemsDesktop : [1024,3], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
	itemsTablet: [640,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : true
   });


	/* Brand logo slider */
	jQuery("#brand-logo-slider .slider-items").owlCarousel({
		autoPlay: true,
		items: 6, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
		itemsTablet: [600, 2], //2 items between 600 and 0;
		itemsMobile: [320, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});

	jQuery("#brand-logo-sliderv4 .slider-items").owlCarousel({
	autoplay : true,
	items : 7, //10 items above 1000px browser width
	itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [640,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : false,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : true			
});
    
	/* Category desc slider */
	jQuery("#category-desc-slider .slider-items").owlCarousel({
		autoPlay: true,
		items: 1, //10 items above 1000px browser width
		itemsDesktop: [1024, 1], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
		itemsTablet: [600, 1], //2 items between 600 and 0;
		itemsMobile: [320, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});

	/* Related products slider default layout */
	jQuery("#related-products-slider-default .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [980, 2], // 3 items betweem 900px and 601px
		itemsTablet: [768, 2], //2 items between 600 and 0;
		itemsMobile: [360, 1],
		navigation: false,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true
	});
   
	/* Related products slider version2 */
	jQuery("#related-products-slider .slider-items").owlCarousel({
		items: 5, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [600,2], //2 items between 600 and 0;
	itemsMobile : [320,1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
    /* Related products slider version3*/
	jQuery("#related-products-slider-third .slider-items").owlCarousel({
     items : 5, //10 items above 1000px browser width
	itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [600,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : false
    });
    /* Related products slider version4*/
    jQuery("#related-products-slider-forth .slider-items").owlCarousel({
	items : 4, //10 items above 1000px browser width
	itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [640,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : true
   });
	/* Upsell products slider default layout*/
	jQuery("#upsell-products-slider-default .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [980, 2], // 3 items betweem 900px and 601px
		itemsTablet: [768, 2], //2 items between 600 and 0;
		itemsMobile: [360, 1],
		navigation: false,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true
	});
	/* Upsell products slider */
	jQuery("#upsell-products-slider .slider-items").owlCarousel({
		items: 5, //10 items above 1000px browser width
			itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [600,2], //2 items between 600 and 0;
	itemsMobile : [320,1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false
	});
	/* Upsell products slider version3*/
     jQuery("#upsell-products-slider-third .slider-items").owlCarousel({
items : 5, //10 items above 1000px browser width
	itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [600,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : false
   });

	/* Upsell products slider version4 */

    jQuery("#upsell-products-slider-forth .slider-items").owlCarousel({
	items : 4, //10 items above 1000px browser width
	itemsDesktop : [1024,4], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
	itemsTablet: [640,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : true
    });
	 /* testimonials slider */
    jQuery("#testimonials-slider .slider-items").owlCarousel({
        autoPlay: true,
        items: 1,
        itemsDesktop: [1024, 1],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [640, 1],
        itemsMobile: [390, 1],
        navigation: false,
        navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
        slideSpeed: 500,
        pagination: false

    });
    /* latest-blog-slider for version 3 */
    jQuery("#latest-blog-slider .slider-items").owlCarousel({
	items : 2, //10 items above 1000px browser width
	itemsDesktop : [1024,2], //5 items between 1024px and 901px
	itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
	itemsTablet: [600,2], //2 items between 600 and 0;
	itemsMobile : [360,1],
	navigation : true,
	navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
	slideSpeed : 500,
	pagination : false
    });
	/* Mobile menu */
	jQuery("#mobile-menu").mobileMenu({
		MenuWidth: 250,
		SlideSpeed: 300,
		WindowsMaxWidth: 767,
		PagePush: true,
		FromLeft: true,
		Overlay: true,
		CollapseMenu: true,
		ClassName: "mobile-menu"
	});
	/* side nav categories */
	if (jQuery('.subDropdown')[0]) {
		jQuery('.subDropdown').on("click", function() {
			jQuery(this).toggleClass('plus');
			jQuery(this).toggleClass('minus');
			jQuery(this).parent().find('ul').slideToggle();
		});
	}
	jQuery.extend(jQuery.easing, {
		easeInCubic: function(x, t, b, c, d) {
			return c * (t /= d) * t * t + b;
		},
		easeOutCubic: function(x, t, b, c, d) {
			return c * ((t = t / d - 1) * t * t + 1) + b;
		},
	});
	(function(jQuery) {
		jQuery.fn.extend({
			accordion: function() {
				return this.each(function() {
					function activate(el, effect) {
						jQuery(el).siblings(panelSelector)[(effect || activationEffect)](((effect == "show") ? activationEffectSpeed : false), function() {
							jQuery(el).parents().show();
						});
					}
				});
			}
		});
	})(jQuery);
	jQuery(function(jQuery) {
		jQuery('.accordion').accordion();
		jQuery('.accordion').each(function(index) {
			var activeItems = jQuery(this).find('li.active');
			activeItems.each(function(i) {
				jQuery(this).children('ul').css('display', 'block');
				if (i == activeItems.length - 1) {
					jQuery(this).addClass("current");
				}
			});
		});
	});
	/* Top Cart js */
	function slideEffectAjax() {
		jQuery('.top-cart-contain').mouseenter(function() {
			jQuery(this).find(".top-cart-content").stop(true, true).slideDown();
		});
		jQuery('.top-cart-contain').mouseleave(function() {
			jQuery(this).find(".top-cart-content").stop(true, true).slideUp();
		});
	}
	jQuery(document).ready(function() {
		slideEffectAjax();
	});
	/*  sticky header  */
	jQuery(window).scroll(function() {
		jQuery(this).scrollTop() > 55 ? jQuery("nav").addClass("sticky-header") : jQuery("nav").removeClass("sticky-header")
		jQuery(this).scrollTop() > 55 ? jQuery(".top-div").addClass("m-top") : jQuery(".top-div").removeClass("m-top")
		jQuery(this).scrollTop() > 55 ? jQuery(".header-m").addClass("sticky-header-m") : jQuery(".header-m").removeClass("sticky-header-m")
	});

    setInterval(function () {
        var zom = jQuery('#product-zoom');
        var fulres = jQuery('#fullResImage');
        var src= zom.attr('src');
        zom.attr('data-zoom-image', src);
        fulres.attr('src', src);
    },200);
});
/*  UItoTop */
jQuery.fn.UItoTop = function(options) {
	var defaults = {
		text: '',
		min: 200,
		inDelay: 600,
		outDelay: 400,
		containerID: 'toTop',
		containerHoverID: 'toTopHover',
		scrollSpeed: 1200,
		easingType: 'linear'
	};
	var settings = jQuery.extend(defaults, options);
	var containerIDhash = '#' + settings.containerID;
	var containerHoverIDHash = '#' + settings.containerHoverID;
	jQuery('body').append('<a href="#" id="' + settings.containerID + '">' + settings.text + '</a>');
	jQuery(containerIDhash).hide().on("click", function() {
		jQuery('html, body').animate({
			scrollTop: 0
		}, settings.scrollSpeed, settings.easingType);
		jQuery('#' + settings.containerHoverID, this).stop().animate({
			'opacity': 0
		}, settings.inDelay, settings.easingType);
		return false;
	}).prepend('<span id="' + settings.containerHoverID + '"></span>').hover(function() {
		jQuery(containerHoverIDHash, this).stop().animate({
			'opacity': 1
		}, 600, 'linear');
	}, function() {
		jQuery(containerHoverIDHash, this).stop().animate({
			'opacity': 0
		}, 700, 'linear');
	});
	jQuery(window).scroll(function() {
		var sd = jQuery(window).scrollTop();
		if (typeof document.body.style.maxHeight === "undefined") {
			jQuery(containerIDhash).css({
				'position': 'absolute',
				'top': jQuery(window).scrollTop() + jQuery(window).height() - 50
			});
		}
		if (sd > settings.min) jQuery(containerIDhash).fadeIn(settings.inDelay);
		else jQuery(containerIDhash).fadeOut(settings.Outdelay);
	});
};
/* mobileMenu */
var isTouchDevice = ('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0);
jQuery(window).on("load", function() {
	if (isTouchDevice) {
		jQuery('#nav a.level-top').on("click", function(e) {
			jQueryt = jQuery(this);
			jQueryparent = jQueryt.parent();
			if (jQueryparent.hasClass('parent')) {
				if (!jQueryt.hasClass('menu-ready')) {
					jQuery('#nav a.level-top').removeClass('menu-ready');
					jQueryt.addClass('menu-ready');
					return false;
				} else {
					jQueryt.removeClass('menu-ready');
				}
			}
		});
	}
	// jQuery().UItoTop();
});



// tabs js

jQuery()
.ready(function()
{
(function(element){
	$element = jQuery(element);
	itemNav = jQuery('.item-nav',$element);
	itemContent =jQuery('.pdt-content',$element);
	btn_loadmore = jQuery('.btn-loadmore',$element);
	ajax_url="http://www.magikcommerce.com/producttabs/index/ajax";
	catids = '39';
	label_allready = 'All Ready';
	label_loading = 'Loading ...';
	function setAnimate(el){
	$_items = jQuery('.item-animate',el);
	jQuery('.btn-loadmore',el).fadeOut('fast');
	$_items.each(function(i){
	jQuery(this).attr("style", "-webkit-animation-delay:" + i * 300 + "ms;"
		  + "-moz-animation-delay:" + i * 300 + "ms;"
		  + "-o-animation-delay:" + i * 300 + "ms;"
		  + "animation-delay:" + i * 300 + "ms;");
	if (i == $_items.size() -1) {
	  jQuery(".pdt-list", el).addClass("play");
	  jQuery('.btn-loadmore', el).fadeIn(i*0.3);
	}
	});
	}
	setAnimate(jQuery('.tab-content-actived',$element));
	
	itemNav.click(function(){
	var $this = jQuery(this);
	if($this.hasClass('tab-nav-actived')) return false;
	itemNav.removeClass('tab-nav-actived');
	$this.addClass('tab-nav-actived');
	var itemActive = '.'+$this.attr('data-href');
	itemContent.removeClass('tab-content-actived');
	jQuery(".pdt-list").removeClass("play");jQuery(".pdt-list .item").removeAttr('style');
	jQuery('.item',jQuery(itemActive, $element)).addClass('item-animate').removeClass('animated');
	jQuery(itemActive, $element).addClass('tab-content-actived');
	
	contentLoading = jQuery('.content-loading',jQuery(itemActive, $element));
	isLoaded = jQuery(itemActive, $element).hasClass('is-loaded');
	if(!isLoaded && !$(itemActive, $element).hasClass('is-loading')){
	jQuery(itemActive, $element).addClass('is-loading');
	contentLoading.show();
	pdt_type = $this.attr('data-type');
	catid = $this.attr('data-catid');
	orderby = $this.attr('data-orderby');
	jQuery.ajax({
	  type: 'POST',
	  url: ajax_url,
	  data:{
		  numberstart: 0,
		  catid: catid,
		  orderby: orderby,
		  catids: catids,
		  pdt_type: pdt_type
	  },
	  success: function(result){
		  if(result.listProducts !=''){
			  jQuery('.pdt-list',$(itemActive, $element)).html(result.listProducts);
			  jQuery(itemActive, $element).addClass('is-loaded').removeClass('is-loading');
			  contentLoading.remove();
			  setAnimate($(itemActive, $element));
			  setResult($(itemActive, $element));
		  }
	  },
	  dataType:'json'
	});
	}else{
	jQuery('.item', itemContent ).removeAttr('style');
	setAnimate(jQuery(itemActive, $element));
	}
});
function setResult(content){
	jQuery('.btn-loadmore', content).removeClass('loading');
	itemDisplay = jQuery('.item', content).length;
	jQuery('.btn-loadmore', content).parent('.pdt-loadmore').attr('data-start', itemDisplay);
	total = jQuery('.btn-loadmore', content).parent('.pdt-loadmore').attr('data-all');
	loadnum = jQuery('.btn-loadmore', content).parent('.pdt-loadmore').attr('data-loadnum');
	if(itemDisplay < total){
	jQuery('.load-number', content).attr('data-total', (total - itemDisplay));
	if((total - itemDisplay)< loadnum ){
	jQuery('.load-number',  content).attr('data-more', (total - itemDisplay));
	}
	}
	if(itemDisplay == total){
	jQuery('.load-number', content).css({display: 'none'});
	jQuery('.btn-loadmore', content).addClass('loaded');
	jQuery('.load-text', content).text(label_allready);
	}else{
	jQuery('.load-text', content).text(label_loadmore);
	}
	}
	btn_loadmore.on('click.loadmore', function(){
	var $this = $(this);
	itemActive = '.'+$this.parent('.pdt-loadmore').attr('data-href');
	jQuery(".pdt-list").removeClass("play");jQuery(".pdt-list .item").removeAttr('style');
	jQuery('.item',jQuery(itemActive, $element)).addClass('animated').removeClass('item-animate');
	if ($this.hasClass('loaded') || $this.hasClass('loading')){
	return false;
	}else{
	$this.addClass('loading'); jQuery('.load-text', $this).text(label_loading);
	numberstart = $this.parent('.pdt-loadmore').attr('data-start');
	catid = $this.parent('.pdt-loadmore').attr('data-catid');
	pdt_type = $this.parent('.pdt-loadmore').attr('data-type');
	orderby = $this.parent('.pdt-loadmore').attr('data-orderby');
	jQuery.ajax({
	type: 'POST',
	url: ajax_url,
	data:{
	numberstart: numberstart,
	catid: catid,
	orderby: orderby,
	catids: catids,
	pdt_type: pdt_type
	},
	success: function(result){
	if(result.listProducts !=''){
	animateFrom = $('.item',jQuery(itemActive, $element)).size();
	$(result.listProducts).insertAfter(jQuery('.item',$(itemActive, $element)).nextAll().last());
	setAnimate(jQuery(itemActive, $element));
	setResult(jQuery(itemActive, $element));
	}
	},
	dataType:'json'
	});
	}
	return false;
	});
	})('#magik_producttabs1');
});






//countdown js filter
jQuery('.timer-grid').each(function(){
    var countTime=jQuery(this).attr('data-time');jQuery(this).countdown(countTime,function(event){jQuery(this).html('<div class="day box-time-date"><span class="number">'+event.strftime('%D')+' </span>days</div> <div class="hour box-time-date"><span class="number">'+event.strftime('%H')+'</span>Hrs</div><div class="min box-time-date"><span class="number">'+event.strftime('%M')+'</span> MINS</div> <div class="sec box-time-date"><span class="number">'+event.strftime('%S')+' </span>SEC</div>');});
});

   

  /*wishlist js*/
jQuery(document).off("click", ".link-wishlist");

jQuery(document).on("click", ".link-wishlist", function() {

    var b = yith_wcwl_plugin_ajax_web_url;
    var opts = {
        add_to_wishlist: jQuery(this).data("product-id"),
        product_type: jQuery(this).data("product-type"),
        action: "add_to_wishlist"
    };
    mgk_yith_ajax_wish_list(jQuery(this), b, opts);
    return false;
});

mgk_yith_ajax_wish_list = function(obj, ajaxurl, opts) { 
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
        data: "product_id=" + opts.add_to_wishlist + "&" + jQuery.param(opts),
        dataType: 'json',
        success: function(resp) {
            response_result = resp.result,
                response_message = resp.message;
            //alert(response_result+"----"+response_message);
            jQuery('body .page div#notification').remove();
            var ntop = jQuery('#wpadminbar') !== undefined ? jQuery('#wpadminbar').height() : 10;
            if (response_result == 'true') {
            	
                if (js_bolt_wishvar.MGK_ADD_TO_WISHLIST_SUCCESS_TEXT !== undefined)
                    jQuery('<div id="notification" class="row"><div class="success">' + js_bolt_wishvar.MGK_ADD_TO_WISHLIST_SUCCESS_TEXT + '<img class="close" alt="" src="' + js_bolt_wishvar.IMAGEURL + '/close.png"></div></div>').prependTo('body .page');
                jQuery('body .page div#notification').css('top', ntop + 'px');
                jQuery('body .page div#notification > div').fadeIn('show');
                jQuery('html,body').animate({
                    scrollTop: 0
                }, 300);
            } else if (response_result == 'exists') {
                if (js_bolt_wishvar.MGK_ADD_TO_WISHLIST_EXISTS_TEXT !== undefined)
                    jQuery('<div id="notification" class="row"><div class="success">' + js_bolt_wishvar.MGK_ADD_TO_WISHLIST_EXISTS_TEXT + '<img class="close" alt="" src="' + js_bolt_wishvar.IMAGEURL + '/close.png"></div></div>').prependTo('body .page');
                jQuery('body .page div#notification').css('top', ntop + 'px');
                jQuery('body .page div#notification > div').fadeIn('show');
                jQuery('html,body').animate({
                    scrollTop: 0
                }, 300);

            }
            setTimeout(function() {
                removeNft();
            }, 10000);

        }
    });
};

var removeNft = function() {
    if (jQuery("#notification") !== undefined)
        jQuery("#notification").remove();
};


   /*add to compare js */    

jQuery(document).off('click', 'a.compare');
jQuery(document).on('click', 'a.compare', function(e) {

        e.preventDefault();
        var button = jQuery(this),
            data = {
                action: yith_woocompare.actionadd,
                id: button.data('product_id'),
                context: 'frontend'
            },
            widget_list = jQuery('.yith-woocompare-widget ul.products-list');

        // add ajax loader
        if( typeof jQuery.fn.block != 'undefined' ) {
            button.block({message: null, overlayCSS: { background: '#fff url(' + yith_woocompare.loader + ') no-repeat center', backgroundSize: '16px 16px', opacity: 0.6}});
            widget_list.block({message: null, overlayCSS: { background: '#fff url(' + yith_woocompare.loader + ') no-repeat center', backgroundSize: '16px 16px', opacity: 0.6}});
        }

        jQuery.ajax({
            type: 'post',
            url: yith_woocompare.ajaxurl.toString().replace( '%%endpoint%%', yith_woocompare.actionadd ),
            data: data,
            dataType: 'json',
            success: function(response){

                if( typeof jQuery.fn.block != 'undefined' ) {
                    button.unblock();
                    widget_list.unblock()
                }

                button.addClass('added')
                        .attr( 'href', response.table_url )
                        .text( yith_woocompare.added_label );

                // add the product in the widget
                widget_list.html( response.widget_table );

                if ( yith_woocompare.auto_open == 'yes')
                    jQuery('body').trigger( 'yith_woocompare_open_popup', { response: response.table_url, button: button } );
            }
        });
    });



    jQuery(document).on('click', 'a.compare.added', function (ev) {
        ev.preventDefault();

        var table_url = this.href;

        if (typeof table_url == 'undefined')
            return;

        jQuery('body').trigger('yith_woocompare_open_popup', {response: table_url, button: jQuery(this)});
    });


/* category style js */
jQuery(function() {
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent > ul").hide();
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent.current-cat-parent > ul").show();
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent.current-cat.cat-parent > ul").show();
  jQuery(".widget_product_categories ul > li.cat-item.cat-parent").click(function() {
    if (jQuery(this).hasClass('current-cat-parent')) {
      var li = jQuery(this).closest('li');
      li.find(' > ul').slideToggle('fast');
      jQuery(this).toggleClass("close-cat");
    } else {
      var li = jQuery(this).closest('li');
      li.find(' > ul').slideToggle('fast');
      jQuery(this).toggleClass("cat-item.cat-parent open-cat");
    }
  });
  jQuery(".widget_product_categories ul.children li.cat-item,ul.children li.cat-item > a").click(function(e) {
    e.stopPropagation();
  });
});
   
/*-------- tooltip js (version3 )-------------------*/	
jQuery(document).ready(function() {
    jQuery('[data-toggle="tooltip"]').tooltip();
}); 


/*-------- version 4menu -------------*/

/* Mega Menu */
	jQuery('.mega-menu-title').on('click',function(){
		if(jQuery('.mega-menu-category').is(':visible')){
			jQuery('.mega-menu-category').slideUp();
		} else {
			jQuery('.mega-menu-category').slideDown();
		}
	});
    
    
    jQuery('.mega-menu-category .nav > li').hover(function(){
    	jQuery(this).addClass("active");
		jQuery(this).find('.popup').stop(true,true).fadeIn('slow');
    },function(){
        jQuery(this).removeClass("active");
		jQuery(this).find('.popup').stop(true,true).fadeOut('slow');
    });
    
    jQuery('.cms-home-page .mega-menu-category .nav > li.more-menu').stop().slideDown();
    
	jQuery('.mega-menu-category .nav > li.view-more-cat').on('click',function(e){
		if(jQuery('.mega-menu-category .nav > li.more-menu').is(':visible')){
			jQuery('.mega-menu-category .nav > li.more-menu').stop().slideUp();
			jQuery(this).find('a').text('More');
		} else { 
			jQuery('.mega-menu-category .nav > li.more-menu').stop().slideDown();
			jQuery(this).find('a').text('Close menu');
			 jQuery(this).find('a').addClass('menu-hide');
			
		}
		e.preventDefault();
	});

	/* variation image change js */

	 jQuery(document).ready(function() {
	
   jQuery(".product-shop.layoutall .variations_form .variations select").click(function () {        
    var varimg= jQuery(".product-full a").attr('href');      	
    
     jQuery(".zoomWindowContainer div").css("background-image","url("+varimg+")");  
   
   });
    }); 


	
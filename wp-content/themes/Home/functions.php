<?php
//added by Elsayed to include translate array of arabic
include_once 'translate.php';
require_once('wp-bootstrap-navwalker.php');
require_once( get_template_directory() .'/inc/theme-option/option-tree/ot-loader.php');
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_pages', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_true' );
//add featured image
add_theme_support('post-thumbnails');
/*
** Function to Add custom Styles
** Added By @Ahmed ELsayed
** wp_enqueue_style()
*/
function agus_add_styles() {	
    wp_enqueue_style('dashicoens',get_template_directory_uri().'/css/dashicons.mina94e.css?ver=4.4.1');
    wp_enqueue_style('colorboiexa94e',get_template_directory_uri().'/css/colorboxa94e.css?ver=4.4.1');
    wp_enqueue_style('widgwetua94e',get_template_directory_uri().'/css/widgeta94e.css?ver=4.4.1');  
    wp_enqueue_style('minqea94ye',get_template_directory_uri().'/css/bootstrap.mina94e.css?ver=4.4.1');
    wp_enqueue_style('fontrawtesome',get_template_directory_uri().'/fontawesome/css/font-awesomea94e.css?ver=4.4.1');  
    wp_enqueue_style('simweprle',get_template_directory_uri().'/css/simple-line-icons07c7.css?ver=4.4.1');
    wp_enqueue_style('caroutresela9ee',get_template_directory_uri().'/css/owl.carousela94e.css?ver=4.4.1');
    wp_enqueue_style('themwrea94we',get_template_directory_uri().'/css/owl.themea94e.css?ver=4.4.1');
    
    wp_enqueue_style('stylfge',get_template_directory_uri().'/css/style.css?ver=5.4.3');
//    wp_enqueue_style('bloggfhs7661q',get_template_directory_uri().'/css/blogs7661...css?ver=5.4.2');
    
    wp_enqueue_style('revslkidera8ckk1',get_template_directory_uri().'/css/revslidera8c1.css?ver=5.4.9');
    wp_enqueue_style('style2c225m',get_template_directory_uri().'/css/style2c225.css?ver=5.4.1');
    wp_enqueue_style('mgk_1mennu',get_template_directory_uri().'/css/mgk_menu.css');
    
    wp_enqueue_style('jqu2erby',get_template_directory_uri().'/css/jquery.mobile-menua94e.css?ver=4.4.1');
    wp_enqueue_style('cust3oma94ve',get_template_directory_uri().'/css/customa94e.css?ver=4.4.1');
    wp_enqueue_style('basi4cc',get_template_directory_uri().'/css/form-basic.min677a.css?ver=3.0.9');
    $lang = custom_get_current_lang();
    if($lang == 'en'){
        wp_enqueue_style('en', get_template_directory_uri() . '/css/style-en.css');        
    }
}

/*
** Function to Add custom Scripts
** Added By @Ahmed ELsayed
** wp_enqueue_script()
*/
function agus_add_scripts() {
	
//	wp_deregister_script('jquery'); 
//	wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true); 
//	wp_enqueue_script('jquery');
	
	wp_enqueue_script('jque5ryx',   get_template_directory_uri().'/js/jquery.js',array(),false,true);
    wp_enqueue_script('migrat6e',    get_template_directory_uri().'/js/jquery-migrate.min1576.js?ver=1.2.1',array(),false,true);
    wp_enqueue_script('minc274l5',    get_template_directory_uri().'/js/hoverIntent.minc245.js?ver=1.8.1',array(),false,true);
    wp_enqueue_script('bootstrap',    get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true);
    wp_enqueue_script('jqu8erya',   get_template_directory_uri().'/js/jquery.cookie.min330a.js?ver=1.4.1',array(),false,true);
    wp_enqueue_script('migr9ates',    get_template_directory_uri().'/js/frontendf007.js?ver=1.0',array(),false,true);
//    wp_enqueue_script('min11c245d',    get_template_directory_uri().'/js/commond22c.js?ver=4.4.4',array(),false,true);
    wp_enqueue_script('jque22ryf',   get_template_directory_uri().'/js/revslider.js',array(),false,true);
    wp_enqueue_script('migra33teg',    get_template_directory_uri().'/js/jquery.bxslider.mina94e.js?ver=4.4.1',array(),false,true);
    wp_enqueue_script('minc24445h',    get_template_directory_uri().'/js/jquery.flexslidera94e.js?ver=4.4.1',array(),false,true);
    wp_enqueue_script('migra55tej',    get_template_directory_uri().'/js/jquery.mobile-menu.mina94e.js?ver=4.4.1',array(),false,true);
//    wp_enqueue_script('minc66245k',    get_template_directory_uri().'/js/mgk_menu...js',array(),false,true);
	wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js');
	wp_script_add_data('html5shiv','conditional','lt IE 9');
	
}
/*
** Add menu support
** Added By @Ahmed ELsayed
*/
function custom_menu(){

	//register_nav_menu('bootstrap-menu', __('Navigation Bor'));
	register_nav_menus( array(
	'bootstrap-menu' => 'Navigation Bor',
	'footer_menu' => 'Footer Menu',
) );
}
function Ahmed_extend_excerpt($length){
	return 10;
}
add_filter('excerpt_length','Ahmed_extend_excerpt');
function Ahmed_excerpt_change_dots($more){
	return '...';
}
function register_my_menus() {
    
    register_nav_menus(array(
    'header-location' => 'header-menu'  
       
    ));
}
add_action('init','register_my_menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');



add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
 
function add_login_logout_link($items, $args) {
 
        if ( $args->theme_location == 'primary-menu' ) {       
 
        ob_start();
 
        wp_loginout('index.php');
 
        $loginoutlink = ob_get_contents();
 
        ob_end_clean();
 
        $items .= '<li>'. $loginoutlink .'</li>';
    }
 
    return $items;
 
}

add_filter('footer_menu','add_menuclass');

 
function copy_post_metas( $metas ) {
    return array_merge( $metas, array( 'my_post_meta' ) );
}
add_filter( 'pll_copy_taxonomies', 'copy_tax', 10, 2 );
 
function copy_tax( $taxonomies, $sync ) {
    $taxonomies[] = 'my_custom_tax';
    return $taxonomies;
}
add_filter( 'pll_translation_url', 'check_archive_translation', 10, 2 );
 
function check_archive_translation( $url, $lang ) {
    global $wp_query;
    $qv = $wp_query->query;
 
    if ( is_month() ) {
        $posts = get_posts( array(
            'lang'     => $lang,
            'year'     => $qv['year'],
            'monthnum' => $qv['monthnum'],
        ) );
        if ( empty( $posts ) ) {
            return null;
        }
    }
    return $url;
}
//add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 2 );
 
function add_cpt_to_pll( $post_types, $is_settings ) {
    if ( $is_settings ) {
        // hides 'my_cpt' from the list of custom post types in Polylang settings
        unset( $post_types['my_cpt'] );
    } else {
        // enables language and translation management for 'my_cpt'
        $post_types['my_cpt'] = 'my_cpt';
    }
    return $post_types;
}
//add_filter( 'pll_get_taxonomies', 'add_tax_to_pll', 10, 2 );
 function add_tax_to_pll( $taxonomies, $is_settings ) {
    if ( $is_settings ) {
        unset( $taxonomies['my_tax'] );
    } else {
        $taxonomies['my_tax'] = 'my_tax';
    }
    return $taxonomies;
}
add_filter( 'pll_redirect_home', '__return_false' );
add_theme_support( 'customize-selective-refresh-widgets' );
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

/*
** Add Actions
** Added By @Ahmed ELsayed
** add_action()
*/

add_action( 'wp_enqueue_scripts', 'agus_add_styles' );
add_action( 'wp_enqueue_scripts', 'agus_add_scripts' );

register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="footer-section__title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="footer-section__title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Header',
'id' => 'header',
'description' => 'Appears in the header area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
) );
function my_post_templater($template){
  if( !is_single() )
    return $template;
  global $wp_query;
  $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
  return empty( $c_template ) ? $template : $c_template;
}

add_filter( 'template', 'my_post_templater' );

function give_my_posts_templates(){
  add_post_type_support( 'post', 'page-attributes' );
}

add_action( 'init', 'give_my_posts_templates' );
//added by Elsayed to translate to arabic
function agus_change_translate_text( $translated_text ) {
    $lang = custom_get_current_lang();
    $return_item = $translated_text;
    $transalte_items = $GLOBALS['transalte_items'];
    if($lang == 'ar'){
        if(isset($transalte_items[$translated_text])){
            $return_item = $transalte_items[$translated_text];
        }
    }
    return $return_item;
}
add_filter( 'gettext', 'agus_change_translate_text', 20 );
//added by Elsayed to get current language
function custom_get_current_lang(){
    $lang = ICL_LANGUAGE_CODE;
    return $lang;
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );
//Create extra fields called Altnative Text and Custom Classess
function my_extra_gallery_fields( $args, $attachment_id, $field ){
    $args['alt'] = array('type' => 'text', 'label' => 'Altnative Text', 'name' => 'alt', 'value' => get_field($field . '_alt', $attachment_id) ); // Creates Altnative Text field
    $args['class'] = array('type' => 'text', 'label' => 'Custom Classess', 'name' => 'class', 'value' => get_field($field . '_class', $attachment_id) ); // Creates Custom Classess field
    return $args;
}
add_filter( 'acf_photo_gallery_image_fields', 'my_extra_gallery_fields', 10, 3 );

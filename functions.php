<?php
/**
 * horse functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package horse
 */

if ( ! function_exists( 'horse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function horse_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on horse, use a find and replace
	 * to change 'horse' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'horse', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'horse' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'horse_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	function my_nav_wrap() {
  $wrap  = '
 
	<ul id="%1$s" class="%2$s">';
	  $wrap .= '
	 
	<li class="hidden-xs"><a href="/"><i class="fa fa-home"></i></a></li>
	 
	 
	';
	  $wrap .= '%3$s';
	  $wrap .= '</ul>
	 
	 
	';
	  return $wrap;
	}
}
endif;
add_action( 'after_setup_theme', 'horse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function horse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'horse_content_width', 640 );
}
add_action( 'after_setup_theme', 'horse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function horse_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'horse' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'horse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'horse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function horse_scripts() {
	wp_enqueue_style( 'horse-style', get_stylesheet_uri() );

	wp_enqueue_script( 'horse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'horse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'horse_scripts' );

wp_enqueue_style( 'horse-style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css',array(),'3.3.4' );
wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome-4.3.0/css/font-awesome.min.css',array(),'4.0.3' );
 
if( !is_admin()){
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery.min.js', false,'1.10.2',true);
    wp_enqueue_script('jquery');
}
wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true );
wp_enqueue_script( 'horse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
wp_enqueue_script( 'horse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom-js.js', array(), '1.0', true );
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * navigation bootstrap
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

register_nav_menus( array(
    'secondary' => esc_html__( 'Secondary', 'horse' ),
) );

function new_excerpt($more)
{
    global $post;
    return '...<a class="btn btn-danger btn-readmore" href="'.get_permalink($post->ID).'">Read More</a>';
}
add_filter('excerpt_more','new_excerpt');

/* add theme option*/
add_filter('ot_show_pages','__return_false');
add_filter('ot_show_new_layout','__return_false');
add_filter('ot_theme_mode','__return_true');
include_once('option-tree/ot-loader.php');
include_once('option-tree/theme-options.php');

<?php
/**
 * Little Fox functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Little_Fox
 */

if ( ! function_exists( 'littlefox_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function littlefox_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Little Fox, use a find and replace
	 * to change 'littlefox' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'littlefox', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'littlefox' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'littlefox_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'littlefox_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function littlefox_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'littlefox_content_width', 640 );
}
add_action( 'after_setup_theme', 'littlefox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function littlefox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'littlefox' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'littlefox_widgets_init' );

// Register Custom Bootstrap Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/**
 * Enqueue scripts and styles.
 */
function littlefox_scripts() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' ); // normalize.css
  wp_enqueue_style( 'littlefox-bulma', get_template_directory_uri() . '/assets/css/bulma.css' ); // Bulma
  wp_enqueue_style( 'littlefox-skeleton', get_template_directory_uri() . '/assets/css/skeleton.css'); // skeleton.css
  wp_enqueue_style( 'littlefox-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' ); // Bootstrap
  wp_enqueue_style( 'littlefox-style', get_stylesheet_uri() ); // style.css
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css'); // font-awesome


  wp_deregister_script('jquery'); // deregister WP default jquery ver1.2.1
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js'); // register current jquery ver2.2.0
  wp_enqueue_script( 'jquery' ); // enqueue jquery 2.2.0  

  wp_enqueue_script( 'images_loaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), true); // enqueue imagesLoaded
  //wp_enqueue_script( 'images_loaded' );
 
  wp_enqueue_script( 'wookmark', get_template_directory_uri() . '/js/wookmark.js', array('jquery', 'images_loaded'), true); // eqnueue Wookmark
  //wp_enqueue_script( 'wookmark' );
  
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true); 
  
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true); // register Bootstrap JS

  
	wp_enqueue_script( 'littlefox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'littlefox-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'littlefox_scripts' );

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
* Replaces the excerpt "more" text by a link.
*/
function new_excerpt_more($more) {
  global $post;
  return '... <a class="moretag" href="' . get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// METABOXES

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object
 *
 * @return bool             True if metabox should show
 */

$frontpage_id = get_option( 'page_on_front' );
$options = get_post_meta($frontpage_id, 'options', true );
if((is_array($options) && in_array('portfolio', $options)) || (is_string($options) && $options == 'portfolio') ) {
  
  /*
 * Define the metabox and field configurations.
 */
  add_action( 'cmb2_admin_init', 'lf_register_main_page_portfolio_metabox' );
  /**
 * Hook in and add a metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function lf_register_main_page_portfolio_metabox() {
  $prefix = 'lf_';
  
  /**
	 * Sample metabox to demonstrate each field type included
	 */
  $lf_mp_portfolio = new_cmb2_box( array(
    'id'            => $prefix . 'metabox',
    'title'         => __( 'Main Page Portfolio Images', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'show_on_cb' => $prefix . 'show_if_front_page', // function should return a bool value
    'context'      => 'normal',
    'priority'     => 'high',
    // 'show_names' => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // true to keep the metabox closed by default
    // 'classes'    => 'extra-class', // Extra cmb2-wrap classes
    // 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
  ) ); 
  
  // Portfolio Section Title
  $lf_mp_portfolio->add_field( array(
    'name'         => __( 'Title', 'cmb2' ),
    'desc'         => __( 'The title of the portfolio section on the main page ("Recent Work", "Our Latest Images").', 'cmb2' ),
    'id'           => $prefix . 'mp_portfolio_title',
    'type'         => 'text',
    'repeatable'   => false
  ) );
  
  // Image upload/selector
  $lf_mp_portfolio->add_field( array(
    'name'         => __( 'Images', 'cmb2' ),
    'desc'         => __( 'Upload or add multiple images to the portfolio section of the main page.', 'cmb2' ),
    'id'           => $prefix . 'mp_portfolio_images',
    'type'         => 'file_list',
    'preview_size' => array( 150, 150 ), // Default: array( 50, 50 )
  ) );
  
  
}

 
  
}
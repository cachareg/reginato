<?php
/**
 * Catalog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Catalog
 */

if ( ! function_exists( 'catalog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function catalog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Catalog, use a find and replace
	 * to change 'catalog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'catalog', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'catalog' ),
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
	add_theme_support( 'custom-background', apply_filters( 'catalog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'catalog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function catalog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'catalog_content_width', 640 );
}
add_action( 'after_setup_theme', 'catalog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function catalog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'catalog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'catalog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'catalog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function catalog_scripts() {
	wp_enqueue_style( 'catalog-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-theme-css', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'hexagons-css', get_template_directory_uri() . '/css/hexagons.css' );
	
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-1.12.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'seng-2016-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/parallax.min.js', array(), '20151215', true );
	wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/js/jquery.nav.js', array(), '20151215', true );
	wp_enqueue_script( 'tweenmax-js', get_template_directory_uri() . '/js/TweenMax.js', array(), '20151215', true );
	wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/js/jquery.gsap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'maskinput-js', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '20151215', true );
	wp_enqueue_script( 'seng-js', get_template_directory_uri() . '/js/seng2016.js', array(), '20160714', true );

	wp_enqueue_style( 'droidsans-css', 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700' );
	wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/css/fonts.css' );

	wp_enqueue_script( 'catalog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'catalog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'catalog_scripts' );

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

add_filter( 'wpmem_login_form_args',    'remove_wpmem_txt_code' );
add_filter( 'wpmem_register_form_args', 'remove_wpmem_txt_code' );
function remove_wpmem_txt_code( $args ){
    $args = array(
        'txt_before' => '',
        'txt_after'  => ''
    );
    return $args;
}

add_filter( 'wpmem_login_redirect', 'my_login_redirect', 10, 2 );
 
function my_login_redirect( $redirect_to, $user_id ) {
    // return the url that the login should redirect to
    return 'http://localhost';
}

add_action('wp_logout',create_function('','wp_redirect(home_url());exit();'));
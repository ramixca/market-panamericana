<?php
/**
 * market functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package market
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function market_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on market, use a find and replace
		* to change 'market' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'market', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'market' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'market_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'market_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function market_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'market_content_width', 640 );
}
add_action( 'after_setup_theme', 'market_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function market_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'market' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'market' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'market_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function market_scripts() {
	wp_enqueue_style( 'market-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'market-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css');
	wp_style_add_data( 'market-style', 'rtl', 'replace' );

	wp_enqueue_script( 'market-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


	wp_enqueue_script( 'bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'));
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/script.js', array('jquery'));


	wp_enqueue_script('market-location', "https://maps.googleapis.com/maps/api/js?key=AIzaSyDWK3S_OHvujNDuILguxSMUtg9zO76Lg9s&callback=Function.prototype", array(), _S_VERSION, true);
	wp_enqueue_script('market-location-map', get_template_directory_uri() . '/js/location.js', array('market-location', 'jquery'), _S_VERSION, true);

	wp_enqueue_style('market-scroll', get_stylesheet_directory_uri() .'/css/scroll.css', array());
	wp_enqueue_script('market-scroll-top', get_template_directory_uri() .'/js/scroll-top.js', array());

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'market_scripts' );



function custom_fonts() {
	wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Poppins:wght@500;700&display=swap');

	wp_enqueue_style('google-fonts');
}
add_action('wp_enqueue_scripts', 'custom_fonts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



//WP dashboard cleanup

add_action('wp_dashboard_setup', 'wpdocs_remove_dashboard_widgets');

/**
 * Remove all dashboard widgets
 */
function wpdocs_remove_dashboard_widgets()
{
	remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
	remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
	remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
	remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
	remove_meta_box('dashboard_site_health', 'dashboard', 'normal'); // remove Site Health

}

/* Google API Key */
function my_acf_init()
{
	acf_update_setting('google_api_key', 'AIzaSyDWK3S_OHvujNDuILguxSMUtg9zO76Lg9s');
}
add_action('acf/init', 'my_acf_init');
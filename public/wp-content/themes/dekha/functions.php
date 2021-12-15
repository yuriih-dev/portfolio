<?php
/**
 * Dekha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dekha
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dekha_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dekha_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Dekha, use a find and replace
		 * to change 'dekha' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dekha', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( "custom-header");
		add_theme_support( "custom-background");
		add_editor_style( 'editor-style.css' );

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
				'main-menu' => esc_html__( 'Primary', 'dekha' ),
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
				'dekha_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'dekha_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dekha_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dekha_content_width', 640 );
}
add_action( 'after_setup_theme', 'dekha_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dekha_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dekha' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dekha' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dekha_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dekha_scripts() {
	wp_enqueue_style( 'dekha-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dekha-style', 'rtl', 'replace' );
	
	wp_enqueue_style( 'dekha-font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-icon-font', get_template_directory_uri() . '/assets/fonts/icofont.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-fontwasam-icons', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-themify-icons', get_template_directory_uri() . '/assets/fonts/themify-icons.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-font-etline', get_template_directory_uri() . '/assets/fonts/etline.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-plugins-css', get_template_directory_uri() . '/assets/css/plugins.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);
	wp_enqueue_style( 'dekha-main-css', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	
	wp_enqueue_script( 'dekha-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-particles-js', get_template_directory_uri() . '/assets/js/particles.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-modernizr-js', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-nav-js', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-inview-js', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-animated-headline-js', get_template_directory_uri() . '/assets/js/animated-headline.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-lightbox-js', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-slick-nav-js', get_template_directory_uri() . '/assets/js/slick-nav.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-scrolltopcontrol-js', get_template_directory_uri() . '/assets/js/scrolltopcontrol.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'dekha-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dekha_scripts' );

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
 * Functions class-wp-bootstrap-navwalker 
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/helper.php';

/**
 * Tgm additions.
 */
require get_template_directory() . '/inc/tgm.php';


/**
 * Tgm activation additions.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/demo-content.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


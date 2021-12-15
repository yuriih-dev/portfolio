<?php
namespace DekhaElementor;

use DekhaElementor\PageSettings\Page_Settings;
/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class Plugin {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {
		wp_register_script( 'elementor-hello-world', plugins_url( '/assets/js/hello-world.js', __FILE__ ), [ 'jquery' ], false, true );
	}
	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/heading-animate.php' );
		require_once( __DIR__ . '/widgets/social-icon.php' );
		require_once( __DIR__ . '/widgets/about-me.php' );
		require_once( __DIR__ . '/widgets/button.php' );
		require_once( __DIR__ . '/widgets/section-title.php' );
		require_once( __DIR__ . '/widgets/services.php' );
		require_once( __DIR__ . '/widgets/work.php' );
		require_once( __DIR__ . '/widgets/intro.php' );
		require_once( __DIR__ . '/widgets/counter.php' );
		require_once( __DIR__ . '/widgets/resume.php' );
		require_once( __DIR__ . '/widgets/slidertestimonial.php' );
		require_once( __DIR__ . '/widgets/news.php' );
		require_once( __DIR__ . '/widgets/toch.php' );
		
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Heading_animate() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Social_icon() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\About_img() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Button_gradian() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Section_title() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Services_section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Portfolio_section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Intro_section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Counter_area() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Resume_area() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Slidertes_area() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\News_area() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Contact_section() );
	}

	/**
	 * Add page settings controls
	 *
	 * Register new settings for a document page settings.
	 *
	 * @since 1.2.1
	 * @access private
	 */
	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/manager.php' );
		new Page_Settings();
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Register widget category
		add_action( 'elementor/elements/categories_registered', [ $this, 'add_elementor_widget_categories' ] );

		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );

		$this->add_page_settings_controls();
	}

	public function add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'dekha-category',
			[
				'title' => __( 'Dekha Addons', 'elementor-dekha' ),
				'icon' => 'fa fa-plug',
			]
		);

	}
}

// Instantiate Plugin Class
Plugin::instance();






<?php

function dekha_nav_menu(){
    wp_nav_menu( array(
        'theme_location'  => 'main-menu',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'main_menu',
        'container_id'    => 'navbar',
        'menu_class'      => 'nav navbar-nav navbar-right',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
}

/**
 * Register footer widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dekha_footer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Left Sidebar', 'dekha' ),
			'id'            => 'f-left',
			'description'   => esc_html__( 'Add widgets here.', 'dekha' ),
			'before_widget' => '<div class="copy-text"><p>',
            'after_widget'  => '</p></div>',
		)
	);
}
add_action( 'widgets_init', 'dekha_footer_widgets_init' );


/**
 * Register footer widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dekha_footer_social_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Right Sidebar', 'dekha' ),
			'id'            => 'r-left',
			'description'   => esc_html__( 'Add widgets here.', 'dekha' ),
			'before_widget' => '<ul class="social-link pull-right">',
            'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'dekha_footer_social_widgets_init' );


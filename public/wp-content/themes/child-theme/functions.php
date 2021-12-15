<?php


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/**
 * Enqueue scripts and styles.
 */
function dekha_child_scripts() {

wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.1');
wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), '1.0.1');

wp_enqueue_style( 'parent-style-rtl', get_template_directory_uri() . '/style-rtl.css', array(), '1.0.1');
wp_enqueue_style( 'child-style-rtl', get_stylesheet_directory_uri() . '/style-rtl.css', array('parent-style-rtl'), '1.0.1');
}
add_action( 'wp_enqueue_scripts', 'dekha_child_scripts' );
<?php
/**
 * Register a custom post type called "Work".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_Work_init() {
    $labels = array(
        'name'                  => _x( 'Works', 'Post type general name', 'dekha' ),
        'singular_name'         => _x( 'Work', 'Post type singular name', 'dekha' ),
        'menu_name'             => _x( 'Works', 'Admin Menu text', 'dekha' ),
        'name_admin_bar'        => _x( 'Work', 'Add New on Toolbar', 'dekha' ),
        'add_new'               => __( 'Add New', 'dekha' ),
        'add_new_item'          => __( 'Add New Work', 'dekha' ),
        'new_item'              => __( 'New Work', 'dekha' ),
        'edit_item'             => __( 'Edit Work', 'dekha' ),
        'view_item'             => __( 'View Work', 'dekha' ),
        'all_items'             => __( 'All Works', 'dekha' ),
        'search_items'          => __( 'Search Works', 'dekha' ),
        'parent_item_colon'     => __( 'Parent Works:', 'dekha' ),
        'not_found'             => __( 'No Works found.', 'dekha' ),
        'not_found_in_trash'    => __( 'No Works found in Trash.', 'dekha' ),
        'featured_image'        => _x( 'Work Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'dekha' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'dekha' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'dekha' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'dekha' ),
        'archives'              => _x( 'Work archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'dekha' ),
        'insert_into_item'      => _x( 'Insert into Work', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'dekha' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Work', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'dekha' ),
        'filter_items_list'     => _x( 'Filter Works list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'dekha' ),
        'items_list_navigation' => _x( 'Works list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'dekha' ),
        'items_list'            => _x( 'Works list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'dekha' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Work' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title','thumbnail','editor'),
    );
 
    register_post_type( 'work_post', $args );
}
 
add_action( 'init', 'wpdocs_codex_Work_init' );

// Add new taxonomy, NOT hierarchical (like tags)
function wpdocs_create_work_taxonomies(){
$labels = array(
	'name'                       => _x( 'Categories', 'taxonomy general name', 'dekha' ),
	'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'dekha' ),
	'search_items'               => __( 'Search Categories', 'dekha' ),
	'popular_items'              => __( 'Popular Categories', 'dekha' ),
	'all_items'                  => __( 'All Categories', 'dekha' ),
	'parent_item'                => null,
	'parent_item_colon'          => null,
	'edit_item'                  => __( 'Edit Writer', 'dekha' ),
	'update_item'                => __( 'Update Writer', 'dekha' ),
	'add_new_item'               => __( 'Add New Writer', 'dekha' ),
	'new_item_name'              => __( 'New Writer Name', 'dekha' ),
	'separate_items_with_commas' => __( 'Separate Categories with commas', 'dekha' ),
	'add_or_remove_items'        => __( 'Add or remove Categories', 'dekha' ),
	'choose_from_most_used'      => __( 'Choose from the most used Categories', 'dekha' ),
	'not_found'                  => __( 'No Categories found.', 'dekha' ),
	'menu_name'                  => __( 'Categories', 'dekha' ),
);

$args = array(
	'hierarchical'          => false,
	'labels'                => $labels,
	'show_ui'               => true,
	'show_admin_column'     => true,
	'update_count_callback' => '_update_post_term_count',
	'query_var'             => true,
	'rewrite'               => array( 'slug' => 'categories' ),
);

register_taxonomy( 'categories', 'work_post', $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_work_taxonomies', 0 );
<?php
/**
 * Register a custom post type called "job".
 *
 * @see get_post_type_labels() for label keys.
 */
function gitproba_cpt() {
	$labels = array(
		'name'                  => _x( 'Gits', 'Post type general name', 'gitproba' ),
		'singular_name'         => _x( 'Git', 'Post type singular name', 'gitproba' ),
		'menu_name'             => _x( 'Gits', 'Admin Menu text', 'gitproba' ),
		'name_admin_bar'        => _x( 'Git', 'Add New on Toolbar', 'gitproba' ),
		'add_new'               => __( 'Add New', 'gitproba' ),
		'add_new_item'          => __( 'Add New Git', 'gitproba' ),
		'new_item'              => __( 'New Git', 'gitproba' ),
		'edit_item'             => __( 'Edit Git', 'gitproba' ),
		'view_item'             => __( 'View Git', 'gitproba' ),
		'all_items'             => __( 'All Gits', 'gitproba' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'git' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true
	);

	register_post_type( 'git', $args );

    // flush_rewrite_rules();
}
add_action( 'init', 'gitproba_cpt' );

/**
 * Register a 'field' taxonomy for post type 'job', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function gitproba_field_taxonomy() {
    $labels = array(
		'name'              => _x( 'Field', 'taxonomy general name', 'gitproba' ),
		'singular_name'     => _x( 'Field', 'taxonomy singular name', 'gitproba' ),
		'search_items'      => __( 'Search Field', 'gitproba' ),
		'all_items'         => __( 'All Field', 'gitproba' ),
		'parent_item'       => __( 'Parent Field', 'gitproba' ),
		'parent_item_colon' => __( 'Parent Field:', 'gitproba' ),
		'edit_item'         => __( 'Edit Field', 'gitproba' ),
		'update_item'       => __( 'Update Field', 'gitproba' ),
		'add_new_item'      => __( 'Add New Field', 'gitproba' ),
		'new_item_name'     => __( 'New Field Name', 'gitproba' ),
		'menu_name'         => __( 'Field', 'gitproba' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);


    register_taxonomy( 'field', 'git', $args );
}
add_action( 'init', 'gitproba_field_taxonomy' );

/**
 * This is a function registering a custom Job Location taxonomy
 *
 * @return void
 */
function softuni_jobs_location_taxonomy() {
    $labels = array(
		'name'              => _x( 'Location', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Locations', 'softuni' ),
		'all_items'         => __( 'All Locations', 'softuni' ),
		'parent_item'       => __( 'Parent Location', 'softuni' ),
		'parent_item_colon' => __( 'Parent Location:', 'softuni' ),
		'edit_item'         => __( 'Edit Location', 'softuni' ),
		'update_item'       => __( 'Update Locations', 'softuni' ),
		'add_new_item'      => __( 'Add New Location', 'softuni' ),
		'new_item_name'     => __( 'New Location Name', 'softuni' ),
		'menu_name'         => __( 'Location', 'softuni' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'location', 'job', $args );
}
add_action( 'init', 'softuni_jobs_location_taxonomy' );

<?php 

/* 
 * 
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.

// Here's an example:

$labels = array(
	'name'                => _x( 'Custom Type', 'Post Type General Name', 'tsk' ),
	'singular_name'       => _x( 'Custom Type', 'Post Type Singular Name', 'tsk' ),
	'menu_name'           => __( 'Custom Types', 'tsk' ),
	'name_admin_bar'      => __( 'Custom Type', 'tsk' ),
	'parent_item_colon'   => __( 'Parent Custom Type:', 'tsk' ),
	'all_items'           => __( 'All Custom Types', 'tsk' ),
	'add_new_item'        => __( 'Add New Custom Type', 'tsk' ),
	'add_new'             => __( 'Add New', 'tsk' ),
	'new_item'            => __( 'New Custom Type', 'tsk' ),
	'edit_item'           => __( 'Edit Custom Type', 'tsk' ),
	'update_item'         => __( 'Update Custom Type', 'tsk' ),
	'view_item'           => __( 'View Custom Type', 'tsk' ),
	'search_items'        => __( 'Search Custom Type', 'tsk' ),
	'not_found'           => __( 'Not found', 'tsk' ),
	'not_found_in_trash'  => __( 'Not found in Trash', 'tsk' ),
);
$rewrite = array(
	'slug'                => 'custom_type',
	'with_front'          => true,
	'pages'               => true,
	'feeds'               => true,
);
$args = array(
	'label'               => __( 'custom_type', 'tsk' ),
	'description'         => __( 'The Custom Type post type.', 'tsk' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'excerpt', 'thumbnail'),
	'taxonomies'          => array( 'category', 'post_tag' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-slides',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,		
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'rewrite'             => $rewrite,
	'capability_type'     => 'page',
);
register_post_type( 'custom_type', $args );


<?php 

/* 
 * 
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.

$labels = array(
	'name'                => _x( 'Cocktails', 'Post Type General Name', 'ctl' ),
	'singular_name'       => _x( 'Cocktail', 'Post Type Singular Name', 'ctl' ),
	'menu_name'           => __( 'Cocktails', 'ctl' ),
	'name_admin_bar'      => __( 'Cocktail', 'ctl' ),
	'parent_item_colon'   => __( 'Parent Cocktail:', 'ctl' ),
	'all_items'           => __( 'All Cocktails', 'ctl' ),
	'add_new_item'        => __( 'Add New Cocktail', 'ctl' ),
	'add_new'             => __( 'Add New', 'ctl' ),
	'new_item'            => __( 'New Cocktail', 'ctl' ),
	'edit_item'           => __( 'Edit Cocktail', 'ctl' ),
	'update_item'         => __( 'Update Cocktail', 'ctl' ),
	'view_item'           => __( 'View Cocktail', 'ctl' ),
	'search_items'        => __( 'Search Cocktail', 'ctl' ),
	'not_found'           => __( 'Not found', 'ctl' ),
	'not_found_in_trash'  => __( 'Not found in Trash', 'ctl' ),
);
$args = array(
	'label'               => __( 'Cocktail', 'ctl' ),
	'description'         => __( 'Cocktail recipes.', 'ctl' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', ),
	'taxonomies'          => array( 'category', 'post_tag' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-heart',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,		
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
);
register_post_type( 'cocktail', $args );



<?php
/**
 * Custom posts for use with this theme
 *
 *
 * @package Esme-theme
 */
// Register Lodging Custom Post Type

// Register Event Custom Post Type
function artist_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Artists', 'Post Type General Name', 'artmother-theme' ),
		'singular_name'         => _x( 'Artist', 'Post Type Singular Name', 'artmother-theme' ),
		'menu_name'             => __( 'Artists', 'artmother-theme' ),
		'name_admin_bar'        => __( 'Artist', 'artmother-theme' ),
		'archives'              => __( 'Artist Archives', 'artmother-theme' ),
		'attributes'            => __( 'Artist Attributes', 'artmother-theme' ),
		'parent_item_colon'     => __( 'Parent Artist:', 'artmother-theme' ),
		'all_items'             => __( 'All Artists', 'artmother-theme' ),
		'add_new_item'          => __( 'Add New Artist', 'artmother-theme' ),
		'add_new'               => __( 'Add New', 'artmother-theme' ),
		'new_item'              => __( 'New Artist', 'artmother-theme' ),
		'edit_item'             => __( 'Edit Artist', 'artmother-theme' ),
		'update_item'           => __( 'Update Artist', 'artmother-theme' ),
		'view_item'             => __( 'View Artist', 'artmother-theme' ),
		'view_items'            => __( 'View Artists', 'artmother-theme' ),
		'search_items'          => __( 'Search Artist', 'artmother-theme' ),
		'not_found'             => __( 'Not found', 'artmother-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'artmother-theme' ),
		'featured_image'        => __( 'Featured Image', 'artmother-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'artmother-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'artmother-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'artmother-theme' ),
		'insert_into_item'      => __( 'Insert into Event', 'artmother-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'artmother-theme' ),
		'items_list'            => __( 'Artists list', 'artmother-theme' ),
		'items_list_navigation' => __( 'Artists list navigation', 'artmother-theme' ),
		'filter_items_list'     => __( 'Filter Artists list', 'artmother-theme' ),
	);
	$args = array(
		'label'                 => __( 'Artist', 'artmother-theme' ),
		'description'           => __( 'Artist Post Type Description', 'artmother-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'artist', $args );

}
add_action( 'init', 'artist_custom_post_type', 0 );





function artwork_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Artworks', 'Post Type General Name', 'artmother-theme' ),
		'singular_name'         => _x( 'Artwork', 'Post Type Singular Name', 'artmother-theme' ),
		'menu_name'             => __( 'Artworks', 'artmother-theme' ),
		'name_admin_bar'        => __( 'Artwork', 'artmother-theme' ),
		'archives'              => __( 'Artwork Archives', 'artmother-theme' ),
		'attributes'            => __( 'Artwork Attributes', 'artmother-theme' ),
		'parent_item_colon'     => __( 'Parent Artworks:', 'artmother-theme' ),
		'all_items'             => __( 'All Artworks', 'artmother-theme' ),
		'add_new_item'          => __( 'Add New Artwork', 'artmother-theme' ),
		'add_new'               => __( 'Add New', 'artmother-theme' ),
		'new_item'              => __( 'New Artwork', 'artmother-theme' ),
		'edit_item'             => __( 'Edit Artwork', 'artmother-theme' ),
		'update_item'           => __( 'Update Artwork', 'artmother-theme' ),
		'view_item'             => __( 'View Artwork', 'artmother-theme' ),
		'view_items'            => __( 'View Artwork', 'artmother-theme' ),
		'search_items'          => __( 'Search Artwork', 'artmother-theme' ),
		'not_found'             => __( 'Not found', 'artmother-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'artmother-theme' ),
		'featured_image'        => __( 'Featured Image', 'artmother-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'artmother-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'artmother-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'artmother-theme' ),
		'insert_into_item'      => __( 'Insert into Artwork', 'artmother-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Artwork', 'artmother-theme' ),
		'items_list'            => __( 'Artworks list', 'artmother-theme' ),
		'items_list_navigation' => __( 'Artworks list navigation', 'artmother-theme' ),
		'filter_items_list'     => __( 'Filter Artworks list', 'artmother-theme' ),
  );
	$rewrite = array(
		// 'slug'                  => '/hope-valley/lodging/%lodging_category%',
		'with_front'            => false,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( 'Artwork', 'artmother-theme' ),
		'description'           => __( 'Artwork Custom Post Type', 'artmother-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'            => array( 'room_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-customizer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
  register_post_type( 'artwork', $args );
}
add_action( 'init', 'artwork_custom_post_type', 0 );


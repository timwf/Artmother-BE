<?php
/**
 * Custom taxonomies for use with this theme
 *
 *
 * @package esme-theme
 */
// Register Custom Taxonomy
function artwork_medium_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Artwork Medium', 'Taxonomy General Name', 'esme-theme' ),
		'singular_name'              => _x( 'Artwork Medium', 'Taxonomy Singular Name', 'esme-theme' ),
		'menu_name'                  => __( 'Artwork Medium', 'esme-theme' ),
		'all_items'                  => __( 'All Artwork Medium', 'esme-theme' ),
		'parent_item'                => __( 'Parent Artwork Medium', 'esme-theme' ),
		'parent_item_colon'          => __( 'Parent Artwork Medium:', 'esme-theme' ),
		'new_item_name'              => __( 'New Artwork Medium', 'esme-theme' ),
		'add_new_item'               => __( 'Add Artwork Medium', 'esme-theme' ),
		'edit_item'                  => __( 'Edit Artwork Medium', 'esme-theme' ),
		'update_item'                => __( 'Update Artwork Medium', 'esme-theme' ),
		'view_item'                  => __( 'View Artwork Medium', 'esme-theme' ),
		'separate_items_with_commas' => __( 'Separate Artwork Medium with commas', 'esme-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Artwork Medium', 'esme-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esme-theme' ),
		'popular_items'              => __( 'Popular Artwork Medium', 'esme-theme' ),
		'search_items'               => __( 'Search Artwork Medium', 'esme-theme' ),
		'not_found'                  => __( 'Not Found', 'esme-theme' ),
		'no_terms'                   => __( 'No Artwork Medium', 'esme-theme' ),
		'items_list'                 => __( 'Artwork Medium list', 'esme-theme' ),
		'items_list_navigation'      => __( 'Artwork Medium list navigation', 'esme-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'artwork_medium', array( 'artwork' ), $args );

}
add_action( 'init', 'artwork_medium_taxonomy', 0 );


// Register Custom Taxonomy
function artwork_price_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Artwork Price', 'Taxonomy General Name', 'esme-theme' ),
		'singular_name'              => _x( 'Artwork Price', 'Taxonomy Singular Name', 'esme-theme' ),
		'menu_name'                  => __( 'Artwork Price', 'esme-theme' ),
		'all_items'                  => __( 'All Artwork Price', 'esme-theme' ),
		'parent_item'                => __( 'Parent Artwork Price', 'esme-theme' ),
		'parent_item_colon'          => __( 'Parent Artwork Price:', 'esme-theme' ),
		'new_item_name'              => __( 'New Artwork Price', 'esme-theme' ),
		'add_new_item'               => __( 'Add Artwork Price', 'esme-theme' ),
		'edit_item'                  => __( 'Edit Artwork Price', 'esme-theme' ),
		'update_item'                => __( 'Update Artwork Price', 'esme-theme' ),
		'view_item'                  => __( 'View Artwork Price', 'esme-theme' ),
		'separate_items_with_commas' => __( 'Separate Artwork Price with commas', 'esme-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Artwork Price', 'esme-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esme-theme' ),
		'popular_items'              => __( 'Popular Artwork Price', 'esme-theme' ),
		'search_items'               => __( 'Search Artwork Price', 'esme-theme' ),
		'not_found'                  => __( 'Not Found', 'esme-theme' ),
		'no_terms'                   => __( 'No Artwork Price', 'esme-theme' ),
		'items_list'                 => __( 'Artwork Price list', 'esme-theme' ),
		'items_list_navigation'      => __( 'Artwork Price list navigation', 'esme-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'artwork_price', array( 'artwork' ), $args );

}
add_action( 'init', 'artwork_price_taxonomy', 0 );



// Register Custom Taxonomy
function artwork_size_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Artwork Size', 'Taxonomy General Name', 'esme-theme' ),
		'singular_name'              => _x( 'Artwork Size', 'Taxonomy Singular Name', 'esme-theme' ),
		'menu_name'                  => __( 'Artwork Size', 'esme-theme' ),
		'all_items'                  => __( 'All Artwork Size', 'esme-theme' ),
		'parent_item'                => __( 'Parent Artwork Size', 'esme-theme' ),
		'parent_item_colon'          => __( 'Parent Artwork Size:', 'esme-theme' ),
		'new_item_name'              => __( 'New Artwork Size', 'esme-theme' ),
		'add_new_item'               => __( 'Add Artwork Size', 'esme-theme' ),
		'edit_item'                  => __( 'Edit Artwork Size', 'esme-theme' ),
		'update_item'                => __( 'Update Artwork Size', 'esme-theme' ),
		'view_item'                  => __( 'View Artwork Size', 'esme-theme' ),
		'separate_items_with_commas' => __( 'Separate Artwork Size with commas', 'esme-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Artwork Size', 'esme-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esme-theme' ),
		'popular_items'              => __( 'Popular Artwork Size', 'esme-theme' ),
		'search_items'               => __( 'Search Artwork Size', 'esme-theme' ),
		'not_found'                  => __( 'Not Found', 'esme-theme' ),
		'no_terms'                   => __( 'No Artwork Size', 'esme-theme' ),
		'items_list'                 => __( 'Artwork Size list', 'esme-theme' ),
		'items_list_navigation'      => __( 'Artwork Size list navigation', 'esme-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'artwork_size', array( 'artwork' ), $args );

}
add_action( 'init', 'artwork_size_taxonomy', 0 );


<?php
/**
 * Custom taxonomies for use with this theme
 *
 *
 * @package esme-theme
 */
// Register Custom Taxonomy
function artwork_category_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Artist Categories', 'Taxonomy General Name', 'esme-theme' ),
		'singular_name'              => _x( 'Artist Category', 'Taxonomy Singular Name', 'esme-theme' ),
		'menu_name'                  => __( 'Artist Categories', 'esme-theme' ),
		'all_items'                  => __( 'All Artist Categories', 'esme-theme' ),
		'parent_item'                => __( 'Parent Artist Category', 'esme-theme' ),
		'parent_item_colon'          => __( 'Parent Artist Category:', 'esme-theme' ),
		'new_item_name'              => __( 'New Artist Category', 'esme-theme' ),
		'add_new_item'               => __( 'Add Artist Category', 'esme-theme' ),
		'edit_item'                  => __( 'Edit Artist Category', 'esme-theme' ),
		'update_item'                => __( 'Update Artist Category', 'esme-theme' ),
		'view_item'                  => __( 'View Artist Category', 'esme-theme' ),
		'separate_items_with_commas' => __( 'Separate Artist Categories with commas', 'esme-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Artist Categories', 'esme-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esme-theme' ),
		'popular_items'              => __( 'Popular Artist Categories', 'esme-theme' ),
		'search_items'               => __( 'Search Artist Categories', 'esme-theme' ),
		'not_found'                  => __( 'Not Found', 'esme-theme' ),
		'no_terms'                   => __( 'No Artist Categories', 'esme-theme' ),
		'items_list'                 => __( 'Artist Categories list', 'esme-theme' ),
		'items_list_navigation'      => __( 'Artist Categories list navigation', 'esme-theme' ),
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
	register_taxonomy( 'artwork_category', array( 'artwork' ), $args );

}
add_action( 'init', 'artwork_category_taxonomy', 0 );



// Register Custom Taxonomy
function Room_Amenity_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Room Amenities', 'Taxonomy General Name', 'esme-theme' ),
		'singular_name'              => _x( 'Room Amenity', 'Taxonomy Singular Name', 'esme-theme' ),
		'menu_name'                  => __( 'Room Amenities', 'esme-theme' ),
		'all_items'                  => __( 'All Room Amenities', 'esme-theme' ),
		'parent_item'                => __( 'Parent Room Amenity', 'esme-theme' ),
		'parent_item_colon'          => __( 'Parent Room Amenity:', 'esme-theme' ),
		'new_item_name'              => __( 'New Room Amenity', 'esme-theme' ),
		'add_new_item'               => __( 'Add Room Amenity', 'esme-theme' ),
		'edit_item'                  => __( 'Edit Room Amenity', 'esme-theme' ),
		'update_item'                => __( 'Update Room Amenity', 'esme-theme' ),
		'view_item'                  => __( 'View Room Amenity', 'esme-theme' ),
		'separate_items_with_commas' => __( 'Separate Room Amenities with commas', 'esme-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Room Amenities', 'esme-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esme-theme' ),
		'popular_items'              => __( 'Popular Room Amenities', 'esme-theme' ),
		'search_items'               => __( 'Search Room Amenities', 'esme-theme' ),
		'not_found'                  => __( 'Not Found', 'esme-theme' ),
		'no_terms'                   => __( 'No Room Amenities', 'esme-theme' ),
		'items_list'                 => __( 'Room Amenities list', 'esme-theme' ),
		'items_list_navigation'      => __( 'Room Amenities list navigation', 'esme-theme' ),
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
	register_taxonomy( 'Room_Amenity', array( 'room' ), $args );

}
add_action( 'init', 'Room_Amenity_taxonomy', 0 );



// Register Custom Taxonomy
function Meeting_Features_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Meeting Features', 'Taxonomy General Name', 'esme-theme' ),
		'singular_name'              => _x( 'Meeting Feature', 'Taxonomy Singular Name', 'esme-theme' ),
		'menu_name'                  => __( 'Meeting Feature', 'esme-theme' ),
		'all_items'                  => __( 'All Meeting Features', 'esme-theme' ),
		'parent_item'                => __( 'Parent Meeting Feature', 'esme-theme' ),
		'parent_item_colon'          => __( 'Parent Meeting Feature:', 'esme-theme' ),
		'new_item_name'              => __( 'New Meeting Feature', 'esme-theme' ),
		'add_new_item'               => __( 'Add Meeting Feature', 'esme-theme' ),
		'edit_item'                  => __( 'Edit Meeting Feature', 'esme-theme' ),
		'update_item'                => __( 'Update Meeting Feature', 'esme-theme' ),
		'view_item'                  => __( 'View Meeting Feature', 'esme-theme' ),
		'separate_items_with_commas' => __( 'Separate Meeting Features with commas', 'esme-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Meeting Features', 'esme-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esme-theme' ),
		'popular_items'              => __( 'Popular Meeting Features', 'esme-theme' ),
		'search_items'               => __( 'Search Meeting Features', 'esme-theme' ),
		'not_found'                  => __( 'Not Found', 'esme-theme' ),
		'no_terms'                   => __( 'No Meeting Features', 'esme-theme' ),
		'items_list'                 => __( 'Meeting Features list', 'esme-theme' ),
		'items_list_navigation'      => __( 'Meeting Features list navigation', 'esme-theme' ),
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
	register_taxonomy( 'Meeting_Features', array( 'meeting' ), $args );

}
add_action( 'init', 'Meeting_Features_taxonomy', 0 );





// Register Custom Taxonomy
function Meeting_Amenity_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Meeting Amenity', 'Taxonomy General Name', 'esme-theme' ),
		'singular_name'              => _x( 'Meeting Amenity', 'Taxonomy Singular Name', 'esme-theme' ),
		'menu_name'                  => __( 'Meeting Amenity', 'esme-theme' ),
		'all_items'                  => __( 'All Meeting Amenity', 'esme-theme' ),
		'parent_item'                => __( 'Parent Meeting Amenity', 'esme-theme' ),
		'parent_item_colon'          => __( 'Parent Meeting Amenity:', 'esme-theme' ),
		'new_item_name'              => __( 'New Meeting Amenity', 'esme-theme' ),
		'add_new_item'               => __( 'Add Meeting Amenity', 'esme-theme' ),
		'edit_item'                  => __( 'Edit Meeting Amenity', 'esme-theme' ),
		'update_item'                => __( 'Update Meeting Amenity', 'esme-theme' ),
		'view_item'                  => __( 'View Meeting Amenity', 'esme-theme' ),
		'separate_items_with_commas' => __( 'Separate Meeting Amenities with commas', 'esme-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Meeting Amenities', 'esme-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'esme-theme' ),
		'popular_items'              => __( 'Popular Meeting Amenities', 'esme-theme' ),
		'search_items'               => __( 'Search Meeting Amenities', 'esme-theme' ),
		'not_found'                  => __( 'Not Found', 'esme-theme' ),
		'no_terms'                   => __( 'No Meeting Amenities', 'esme-theme' ),
		'items_list'                 => __( 'Meeting Amenities list', 'esme-theme' ),
		'items_list_navigation'      => __( 'Meeting Amenities list navigation', 'esme-theme' ),
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
	register_taxonomy( 'Meeting_Amenity', array( 'meeting' ), $args );

}
add_action( 'init', 'Meeting_Amenity_taxonomy', 0 );


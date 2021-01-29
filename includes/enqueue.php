<?php
// Adds CSS
function theme_styles() {
  //  wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/css/style.min.css','',null );
}
add_action( 'wp_enqueue_scripts', 'theme_styles');


// Add JS
function theme_js() {
  wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
  wp_enqueue_script('jquery');

  // wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', '', '3.5.1', false);
  // wp_enqueue_script( 'ScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', '', '3.5.1', false);
  wp_enqueue_script( 'picturefill', get_template_directory_uri() . '/js/picturefill.min.js#asyncload', '', '', false);
  wp_enqueue_script( 'libs', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), '', true);
  wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true);


  wp_enqueue_script( 'lists', 'https:////cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js', '', '3.5.1', false);
  wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', '', '3.5.1', false);
  wp_enqueue_script( 'barba', 'https://cdn.jsdelivr.net/npm/@barba/core', '', '3.5.1', false);
  wp_enqueue_script( 'bablepoly', 'https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.js', '', '3.5.1', false);
  wp_enqueue_script( 'Scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js', '', '3.5.1', false);
//   wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', '', '3.5.1', false);


// <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>


//   <script src="js/Event.js"></script>
//   <script src="js/Magnifier.js"><script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.5/vivus.js" integrity="sha512-JDgkxcdf7oYN/lR29Dzzw17b5Rv42eJ4Vj8aysjr+YpqwaURHrcR1/wGmyIBlsXK55Wsq3TW9tWoDzIou2q3qw==" crossorigin="anonymous"></script>

// <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous"></script>
//   </script><script src="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/js/jquery.magnify.min.js" integrity="sha512-YKxHqn7D0M5knQJO2xKHZpCfZ+/Ta7qpEHgADN+AkY2U2Y4JJtlCEHzKWV5ZE87vZR3ipdzNJ4U/sfjIaoHMfw==" crossorigin="anonymous"></script>

  

  // wp_localize_script( 'mainJS', 'theme', array(
  //   'theme' => get_template_directory_uri(),
  //   'ajax' => admin_url('admin-ajax.php' )
  // ) );
  // wp_deregister_script('wp-mediaelement');
  // wp_deregister_style('wp-mediaelement');
}
add_action( 'wp_enqueue_scripts', 'theme_js');

// Add backend styles for Gutenberg.
add_action( 'enqueue_block_editor_assets', 'theme_add_gutenberg_assets' );
function theme_add_gutenberg_assets() {
	// Load the theme styles within Gutenberg.
	wp_enqueue_style( 'theme-gutenberg', get_template_directory_uri() . '/css/custom-editor-styles.css', false );
}


// Custom login
function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/custom-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// Remove embed script
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );

// Remove all emoji scripts and styles from the frontend and admin
function removeEmojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action('init', 'removeEmojis');





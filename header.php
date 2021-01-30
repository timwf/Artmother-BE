<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-name
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="is-observer">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script>
      // Picture element HTML5 shiv
      document.createElement('picture');
    </script>

    <?php wp_head(); ?>
  </head>




  <header class="page-header">
      <div class="page-header__inner container">
        <nav class="page-header__nav">
          <ul>
            <?php wp_nav_menu( array(
              'theme_location' => 'header-menu',
              'container'      => '',
              'menu_class'     => 'page-header__menu'
            ) ); ?>
            <li><a href="<?php echo home_url(); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="150" viewBox="0 0 142 150"><g><g><g><path d="M49.76 60.153H.183v8.241H49.76z"/></g><g><path d="M130.185 145.603c-3.846 2.747-8.79 4.121-14.834 4.121-6.96 0-12.088-1.831-15.384-5.494-3.663-4.03-5.769-8.608-6.318-13.735-6.41 6.959-12.911 11.904-19.505 14.834-7.142 3.113-14.101 4.67-20.877 4.67-8.974 0-15.933-3.297-20.878-9.89-4.945-6.776-7.417-15.2-7.417-25.273 0-12.82 3.846-23.075 11.538-30.767 7.692-7.875 17.673-12.911 29.943-15.109a65.891 65.891 0 0 1 6.318-.824c2.198-.183 4.487-.366 6.868-.55 2.38-.182 4.67-.274 6.867-.274h7.143V22.535c0-4.762-1.923-8.791-5.77-12.087-4.211-3.297-8.424-4.945-12.636-4.945-5.128 0-9.614.916-13.46 2.747-4.213 2.015-6.319 3.846-6.319 5.494 0 .366.733 2.015 2.198 4.945 1.648 3.113 2.472 6.593 2.472 10.439-.732 7.875-5.402 11.812-14.01 11.812-8.79 0-13.277-4.12-13.46-12.362-.183-7.875 3.846-14.65 12.087-20.328C52.992 2.756 63.797.009 77.166.009c12.454 0 23.076 3.113 31.866 9.34 8.425 6.227 12.637 14.376 12.637 24.449v98.345c0 1.831.55 3.113 1.648 3.846 1.282 1.099 2.93 1.648 4.945 1.648 1.465 0 3.205-.824 5.22-2.472a28.426 28.426 0 0 1 2.609-2.335c.824-.641 1.42-1.145 1.785-1.511l3.297 3.846c-3.48 4.029-7.142 7.508-10.988 10.438zM93.649 79.95c-2.747-2.015-5.586-3.663-8.516-4.945a13.191 13.191 0 0 0-4.67-.824c-2.015 0-4.396.274-7.143.824-6.226 1.648-10.988 5.036-14.284 10.164-3.48 5.128-5.22 12.179-5.22 21.152 0 8.608 1.374 15.75 4.12 21.428 2.748 5.677 7.143 8.516 13.187 8.516 6.776 0 12.178-3.938 16.207-11.813 4.213-8.058 6.319-17.215 6.319-27.47z"/></g></g></g></svg></a></li>
          </ul>
        </nav>
      </div>
    </header>
    <header class="mobile-page-header">
      <div class="mobile-page-header__inner container">
        <div class="mobile-page-header__menu">
          <ul>
            <?php wp_nav_menu( array(
              'theme_location' => 'header-menu',
              'container'      => '',
              'menu_class'     => 'page-header__menu'
            ) ); ?>
          </ul>
        </div>
        <div class="mobile-page-header__buttons">
          <div class="mobile-page-header__hamburger">
            <div class="mobile-page-header__line"></div>
            <div class="mobile-page-header__line"></div>
            <div class="mobile-page-header__line"></div>
          </div><a href="<?php echo home_url(); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="150" viewBox="0 0 142 150"><g><g><g><path d="M49.76 60.153H.183v8.241H49.76z"/></g><g><path d="M130.185 145.603c-3.846 2.747-8.79 4.121-14.834 4.121-6.96 0-12.088-1.831-15.384-5.494-3.663-4.03-5.769-8.608-6.318-13.735-6.41 6.959-12.911 11.904-19.505 14.834-7.142 3.113-14.101 4.67-20.877 4.67-8.974 0-15.933-3.297-20.878-9.89-4.945-6.776-7.417-15.2-7.417-25.273 0-12.82 3.846-23.075 11.538-30.767 7.692-7.875 17.673-12.911 29.943-15.109a65.891 65.891 0 0 1 6.318-.824c2.198-.183 4.487-.366 6.868-.55 2.38-.182 4.67-.274 6.867-.274h7.143V22.535c0-4.762-1.923-8.791-5.77-12.087-4.211-3.297-8.424-4.945-12.636-4.945-5.128 0-9.614.916-13.46 2.747-4.213 2.015-6.319 3.846-6.319 5.494 0 .366.733 2.015 2.198 4.945 1.648 3.113 2.472 6.593 2.472 10.439-.732 7.875-5.402 11.812-14.01 11.812-8.79 0-13.277-4.12-13.46-12.362-.183-7.875 3.846-14.65 12.087-20.328C52.992 2.756 63.797.009 77.166.009c12.454 0 23.076 3.113 31.866 9.34 8.425 6.227 12.637 14.376 12.637 24.449v98.345c0 1.831.55 3.113 1.648 3.846 1.282 1.099 2.93 1.648 4.945 1.648 1.465 0 3.205-.824 5.22-2.472a28.426 28.426 0 0 1 2.609-2.335c.824-.641 1.42-1.145 1.785-1.511l3.297 3.846c-3.48 4.029-7.142 7.508-10.988 10.438zM93.649 79.95c-2.747-2.015-5.586-3.663-8.516-4.945a13.191 13.191 0 0 0-4.67-.824c-2.015 0-4.396.274-7.143.824-6.226 1.648-10.988 5.036-14.284 10.164-3.48 5.128-5.22 12.179-5.22 21.152 0 8.608 1.374 15.75 4.12 21.428 2.748 5.677 7.143 8.516 13.187 8.516 6.776 0 12.178-3.938 16.207-11.813 4.213-8.058 6.319-17.215 6.319-27.47z"/></g></g></g></svg></a>
        </div>
      </div>
    </header>
    <main-wrap data-barba="wrapper">
      <main data-barba="container" data-barba-namespace="home">



  <body <?php body_class(); ?>>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_studio_soixante
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- TO DELETE before hosting online 
  <meta http-equiv="refresh" content="2">

-->


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body class="page-wrapper">
  <?php wp_body_open(); ?>
  <!-- #page-wrapper -->
  <div id="page" class="hfeed site m-0 p-0 "> 
  
	<?php  if ( is_front_page() ) : ?>
  <nav id="masthead" class="navbar">
    <div class="navbar__container">
      <div id="" class="site-branding " style="" >
        <?php the_custom_logo()?> 
        <div>
          <h1 id="brandName" class="site-branding__name "><?= get_bloginfo() ?></h1>
          <p id="brandDescription" class="site-branding__description"><?php bloginfo('description')?></p>
        </div>
		  </div><!-- .site-branding -->
      <div id="site-navigation" class="">
        <?php wp_nav_menu( array(
          'theme_location'  => 'primary-menu',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'nav',
          'container_class' => 'w-100 m-0 p-0',
          'container_id'    => 'navMenu',
          'menu_class'      => 'navbar__nav-menu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));?>  
		  </div><!-- #site-navigation --> 
      <?php  get_template_part("partials/nav/burger"); ?>
 
    </div>
	</nav><!-- #masthead -->
  <div class="overlay-menu overlay-menu--hidden" id="overlayMenu">
    <?php wp_nav_menu( array(
          'theme_location'  => 'primary-menu',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => '',
          'container_id'    => 'navMenu',
          'menu_class'      => '',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
    ));?>  
  </div>
	<?php  else : ?>
  <nav id="masthead" class="navbar bg-white">
    <div class="navbar__container">
      <div id="" class="site-branding" style="" >
        <?php the_custom_logo()?> 
        <div>
          <h1 id="brandName" class="site-branding__name"><?= get_bloginfo() ?></h1>
          <p id="brandDescription" class="site-branding__description"><?php bloginfo('description')?></p>
        </div>
		  </div><!-- .site-branding -->
      <div id="site-navigation" class="">
        <?php wp_nav_menu( array(
          'theme_location'  => 'primary-menu',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'nav',
          'container_class' => 'w-100 m-0 p-0',
          'container_id'    => 'navMenu',
          'menu_class'      => 'navbar__nav-menu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));?>  
		  </div><!-- #site-navigation -->
 
      <?php  get_template_part("partials/nav/burger"); ?>
 
      </ul> 
    </div>
	</nav><!-- #masthead -->

  <div class="overlay-menu overlay-menu--hidden" id="overlayMenu">
    <?php wp_nav_menu( array(
          'theme_location'  => 'primary-menu',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => '',
          'container_id'    => 'navMenu',
          'menu_class'      => '',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
    ));?>  
 
  </div> 
<?php endif;?>

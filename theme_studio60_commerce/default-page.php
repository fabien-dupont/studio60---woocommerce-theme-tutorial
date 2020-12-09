<?php
/*
 * Template Name: default-page
 *
 * @package theme_studio_soixante
 */
get_header();
get_template_part("partials/layout/hero");
/* Start the Loop */
while ( have_posts() ) :
?>
<?php if( have_rows('sections') ):
  while( have_rows('sections') ): the_row(); 
    get_template_part("/partials/layout/left");
    get_template_part("/partials/layout/right");
    get_template_part("/partials/layout/left","img");
    get_template_part("/partials/layout/right","img"); 

  endwhile;
endif; ?>  
<?php endwhile;

get_footer();

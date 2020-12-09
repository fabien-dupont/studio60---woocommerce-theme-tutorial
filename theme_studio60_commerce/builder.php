<?php
/**
 * Template Name: builder
 *
 * @package theme_studio_soixante
 */
get_header();
get_template_part("subheader");
get_template_part("partials/layout/hero");
/* Start the Loop */
?>


<?php
while ( have_posts() ) :
  if( have_rows('sections_commons') ):
    //echo "it exists !";
    while( have_rows('sections_commons') ): the_row();
      get_template_part("/partials/layout/introduction"); 
    endwhile;
  endif;

  if( have_rows('sections') ):
    while( have_rows('sections') ): the_row(); 
      get_template_part("/partials/layout/left");
      get_template_part("/partials/layout/right");
      get_template_part("/partials/layout/center");

      get_template_part("/partials/layout/left","img");
      get_template_part("/partials/layout/right","img");
      get_template_part("/partials/layout/right","cta");
      get_template_part("/partials/layout/right-img","center-cta");

      get_template_part("/partials/layout/left-img","half");
      get_template_part("/partials/layout/right-img","half");

      get_template_part("/partials/sections/common/image","wave");
    endwhile;
  endif; 

  get_template_part("partials/sections/common/calltoaction");
  
  the_post(); //
  the_content(); 
	 // get_template_part("partials/sections/common/contact");
  if( have_rows('sections_commons') ):
    //echo "it exists !";
    while( have_rows('sections_commons') ): the_row();
      get_template_part("/partials/layout/contact"); 
    endwhile;
  endif; 
endwhile;
get_footer();
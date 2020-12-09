<?php
/**
 * Template Name: front-page
 *
 * @package theme_studio_soixante
 */
get_header();
get_template_part("partials/layout/hero");
?>

<?php
/* Start the Loop */
while ( have_posts() ) : 
  the_post();
?>

<?php
endwhile;
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

      
    endwhile;
  endif; 
?>

<section class="section--left">
  <div class="container">
    <div class="row">
      <div class="section--left__col">
        <h1 class="my-4"> Nouveaux arrivages du mois ! </h1>
        <ul class="products m-4 d-block">
	        <?php
		        $args = array(
			        'post_type' => 'product',
			        'posts_per_page' => 3
			      );
		        $loop = new WP_Query( $args );
		        if ( $loop->have_posts() ) {
			        while ( $loop->have_posts() ) : $loop->the_post();
				        wc_get_template_part( 'content', 'product' );
			        endwhile;
		        } else {
			        echo __( 'No products found' );
		        }
		          wp_reset_postdata();
	        ?>
        </ul><!--/.products--> 
      </div>
    </div>
  </div>
</section> 
<?php
get_footer();
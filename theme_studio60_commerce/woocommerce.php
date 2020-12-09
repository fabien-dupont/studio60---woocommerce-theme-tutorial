<?php
/**
 * The template for woocommerce
 *
 * @package theme_studio_soixante
 */

get_header();
get_template_part("partials/layout/hero");

?>
	<main id="primary" class="site-main p-4">	
    <?php woocommerce_content(); ?>


	</main><!-- #main -->

<?php
get_footer();




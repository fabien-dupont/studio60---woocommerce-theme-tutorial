<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_studio_soixante
 */
?>
<?php // get_template_part("partials/sections/homepage/sitemap");  ?>
	<footer id="colophon" class="site-footer px-2 py-2 m-0 text-center" style="">
    <div class="row  ">
      <div class="d-flex m-4">
        <?php the_custom_logo()?> 

          <span class="  my-auto"> &copy; <?php echo currentYear(); ?> -  <a class="text-primary" href="<?php echo site_url(); ?>"><?php echo bloginfo(); ?></a>

				      <?php /* translators: 1: Theme name, 2: Theme author. */ // printf( esc_html__( 'Site web : %2$s', 'studio60' ), 'studio60', '<a class="text-uppercase" href="http://www.studio60.ch">studio60</a>' );?>

          </span>
        </div> 
		</div><!-- row -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>


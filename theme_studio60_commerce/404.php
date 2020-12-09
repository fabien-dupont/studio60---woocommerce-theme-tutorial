<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package theme_studio_soixante
 */

get_header();
?>
<?php 
$notfoundImg = get_field('notfoundImage');
$notfoundImgSize='2048x2048';
$notfoundImgUrl=$notfoundImg['sizes'][$notfoundImgSize];
?>
<section 
 id=" "
 class="section--notfound"
 style="background-image:url(<?php echo $notfoundImgUrl;?>)"
>
  <div class="section--notfound__container" >
    <div class="section--notfound__row">
      <div class="section--notfound__col">
        <h1 class="section--notfound__title">
          <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme_studio_soixante' ); ?>
        </h1>
        <h3 class="section--notfound__subtitle">
          <?php the_field('notfoundSubtitle');?>
          <!--<?php // if is empty :  bloginfo('description')?> -->
        </h3>
        <br>
        <p class="section--notfound__content">
          <?php esc_html_e( 'It looks like nothing was found at this location.', 'theme_studio_soixante' ); ?>
          <!--<?php // if is empty :  bloginfo('description')?> -->
        </p>
        <button onclick="window.location.href='<?php echo site_url();?>'"  class="section--notfound__cta"><i class="fa fa-arrow-left"></i></button> 
        <?php		//		get_search_form();?>

      </div> 

    </div>
  </div>
</section>


 
<?php
get_footer();

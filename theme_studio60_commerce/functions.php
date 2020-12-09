<?php
/**
 * theme_studio_soixante functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme_studio_soixante
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theme_studio_soixante_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_studio_soixante_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on theme_studio_soixante, use a find and replace
		 * to change 'theme_studio_soixante' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theme_studio_soixante', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );





		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


  	/*
		 * Enable support for woocommerce
		 * 
		 */  
    add_theme_support('woocommerce');



    add_theme_support('menus');
		// This theme uses wp_nav_menu() in one location.
    register_nav_menu('primary-menu', 'Menu Page d\'Accueil' );  

    //register_nav_menu('footer-menu', 'Footer Menu');
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_studio_soixante_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'theme_studio_soixante_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_studio_soixante_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'theme_studio_soixante_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_studio_soixante_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_studio_soixante_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme_studio_soixante' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme_studio_soixante' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theme_studio_soixante_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_studio_soixante_scripts() {
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.5.1.min.js');
  wp_enqueue_script('popper', get_template_directory_uri() . '/js/vendor/popper.min.js'); 
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js');


  wp_register_style('slick_css', 'https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css', false, 1);
  wp_enqueue_style('slick_css');
  wp_register_style('slick_theme_css', 'https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css', false, 1);
  wp_enqueue_style('slick_theme_css');
  //wp_enqueue_script('slick', get_template_directory_uri() . '/js/vendor/slick.min.js');
  wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js');


  wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js');

	wp_enqueue_style( 'theme_studio_soixante-style', get_stylesheet_uri(), array(), _S_VERSION );
  //wp_enqueue_style('fonts');
  wp_register_style('fontawesome',get_template_directory_uri() . '/inc/font-awesome/css/all.min.css', false, 1);
  
  wp_enqueue_style('fontawesome');
	wp_style_add_data( 'theme_studio_soixante-style', 'rtl', 'replace' );


//====================================== JS CDN  ENQUE================================================================================================

wp_enqueue_script('masonry', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js');
wp_enqueue_script('lightboxjs', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js');

//==============================================================================================================================================================================================


//	wp_enqueue_script( 'theme_studio_soixante-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

//	wp_enqueue_script( 'theme_studio_soixante-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );
 
}
add_action( 'wp_enqueue_scripts', 'theme_studio_soixante_scripts' );


/**
* Register Custom Navigation Walker
*/
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// add current year functionnality for copyright
function currentYear(){ return date('Y');} 


    /**
     * Theme constants
     *
     * define the constants used in the theme here
     */

    define('THEME_URI', get_bloginfo('template_url'));
    define('THEME_PATH', __dir__);

/**
 * Display flex contents
 */
add_action('display_flex_content', function ($flex_contents) {
    if (empty($flex_contents)) {
        return false;
    }
 
});

/**
 * Include ACF fields
 */

if (function_exists('acf_add_local_field_group')) {
    $acf_files = glob(__dir__.'/functions/acf/*.php');
    foreach ($acf_files as $filename) {
        include $filename;
    }
}
if (function_exists('acf_add_local_field_group')) {
    $acf_global_files = glob(__dir__.'/functions/acf/flex/*.php');
    foreach ($acf_global_files as $filename) {
        include $filename;
    }
}

if (function_exists('acf_add_local_field_group')) {
    $acf_global_files = glob(__dir__.'/functions/acf/global/*.php');
    foreach ($acf_global_files as $filename) {
        include $filename;
    }
}


if (function_exists('acf_add_local_field_group')) {
    $acf_global_files = glob(__dir__.'/functions/acf/homepage/*.php');
    foreach ($acf_global_files as $filename) {
        include $filename;
    }
}

/**
* Add ACF Options menu page
*/

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
/*
		acf_add_options_page();

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
*/
acf_add_options_page(array(
		'page_title' 	=> 'Réglages du Site',
		'menu_title'	=> 'Réglages du site',
		'menu_slug' 	=> 'site-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
/*
		acf_add_options_page(array(
		'page_title' 	=> 'Informations Globales',
		'menu_title'	=> 'Informations',
		'menu_slug' 	=> 'global-infos',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
*/
    }
		
} 

/**
 * Desactivation de gutenberg
*/
add_filter('use_block_editor_for_post_type', 'disable_block_editor');
function disable_block_editor($use_block_editor) {
  return false;
}
 
//desactiver le classic editor pour la front-page
function remove_editor() {
    remove_post_type_support( 'post', 'thumbnail' );
    // Or remove it for all registerd types
    foreach ( get_post_types() as $post_type ) {
        remove_post_type_support( $post_type, 'thumbnail' );
    }
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            //case 'builder.php': // test page

            case 'front-page.php':
            case 'default-page.php':
      
            //case 'default':

            // the below removes 'editor' support for 'pages'
            // if you want to remove for posts or custom post types as well
            // add this line for posts:
            // remove_post_type_support('post', 'editor');
            // add this line for custom post types and replace 
            // custom-post-type-name with the name of post type:
            // remove_post_type_support('custom-post-type-name', 'editor');
            remove_post_type_support('page', 'editor');
            break;
            default :
            // Don't remove any other template.
            break;
        }
    }
}



// ACF  à bouger de ici 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5f9da0550d8c5',
	'title' => 'Flexible Content',
	'fields' => array(
		array(
			'key' => 'field_5f9da094ed492',
			'label' => 'Sections',
			'name' => 'sections',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_5f9eac4003b7d' => array(
					'key' => 'layout_5f9eac4003b7d',
					'name' => 'section_text_right',
					'label' => 'Section Texte à Droite',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9eac4003b7e',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9eac4003b80',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5f9da0c101ff8' => array(
					'key' => 'layout_5f9da0c101ff8',
					'name' => 'section_image_left_text_right',
					'label' => 'Section Image à Gauche et Texte à Droite',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9da140ed493',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9da164ed494',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5f9da32937923',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => NULL,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5f9dc30b0b67e' => array(
					'key' => 'layout_5f9dc30b0b67e',
					'name' => 'section_half_image_left_text_right',
					'label' => 'Section Moitié/Moitié Image à Gauche et Texte à Droite',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9dc30b0b67f',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9dc30b0b680',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5f9dc30b0b681',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5f9eabfa03b79' => array(
					'key' => 'layout_5f9eabfa03b79',
					'name' => 'section_text_left',
					'label' => 'Section Texte à Gauche',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9eabfa03b7a',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9eabfa03b7b',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5f9dc0160b738' => array(
					'key' => 'layout_5f9dc0160b738',
					'name' => 'section_text_left_image_right',
					'label' => 'Section Texte à Gauche et Image à Droite',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9dc0160b739',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9dc0160b73b',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
						array(
							'key' => 'field_5f9dc0160b73a',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5faa8a25f2806' => array(
					'key' => 'layout_5faa8a25f2806',
					'name' => 'section_text_left_cta_right',
					'label' => 'Section Texte à Gauche et Bouton à Droite',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5faa8a25f2807',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5faa8a25f2808',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
						array(
							'key' => 'field_5faa8a48f280a',
							'label' => 'Lien',
							'name' => 'link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5f9dc41557d95' => array(
					'key' => 'layout_5f9dc41557d95',
					'name' => 'section_half_text_left_image_right',
					'label' => 'Section Moitié/Moitié Texte à Gauche et Image à Droite',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9dc41557d96',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9dc41557d97',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
						array(
							'key' => 'field_5f9dc41557d98',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5faa8d942e96f' => array(
					'key' => 'layout_5faa8d942e96f',
					'name' => 'section_text_left_image_right_bottom_cta',
					'label' => 'Section Texte à Gauche et Image à Droite et Bouton Centré en Dessous',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5faa8d942e970',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5faa8d942e971',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
						array(
							'key' => 'field_5faa8d942e972',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5faa8dcf2e973',
							'label' => 'Lien',
							'name' => 'link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5f9eb6564e64a' => array(
					'key' => 'layout_5f9eb6564e64a',
					'name' => 'section_centered',
					'label' => 'Section Centrée',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9eb6564e64b',
							'label' => 'Titre',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9eb769187b7',
							'label' => 'Sous-titre',
							'name' => 'subtitle',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5f9eb6564e64d',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5f9eb6564e64c',
							'label' => 'Contenu',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5f9fd3fcb12d6' => array(
					'key' => 'layout_5f9fd3fcb12d6',
					'name' => 'section_image_wave',
					'label' => 'Section Image Vague',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5f9fd3fcb12d9',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Ajouter Une Section',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'builder.php',
			),
		),
 
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default-page.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'front-page.php',
			),
		),
 
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
));

 
endif;



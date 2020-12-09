<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5f7de57522930',
	'title' => 'Image à la Une', 
	'fields' => array(

		array(
			'key' => 'field_5f7de5f548d94',
			'label' => 'Titre',
			'name' => 'heroTitle',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Titre à la une',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5f7de64448d95',
			'label' => 'Sous-Titre',
			'name' => 'heroSubtitle',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Sous-titre',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5f7de64448b95',
			'label' => 'Introduction',
			'name' => 'heroContent',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Lorem ipsum dolor sit amet',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),

		// plus oembed video prose une bg-image (.webp) by the fault.

		
		array(
			'key' => 'field_5f7de57d48d93',
			'label' => 'Image',
			'name' => 'heroImage',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50%',
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
			'key' => 'field_5f7de6a448d97',
			'label' => 'Vidéo',
			'name' => 'heroVideo',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'width' => '50%',
			'height' => '',
		),

		//a la mano rajout lien hero

		array(
			'key' => 'heroLink',
			'label' => 'Lien',
			'name' => 'link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
		//a la mano all CTA	link/Title
		array(
			'key' => 'link_all_CTA_donation',
			'label' => 'Lien bouton faire un don',
			'name' => 'link_CTA_donation',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'front-page.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'rita-page.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'phila-page.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'houses-page.php',
			),
		),

		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'faq-page.php',
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
				'value' => 'builder.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
?>

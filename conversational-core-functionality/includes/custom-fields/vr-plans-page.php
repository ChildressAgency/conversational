<?php
/**
 * ACF fields
 * Vr Plans page fields
 */
if(!defined('ABSPATH')){ exit; }

/**
 * Coverage Time Section
 */
acf_add_local_field_group(array(
	'key' => 'group_5cafb76192820',
	'title' => esc_html__('VR Plans Page Settings - Coverage Section', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cafb7805a92a',
			'label' => esc_html__('Coverage Time Section Icon', 'conversational'),
			'name' => 'coverage_time_section_icon',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'full',
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
			'key' => 'field_5cafb7955a92b',
			'label' => esc_html__('Coverage Time Section Title', 'conversational'),
			'name' => 'coverage_time_section_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5cafb7a25a92c',
			'label' => esc_html__('Coverage Time Section Content', 'conversational'),
			'name' => 'coverage_time_section_content',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'wpautop',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '41',
			),
		),
	),
	'menu_order' => 10,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
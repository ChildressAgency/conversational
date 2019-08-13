<?php
/**
 * ACF fields
 * Testimonials page settings
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cb0f12e39151',
	'title' => esc_html__('Testimonials Page Settings', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cb0f139b8f1f',
			'label' => esc_html__('Testimonials Iframe', 'conversational'),
			'name' => 'testimonials_iframe',
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
			'new_lines' => '',
		),
		array(
			'key' => 'field_5cb0f15eb8f20',
			'label' => esc_html__('Team Located Section Content', 'conversational'),
			'name' => 'team_located_section_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '15',
			),
		),
	),
	'menu_order' => 5,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
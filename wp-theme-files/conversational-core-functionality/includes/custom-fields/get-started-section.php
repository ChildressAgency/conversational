<?php
/**
 * ACF Fields
 * Get started section fields
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cafbca837c91',
	'title' => esc_html__('Get Started Section Settings', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cafbcc1163fd',
			'label' => esc_html__('Get Started Section Intro', 'conversational'),
			'name' => 'get_started_section_intro',
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
		array(
			'key' => 'field_5cafbcd1163fe',
			'label' => esc_html__('Get Started Section Content', 'conversational'),
			'name' => 'get_started_section_content',
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
		array(
			'key' => 'field_5cafbcfe163ff',
			'label' => esc_html__('Get Started Section', 'conversational'),
			'name' => 'get_started_section',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array(
				0 => 'group_5cafac19ddd23',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 1,
			'prefix_name' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '5',
			),
		),
	),
	'menu_order' => 9,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

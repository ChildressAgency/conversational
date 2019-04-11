<?php
/**
 * ACF fields
 * Main Content Field for pages
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cafbecf04caa',
	'title' => esc_html__('Page Main Content', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cafbeddf3be7',
			'label' => esc_html__('Page Content', 'conversational'),
			'name' => 'page_content',
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
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '5',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '11',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '69',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '47',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '17',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '9',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
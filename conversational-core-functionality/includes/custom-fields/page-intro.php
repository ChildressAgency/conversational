<?php
/**
 * ACF Fields
 * Page Intro field
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cafb18f38f95',
	'title' => esc_html__('Page Intro', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cafb19670782',
			'label' => esc_html__('Page Intro', 'conversational'),
			'name' => 'page_intro',
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
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
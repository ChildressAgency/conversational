<?php
/**
 * ACF Fields
 * Hero settings for pages and posts, not including home page
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cafaed6e9ba0',
	'title' => esc_html__('Hero Settings', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cafaede3a633',
			'label' => esc_html__('Hero Background Image', 'conversational'),
			'name' => 'hero_background_image',
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
			'key' => 'field_5cafaf1b3a634',
			'label' => esc_html__('Hero Background Image CSS', 'conversational'),
			'name' => 'hero_background_image_css',
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
			'key' => 'field_5cafaf243a635',
			'label' => esc_html__('Site Section', 'conversational'),
			'name' => 'site_section',
			'type' => 'text',
			'instructions' => esc_html__('Enter the parent section for the page here, for example About or Industries. This is optional.', 'conversational'),
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
			'key' => 'field_5cafaf303a636',
			'label' => esc_html__('Hero Title', 'conversational'),
			'name' => 'hero_title',
			'type' => 'text',
			'instructions' => esc_html__('Leave this field blank to show the page title.', 'conversational'),
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
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
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));
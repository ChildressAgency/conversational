<?php
/**
 * ACF fields
 * settings for States custom post type
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cb3edcb33153',
	'title' => 'States Settings',
	'fields' => array(
		array(
			'key' => 'field_5cb3edd0b85b7',
			'label' => 'Testimonials Iframe',
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'states',
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

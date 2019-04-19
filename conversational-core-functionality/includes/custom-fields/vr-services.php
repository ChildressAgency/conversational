<?php
/**
 * ACF fields
 * VR Services page settings
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cb0a36c0df80',
	'title' => esc_html__('VR Services Page Settings', 'convresational'),
	'fields' => array(
		array(
			'key' => 'field_5cb0a376dce48',
			'label' => esc_html__('Features Section Subtitle', 'convresational'),
			'name' => 'features_section_subtitle',
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
			'key' => 'field_5cb0a393dce49',
			'label' => esc_html__('Features', 'convresational'),
			'name' => 'features',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5cb0a3a1dce4a',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => esc_html__('Add Feature', 'convresational'),
			'sub_fields' => array(
				array(
					'key' => 'field_5cb0a3a1dce4a',
					'label' => esc_html__('Feature Title', 'convresational'),
					'name' => 'feature_title',
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
					'key' => 'field_5cb0a3aedce4b',
					'label' => esc_html__('Feature Description', 'convresational'),
					'name' => 'feature_description',
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
		),
		array(
			'key' => 'field_5cb0a3d2dce4c',
			'label' => esc_html__('Customize Call Handling Section Title', 'convresational'),
			'name' => 'customize_call_handling_section_title',
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
			'key' => 'field_5cb0a3dedce4d',
			'label' => esc_html__('Customize Call Handling Section Content', 'convresational'),
			'name' => 'customize_call_handling_section_content',
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
				'value' => '59',
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
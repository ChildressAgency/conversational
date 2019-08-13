<?php
/**
 * ACF fields
 * fields for Compare Services page
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cd5d67ca35b7',
	'title' => esc_html__('Comparisons Settings', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cd5d6a339b84',
			'label' => esc_html__('Competitor Intro', 'conversational'),
			'name' => 'competitor_intro',
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
			'key' => 'field_5cd5d6b439b85',
			'label' => esc_html__('Comparison Chart', 'conversational'),
			'name' => 'comparison_chart',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5cd5d6ca39b86',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => esc_html__('Add Category', 'conversational'),
			'sub_fields' => array(
				array(
					'key' => 'field_5cd5d6ca39b86',
					'label' => esc_html__('Category', 'conversational'),
					'name' => 'category',
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
					'key' => 'field_5cd5da1639b87',
					'label' => esc_html__('Conversational Value', 'conversational'),
					'name' => 'conversational_value',
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
					'key' => 'field_5cd5da1f39b88',
					'label' => esc_html__('Competitor Value', 'conversational'),
					'name' => 'competitor_value',
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
			),
		),
		array(
			'key' => 'field_5cd5da7539b89',
			'label' => esc_html__('Comparison Content', 'conversational'),
			'name' => 'comparison_content',
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
				'layout_5cd5da79c4eef' => array(
					'key' => 'layout_5cd5da79c4eef',
					'name' => 'regular_content',
					'label' => esc_html__('Regular Content', 'conversational'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cd5da8839b8a',
							'label' => esc_html__('Content', 'conversational'),
							'name' => 'content',
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
					'min' => '',
					'max' => '',
				),
				'layout_5cd5da9539b8b' => array(
					'key' => 'layout_5cd5da9539b8b',
					'name' => 'cut_bill_graphic',
					'label' => esc_html__('Cut Bill Graphic', 'conversational'),
					'display' => 'block',
					'sub_fields' => array(
					),
					'min' => '',
					'max' => '',
				),
				'layout_5cd5dab039b8c' => array(
					'key' => 'layout_5cd5dab039b8c',
					'name' => 'button',
					'label' => esc_html__('Button', 'conversational'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cd5dabb39b8d',
							'label' => esc_html__('Section', 'conversational'),
							'name' => 'section',
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
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 1,
							'prefix_name' => 1,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5cd5db67ab0b7' => array(
					'key' => 'layout_5cd5db67ab0b7',
					'name' => 'disclaimer',
					'label' => esc_html__('Disclaimer', 'conversational'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cd5db78ab0b8',
							'label' => esc_html__('Disclaimer Content', 'conversational'),
							'name' => 'disclaimer_content',
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
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => esc_html__('Add Section', 'conversational'),
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'comparison',
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

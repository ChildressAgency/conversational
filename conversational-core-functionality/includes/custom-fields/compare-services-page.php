<?php
/**
 * ACF fields
 * fields for Compare Services page
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cafc2bbbcd2c',
	'title' => esc_html__('Compare Page Settings', 'conversational'),
	'fields' => array(
		array(
			'key' => 'field_5cafc2c8a1f00',
			'label' => esc_html__('Competitors', 'conversational'),
			'name' => 'competitors',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5cafc2d7a1f01',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => esc_html__('Add Competitor', 'conversational'),
			'sub_fields' => array(
				array(
					'key' => 'field_5cafc2d7a1f01',
					'label' => esc_html__('Competitor Name', 'conversational'),
					'name' => 'competitor_name',
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
					'key' => 'field_5cafc314a1f02',
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
					'key' => 'field_5cafc334a1f03',
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
					'collapsed' => 'field_5cafc34da1f04',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => esc_html__('Add Comparison', 'conversational'),
					'sub_fields' => array(
						array(
							'key' => 'field_5cafc34da1f04',
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
							'key' => 'field_5cafc356a1f05',
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
							'key' => 'field_5cafc360a1f06',
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
					'key' => 'field_5cafc390a1f07',
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
						'layout_5cafc3a70af60' => array(
							'key' => 'layout_5cafc3a70af60',
							'name' => 'regular_content',
							'label' => esc_html__('Regular Content', 'conversational'),
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5cafc3b3a1f08',
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
						'layout_5cafc3d0a1f09' => array(
							'key' => 'layout_5cafc3d0a1f09',
							'name' => 'cut_bill_graphic',
							'label' => esc_html__('Cut Bill Graphic', 'conversational'),
							'display' => 'block',
							'sub_fields' => array(
							),
							'min' => '',
							'max' => '',
						),
						'layout_5cafc3eaa1f0a' => array(
							'key' => 'layout_5cafc3eaa1f0a',
							'name' => 'button',
							'label' => esc_html__('Button', 'conversational'),
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5cafc422a1f0b',
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
									'display' => 'group',
									'layout' => 'block',
									'prefix_label' => 1,
									'prefix_name' => 1,
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5cafc43da1f0c' => array(
							'key' => 'layout_5cafc43da1f0c',
							'name' => 'disclaimer',
							'label' => esc_html__('Disclaimer', 'conversational'),
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5cafc443a1f0d',
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
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '69',
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

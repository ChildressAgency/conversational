<?php
/**
 * ACF fields
 * Industries Template fields
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5cb0a651bbf69',
	'title' => 'Industries Template Settings',
	'fields' => array(
		array(
			'key' => 'field_5cb0a66e25656',
			'label' => esc_html__('Main Content Style', 'conversational'),
			'name' => 'main_content_style',
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
				'layout_5cb0a67504c6a' => array(
					'key' => 'layout_5cb0a67504c6a',
					'name' => 'regular_content',
					'label' => esc_html__('Regular Content', 'conversational'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb0a68425657',
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
				'layout_5cb0a69725658' => array(
					'key' => 'layout_5cb0a69725658',
					'name' => esc_html__('icon_fields', 'conversational'),
					'label' => 'Icon Fields',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb0a6a725659',
							'label' => esc_html__('Icon', 'conversational'),
							'name' => 'icon',
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
							'key' => 'field_5cb0a6c02565a',
							'label' => esc_html__('Icon Field Title', 'conversational'),
							'name' => 'icon_field_title',
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
							'key' => 'field_5cb0a6cb2565b',
							'label' => esc_html__('Icon Field Content', 'conversational'),
							'name' => 'icon_field_content',
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
		array(
			'key' => 'field_5cb0a6f42565c',
			'label' => esc_html__('Accordion Section', 'conversational'),
			'name' => 'accordion_section',
			'type' => 'repeater',
			'instructions' => esc_html__('Leave this section empty if you don\'t want to display an accordion  'conversational'),section.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5cb0a7282565d',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => esc_html__('Add Accordion Field', 'conversational'),
			'sub_fields' => array(
				array(
					'key' => 'field_5cb0a7282565d',
					'label' => esc_html__('Accordion Field Title', 'conversational'),
					'name' => 'accordion_field_title',
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
					'key' => 'field_5cb0a7342565e',
					'label' => esc_html__('Accordion Field Content', 'conversational'),
					'name' => 'accordion_field_content',
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
		),
		array(
			'key' => 'field_5cb0a7572565f',
			'label' => esc_html__('Alt Content Style', 'conversational'),
			'name' => 'alt_content_style',
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
				'layout_5cb0a766c9816' => array(
					'key' => 'layout_5cb0a766c9816',
					'name' => 'with_icon',
					'label' => esc_html__('With Icon', 'conversational'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb0a78325660',
							'label' => esc_html__('Alt Content Icon', 'conversational'),
							'name' => 'alt_content_icon',
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
							'key' => 'field_5cb0a7a325661',
							'label' => esc_html__('Alt Content Title', 'conversational'),
							'name' => 'alt_content_title',
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
							'key' => 'field_5cb0a7ba25662',
							'label' => esc_html__('Icon Content Style', 'conversational'),
							'name' => 'icon_content_style',
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
								'layout_5cb0a7c65daa2' => array(
									'key' => 'layout_5cb0a7c65daa2',
									'name' => 'regular_content',
									'label' => esc_html__('Regular Content', 'conversational'),
									'display' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_5cb0a7d225663',
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
								'layout_5cb0a7da25664' => array(
									'key' => 'layout_5cb0a7da25664',
									'name' => 'pricing',
									'label' => esc_html__('Pricing', 'conversational'),
									'display' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_5cb0a80325665',
											'label' => esc_html__('Plan 1', 'conversational'),
											'name' => '',
											'type' => 'tab',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'placement' => 'top',
											'endpoint' => 0,
										),
										array(
											'key' => 'field_5cb0a80d25666',
											'label' => esc_html__('Plan 1 Title', 'conversational'),
											'name' => 'plan_1_title',
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
											'key' => 'field_5cb0a81825667',
											'label' => esc_html__('Plan 1 Subtitle', 'conversational'),
											'name' => 'plan_1_subtitle',
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
											'key' => 'field_5cb0a82325668',
											'label' => esc_html__('Plan 1 Price Per Month', 'conversational'),
											'name' => 'plan_1_price_per_month',
											'type' => 'number',
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
											'prepend' => '$',
											'append' => '',
											'min' => '',
											'max' => '',
											'step' => '',
										),
										array(
											'key' => 'field_5cb0a84625669',
											'label' => esc_html__('Plan 1 Price Per Minute', 'conversational'),
											'name' => 'plan_1_price_per_minute',
											'type' => 'number',
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
											'prepend' => '$',
											'append' => '',
											'min' => '',
											'max' => '',
											'step' => '',
										),
										array(
											'key' => 'field_5cb0a8712566a',
											'label' => esc_html__('Plan 2', 'conversational'),
											'name' => '',
											'type' => 'tab',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'placement' => 'top',
											'endpoint' => 0,
										),
										array(
											'key' => 'field_5cb0a87c2566b',
											'label' => esc_html__('Plan 2 Title', 'conversational'),
											'name' => 'plan_2_title',
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
											'key' => 'field_5cb0a8832566c',
											'label' => esc_html__('Plan 2 Subtitle', 'conversational'),
											'name' => 'plan_2_subtitle',
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
											'key' => 'field_5cb0a88f2566d',
											'label' => esc_html__('Plan 2 Price Per Month', 'conversational'),
											'name' => 'plan_2_price_per_month',
											'type' => 'number',
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
											'prepend' => '$',
											'append' => '',
											'min' => '',
											'max' => '',
											'step' => '',
										),
										array(
											'key' => 'field_5cb0a89c2566e',
											'label' => esc_html__('Plan 2 Price Per Minute', 'conversational'),
											'name' => 'plan_2_price_per_minute',
											'type' => 'number',
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
											'prepend' => '$',
											'append' => '',
											'min' => '',
											'max' => '',
											'step' => '',
										),
										array(
											'key' => 'field_5cb0a8ac2566f',
											'label' => esc_html__('Plan 3', 'conversational'),
											'name' => '',
											'type' => 'tab',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'placement' => 'top',
											'endpoint' => 0,
										),
										array(
											'key' => 'field_5cb0a8c025670',
											'label' => esc_html__('Plan 3 Title', 'conversational'),
											'name' => 'plan_3_title',
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
											'key' => 'field_5cb0a8c825671',
											'label' => esc_html__('Plan 3 Subtitle', 'conversational'),
											'name' => 'plan_3_subtitle',
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
											'key' => 'field_5cb0a8d025672',
											'label' => esc_html__('Plan 3 Price Per Month', 'conversational'),
											'name' => 'plan_3_price_per_month',
											'type' => 'number',
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
											'prepend' => '$',
											'append' => '',
											'min' => '',
											'max' => '',
											'step' => '',
										),
										array(
											'key' => 'field_5cb0a8df25673',
											'label' => esc_html__('Plan 3 Price Per Minute', 'conversational'),
											'name' => 'plan_3_price_per_minute',
											'type' => 'number',
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
											'prepend' => '$',
											'append' => '',
											'min' => '',
											'max' => '',
											'step' => '',
										),
										array(
											'key' => 'field_5cb0a8ef25674',
											'label' => '',
											'name' => '',
											'type' => 'tab',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'placement' => 'top',
											'endpoint' => 1,
										),
										array(
											'key' => 'field_5cb0a92125675',
											'label' => esc_html__('Plan Pricing Content', 'conversational'),
											'name' => 'plan_pricing_content',
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
					'min' => '',
					'max' => '',
				),
				'layout_5cb0a96625676' => array(
					'key' => 'layout_5cb0a96625676',
					'name' => 'without_icon',
					'label' => esc_html__('Without Icon', 'conversational'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb0a99925677',
							'label' => esc_html__('Alt Content Title', 'conversational'),
							'name' => 'alt_content_title',
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
							'key' => 'field_5cb0a9af25678',
							'label' => esc_html__('No Icon Content Style', 'conversational'),
							'name' => 'no_icon_content_style',
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
								'layout_5cb0a9baf2729' => array(
									'key' => 'layout_5cb0a9baf2729',
									'name' => 'regular_content',
									'label' => esc_html__('Regular Content', 'conversational'),
									'display' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_5cb0a9d825679',
											'label' => 'Content',
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
								'layout_5cb0a9e22567a' => array(
									'key' => 'layout_5cb0a9e22567a',
									'name' => 'icon_field',
									'label' => esc_html__('Icon Field', 'conversational'),
									'display' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_5cb0a9f22567b',
											'label' => esc_html__('Icon Fields', 'conversational'),
											'name' => 'icon_fields',
											'type' => 'repeater',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'collapsed' => 'field_5cb0aa1b2567d',
											'min' => 0,
											'max' => 0,
											'layout' => 'table',
											'button_label' => esc_html__('Add Icon Field', 'conversational'),
											'sub_fields' => array(
												array(
													'key' => 'field_5cb0aa092567c',
													'label' => esc_html__('Icon', 'conversational'),
													'name' => 'icon',
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
													'key' => 'field_5cb0aa1b2567d',
													'label' => esc_html__('Icon Field Title', 'conversational'),
													'name' => 'icon_field_title',
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
													'key' => 'field_5cb0aa272567e',
													'label' => esc_html__('Icon Field Content', 'conversational'),
													'name' => 'icon_field_content',
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
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/industries-template.php',
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
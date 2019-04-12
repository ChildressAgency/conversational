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
			'label' => 'Main Content Style',
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
					'label' => 'Regular Content',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb0a68425657',
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
				'layout_5cb0a69725658' => array(
					'key' => 'layout_5cb0a69725658',
					'name' => 'icon_with_content',
					'label' => 'Icon With Content',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb11462f0816',
							'label' => 'Icon Fields',
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
							'collapsed' => 'field_5cb11482f0818',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Add Icon Field',
							'sub_fields' => array(
								array(
									'key' => 'field_5cb11474f0817',
									'label' => 'Icon',
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
									'key' => 'field_5cb11482f0818',
									'label' => 'Icon Field Title',
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
									'key' => 'field_5cb1148ff0819',
									'label' => 'Icon Field Content',
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
			'button_label' => 'Add Section',
			'min' => '',
			'max' => '',
		),
		array(
			'key' => 'field_5cb0a6f42565c',
			'label' => 'Accordion Section',
			'name' => 'accordion_section',
			'type' => 'repeater',
			'instructions' => 'Leave this section empty if you don\'t want to display an accordion section.',
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
			'button_label' => 'Add Accordion Field',
			'sub_fields' => array(
				array(
					'key' => 'field_5cb0a7282565d',
					'label' => 'Accordion Field Title',
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
					'label' => 'Accordion Field Content',
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
			'label' => 'Alt Content Style',
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
					'label' => 'With Icon',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb0a78325660',
							'label' => 'Alt Content Icon',
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
							'label' => 'Alt Content Title',
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
							'label' => 'Icon Content Style',
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
									'label' => 'Regular Content',
									'display' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_5cb0a7d225663',
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
								'layout_5cb0a7da25664' => array(
									'key' => 'layout_5cb0a7da25664',
									'name' => 'pricing',
									'label' => 'Pricing',
									'display' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_5cb0a80325665',
											'label' => 'Plan 1',
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
											'label' => 'Plan 1 Title',
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
											'label' => 'Plan 1 Subtitle',
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
											'label' => 'Plan 1 Price Per Month',
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
											'label' => 'Plan 1 Price Per Minute',
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
											'label' => 'Plan 2',
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
											'label' => 'Plan 2 Title',
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
											'label' => 'Plan 2 Subtitle',
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
											'label' => 'Plan 2 Price Per Month',
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
											'label' => 'Plan 2 Price Per Minute',
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
											'label' => 'Plan 3',
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
											'label' => 'Plan 3 Title',
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
											'label' => 'Plan 3 Subtitle',
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
											'label' => 'Plan 3 Price Per Month',
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
											'label' => 'Plan 3 Price Per Minute',
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
											'label' => 'Plan Pricing Content',
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
							'button_label' => 'Add Section',
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
					'label' => 'Without Icon',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5cb0a99925677',
							'label' => 'Alt Content Title',
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
							'label' => 'No Icon Content Style',
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
									'label' => 'Regular Content',
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
									'label' => 'Icon Field',
									'display' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_5cb0a9f22567b',
											'label' => 'Icon Fields',
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
											'button_label' => 'Add Icon Field',
											'sub_fields' => array(
												array(
													'key' => 'field_5cb0aa092567c',
													'label' => 'Icon',
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
													'label' => 'Icon Field Title',
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
													'label' => 'Icon Field Content',
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
							'button_label' => 'Add Section',
							'min' => '',
							'max' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Section',
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

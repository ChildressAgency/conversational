<?php
/**
 * Fields for the Form Settings acf options page
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5ccb598466c04',
	'title' => esc_html__('CAI ACF MultiStep Form Settings', 'caims'),
	'fields' => array(
		array(
			'key' => 'field_5ccb5995c506e',
			'label' => esc_html__('Form Post Type', 'caims'),
			'name' => 'form_post_type',
			'type' => 'select',
			'instructions' => esc_html__('', 'caims'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ccb5a3cc5071',
			'label' => esc_html__('Form Complete Message', 'caims'),
			'name' => 'form_complete_message',
			'type' => 'wysiwyg',
			'instructions' => esc_html__('The message to display when the form is finished.', 'caims'),
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
		/*array(
			'key' => 'field_5cd2ef7b43288',
			'label' => 'Login Message',
			'name' => 'login_message',
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
    ),*/
    array(
      'key' => 'field_crmyp5k1tezu',
      'label' => esc_html__('Save for Later Message', 'caims'),
      'name' => 'save_for_later_message',
      'type' => 'wysiwyg',
      'instructions' => esc_html__('Message to show on webpage when user chooses to finish later', 'caims'),
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
      'key' => 'field_w9w6ittal4j9',
      'label' => esc_html__('Form Link Email Subject', 'caims'),
      'name' => 'form_link_email_subject',
      'type' => 'text',
      'instructions' => esc_html__('', 'caims'),
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
      'key' => 'field_1jc4srsd719l',
      'label' => esc_html__('Form Link Email Message', 'caims'),
      'name' => 'form_link_email_message',
      'type' => 'wysiwyg',
      'instructions' => esc_html__('', 'caims'),
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
      'key' => 'field_5gvwjsrwrvbb',
      'label' => esc_html__('Finished Form Email Addresses', 'caims'),
      'name' => 'finished_form_email_addresses',
      'type' => 'text',
      'instructions' => esc_html__('Enter enter one or more email addresses separated with a comma.', 'caims'),
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
      'key' => 'field_22nyvyfavvqc',
      'label' => esc_html__('Finished Form Email Subject', 'caims'),
      'name' => 'finished_form_email_subject',
      'type' => 'text',
      'instructions' => esc_html__('', 'caims'),
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
      'maxlength' => '',
    ),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'cai-acf-multistep-form-settings',
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

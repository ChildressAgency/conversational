<?php
if(!defined('ABSPATH')){ exit; }

function conversational_create_post_types(){
  $states_labels = array(
    'name' => esc_html_x('States', 'post type name', 'conversational'),
    'singular_name' => esc_html_x('State', 'post type singular name', 'conversational'),
    'menu_name' => esc_html_x('States', 'post type menu name', 'conversational'),
    'add_new_item' => esc_html__('Add New State', 'conversational'),
    'search_items' => esc_html__('Search States', 'conversational'),
    'edit_item' => esc_html__('Edit State', 'conversational'),
    'view_item' => esc_html__('View State', 'conversational'),
    'all_items' => esc_html__('All States', 'conversational'),
    'new_item' => esc_html__('New State', 'conversational'),
    'not_found' => esc_html__('No State Found', 'conversational')
  );
  $states_args = array(
    'labels' => $states_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-location-alt',
    'query_var' => 'states',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'custom-fields',
      'revisions'
    )
  );
  register_post_type('states', $states_args);

  register_taxonomy('countries',
    'states',
    array(
      'hierarchical' => true,
      'show_admin_column' => true,
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
        'name' => esc_html__('Countries', 'conversational'),
        'singular_name' => esc_html__('Country', 'conversational'),
        'all_items' => esc_html__('All Countries', 'conversational'),
        'edit_items' => esc_html__('Edit Countries', 'conversational'),
        'view_item' => esc_html__('View Country', 'conversational'),
        'update_item' => esc_html__('Update Country', 'conversational'),
        'add_new_item' => esc_html__('Add New Country', 'conversational'),
        'parent_item' => esc_html__('Parent Country', 'conversational'),
        'search_items' => esc_html__('Search Countries', 'conversational'),
        'popular_items' => esc_html__('Popular Countries', 'conversational'),
        'add_or_remove_items' => esc_html__('Add or Remove Countries', 'conversational'),
        'not_found' => esc_html__('No Countries Found', 'conversational'),
        'back_to_items' => esc_html__('Back to Countries', 'conversational')
      )
    )
  );

  $kickoff_form_labels = array(
    'name' => esc_html_x('Get Started Forms', 'post type name', 'conversational'),
    'singular_name' => esc_html_x('Get Started Form', 'post type singular name', 'conversational'),
    'menu_name' => esc_html_x('Get Started Forms', 'post type menu name', 'conversational'),
    'add_new_item' => esc_html__('Add New Get Started Form', 'conversational'),
    'search_items' => esc_html__('Search Get Started Forms', 'conversational'),
    'edit_item' => esc_html__('Edit Get Started Form', 'conversational'),
    'view_item' => esc_html__('View Get Started Form', 'conversational'),
    'all_items' => esc_html__('All Get Started Forms', 'conversational'),
    'new_item' => esc_html__('New Get Started Form', 'conversational'),
    'not_found' => esc_html__('No Get Started Forms Found', 'conversational')
  );
  $kickoff_form_args = array(
    'labels' => $kickoff_form_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-forms',
    'query_var' => 'getstarted_form',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'custom-fields',
      'revisions',
      'author'
    )
  );
  register_post_type('getstarted_form', $kickoff_form_args);

  $comparison_labels = array(
    'name' => esc_html_x('Comparisons', 'post type name', 'conversational'),
    'singular_name' => esc_html_x('Comparison', 'post type singular name', 'conversational'),
    'menu_name' => esc_html_x('Comparisons', 'post type menu name', 'conversational'),
    'add_new_item' => esc_html__('Add New Comparison', 'conversational'),
    'search_items' => esc_html__('Search Comparisons', 'conversational'),
    'edit_item' => esc_html__('Edit Comparison', 'conversational'),
    'view_item' => esc_html__('View Comparison', 'conversational'),
    'all_items' => esc_html__('All Comparisons', 'conversational'),
    'new_item' => esc_html__('New Comparison', 'conversational'),
    'not_found' => esc_html__('No Comparisons Found', 'conversational')
  );
  $comparison_args = array(
    'labels' => $comparison_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-awards',
    'query_var' => 'comparison',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'custom-fields',
      'revisions',
    )
  );
  register_post_type('comparison', $comparison_args);
}
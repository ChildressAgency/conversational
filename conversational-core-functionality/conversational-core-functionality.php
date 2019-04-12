<?php
/**
 * Plugin Name: conversational.com Core Functionality
 * Description: This contains all your site's core functionality so that it is theme independent. <strong>It should always be activated</strong>.
 * Author: The Childress Agency
 * Author URI: https://childressagency.com
 * Version: 1.0
 * Text Domain: conversational
 */

if(!defined('ABSPATH')){ exit; }

define('CONVERSATIONAL_PLUGIN_DIR', dirname(__FILE__));
define('CONVERSATIONAL_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Load acf if not already loaded
 */
if(!class_exists('acf')){
  require_once CONVERSATIONAL_PLUGIN_DIR . '/vendors/advanced-custom-fields-pro/acf.php';
  add_filter('acf/settings/path', 'conversational_acf_settings_path');
  add_filter('acf/settings/dir', 'conversational_acf_settings_dir');
}

function conversational_acf_settings_path($path){
  $path = plugin_dir_path(__FILE__) . 'vendors/advanced-custom-fields-pro/';
  return $path;
}

function conversational_acf_settings_dir($dir){
  $dir = plugin_dir_url(__FILE__) . 'vendors/advanced-custom-fields-pro/';
  return $dir;
}

/**
 * Prevent plugin from updating in case of plugin with same name in repo.
 */
add_filter('http_request_args', 'conversational_dont_update_plugin', 5, 2);
function conversational_dont_update_plugin($r, $url){
  if(strpos($url, 'https://api.wordpress.org/plugins/update-check/1.1/') != 0){
    return $r; //not a plugin update request
  }

  $plugins = json_decode($r['body']['plugins'], true);
  unset($plugins['plugins'][plugin_basename(__FILE__)]);
  //$r['body']['plugins'] = json_decode($plugins);
  $r['body']['plugins'] = $plugins;
  return $r;
}

add_action('plugins_loaded', 'conversational_load_textdomain');
function conversational_load_textdomain(){
  load_plugin_textdomain('conversational', false, basename(CONVERSATIONAL_PLUGIN_DIR) . '/languages');
}

add_action('acf/init', 'conversational_acf_options_page');
function conversational_acf_options_page(){
  acf_add_options_page(array(
    'page_title' => esc_html__('General Settings', 'conversational'),
    'menu_title' => esc_html__('General Settings', 'conversational'),
    'menu_slug' => 'general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}

require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/general-fields.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/page-intro.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/homepage.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/vr-plans-page.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/get-started-section.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/page-main-content.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/after-signup-page.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/compare-services-page.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/contact-us.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/faqs.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/meet-the-team.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/vr-services.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/heroes.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/template-industries.php';
require_once CONVERSATIONAL_PLUGIN_DIR . '/includes/custom-fields/about-us.php';
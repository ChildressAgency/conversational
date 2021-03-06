<?php
/**
 * Plugin Name: CAI ACF MultiStep
 * Description: ACF MultiStep FrontEnd Forms
 * Author: The Childress Agency
 * Author URI: https://childressagency.com
 * Version: 1.0
 * Text Domain: caims
 */

if(!defined('ABSPATH')){ exit; }

define('CAI_MULTISTEP_PLUGIN_DIR', dirname(__FILE__));
define('CAI_MULTISTEP_PLUGIN_URL', plugin_dir_url(__FILE__));

if(!class_exists('CAI_MultiStep')){
  class CAI_MultiStep{
    /**
     * the form ID, used to identify this specific form
     * 
     * @var string
     */
    private $form_id;

    /**
     * The name of the post type this form is for
     * Get the post type from an acf option field
     * 
     * @var string
     */
    private $form_post_type;

    /**
     * List of form groups used as steps
     * Each array item is is an acf group id to display in each step
     * Get the group ids from a seperate acf field so the user can add more as needed
     * 
     * @vra array;
     */
    private $step_ids;

    public function __construct(){
      $this->load_dependencies();

      $this->form_id = 'cai-multistep';
      $this->form_post_type = $this->get_form_post_type();
      $this->step_ids = $this->get_form_steps_ids();

      add_shortcode('cai_multistep_form', array($this, 'output_shortcode'));

      add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
      add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));

      add_action('acf/init', array($this, 'create_acf_options_page'));
      add_action('init', array($this, 'load_textdomain'));

      add_filter('acf/load_field/key=field_5ccb5995c506e', array($this , 'load_post_type_choices'));
      add_action('acf/validate_save_post', array($this, 'skip_validation'), 10, 0);

      //process ACF form submission
      add_action('acf/save_post', array($this, 'process_acf_form'), 20);

      add_action('wp_ajax_nopriv_send_form_link', array($this, 'send_form_link'));
      add_action('wp_ajax_send_form_link', array($this, 'send_form_link'));

      if(is_admin()){
        add_action('load-post.php', array($this, 'init_metabox'));
      }
    }

    public function init_metabox(){
      add_action('add_meta_boxes', array($this, 'add_form_link_metabox'));
    }

    public function add_form_link_metabox(){
      add_meta_box(
        'edit-form-link',
        esc_html__('Edit Form Link', 'caims'),
        array($this, 'render_metabox'),
        'getstarted_form',
        'side'
      );
    }

    public function render_metabox($post){
      $token = get_post_meta($post->ID, 'secret_token', true);
      $nonce = wp_create_nonce('email_form_link_' . $token);

      $form_link_args = array(
        'step' => '1',
        'post_id' => $post->ID,
        'token' => $token
      );

      $form_location = home_url('get-started');

      echo '<div class="email-form-link" style="text-align:center;">
              <h4>' . esc_html__('Enter an email address to send link for this form.', 'caims') . '</h4>
              <label for="email_form_email_address" class="sr-only" style="visibility:hidden; position:absolute;">' . esc_html__('Email Address', 'caims') . '</label>
              <input type="email" id="email_form_email_address" class="form-control mr-sm-3" placeholder="' . esc_html__('Email Address', 'caims') . '" style="display:block; margin:10px auto; width:100%;" />
              <button type="button" class="btn-main send-email button button-primary button-large" data-nonce="' . $nonce . '" data-step="' . $form_link_args['step'] . '" data-post_id="' . $form_link_args['post_id'] . '" data-token="' . $form_link_args['token'] . '">' . esc_html__('Send Link', 'caims') . '</button>
              <p class="email-response"></p>
            </div>';
    }

    public function load_dependencies(){
      if(!class_exists('acf')){
        require_once CAI_MULTISTEP_PLUGIN_DIR . '/vendors/advanced-custom-fields-pro/acf.php';
        add_filter('acf/settings/path', array($this, 'acf_settings_path'));
        add_filter('acf/settings/dir', array($this, 'acf_settings_dir'));
      }

      require_once CAI_MULTISTEP_PLUGIN_DIR . '/includes/custom-fields/cai-acf-multistep-form-settings.php';
        require_once CAI_MULTISTEP_PLUGIN_DIR . '/includes/class-email-completed-form.php';
    }

    public function load_textdomain(){
      load_plugin_textdomain('caims', false, basename(dirname(__FILE__)) . '/languages');
    }

    public function enqueue_scripts(){
      wp_register_script(
        'cai-acf-scripts',
        CAI_MULTISTEP_PLUGIN_URL . 'js/cai-acf-scripts.js',
        array('jquery'),
        false,
        true
      );

      wp_enqueue_script('cai-acf-scripts');

      wp_localize_script('cai-acf-scripts', 'cai_acf_multistep', array(
        'cai_acf_multistep_ajax' => admin_url('admin-ajax.php'),
        'valid_email_address_error' => esc_html__('Please enter a valid email address.', 'caims'),
        'get_started_url' => esc_url(home_url('get-started'))
      ));
    }

    public function acf_settings_path($path){
      $path = plugin_dir_path(__FILE__) . 'vendors/advanced-custom-fields-pro';
      return $path;
    }

    public function acf_setting_dir($dir){
      $dir = plugin_dir_url(__FILE__) . 'vendors/advanced-custom-fields-pro';
      return $dir;
    }

    public function create_acf_options_page(){
      acf_add_options_page(array(
        'page_title' => esc_html__('CAI ACF MultiStep Form Settings', 'caims'),
        'menu_title' => esc_html__('CAI ACF MultiStep Form Settings', 'caims'),
        'menu_slug' => 'cai-acf-multistep-form-settings',
        'capability' => 'edit_posts',
        'redirect' => false
      ));
    }

    public function skip_validation(){
      if(isset($_POST['direction'])){
        if($_POST['direction'] == 'previous' || $_POST['direction'] == 'saveforlater'){
          acf_reset_validation_errors();
        }
      }
    }

    public function load_post_type_choices($field){
      $field['choices'] = array();
      $available_post_types = get_post_types(array('_builtin' => false), 'objects');

      foreach($available_post_types as $available_post_type){
        if($available_post_type->name == 'acf-field-group' || $available_post_type->name == 'acf-field'){
          continue;
        }

        $field['choices'][$available_post_type->name] = $available_post_type->label;
      }

      return $field;
    }

    public function get_form_post_type(){
      $form_post_type = get_option('options_form_post_type');
      return $form_post_type;
    }

    public function get_form_steps_ids(){
      $form_steps = array();

      global $wpdb;
      $groups = $wpdb->get_results($wpdb->prepare("
        SELECT post_name
        FROM {$wpdb->prefix}posts
        WHERE post_type = %s
          AND post_content LIKE '%%%s%%'
          AND post_status NOT LIKE %s
        ORDER BY menu_order ASC", 'acf-field-group', $this->form_post_type, 'acf-disabled'));

      $g = 0;
      foreach($groups as $group){
        //var_dump($group);
        $form_steps[$g] = $group->post_name;
        $g++;
      }

      return $form_steps;
    }

    public function output_shortcode(){
      //check if user is logged in first
      //if(!is_user_logged_in()){
      //  $login_message = get_field('login_message', 'option');
      //  echo apply_filters('the_content', wp_kses_post($login_message));

      //  return wp_login_form(array('echo' => false));
      //}

      ob_start();

      if(!function_exists('acf_form')){ return; }

      if(isset($_GET['saveforlater'])){
        $this->output_finish_later();
      }
      else{
        //user is currently filling out the form
        if(!$this->current_multistep_form_is_finished()){
          $this->output_acf_form(array('post_type' => $this->form_post_type));
        }
        else{
          //form has been filled entirely
          $form_complete_message = get_field('form_complete_message', 'option');
          echo apply_filters('the_content', wp_kses_post($form_complete_message));
        }
      }

      return ob_get_clean();
    }

    private function output_finish_later(){
      $saveforlater_query_args = array(
        'step' => $_GET['step'],
        'post_id' => $_GET['post_id'],
        'token' => $_GET['token']
      );

      $saveforlater_url = add_query_arg($saveforlater_query_args, wp_get_referer());

      $saveforlater_message = get_option('options_save_for_later_message');

      echo apply_filters('the_content', wp_kses_post($saveforlater_message));

      echo '<a href="' . $saveforlater_url . '" class="d-block text-center mt-5">' . $saveforlater_url . '</a>';

      $nonce = wp_create_nonce('email_form_link_' . $saveforlater_query_args['token']);
      echo '<div class="email-form-link">
              <h4>' . esc_html__('Enter your email address to send the link by email.', 'caims') . '</h4>
              <div class="form-inline">
                <label for="email_form_email_address" class="sr-only">' . esc_html__('Email Address', 'caims') . '</label>
                <input type="email" id="email_form_email_address" class="form-control mr-sm-3" placeholder="' . esc_html__('Email Address', 'caims') . '" required />
                <button class="btn-main send-email" data-nonce="' . $nonce . '" data-step="' . $saveforlater_query_args['step'] . '" data-post_id="' . $saveforlater_query_args['post_id'] . '" data-token="' . $saveforlater_query_args['token'] . '">' . esc_html__('Send Link', 'caims') . '</button>
                <p class="email-response"></p>
              </div>
            </div>';
    }

    public function send_form_link(){
      $form_step = $_POST['step'];
      $form_post_id = $_POST['post_id'];
      $form_token = $_POST['token'];
      $form_email = sanitize_email($_POST['email_form_email_address']);
      $form_location = $_POST['form_location'];

      if(check_ajax_referer('email_form_link_' . $form_token, 'nonce', false) == false){
        wp_send_json_error();
      }

      $form_link = add_query_arg(array('step' => $form_step, 'post_id' => $form_post_id, 'token' => $form_token), $form_location);

      $subject = get_option('options_form_link_email_subject');
      $headers = array('Content-Type: text/html; charset=UTF-8');
      $headers[] = 'From: Conversational.com <noreply@conversational.com>';

      $message = get_option('options_form_link_email_message');

      $message .= "<br /><br />" . '<a href="' . $form_link . '" class="mt-5">' . $form_link . '</a>';

      $result = wp_mail($form_email, $subject, $message, $headers);

      if($results == true){
        wp_send_json_success(esc_html('Email sent.', 'caims'));
      }
      else{
        wp_send_json_error();
      }
    }

    /**
     * Output the acf frontend form if logged in,
     * otherwise show login/register
     * Requires 'acf_form_head()' in the header of the theme
     */
    private function output_acf_form($args = []){
      //if step 1 create new post, otherwise get post_id from url
      $requested_post_id = $this->get_requested_post_id();

      //get the current step we are in
      $requested_step = $this->get_requested_step();

      $args = wp_parse_args(
        $args,
        array(
          'post_id' => $requested_post_id,
          'step' => 'new_post' === $requested_post_id ? 1 : $requested_step,
          'post_type' => $this->form_post_type,
          'post_status' => 'publish',
        )
      );

      $submit_label = $args['step'] < count($this->step_ids) ? esc_html__('Next', 'caims') : esc_html__('Finish', 'caims');
      $current_step_group = ($args['post_id'] !== 'new_post' && $args['step'] > 1) ? $this->step_ids[(int) $args['step'] - 1] : $this->step_ids[0];

      //show the progress bar before the form
      $this->display_progress_bar($args);

      /**
       * display the form with acf_form()
       */
      acf_form(
        array(
          'id' => $this->form_id,
          'post_id' => $args['post_id'],
          'new_post' => array(
            'post_type' => $args['post_type'],
            'post_status' => $args['post_status']
          ),
          'field_groups' => array($current_step_group),
          'submit_value' => $submit_label,
          'html_after_fields' => $this->output_hidden_fields($args)
        )
      );
    }

    /**
     * hidden fields and buttons
     * 
     * @param array $args - form arguments passed to acf_form()
     * @return string html hidden input fields
     */
    private function output_hidden_fields($args){
      $inputs = array();
      $inputs[] = '<div class="clearfix"></div>';
      $inputs[] = sprintf('<input type="hidden" name="caims-form-id" value="%1$s" />', $this->form_id);
      $inputs[] = isset($args['step']) ? sprintf('<input type="hidden" name="caims-current-step" value="%1$s" />', $args['step']) : '';

      if($this->get_requested_step() != 1){
        $inputs[] = '<input type="button" id="cai-previous" name="previous" class="btn-main cai-submit" value="' . esc_html__('Previous', 'caims') . '" />';
      }

      if($args['step'] < count($this->step_ids)){
        $inputs[] = '<input type="button" id="cai-next" name="next" class="btn-main cai-submit" value="' . esc_html__('Next', 'caims') . '" />';
      }
      else{
        $inputs[] = '<input type="button" id="cai-finish" name="finish" class="btn-main cai-submit" value="' . esc_html__('Finish', 'caims') . '" />';
      }

      $inputs[] = '<input type="button" id="cai-finish-later" name="saveforlater" class="btn-main cai-submit" value="' . esc_html__('Finish Later', 'caims') . '" />';
      $inputs[] = '<input type="hidden" id="direction" name="direction" value="" />';

      return implode(' ', $inputs);
    }

    /**
     * show the progress bar
     * 
     * @param array $args - the arguments passed to acf_form() in $this->output_acf_form()
     */
    private function display_progress_bar($args){
      $number_of_steps = count($this->step_ids);
      $current_step = $args['step'];
      $percent_complete = ($current_step / $number_of_steps) * 100;

      echo '<div id="progress-bar">';
        echo '<h4>' . sprintf(esc_html('Step %1$d of %2$d', 'caims'), $current_step, $number_of_steps) . '</h4>';
        echo '<div class="progress">';
          echo '<div class="progress-bar" role="progressbar" style="width:' . $percent_complete . '%" aria-valuenow="' . $percent_complete . '" aria-valuemin="0" aria-valuemax="100"></div>';
      echo '</div></div>';
    }

    /**
     * if current $_GET['post_id'] is valid return the id, otherwise see if the user
     * already has another post. if neither create a new post.
     */
    private function get_requested_post_id(){
      //if(isset($_GET['post_id']) && $this->requested_post_is_valid() && $this->can_continue_current_form()){
      //  return (int) $_GET['post_id'];
      //}

      if(isset($_GET['post_id'])){
        if($this->requested_post_is_valid() && $this->can_continue_current_form()){
          return (int) $_GET['post_id'];
        }
      }

      return 'new_post';
    }

    /**
     * Get requested step, fallback to 1
     */
    private function get_requested_step(){
      if(isset($_POST['caims-current-step']) && absint($_POST['caims-current-step']) <= count($this->step_ids)){
        return absint($_POST['caims-current-step']);
      }
      elseif(isset($_GET['step']) && absint($_GET['step']) <= count($this->step_ids)){
        return absint($_GET['step']);
      }

      return 1;
    }

    /**
     * si the requested post the right one?
     */
    private function requested_post_is_valid(){
      return (get_post_type((int) $_GET['post_id']) === $this->form_post_type && get_post_status((int) $_GET['post_id']) === 'publish');
    }

    /**
     * is the user allowed to edit this form.
     * check token passed in url matches a post meta so that someone
     * can't pass a random $_GET['post_id'] parameter without its secret token
     * Any logged in verification should be done here
     */
    private function can_continue_current_form(){
      if(!isset($_GET['token'])){ return false; }
      //if(!is_user_logged_in()){ return false; }

      //check token
      $token_from_url = sanitize_text_field($_GET['token']);
      $token_from_post_meta = get_post_meta((int) $_GET['post_id'], 'secret_token', true);

      if($token_from_url === $token_from_post_meta){
        return true;
      }

      return false;
    }

    private function current_multistep_form_is_finished(){
      return (isset($_GET['finished']) && 1 === (int) $_GET['finished']);
    }

    /**
     * process the form
     * post has been created/updated, now update the progress bar
     * and redirect user to the next step or finished form
     */
    public function process_acf_form($post_id){
      //don't do anything if in admin or working on different front end acf form
      if(is_admin() || !isset($_POST['caims-form-id']) || $_POST['caims-form-id'] !== $this->form_id){
        return;
      }

      $current_step = $this->get_requested_step();

      //if it was a new post create a title and security token for it
      if($current_step == 1 && !isset($_GET['post_id'])){
        $company_name = get_field('company_name', $post_id);
        wp_update_post(array(
          'ID' => $post_id,
          'post_type' => $this->form_post_type,
          'post_title' => esc_html($company_name)
        ));

        $token = wp_generate_password(rand(10,20), false, false);
        update_post_meta((int)$post_id, 'secret_token', $token);
      }

      //if not done with the form put post_id and step number in the url

      if(($current_step < count($this->step_ids)) || ($_POST['direction'] == 'previous' || $_POST['direction'] == 'saveforlater')){
        $query_args = array(
          //'step' => $next_step,
          'post_id' => $post_id,
          'token' => isset($token) ? $token : $_GET['token']
        );

        if(isset($_POST['direction'])){
          if($_POST['direction'] == 'previous'){
            $query_args['step'] = --$current_step;
          }
          elseif($_POST['direction'] == 'next'){
            $query_args['step'] = ++$current_step;
          }
          elseif($_POST['direction'] == 'saveforlater'){
            $query_args['step'] = $current_step;
            $query_args['saveforlater'] = 1;
          }
        }
      }
      else{
        //we are done so put finished in the url
        $query_args = array('finished' => 1);

        //maybe send an email to someone here
        //$this->email_completed_form($post_id);
        $email_form = new CAI_Email_Form($post_id, $this->step_ids);
      }

      $redirect_url = add_query_arg($query_args, wp_get_referer());
      //$redirect_url = add_query_arg($query_args, home_url('kick-off-form'));
      wp_safe_redirect($redirect_url);
      exit();
    }
  } //end class
} //end class check

new CAI_MultiStep;
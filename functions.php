<?php
add_action('wp_footer', 'show_template');
function show_template() {
	global $template;
	print_r($template);
}

add_action('wp_enqueue_scripts', 'jquery_cdn');
function jquery_cdn(){
  if(!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
    wp_enqueue_script('jquery');
  }
}

add_action('wp_enqueue_scripts', 'conversational_scripts');
function conversational_scripts(){
  wp_register_script(
    'bootstrap-popper',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
    array('jquery', 'bootstrap-popper'),
    '',
    true
  );

  wp_register_script(
    'masonry',
    get_stylesheet_directory_uri() . '/js/masonry.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'conversational-scripts',
    get_stylesheet_directory_uri() . '/js/custom-scripts.min.js',
    array('jquery', 'bootstrap-scripts'),
    '',
    true
  );

  wp_enqueue_script('bootstrap-popper');
  wp_enqueue_script('bootstrap-scripts');
  if(is_home()){
    wp_enqueue_script('masonry');
  }
  wp_enqueue_script('conversational-scripts');
}

add_filter('script_loader_tag', 'conversational_add_script_meta', 10, 2);
function conversational_add_script_meta($tag, $handle){
  switch($handle){
    case 'jquery':
      $tag = str_replace('></script>', ' integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-popper':
      $tag = str_replace('></script>', ' integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-scripts':
      $tag = str_replace('></script>', ' integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>', $tag);
      break;
  }

  return $tag;
}

add_action('wp_enqueue_scripts', 'conversational_styles');
function conversational_styles(){
  wp_register_style(
    'google-fonts',
    'https://fonts.googleapis.com/css?family=Maitree:400,700|Nunito+Sans:400,600,700|Nunito:700'
  );

  wp_register_style(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.6.3/css/all.css'
  );

  wp_register_style(
    'conversational-css',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_enqueue_style('google-fonts');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('conversational-css');
}

add_filter('style_loader_tag', 'conversational_add_css_meta', 10, 2);
function conversational_add_css_meta($link, $handle){
  switch($handle){
    case 'fontawesome':
      $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">', $link);
      break;
  }

  return $link;
}

add_action('after_setup_theme', 'conversational_setup');
function conversational_setup(){
  add_theme_support('post-thumbnails');
  //set_post_thumbnail_size(320, 320);

  register_nav_menus(array(
    'header-nav' => 'Header Navigation',
    'footer-nav' => 'Footer Navigation',
    'company-menu' => 'Company Footer Menu',
    'services-menu' => 'Services Footer Menu'
  ));

  load_theme_textdomain('conversational', get_stylesheet_directory_uri() . '/languages');
}

require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';

function conversational_header_fallback_menu(){ ?>
  <div id="navbar" class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav list-unstyled">
      <li class="nav-item<?php if(is_front_page()){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url()); ?>" class="nav-link"><?php echo esc_html__('Home', 'conversational'); ?></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo esc_html__('About', 'conversational'); ?></a>
        <div class="dropdown-menu">
          <a href="<?php echo esc_url(home_url('about-conversational')); ?>" class="dropdown-item<?php if(is_page('about-conversational')){ echo ' active'; } ?>"><?php echo esc_html__('About Conversational', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('meet-the-team')); ?>" class="dropdown-item<?php if(is_page('meet-the-team')){ echo ' active'; } ?>"><?php echo esc_html__('Meet The Team', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('what-happens-after-sign-up')); ?>" class="dropdown-item<?php if(is_page('what-happens-after-sign-up')){ echo ' active'; } ?>"><?php echo esc_html__('What Happens After Sign Up', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('faqs')); ?>" class="dropdown-item<?php if(is_page('faqs')){ echo ' active'; } ?>"><?php echo esc_html__('FAQs', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('client-testimonials')); ?>" class="dropdown-item<?php if(is_page('client-testimonials')){ echo ' active'; } ?>"><?php echo esc_html__('Client Testimonials', 'conversational'); ?></a>
        </div>
      </li>
      <li class="nav-item<?php if(is_page('compare')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('compare')); ?>" class="nav-link"><?php echo esc_html__('Compare', 'conversational'); ?></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo esc_html__('Industries', 'conversational'); ?></a>
        <div class="dropdown-menu">
          <a href="<?php echo esc_url(home_url('work-at-home-professionals')); ?>" class="dropdown-item<?php if(is_page('work-at-home-professionals')){ echo ' active'; } ?>"><?php echo esc_html__('Work at Home Professionals', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('small-business')); ?>" class="dropdown-item<?php if(is_page('small-business')){ echo ' active'; } ?>"><?php echo esc_html__('Small Business', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('medical')); ?>" class="dropdown-item<?php if(is_page('medical')){ echo ' active'; } ?>"><?php echo esc_html__('Medical', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('legal')); ?>" class="dropdown-item<?php if(is_page('legal')){ echo ' active'; } ?>"><?php echo esc_html__('Legal', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('real-estate')); ?>" class="dropdown-item<?php if(is_page('real-estate')){ echo ' active'; } ?>"><?php echo esc_html__('Real Estate', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('dental')); ?>" class="dropdown-item<?php if(is_page('dental')){ echo ' active'; } ?>"><?php echo esc_html__('Dental', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('financial')); ?>" class="dropdown-item<?php if(is_page('financial')){ echo ' active'; } ?>"><?php echo esc_html__('Financial', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('marketing')); ?>" class="dropdown-item<?php if(is_page('marketing')){ echo ' active'; } ?>"><?php echo esc_html__('Marketing', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('salon')); ?>" class="dropdown-item<?php if(is_page('salon')){ echo ' active'; } ?>"><?php echo esc_html__('Salon', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('technology')); ?>" class="dropdown-item<?php if(is_page('technology')){ echo ' active'; } ?>"><?php echo esc_html__('Technology', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('franchise')); ?>" class="dropdown-item<?php if(is_page('franchise')){ echo ' active'; } ?>"><?php echo esc_html__('Franchise', 'conversational'); ?></a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle text-nowrap" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo esc_html__('Services', 'conversational'); ?></a>
        <div class="dropdown-menu">
          <a href="<?php echo esc_url(home_url('virtual-receptionist-plans')); ?>" class="dropdown-item<?php if(is_page('virtual-receptionist-plans')){ echo ' active'; } ?>"><?php echo esc_html__('Virtual Receptionist Plans', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('auto-attendant')); ?>" class="dropdown-item<?php if(is_page('auto-attendant')){ echo ' active'; } ?>"><?php echo esc_html__('Auto Attendant', 'conversation'); ?></a>
        </div>
      </li>
      <li class="nav-item<?php if(is_home()|| is_archive()){ echo ' active'; } ?>">
        <a href="<?php echo esc_html(home_url('blog')); ?>" class="nav-link"><?php echo esc_html__('Blog', 'conversational'); ?></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle text-nowrap" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo esc_html__('Contact', 'conversational'); ?></a>
        <div class="dropdown-menu">
          <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="dropdown-item<?php if(is_page('contact-us')){ echo ' active'; } ?>"><?php echo esc_html__('Contact Us', 'conversational'); ?></a>
          <a href="<?php echo esc_url(home_url('careers')); ?>" class="dropdown-item<?php if(is_page('careers')){ echo ' active'; } ?>"><?php echo esc_html__('Careers', 'conversational'); ?></a>
      </li>
      <li class="nav-item last-nav-item">
        <a href="<?php echo esc_url(get_field('client_login', 'option')); ?>" class="nav-link"><?php echo esc_html__('Client Login', 'conversational'); ?></a>
      </li>
    </ul>
  </div>
<?php }

function conversational_company_fallback_menu(){ ?>
  <ul>
    <li><a href="<?php echo esc_url(home_url('about-conversational')); ?>"><?php echo esc_html__('About Us', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('meet-the-team')); ?>"><?php echo esc_html__('Meet the Team', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('north-american-based-company')); ?>"><?php echo esc_html__('North American Based Company', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('why-conversational')); ?>"><?php echo esc_html__('Why Conversational', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('terms-of-service')); ?>"><?php echo esc_html__('Terms of Service', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('privacy-policy')); ?>"><?php echo esc_html__('Privacy Policy', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('careers')); ?>"><?php echo esc_html__('Careers', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('contact-us')); ?>"><?php echo esc_html__('Contact Us', 'conversational'); ?></a></li>
  </ul>
<?php }

function conversational_services_fallback_menu(){ ?>
  <ul>
    <li><a href="<?php echo esc_url(home_url('virtual-receptionist-services')); ?>"><?php echo esc_html__('Virtual Receptionist Services', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('auto-receptionist-services')); ?>"><?php echo esc_html__('Auto Receptionist Services', 'conversational'); ?></a></li>
  </ul>
<?php }

function conversational_footer_fallback_menu(){ ?>
  <ul class="list-unstyled d-flex justify-content-around mb-0 main-footer-nav text-center flex-wrap">
    <li><a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html__('Home', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('about-conversational')); ?>"><?php echo esc_html__('About', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('industries')); ?>"><?php echo esc_html__('Industries', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('services')); ?>"><?php echo esc_html__('Services', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('blog')); ?>"><?php echo esc_html__('Blog', 'conversational'); ?></a></li>
  </ul>
<?php }

function conversational_industries_fallback_menu(){ ?>
  <ul>
    <li><a href="<?php echo esc_url(home_url('work-at-home-professionals')); ?>" class="nav-link<?php if(is_page('work-at-home-professionals')){ echo ' active'; } ?>"><?php echo esc_html__('Home Based', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('small-business')); ?>" class="nav-link<?php if(is_page('small-business')){ echo ' active'; } ?>"><?php echo esc_html__('Small Business', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('medical')); ?>" class="nav-link<?php if(is_page('medical')){ echo ' active'; } ?>"><?php echo esc_html__('Medical', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('legal')); ?>" class="nav-link<?php if(is_page('legal')){ echo ' active'; } ?>"><?php echo esc_html__('Legal', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('real-estate')); ?>" class="nav-link<?php if(is_page('real-estate')){ echo ' active'; } ?>"><?php echo esc_html__('Real Estate', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('dental')); ?>" class="nav-link<?php if(is_page('dental')){ echo ' active'; } ?>"><?php echo esc_html__('Dental', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('financial')); ?>" class="nav-link<?php if(is_page('financial')){ echo ' active'; } ?>"><?php echo esc_html__('Financial', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('marketing')); ?>" class="nav-link<?php if(is_page('marketing')){ echo ' active'; } ?>"><?php echo esc_html__('Marketing', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('salon')); ?>" class="nav-link<?php if(is_page('salon')){ echo ' active'; } ?>"><?php echo esc_html__('Salon', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('technology')); ?>" class="nav-link<?php if(is_page('technology')){ echo ' active'; } ?>"><?php echo esc_html__('Technology', 'conversational'); ?></a></li>
    <li><a href="<?php echo esc_url(home_url('franchise')); ?>" class="nav-link<?php if(is_page('franchise')){ echo ' active'; } ?>"><?php echo esc_html__('Franchise', 'conversational'); ?></a></li>
  </ul>
<?php }

add_filter('excerpt_more', 'conversational_read_more');
function conversational_read_more($more){
  global $post;
  return '<a href="' . esc_url(get_permalink($post->ID)) . '"> Read more...</a>';
}

/**
 * Disabling the Gutenberg editor all post types except post.
 *
 * @param bool   $can_edit  Whether to use the Gutenberg editor.
 * @param string $post_type Name of WordPress post type.
 * @return bool  $can_edit
 */
add_filter( 'gutenberg_can_edit_post_type', 'conversational_gutenberg_can_edit_post_type', 10, 2 );
function conversational_gutenberg_can_edit_post_type( $can_edit, $post_type ) {
	$gutenberg_supported_types = array( 'post' );
	if ( ! in_array( $post_type, $gutenberg_supported_types, true ) ) {
		$can_edit = false;
	}
	return $can_edit;
}

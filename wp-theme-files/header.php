<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title><?php echo esc_html(bloginfo('name')); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header">
    <div class="container">
      <div id="masthead" class="d-flex">
        <a href="<?php echo esc_url(home_url()); ?>" class="header-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/HeaderLogo.png" alt="Conversational Logo" />
        </a>
        <div id="header-contact" class="ml-auto d-flex">
          <div class="header-trial mt-2">
            <h3>FREE 30-Day Trial</h3>
            <a href="<?php echo esc_url(home_url('vr-plans')); ?>" class="btn-main">Get Started Today</a>
          </div>
          <div class="header-contact mt-2">
            <?php
              $phone = get_option('options_phone');
              $email = get_option('options_email');
            ?>
            <h3>Contact Us</h3>
            <p><span>TOLL FREE:</span> <a href="tel:<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a></p>
            <p class="mt-2"><a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></p>
          </div>
        </div>
      </div>

      <nav id="header-nav" class="navbar navbar-light navbar-expand-lg">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
          aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => 'div',
            'container_id' => 'navbar',
            'container_class' => 'collapse navbar-collapse justify-content-end',
            'menu_id' => '',
            'menu_class' =>'navbar-nav list-unstyled',
            'echo' => true,
            'fallback_cb' => 'conversational_header_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new WP_Bootstrap_NavWalker()
          );
          wp_nav_menu($header_nav_args);
        ?>
      </nav>
    </div>

    <div id="header-quick-links">
      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-3 d-flex justify-content-stretch">
            <a href="<?php echo esc_url(home_url('north-american-answering-service')); ?>" id="north-america" class="header-quick-link<?php if(is_page('north-american-answering-service') || is_singular('state_service')){ echo ' active'; } ?>"><?php echo esc_html__('North American Answering Service', 'conversational'); ?></a>
          </div>
          <div class="col-6 col-sm-3 d-flex justify-content-stretch">
            <a href="<?php echo esc_url(home_url('custom-business-voip-solutions')); ?>" id="voip-solutions" class="header-quick-link<?php if(is_page('custom-business-voip-solutions')){ echo ' active'; } ?>"><?php echo esc_html__('Custom Business VOIP Solutions', 'conversational'); ?></a>
          </div>
          <div class="col-6 col-sm-3 d-flex justify-content-stretch">
            <a href="<?php echo esc_url(home_url('vr-services')); ?>" id="fully-customized" class="header-quick-link<?php if(is_page('vr-services')){ echo ' active'; } ?>"><?php echo esc_html__('Fully Customized Call Handling', 'conversational'); ?></a>
          </div>
          <div class="col-6 col-sm-3 d-flex justify-content-stretch">
            <a href="<?php echo esc_url(home_url('client-portal')); ?>" id="call-reporting" class="header-quick-link<?php if(is_page('client-portal')){ echo ' active'; } ?>"><?php echo esc_html__('Complete Online Client Portal', 'conversational'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>

<?php 
  $page_id = get_the_ID(); 
  if(is_home()){
    $blog_page = get_page_by_path('blog');
    $page_id = $blog_page->ID;
  }
  if(is_singular('comparison')){
    $compare_services_page = get_page_by_path('compare-services');
    $page_id = $compare_services_page->ID;
  }
?>

<?php if(is_front_page()): ?>
  <?php 
    $hero_image_id = get_post_meta($page_id, 'hero_background_image', true);
    $hero_image = wp_get_attachment_image_src($hero_image_id, 'full');
    $hero_image_url = $hero_image[0];

    $hero_image_css = get_post_meta($page_id, 'hero_background_image_css', true);
  ?>
  <section id="jumbotron" class="d-flex align-items-center" style="background-image:url(<?php echo esc_url($hero_image_url); ?>); <?php echo esc_html($hero_image_css); ?>">
    <div class="container-fluid">
      <div class="jumbotron-caption d-flex flex-column ml-auto">
        <h1><?php echo esc_html(get_post_meta($page_id, 'hero_title', true)); ?></h1>
        <?php 
          $subtitle = get_post_meta($page_id, 'hero_subtitle', true); 
          $sub_subtitle = get_post_meta($page_id, 'hero_sub_subtitle', true);
          if($subtitle){
            echo '<p>' . esc_html($subtitle) . '</p>';
          }
          if($sub_subtitle){
            echo '<p class="bookings">' . esc_html($sub_subtitle) . '</p>';
          }
        
          $hero_button = get_post_meta($page_id, 'hero_button_button_link', true);
          $hero_button_style = get_post_meta($page_id, 'hero_button_button_style', true);
          if($hero_button): ?>
            <a href="<?php echo esc_url($hero_button['url']); ?>" class="btn-main align-self-center <?php echo esc_attr($hero_button_style); ?>"><?php echo esc_html($hero_button['title']); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php else: ?>
  <?php
    $site_section = '';
    if(get_post_meta($page_id, 'site_section', true)){
      $site_section = get_post_meta($page_id, 'site_section', true);
    }

    $hero_title = '';
    if(is_home() || is_singular('post')){ //main blog page or blog post
      $hero_title = esc_html__('Conversational Blog', 'conversational');
    }
    elseif(is_singular('states')){  //states cpt single page
      $hero_title = esc_html__('North American Based Service', 'conversational');
    }
    elseif(get_post_meta($page_id, 'hero_title', true)){ //any other page, see if hero title is set
      $hero_title = get_post_meta($page_id, 'hero_title', true);
    }
    else{ //any other page and hero title is not set, just show the title
      $hero_title = get_the_title();
    }
  
    $hero_image_id = get_post_meta($page_id, 'hero_background_image', true);
    $hero_image = wp_get_attachment_image_src($hero_image_id, 'full');

    $hero_image_css = '';

    if($hero_image){
      $hero_image_url = $hero_image[0];
      $hero_image_css = get_post_meta($page_id, 'hero_background_image_css', true);
    }
    else{
      $hero_image_id = get_option('options_default_hero_image');
      $hero_image = wp_get_attachment_image_src($hero_image_id, 'full');
      $hero_image_url = $hero_image[0];

      $hero_image_css = get_option('options_default_hero_image_css');
    }
  ?>

  <section id="hero" class="d-flex align-items-center" style="background-image:url(<?php echo esc_url($hero_image_url); ?>); <?php echo esc_html($hero_image_css); ?>">
    <div class="container-fluid">
      <div class="hero-caption d-flex flex-column">
        <?php if($site_section !== ''): ?>
          <h2 class="section-name"><i class="far fa-circle"></i><?php echo esc_html($site_section); ?></h2>
        <?php endif; ?>
        <?php if($hero_title !== ''): ?>
          <h1><?php echo esc_html($hero_title); ?></h1>
        <?php endif; ?>
        <hr class="dashed" />
      </div>
    </div>
    <div class="white-gradient"></div>
  </section>
<?php endif; ?>
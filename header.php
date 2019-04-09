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
    <div class="container-fluid">
      <div id="masthead" class="d-flex">
        <a href="<?php echo esc_url(home_url()); ?>" class="header-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/HeaderLogo.png" alt="Conversational Logo" />
        </a>
        <div id="header-contact" class="ml-auto d-flex">
          <div class="header-trial mt-2">
            <h3>FREE 30-Day Trial</h3>
            <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="btn-main">Get Started Today</a>
          </div>
          <div class="header-contact mt-2">
            <?php
              $phone = get_field('phone', 'option');
              $email = get_field('email', 'option');
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
          <div class="col-6 col-sm-3">
            <a href="<?php echo esc_url(home_url('north-american-answering-service')); ?>" id="north-america" class="header-quick-link<?php if(is_page('north-american-answering-service') || is_singular('state_service')){ echo ' active'; } ?>"><?php echo esc_html__('North American Answering Service', 'conversational'); ?></a>
          </div>
          <div class="col-6 col-sm-3">
            <a href="<?php echo esc_url(home_url('custom-business-voip-solutions')); ?>" id="voip-solutions" class="header-quick-link<?php if(is_page('custom-business-voip-solutions')){ echo ' active'; } ?>"><?php echo esc_html__('Custom Business VOIP Solutions', 'conversational'); ?></a>
          </div>
          <div class="col-6 col-sm-3">
            <a href="<?php echo esc_url(home_url('fully-customized-call-handling')); ?>" id="fully-customized" class="header-quick-link<?php if(is_page('fully-customized-call-handling')){ echo ' active'; } ?>"><?php echo esc_html__('Fully Customized Call Handling', 'conversational'); ?></a>
          </div>
          <div class="col-6 col-sm-3">
            <a href="<?php echo esc_url(home_url('complete-client-call-reporting')); ?>" id="call-reporting" class="header-quick-link<?php if(is_page('complete-client-call-reporting')){ echo ' active'; } ?>"><?php echo esc_html__('Compete Client Call Reporting', 'conversational'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>

<?php if(is_front_page()): ?>
  <section id="jumbotron" class="d-flex align-items-center" style="background-image:url(<?php echo esc_url(get_field('hero_background_image')); ?>); <?php echo esc_html(get_field('hero_background_image_css')); ?>">
    <div class="container-fluid">
      <div class="jumbotron-caption d-flex flex-column ml-auto">
        <h1><?php echo esc_html(get_field('hero_title'); ?></h1>
        <?php 
          $subtitle = get_field('hero_subtitle'); 
          $sub_subtitle = get_field('hero_sub_subtitle');
          if($subtitle){
            echo '<p>' . esc_html($subtitle) . '</p>';
          }
          if($sub_subtitle){
            echo '<p class="bookings">' . esc_html($sub_subtitle) . '</p>';
          }
        
          $hero_button = get_field('hero_button_link');
          $hero_button_style = get_field('hero_button_style');
          if($hero_button): ?>
            <a href="<?php echo esc_url($hero_button['url']); ?>" class="btn-main align-self-center<?php if($hero_button_style == 'rounded'){ echo ' btn-rounded'; } ?>"><?php echo esc_html($hero_button['title']); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php else: ?>
  <?php
    $page_section = '';
    if(get_field('page_section')){
      $page_section = get_field('page_section');
    }

    $hero_title = ''
    if(is_home() || is_singular('post')){
      $hero_title = 'Conversational Blog';
    }
    elseif(get_field('hero_title')){
      $hero_title = get_field('hero_title');
    }
    else{
      $hero_title = get_the_title();
    }
  
    $hero_image = get_field('hero_image');
    $hero_image_css = '';
    if($hero_image){
      $hero_image_css = get_field('hero_image_css');
    }
    else{
      $hero_image = get_field('default_hero_image', 'option');
      $hero_image_css = get_field('default_hero_image_css', 'option');
    }
  ?>

  <section id="hero" class="d-flex align-items-center" style="background-image:url(<?php echo esc_url($hero_image); ?>); <?php echo esc_html($hero_image_css); ?>">
    <div class="container-fluid">
      <div class="hero-caption d-flex flex-column">
        <?php if($page_section !== ''): ?>
          <h2 class="section-name"><i class="far fa-circle"></i><?php echo esc_html($page_section); ?></h2>
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
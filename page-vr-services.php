<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="vr-services">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>
      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>

        <section id="features">
          <div class="features">
            <header class="narrow-container position-relative text-center">
              <h2><?php echo esc_html__('Features', 'conversational'); ?></h2>
              <h3><?php echo esc_html(get_post_meta($page_id, 'features_section_subtitle', true)); ?></h3>
              <img src="<?php echo get_stylesheet_directory_url(); ?>/images/magnifying-glass.png" class="magnifying-glass d-none d-md-block" alt="magnifying glass" />
            </header>
            <?php
              $features = get_post_meta($page_id, 'features', true);
              if($features): ?>
                <ul class="features-list list-unstyled text-left">
                  <?php for($i = 0; $i < $features, $i++): ?>
                    <li>
                      <h4><?php echo esc_html(get_post_meta($page_id, 'features_' . $i . '_feature_title', true)); ?></h4>
                      <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'features_' . $i . '_feature_description', true))); ?>
                    </li>
                  <?php endfor; ?>
                </ul>
            <?php endif; ?>
          </div>
        </section>
      </div>
    </article>

    <section id="customize-call-handling">
      <h2><?php echo esc_html(get_post_meta($page_id, 'customize_call_handling_section_title', true)); ?></h2>
      <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'customize_call_handling_section_content', true))); ?>
      <div class="call-today">
        <h4><?php echo esc_html__('Call or email today!', 'conversational'); ?></h4>
        <?php
          $phone = get_option('options_phone');
          $email = get_option('options_email');
        ?>
        <a href="mailto:<?php echo esc_html($email); ?>" class="email-icon"><?php echo esc_html($email); ?></a>
        <a href="tel:<?php echo esc_html($phone); ?>" class="phone-icon"><?php echo esc_html($phone); ?></a>
      </div>
      <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="btn-main"><?php echo esc_html('Contact Us', 'conversational'); ?></a>
    </section>
  </div>
</main>
<?php get_footer();
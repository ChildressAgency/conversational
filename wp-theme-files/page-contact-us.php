<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="contact">
  <div class="container-fluid">
    <?php get_template_part('partials/page', 'intro'); ?>
    <div class="row">
      <div class="col-md-8">
        <?php
          $form_shortcode = get_post_meta($page_id, 'contact_form_shortcode', 'true');
          echo do_shortcode($form_shortcode);
        ?>
      </div>
      <div class="col-md-4">
        <div class="contact-sidebar">
          <div id="sidebar-location" class="contact-sidebar-item">
            <h3><?php echo esc_html__('Location', 'conversational'); ?></h3>
            <?php
              $address_1 = get_option('options_address_1');
              $address_2 = get_option('options_address_2');
              $city_state_zip = get_option('options_city_state_zip');
            ?>
            <p><?php echo esc_html($address_1); ?><br /><?php echo esc_html($address_2); ?><br /><?php echo esc_html($city_state_zip); ?></p>
          </div>
          <div id="sidebar-phone" class="contact-sidebar-item">
            <?php 
              $phone = get_option('options_phone'); 
              $local_phone = get_option('options_local_phone');
            ?>
            <h3><?php echo esc_html__('Phone', 'conversational'); ?></h3>
            <p><?php echo esc_html__('Toll Free', 'conversational'); ?><br /><?php echo esc_html($phone); ?></p>
            <p><?php echo esc_html__('Local Telephone', 'conversational'); ?><br /><?php echo esc_html($local_phone); ?></p>
            <a href="tel:<?php echo esc_html($phone); ?>" class="btn-main"><?php echo esc_html__('Click to Dial', 'conversational'); ?></a>
          </div>
          <div id="sidebar-email" class="contact-sidebar-item">
            <?php $email = get_option('options_email'); ?>
            <h3><?php echo esc_html('Email', 'conversational'); ?></h3>
            <p><a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="social text-center">
      <h4>Follow Us</h4>
      <?php
        $facebook = get_option('options_facebook');
        $twitter = get_option('options_twitter');
        $linkedin = get_option('options_linkedin');
        $pinterest = get_option('options_pinterest');
        $instagram = get_option('options_instagram');
      ?>
      <?php if($facebook): ?>
        <a href="<?php echo esc_url($facebook); ?>" id="facebook" class="fa-stack fa-2x" target="_blank">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-facebook-f fa-stack-1x"></i>
          <span class="sr-only">Facebook</span>
        </a>
      <?php endif; if($twitter): ?>
        <a href="<?php echo esc_url($twitter); ?>" id="twitter" class="fa-stack fa-2x" target="_blank">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-twitter fa-stack-1x"></i>
          <span class="sr-only">Twitter</span>
        </a>
      <?php endif; if($linkedin): ?>
        <a href="<?php echo esc_url($linkedin); ?>" id="linkedin" class="fa-stack fa-2x" target="_blank">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-linkedin-in fa-stack-1x"></i>
          <span class="sr-only">LinkedIn</span>
        </a>
      <?php endif; if($pinterest): ?>
        <a href="<?php echo esc_url($pinterest); ?>" id="pinterest" class="fa-stack fa-2x" target="_blank">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-pinterest-p fa-stack-1x"></i>
          <span class="sr-only">Pinterest</span>
        </a>
      <?php endif; if($instagram): ?>
        <a href="<?php echo esc_url($instagram); ?>" id="instagram" class="fa-stack fa-2x" target="_blank">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fab fa-instagram fa-stack-1x"></i>
          <span class="sr-only">Instagram</span>
        </a>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer();
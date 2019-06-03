<section id="try-free">
  <div class="container">
    <article>
      <header>
        <?php if(get_option('options_try_us_free_section_title')): ?>
          <h2><?php echo esc_html(get_option('options_try_us_free_section_title')); ?></h2>
        <?php endif; if(get_option('options_try_us_free_section_subtitle')): ?>
          <p class="sub-header"><?php echo esc_html(get_option('options_try_us_free_section_subtitle')); ?></p>
        <?php endif; ?>
      </header>
      <div class="row">
        <div class="col-lg-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-fluid d-block mx-auto" alt="Conversational Logo" />
        </div>
        <div class="col-lg-8">
          <div class="signup-intro">
            <?php echo esc_html(get_option('options_try_us_free_section_intro')); ?>
          </div>
          <hr class="dashed" />

          <?php echo do_shortcode(get_option('options_try_us_free_section_form_shortcode')); ?>

          <div class="phone-email">
            <?php 
              $phone = get_option('options_phone');
              $email = get_option('options_email');
            ?>
            <p>TOLL FREE <a href="tel:<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a><br />
            <a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></p>
          </div>
          <div class="social">
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
      </div>
    </article>
  </div>
</section>

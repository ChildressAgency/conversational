<section id="try-free">
  <div class="container">
    <article>
      <header>
        <?php if(get_field('try_us_free_section_title', 'option')): ?>
          <h2><?php echo esc_html(get_field('try_us_free_section_title', 'option')); ?></h2>
        <?php endif; if(get_field('try_us_free_section_subtitle', 'option')): ?>
          <p class="sub-header"><?php echo esc_html(get_field('try_us_free_section_subtitle', 'option')); ?></p>
        <?php endif; ?>
      </header>
      <div class="row">
        <div class="col-lg-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-fluid d-block mx-auto" alt="Conversational Logo" />
        </div>
        <div class="col-lg-8">
          <div class="signup-intro">
            <?php echo esc_html(get_field('try_us_free_section_intro', 'option')); ?>
          </div>
          <hr class="dashed" />

          <?php echo do_shortcode(get_field('try_us_free_section_form_shortcode', 'option')); ?>

          <div class="phone-email">
            <?php 
              $phone = get_field('phone', 'option');
              $email = get_field('email', 'option');
            ?>
            <p>TOLL FREE <a href="tel:<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a><br />
            <a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></p>
          </div>
          <div class="social">
            <h4>Follow Us</h4>
            <?php if(get_field('facebook', 'option')): ?>
              <a href="<?php echo esc_url(get_field('facebook', 'option')); ?>" id="facebook" class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x"></i>
                <span class="sr-only">Facebook</span>
              </a>
            <?php endif; if(get_field('twitter', 'option')): ?>
              <a href="<?php echo esc_url(get_field('twitter', 'option')); ?>" id="twitter" class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x"></i>
                <span class="sr-only">Twitter</span>
              </a>
            <?php endif; if(get_field('linkedin', 'option')): ?>
              <a href="<?php echo esc_url(get_field('linkedin', 'option')); ?>" id="linkedin" class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                <span class="sr-only">LinkedIn</span>
              </a>
            <?php endif; if(get_field('pinterest', 'option')): ?>
              <a href="<?php echo esc_url(get_field('pinterest', 'option')); ?>" id="pinterest" class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                <span class="sr-only">Pinterest</span>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

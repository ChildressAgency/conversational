<?php
  if(!is_page('contact-us') 
      && !is_page('careers') 
      && !is_page('apply-now')
      && !is_page('client-portal')){
        get_template_part('partials', 'try_free');
  }
?>

  <footer id="footer">
    <section id="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-lg-3">
            <h5>Company</h5>
            <?php
              $company_menu_args = array(
                'theme_location' => 'company-menu',
                'menu' => '',
                'container' => '',
                'container_id' => '',
                'container_class' => '',
                'menu_id' => '',
                'menu_class' => '',
                'echo' => true,
                'fallback_cb' => 'conversational_company_fallback_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1
              );
              wp_nav_menu($company_menu_args);
            ?>
          </div>
          <div class="col-sm-4 col-lg-5">
            <h5>Services</h5>
            <?php
              $services_menu_args = array(
                'theme_location' => 'services-menu',
                'menu' => '',
                'container' =>'',
                'container_id' => '',
                'container_class' => '',
                'menu_id' => '',
                'menu_class' => '',
                'echo' => true,
                'fallback_cb' => 'conversational_services_fallback_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1
              );
              wp_nav_menu($services_menu_args);
            ?>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="footer-contact">
              <h5>Contact</h5>
              <ul>
                <?php
                  $phone = get_field('phone', 'option');
                  $email = get_field('email', 'option');
                ?>
                <li class="contact-phone"><a href="tel:<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a></li>
                <li class="contact-email text-nowrap"><a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></li>
              </ul>
            </div>

            <div class="footer-social">
              <h5>Follow Us</h5>
              <?php if(get_field('facebook', 'option')): ?>
                <a href="<?php echo esc_url(get_field('facebook', 'option')); ?>" class="social-icon-small facebook"><i class="fab fa-facebook-f"></i><span class="sr-only">Facebook</span></a>
              <?php endif; if(get_field('twitter', 'option')): ?>
                <a href="<?php echo esc_url(get_field('twitter', 'option')); ?>" class="social-icon-small twitter"><i class="fab fa-twitter"></i><span class="sr-only">Twitter</span></a>
              <?php endif; if(get_field('linkedin', 'option')): ?>
                <a href="<?php echo esc_url(get_field('linkedin', 'option')); ?>" class="social-icon-small linkedin"><i class="fab fa-linkedin-in"></i><span class="sr-only">LinkedIn</span></a>
              <?php endif; if(get_field('pinterest', 'option')): ?>
                <a href="<?php echo esc_url(get_field('pinterest', 'option')); ?>" class="social-icon-small pinterest"><i class="fab fa-pinterest-p"></i><span class="sr-only">Pinterest</span></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="footer-middle">
      <div class="container">
        <nav id="footer-nav">
          <?php
            $footer_nav_args = array(
              'theme_location' => 'footer-nav',
              'menu' => '',
              'container' => '',
              'container_id' => '',
              'container_class' => '',
              'menu_id' => '',
              'menu_class' => 'list-unstyled d-flex justify-content-around mb-0 main-footer-nav text-center flex-wrap',
              'echo' => true,
              'fallback_cb' => 'conversational_footer_fallback_menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth' => 1,
            );
            wp_nav_menu($footer_nav_args);
          ?>
          <ul class="list-unstyled d-flex justify-content-around mb-0 sub-footer-nav text-center mt-4 flex-wrap">
            <li><a href="<?php echo esc_url('north-american-answering-service'); ?>"><?php echo esc_html__('North American Answering Service', 'conversational'); ?></a></li>
            <li><a href="<?php echo esc_url('custom-business-voip-solutions')); ?>"><?php echo esc_html__('Custom Business VOIP Solutions', 'conversational'); ?></a></li>
            <li><a href="<?php echo esc_url('fully-customized-call-handling')); ?>"><?php echo esc_html__('Fully Customized Call Handling', 'conversational'); ?></a></li>
            <li><a href="<?php echo esc_url('complete-client-call-reporting')): ?>"><?php echo esc_html__('Complete Client Call Reporting', 'conversational'); ?></a></li>
          </ul>
        </nav>
      </div>
      <a href="#" id="page-up"></a>
    </section>

    <section id="copyright">
      <div class="container">
        <p>&copy;<?php echo date('Y'); ?> Conversational</p>
        <p>
          <a href="<?php echo esc_url(home_url('privacy-policy')); ?>"><?php echo esc_html__('Privacy Policy', 'conversational'); ?></a>&nbsp;&bull;&nbsp;<a href="<?php echo esc_url(home_url('term-of-service')); ?>"><?php echo esc_html__('Terms of Service', 'conversational'); ?></a>
        </p>
        <p>website created by <a href="https://childressagency.com">The Childress Agency</a></p>
      </div>
    </section>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
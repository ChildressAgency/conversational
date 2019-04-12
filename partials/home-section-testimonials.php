<?php $page_id = get_the_ID(); ?>
<section id="hp-testimonials">
  <div class="container">
    <article>
      <header>
        <h2><?php echo esc_html(get_post_meta($page_id, 'testimonials_section_title', true)); ?></h2>
        <div class="stars">
          <span class="star"></span>
          <span class="star"></span>
          <span class="star"></span>
          <span class="star"></span>
          <span class="star"></span>
        </div>
        <p class="btn-p">Click here to see our<br /><a href="<?php echo esc_url(home_url('client-testimonials')); ?>" class="btn-main btn-rounded">client reviews</a></p>
      </header>
      <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'testimonials_section_intro', true))); ?>
    </article>
    <hr class="dashed" />
    <div class="row">
      <div class="col-md-4">
        <div class="cust-serv">
          <h3 id="north-american"><?php echo esc_html(get_post_meta($page_id, 'testimonials_card_1_title', true)); ?></h3>
          <p><?php echo esc_html(get_post_meta($page_id, 'testimonials_card_1_description', true)); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="cust-serv">
          <h3 id="industry-experience"><?php echo esc_html(get_post_meta($page_id, 'testimonials_card_2_title', true)); ?></h3>
          <p><?php echo esc_html(get_post_meta($page_id, 'testimonials_card_2_description', true)); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="cust-serv">
          <h3 id="exceptional-support"><?php echo esc_html(get_post_meta($page_id, 'testimonials_card_3_title', true)); ?></h3>
          <p><?php echo esc_html(get_post_meta($page_id, 'testimonials_card_3_description', true)); ?></p>
        </div>
      </div>
    </div>
  </div>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mouse.png" id="mouse" class="d-none d-md-block" alt="mouse" />
</section>

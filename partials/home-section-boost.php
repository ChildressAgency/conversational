<?php $page_id = get_the_ID(); ?>
<section id="business-boost">
  <div class="container">
    <article>
      <header>
        <?php echo wp_kses_post(get_post_meta($page_id, 'boost_section_intro', true)); ?>
      </header>
      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <h3><?php echo esc_html(get_post_meta($page_id, 'advanced_call_services_1_title', true)); ?></h3>
              <p><?php echo esc_html(get_post_meta($page_id, 'advanced_call_services_1_subtitle', true)); ?></p>
            </div>
            <div class="card-body">
              <?php echo wp_kses_post(get_post_meta($page_id, 'advanced_call_services_1_details', true)); ?>
            </div>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-block animation-trigger">
          <div id="rocket">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rocket.png" class="rocket" alt="rocket" />
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flame2.png" class="flames" alt="flames" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <h3><?php echo esc_html(get_post_meta($page_id, 'advanced_call_services_2_title', true)); ?></h3>
              <p><?php echo esc_html(get_post_meta($page_id, 'advanced_call_services_2_subtitle', true)); ?></p>
            </div>
            <div class="card-body">
              <?php echo wp_kses_post(get_post_meta($page_id, 'advanced_call_services_2_details', true)); ?>
            </div>
          </div>
        </div>
      </div>
      <?php
        $boost_btn = get_post_meta($page_id, 'boost_section_learn_more_button_link', true);
        $boost_btn_style = get_post_meta($page_id, 'boost_section_learn_more_button_style', true);
      ?>
      <a href="<?php echo esc_url($boost_btn['url']); ?>" class="btn-main <?php echo esc_attr($boost_btn_style); ?>"><?php echo esc_html($boost_btn['title']); ?></a>
    </article>
  </div>
</section>

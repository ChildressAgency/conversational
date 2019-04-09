<?php $page_id = get_the_ID(); ?>
  <section id="growth">
    <div class="container-fluid">
      <div class="row">
        <div class="col-1 col-sm-3 d-none d-md-block">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plant-right-face.png" class="img-fluid" alt="Plant" />
        </div>
        <div class="col-12 col-md-6">
          <article class="narrow-container">
            <?php echo wp_kses_post(get_post_meta($page_id, 'growth_section_content', true)); ?>

            <?php 
              $learn_more_btn = get_post_meta($page_id, 'growth_section_learn_more_button_link', true);
              $learn_more_btn_style = get_post_meta($page_id, 'growth_section_learn_more_button_style', true);

              if($learn_more_btn): ?>
                <a href="<?php echo esc_url($learn_more_btn['url']); ?>" class="btn-main <?php echo esc_attr($learn_more_btn_style); ?>"><?php echo esc_html($learn_more_btn['title']); ?></a>
            <?php endif; ?>
          </article>
        </div>
        <div class="col-sm-3 d-none d-md-block plant animation-trigger">
          <div class="stem">
            <div class="leaf leaf1">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plant-grow-leaf-left.png" class="" alt="" />
            </div>
            <div class="leaf leaf2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plant-grow-leaf-right.png" class="" alt="" />
            </div>
            <div class="leaf leaf3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plant-grow-leaf-left.png" class="" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
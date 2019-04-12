<?php $page_id = get_the_ID(); ?>
<section id="features">
  <div class="container">
    <article class="features">
      <header class="narrow-container position-relative text-center">
        <h2><?php echo esc_html__('Features', 'conversational'); ?></h2>
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'home_page_features_section_intro', true))); ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/magnifying-glass.png" class="magnifying-glass d-none d-md-block" alt="magnifying glass" />
      </header>
      
      <?php $features = get_post_meta($page_id, 'home_page_features', true); if($features): ?>
        <ul class="list-unstyled features-list d-flex flex-wrap text-left">
          <?php for($f = 0; $f < $features; $f++): ?>

            <li class="media">
              <?php
                $featured_icon_id = get_post_meta($page_id, 'home_page_features_' . $f . '_feature_icon', true);
                $featured_icon = wp_get_attachment_image_src($featured_icon_id, 'full');
              ?>
              <?php if($featured_icon): ?>
                <img src="<?php echo esc_url($featured_icon[0]); ?>" class="mr-3" alt="feature icon" />
              <?php endif; ?>
              <div class="media-body">
                <h4 class="mt-0 mb-1"><?php echo esc_html(get_post_meta($page_id, 'home_page_features_' . $f . '_feature_title', true)); ?></h4>
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'home_page_features_' . $f . '_feature_description', true))); ?>
              </div>
            </li>

          <?php endfor; ?>
        </ul>
        <?php 
          $learn_more_btn = get_post_meta($page_id, 'features_learn_more_button_link', true);
          $learn_more_btn_style = get_post_meta($page_id, 'features_learn_more_button_style', true);

          if($learn_more_btn): ?>
            <a href="<?php echo esc_url($learn_more_btn['url']); ?>" class="btn-main <?php echo esc_attr($learn_more_btn_style); ?>"><?php echo esc_html($learn_more_btn['title']); ?></a>
        <?php endif; ?>
      <?php endif; ?>
    </article>
  </div>
</section>

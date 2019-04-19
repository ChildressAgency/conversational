<?php $page_id = get_the_ID(); ?>
<section id="mobile-app">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php 
          $phone_img_id = get_post_meta($page_id, 'app_image', true);
          $phone_img = wp_get_attachment_image_src($phone_img_id, 'full');
        ?>
        <img src="<?php echo esc_url($phone_img[0]); ?>" class="img-fluid mx-auto d-block" alt="Conversational Phone App" />
      </div>
      <div class="col-md-8">
        <article>
          <header>
            <h2><?php echo esc_html(get_post_meta($page_id, 'app_section_title', true)); ?></h2>
          </header>
          <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'app_section_content', true))); ?>
          <div class="media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/SpeechBubbles.png" class="img-fluid mx-auto" alt="Speech bubbles" />
            <div class="media-body">
              <ul class="list-unstyled">
                <?php
                  $app_features = get_post_meta($page_id, 'app_features', true);

                  for($i = 0; $i < $app_features; $i++){
                    echo '<li>' . get_post_meta($page_id, 'app_features_' . $i . '_app_feature', true) . '</li>';
                  }
                ?>
              </ul>
            </div>
          </div>
          <?php
            $play_store_link = get_post_meta($page_id, 'play_store_link', true);
            $play_store_icon_id = get_post_meta($page_id, 'play_store_icon', true);

            $app_store_link = get_post_meta($page_id, 'app_store_link', true);
            $app_store_icon_id = get_post_meta($page_id, 'app_store_icon', true);
          ?>
          <div class="app-links">
            <?php if($play_store_icon_id): ?>
              <?php $play_store_icon = wp_get_attachment_image_src($play_store_icon_id, 'full'); ?>
              <a href="<?php echo esc_url($play_store_link); ?>">
                <img src="<?php echo esc_url($play_store_icon[0]); ?>" class="img-fluid mx-auto" alt="Google Play Store Icon" />
              </a>
            <?php endif; if($app_store_icon_id): ?>
              <?php $app_store_icon = wp_get_attachment_image_src($app_store_icon_id, 'full'); ?>
              <a href="<?php echo esc_url($app_store_link); ?>">
                <img src="<?php echo esc_url($app_store_icon[0]); ?>" class="img-fluid mx-auto" alt="App Store icon" />
              </a>
            <?php endif; ?>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

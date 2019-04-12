<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
  <main id="main" class="whois-page">
    <div class="container-fluid">
      <article class="standard-page">
        <?php get_template_part('page-intro'); ?>
        <div class="page-body">
          <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>
        </div>

        <div class="page-callout industries-callout">
          <div class="row">
            <div class="col-md-3">
              <?php
                $callout_icon_id = get_post_meta($page_id, 'callout_icon', true);
                $callout_icon = wp_get_attachment_image_src($callout_icon_id, 'full');
                $callout_icon_alt = get_post_meta($callout_icon_id, '_wp_attachment_image_alt', true);
              ?>
              <img src="<?php echo esc_url($callout_icon[0]); ?>" class="callout-icon img-fluid d-block mx-md-auto mb-3" alt="<?php echo esc_attr($callout_icon_alt); ?>" />
            </div>
            <div class="col-md-9">
              <div class="industries-callout-main">
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'callout_content', true))); ?>
              </div>
            </div>
          </div>
        </div>
        
        <?php
          $after_callout_section = get_post_meta($page_id, 'after_callout_section', true);
          if($after_callout_section): ?>
            <div class="page-body">
              <?php echo apply_filters('the_content', wp_kses_post($after_callout_section)); ?>
            </div>
        <?php endif; ?>
      </article>

      <article id="satisfaction">
        <header>
          <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'satisfaction_guaranteed_intro', true))); ?>
        </header>
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'satisfaction_guaranteed_content', true))); ?>

        <?php 
          $start_free_trial_btn = get_post_meta($page_id, 'start_free_trial_button_link', true);
          $start_free_trial_btn_style = get_post_meta($page_id, 'start_free_trial_button_style', true);
        ?>
        <a href="<?php echo esc_url($start_free_trial_btn['url']); ?>" class="btn-main <?php echo esc_attr($start_free_trial_btn_style); ?>"><?php echo esc_html($start_free_trial_btn['title']); ?></a>
      </article>
    </div>
  </main>

<?php get_footer();
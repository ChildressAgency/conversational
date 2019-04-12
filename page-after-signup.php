<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="after-signup">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>

      <div class="steps">
        <p style="text-align:center; font-size:24px;"><strong><?php echo esc_html(get_post_meta($page_id, 'easy_as_intro', true)); ?></strong></p>
        <div class="easy-as">
          <h2>It's as easy as <span>1 - 2 - 3</span></h2>
        </div>
        <div class="step" style="z-index:5;">
          <div class="row">
            <div class="col-md-6">
              <?php
                $step_1_img_id = get_post_meta($page_id, 'step_1_image', true);

                if($step_1_img_id):
                  $step_1_img = wp_get_attachment_image_src($step_1_img_id, 'full');
                  $step_1_img_alt = get_post_meta($step_1_img_id, '_wp_attachment_image_alt', true); ?>

                  <img src="<?php echo esc_url($step_1_img[0]); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($step_1_img_alt); ?>" />
              <?php endif; ?>
            </div>
            <div class="col-md-6">
              <div class="step-content">
                <h3><?php echo esc_html(get_post_meta($page_id, 'step_1_title', true)); ?></h3>
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'step_1_description', true))); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="step">
          <div class="row">
            <div class="col-md-6">
              <?php
                $step_2_img_id = get_post_meta($page_id, 'step_2_image', true); 

                if($step_2_img_id):
                  $step_2_img = wp_get_attachment_image_src($step_2_img_id, 'full');
                  $step_2_img_alt = get_post_meta($step_2_img_id, '_wp_attachment_image_alt', true); ?>

                  <img src="<?php echo esc_url($step_2_img[0]); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($step_2_img_alt); ?>" />
              <?php endif; ?>
            </div>
            <div class="col-md-6">
              <div class="step-content">
                <h3><?php echo esc_html(get_post_meta($page_id, 'step_2_title', true)); ?></h3>
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'step_2_description', true))); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="step">
          <div class="row">
            <div class="col-md-6">
              <?php
                $step_3_img_id = get_post_meta($page_id, 'step_3_image', true); 
                
                if($step_3_img_id):
                  $step_3_img = wp_get_attachment_image_src($step_3_img_id, 'full');
                  $step_3_img_alt = get_post_meta($step_3_img_id, '_wp_attachment_image_alt', true); ?>

                  <img src="<?php echo esc_url($step_3_img[0]); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_html($step_3_img_alt); ?>" />
            </div>
            <div class="col-md-6">
              <div class="step-content">
                <h3><?php echo esc_html(get_post_meta($page_id, 'step_3_title', true)); ?></h3>
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'step_3_description', true))); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
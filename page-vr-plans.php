<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="vrplans">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>
      <div class="page-body">
        <div class="free-trial">
          <?php echo wp_kses_post(get_post_meta($page_id, 'free_trial_section', true)); ?>
        </div>
        <section class="vrplans-features">
          <?php echo wp_kses_post(get_post_meta($page_id, 'page_content', true)); ?>

          <?php
            $features_btn = get_post_meta($page_id, 'features_button_link', true);
            $features_btn_style = get_post_meta($page_id, 'features_button_style', true);
          ?>
          <div class="text-center">
            <a href="<?php echo esc_url($featured_btn['url']); ?>" class="btn-main <?php echo esc_attr($features_btn_style); ?>"><?php echo esc_html($features_btn['title']); ?></a>
          </div>
        </section>

        <?php
          $need_advanced_section_title = get_post_meta($page_id, 'need_advanced_section_title', true);
          if($need_advanced_section_title): ?>
            <div class="need-advanced">
              <div class="row">
                <div class="col-md-3">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rocket.png" class="img-fluid d-block mx-auto mb-3" alt="" />
                </div>
                <div class="col-md-9">
                  <h3><?php echo esc_html($need_advanced_section_title); ?></h3>
                  <hr />
                  <?php echo wp_kses_post(get_post_meta($page_id, 'need_advanced_section_content', true)); ?>
                </div>
              </div>
            </div>
        <?php endif; ?>
      </div>

      <div class="page-callout">
        <div class="advanced-callout">
          <h2><?php echo esc_html(get_post_meta($page_id, 'advanced_call_section_title', true)); ?></h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3><?php echo esc_html(get_post_meta($page_id, 'advanced_call_section_1_title', true)); ?></h3>
                  <p><?php echo esc_html(get_post_meta($page_id, 'advanced_call_section_1_subtitle', true)); ?></p>
                </div>
                <div class="card-body">
                  <?php echo wp_kses_post(get_post_meta($page_id, 'advanced_call_section_1_details', true)); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3><?php echo esc_html(get_post_meta($page_id, 'advanced_call_section_2_title', true)); ?></h3>
                  <p><?php echo esc_html(get_post_meta($page_id, 'advanced_call_section_2_subtitle', true)); ?></p>
                </div>
                <div class="card-body">
                  <?php echo wp_kses_post(get_post_meta($page_id, 'advanced_call_section_2_details', true)); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
</main>

<?php get_template_part('partials/section', 'pricing'); ?>

<?php get_template_part('partials/section', 'getstarted'); ?>

<?php get_footer();
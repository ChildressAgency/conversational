<?php //$page_id = get_the_ID(); ?>
<?php
  $home_page = get_page_by_path('home');
  $page_id = $home_page->ID;
?>
  <section id="pricing-plans">
    <div class="container">
      <article class="pricing-plans">
        <header>
          <?php echo apply_filters('the_content', wp_kses_post(get_post_meta(get_the_ID(), 'pricing_plans_section_intro', true))); ?>
        </header>

        <div class="card-group">
          <div class="card card-small">
            <div class="card-header">
              <h2 id="entrepreneur">
                <?php echo esc_html(get_post_meta($page_id, 'pricing_plan_1_title', true)); ?><small><?php echo esc_html(get_post_meta($page_id, 'pricing_plan_1_subtitle', true)); ?></small>
              </h2>
            </div>
            <div class="card-title">
              <h3>
                <sup>$</sup><?php echo esc_html(get_post_meta($page_id, 'pricing_plan_1_price', true)); ?><small>per Month</small>
              </h3>
              <p>excess minutes $<?php echo esc_html(get_post_meta($page_id, 'pricing_plan_1_excess_minutes', true)); ?>/min</p>
            </div>
            <div class="card-body">
              <?php 
                echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'pricing_plan_1_details', true)));

                $pricing_plan_1_btn = get_post_meta($page_id, 'pricing_plan_1_learn_more_button_link', true);
                $pricing_plan_1_btn_style = get_post_meta($page_id, 'pricing_plan_1_learn_more_button_style', true);
              ?>
              <a href="<?php echo esc_url($pricing_plan_1_btn['url']); ?>" class="btn-main <?php echo esc_attr($pricing_plan_1_btn_style); ?>"><?php echo esc_html($pricing_plan_1_btn['title']); ?></a>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h2 id="business">
                <?php echo esc_html(get_post_meta($page_id, 'pricing_plan_2_title', true)); ?><small><?php echo esc_html(get_post_meta($page_id, 'pricing_plan_2_subtitle', true)); ?></small>
              </h2>
            </div>
            <div class="card-title">
              <h3>
                <sup>$</sup><?php echo esc_html(get_post_meta($page_id, 'pricing_plan_2_price', true)); ?><small>per Month</small>
              </h3>
              <p>excess minutes $<?php echo esc_html(get_post_meta($page_id, 'pricing_plan_2_excess_minutes', true)); ?>/min</p>
            </div>
            <div class="card-body">
              <?php 
                echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'pricing_plan_2_details', true)));

                $pricing_plan_2_btn = get_post_meta($page_id, 'pricing_plan_2_learn_more_button_link', true);
                $pricing_plan_2_btn_style = get_post_meta($page_id, 'pricing_plan_2_learn_more_button_style', true);
              ?>
              <a href="<?php echo esc_url($pricing_plan_2_btn['url']); ?>" class="btn-main <?php echo esc_attr($pricing_plan_2_btn_style); ?>"><?php echo esc_html($pricing_plan_2_btn['title']); ?></a>
            </div>
          </div>

          <div class="card card-small">
            <div class="card-header">
              <h2 id="corporate">
                <?php echo esc_html(get_post_meta($page_id, 'pricing_plan_3_title', true)); ?><small><?php echo esc_html(get_post_meta($page_id, 'pricing_plan_3_subtitle', true)); ?></small>
              </h2>
            </div>
            <div class="card-title">
              <h3>
                <sup>$</sup><?php echo esc_html(get_post_meta($page_id, 'pricing_plan_3_price', true)); ?><small>per Month</small>
              </h3>
              <p>excess minutes $<?php echo esc_html(get_post_meta($page_id, 'pricing_plan_3_excess_minutes', true)); ?>/min</p>
            </div>
            <div class="card-body">
              <?php 
                echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'pricing_plan_3_details', true)));
               
                $pricing_plan_3_btn = get_post_meta($page_id, 'pricing_plan_3_learn_more_button_link', true);
                $pricing_plan_3_btn_style = get_post_meta($page_id, 'pricing_plan_3_learn_more_button_style', true);
              ?>
              <a href="<?php echo esc_url($pricing_plan_3_btn['url']); ?>" class="btn-main <?php echo esc_attr($pricing_plan_3_btn_style); ?>"><?php echo esc_html($pricing_plan_3_btn['title']); ?></a>
            </div>
          </div>
        </div>
      </article>

      <?php if(is_page('vr-plans')): ?>
        <?php $vr_plans_page_id = get_the_ID(); ?>
        <div class="coverage">
          <div class="row">
            <div class="col-md-3">
              <?php 
                $coverage_time_icon_id = get_post_meta($vr_plans_page_id, 'coverage_time_section_icon', true);
                $coverage_time_icon = wp_get_attachment_image_src($coverage_time_icon_id, 'full');
                $coverage_time_icon_alt = get_post_meta($coverage_time_icon_id, '_wp_attachment_image_alt', true);
              ?>
              <img src="<?php echo esc_url($coverage_time_icon[0]); ?>" class="img-fluid d-block mx-auto mb-3" alt="<?php echo esc_attr($coverage_time_icon_alt); ?>" />
            </div>
            <div class="col-md-9">
              <h3><?php echo esc_html(get_post_meta($vr_plans_page_id, 'coverage_time_section_title', true)); ?></h3>
              <hr />
              <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($vr_plans_page_id, 'coverage_time_section_content', true))); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
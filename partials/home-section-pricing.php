<?php $page_id = get_the_ID(); ?>
  <section id="pricing-plans">
    <div class="container">
      <article class="pricing-plans">
        <header>
          <?php echo wp_kses_post(get_post_meta($page_id, 'pricing_plans_section_intro', true)); ?>
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
              <ul class="list-unstyled">
                <?php 
                  $pricing_plan_1_details = get_post_meta($page_id, 'pricing_plan_1_details', true);
                  for($p1 = 0; $p1 < $pricing_plan_1_details; $p1++){
                    echo '<li>' . esc_html(get_post_meta($page_id, 'pricing_plan_1_details_' . $p1 . '_detail', true)) . '</li>';
                  }
                ?>
              </ul>
              <?php
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
              <ul class="list-unstyled">
                <?php
                  $pricing_plan_2_details = get_post_meta($page_id, 'pricing_plan_2_details', true);
                  for($p2 = 0; $p2 < $pricing_plan_2_details; $p2++){
                    echo '<li>' . esc_html(get_post_meta($page_id, 'pricing_plan_2_details_' . $p2 . '_detail', true)) . '</li>';
                  }
                ?>
              </ul>
              <?php 
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
              <ul class="list-unstyled">
                <?php 
                  $pricing_plan_3_details = get_post_meta($page_id, 'pricing_plan_3_details', true);
                  for($p3 = 0; $p3 < $pricing_plan_3_details; $p3++){
                    echo '<li>' . esc_html(get_post_meta($page_id, 'pricing_plan_3_details_' . $p3 . '_detail', true)) . '</li>';
                  }
                ?>
              </ul>
              <?php 
                $pricing_plan_3_btn = get_post_meta($page_id, 'pricing_plan_3_learn_more_button_link', true);
                $pricing_plan_3_btn_style = get_post_meta($page_id, 'pricing_plan_3_learn_more_button_style', true);
              ?>
              <a href="<?php echo esc_url($pricing_plan_3_btn['url']); ?>" class="btn-main <?php echo esc_attr($pricing_plan_3_btn_style); ?>"><?php echo esc_html($pricing_plan_3_btn['title']); ?></a>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>
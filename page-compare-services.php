<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="compare">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>

      <div class="page-body">
        <?php
          $competitors = get_post_meta($page_id, 'competitors', true);
          if($competitors): ?>
            <div class="competitor-nav">
              <select id="select-competitor" class="form-control form-control-lg">
                <?php 
                  for($n = 0; $n < $competitors; $n++){
                    $competitor_name = esc_html(get_post_meta($page_id, 'competitors_' . $n . '_competitor_name', true));
                    $competitor_slug = esc_html(sanitize_title($competitor_name));
                    $aria_selected = 'false';
                    if($n == 0){ $aria_selected = 'true'; }
                    $selected = '';
                    if($n == 0){ $selected = ' selected'; }

                    echo '<option value="' . $competitor_slug . '" role="tab" aria-controls="' . $competitor_slug . '" aria-selected="' . $aria_selected . '"' . $selected . '>' . $competitor_name . '</option>';
                  }
                ?>
              </select>
            </div>
      </div>

      <?php if($competitors): ?>
        <div id="competitor-comparisons" class="tab-content">
          <?php for($i = 0; $i < $competitors; $i++): ?>
            <?php 
              $competitor_name = get_post_meta($page_id, 'competitors_' . $i . '_competitor_name', true);
              $competitor_slug = sanitize_title($competitor_name);
            ?>
            <div id="<?php esc_html($competitor_slug); ?>" class="tab-pane fade<?php if($i == 0){ echo ' show active'; } ?>" role="tabpanel" aria-labelledby="select-competitor">
              <header>
                <h2><?php echo esc_html($competitor_name); ?> vs. <strong>Conversational</strong><small>One Clear Choice</small></h2>
                <?php echo wp_kses_post(get_post_meta($page_id, 'competitors_' . $i . '_competitor_intro', true)); ?>
              </header>

              <?php
                $comparison_chart = get_post_meta($page_id, 'competitors_' . $i . '_comparison_chart', true);
                if($comparison_chart): ?>
                  <?php $chart_field = 'competitors_' . $i . '_comparison_chart'; ?>
                  <section class="comparison-chart">
                    <div class="table-responsive-md">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"><span>Category</span></th>
                            <th scope="col"><span>Conversational</span></th>
                            <th scope="col"><span><?php echo esc_html($competitor_name); ?></span></th>
                          </tr>
                        </thead>
                    
                        <tbody>
                          <?php for($c = 0; $c < $comparison_chart; $c++): ?>
                            <tr>
                              <th scope="row"><?php echo esc_html(get_post_meta($page_id, $chart_field . '_' . $c . '_category', true)); ?></th>
                              <td><?php echo esc_html(get_post_meta($page_id, $chart_field . '_' . $c . '_conversational_value', true)); ?></td>
                              <td><?php echo esc_html(get_post_meta($page_id, $chart_field . '_' . $c . '_competitor_value', true)); ?></td>
                            </tr>
                          <?php endfor; ?>
                        </tbody>
                      </table>
                    </div>
                  </section>
              <?php endif; ?>

              <?php
                $comparison_content = get_post_meta($page_id, 'comparison_content', true);
                foreach($comparison_content as $count => $content){
                  switch($content){
                    case 'regular_content':
                      echo '<div class="panel-body">';
                      echo wp_kses_post(get_post_meta($page_id, 'comparison_content_' . $count . '_content', true));
                      echo '</div>';

                      break;
                    
                    case 'cut_bill_graphic': ?>
                      <section class="cut-bill">
                        <div class="row">
                          <div class="col-lg-3 d-flex align-items-center">
                            <p>Are you a current client of <?php echo esc_html($competitor_name); ?>?<span>SHOW US</span></p>
                          </div>
                          <div class="col-lg-6 d-flex align-items-center">
                            <img src="images/your-bill.png" class="img-fluid d-block mx-auto" alt="Cut your bill" />
                          </div>
                          <div class="col-lg-3 d-flex align-items-center">
                            <p>AND WE'LL <span>CUT YOUR BILL</span> WITH CONVERSATIONAL</p>
                          </div>
                        </div>
                      </section>

                      <?php break;

                    case 'button':
                      echo '<p class="text-center">';
                        $btn = get_post_meta($page_id, 'comparison_content_' . $count . '_section_button_link', true);
                        $btn_style = get_post_meta($page_id, 'comparison_content_' . $count . '_section_button_style', true);

                        echo '<a href="' . esc_url($btn['url']) . '" class="btn-main ' . esc_attr($btn_style) . '">' . esc_html($btn['title']) . '</a>';
                      echo '</p>';

                      break;

                    case 'disclaimer':
                      echo '<p class="comparison-disclaimer">* ' . wp_kses_post(get_post_meta($page_id, 'comparison_content_' . $count . '_disclaimer_content', true)) . '</p>';

                      break;
                  } //end switch
                } //end foreach
              ?>
            </div><?php // end .tab-pane ?>
          <?php endfor; ?>
        </div><?php // end .tab-content ?>
      <?php endif; ?>
    </article>
  </div>
</main>
<?php get_footer();
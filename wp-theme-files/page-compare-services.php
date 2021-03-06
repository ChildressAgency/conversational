<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="compare">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <?php
          $competitors = new WP_Query(array(
            'post_type' => 'comparison',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
          ));
          if($competitors->have_posts()): ?>
            <div class="competitor-nav">
              <select id="select-competitor" class="form-control form-control-lg" onchange="window.open(this.options[this.selectedIndex].value,' _top')">
                <?php while($competitors->have_posts()): $competitors->the_post(); ?>
                  <option value="<?php the_permalink(); ?>" <?php if(get_the_ID() == $page_id){ echo ' selected'; } ?>><?php the_title(); ?></option>
                <?php endwhile; wp_reset_postdata(); ?>
              </select>
            </div>
        <?php endif; ?>
      </div>

      <?php if($competitors): ?>
        <div id="competitor-comparisons" class="tab-content">
          <?php for($i = 0; $i < $competitors; $i++): ?>
            <?php 
              $competitor_name = get_post_meta($page_id, 'competitors_' . $i . '_competitor_name', true);
              $competitor_slug = sanitize_title($competitor_name);
            ?>
            <div id="<?php echo esc_html($competitor_slug); ?>" class="tab-pane fade<?php if($i == 0){ echo ' show active'; } ?>" role="tabpanel" aria-labelledby="select-competitor">
              <header>
                <h2><?php echo esc_html($competitor_name); ?> vs. <strong>Conversational</strong><small><?php echo esc_html__('One Clear Choice', 'conversational'); ?></small></h2>
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'competitors_' . $i . '_competitor_intro', true))); ?>
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
                            <th scope="col"><span><?php echo esc_html__('Category', 'conversational'); ?></span></th>
                            <th scope="col"><span><?php echo esc_html__('Conversational', 'conversational'); ?></span></th>
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
                $comparison_content = get_post_meta($page_id, 'competitors_' . $i . '_comparison_content', true);
                $comparison_content_field = 'competitors_' . $i . '_comparison_content';
                foreach((array)$comparison_content as $count => $content){
                  switch($content){
                    case 'regular_content':
                      echo '<div class="panel-body">';
                      echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, $comparison_content_field . '_' . $count . '_content', true)));
                      echo '</div>';

                      break;
                    
                    case 'cut_bill_graphic': ?>
                      <section class="cut-bill">
                        <div class="row">
                          <div class="col-lg-3 d-flex align-items-center">
                            <p>Are you a current client of <?php echo esc_html($competitor_name); ?>?<span>SHOW US</span></p>
                          </div>
                          <div class="col-lg-6 d-flex align-items-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/your-bill.png" class="img-fluid d-block mx-auto" alt="Cut your bill" />
                          </div>
                          <div class="col-lg-3 d-flex align-items-center">
                            <p>AND WE'LL <span>CUT YOUR BILL</span> WITH CONVERSATIONAL</p>
                          </div>
                        </div>
                      </section>

                      <?php break;

                    case 'button':
                      echo '<p class="text-center">';
                        $btn = get_post_meta($page_id, $comparison_content_field . '_' . $count . '_section_button_link', true);
                        $btn_style = get_post_meta($page_id, $comparison_content_field . '_' . $count . '_section_button_style', true);

                        echo '<a href="' . esc_url($btn['url']) . '" class="btn-main ' . esc_attr($btn_style) . '">' . esc_html($btn['title']) . '</a>';
                      echo '</p>';

                      break;

                    case 'disclaimer':
                      echo '<p class="comparison-disclaimer">* ' . wp_kses_post(get_post_meta($page_id, $comparison_content_field . '_' . $count . '_disclaimer_content', true)) . '</p>';

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
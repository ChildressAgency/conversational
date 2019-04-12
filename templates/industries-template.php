<?php
/**
 * Template Name: Industries Template
 * Description: Template for Industries pages with menu on left side.
 */

get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="industries">
  <div class="container-fluid">
    <article class="industries-page">
      <?php get_template_part('partials', 'page-intro'); ?>

      <div class="industries-body">
        <div class="row">
          <div class="col-md-3 d-none d-md-block">
            <div class="industries-sidebar d-flex flex-column align-items-center">
              <nav id="industries-nav" class="nav flex-column">
                <h3><?php echo esc_html__('Industries', 'conversational'); ?></h3>
                <?php 
                  $industries_nav_args = array(
                    'theme_location' => 'industries-nav',
                    'menu' => '',
                    'container' => '',
                    'container_id' => '',
                    'container_class' => '',
                    'menu_id' => '',
                    'menu_class' => '',
                    'echo' => true,
                    'fallback_cb' => 'conversational_industries_fallback_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new WP_Bootstrap_NavWalker()
                  );
                  wp_nav_menu($industries_nav_args);
                ?>
              </nav>
            </div>
          </div>
          <div class="col-md-9">
            <div class="industries-main">
              <?php
                $main_content = get_post_meta($page_id, 'main_content_style', true);
                foreach($main_content as $count => $content_style){
                  switch($content_style){
                    case 'regular_content':
                      echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'main_content_style_' . $count . '_content', true)));

                      break;

                    case 'icon_with_content':
                      $icon_fields = get_post_meta($page_id, 'main_content_style_' . $count . '_icon_fields', true);

                      if($icon_fields){
                        echo '<section class="pros">';
                        $icon_fields_name = 'main_content_style_' . $count . '_icon_fields';

                        for($i = 0; $i < $icon_fields; $i++){
                          echo '<div class="row"><div class="col-md-3">';

                            $icon_id = get_post_meta($page_id, $icon_fields_name . '_' . $i . '_icon', true);
                            $icon = wp_get_attachment_image_src($icon_id, 'full');
                            $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
                            echo '<img src="' . esc_url($icon[0]) . '" class="img-fluid d-block mx-auto mb-3" alt="' . esc_attr($icon_alt) . '" />';
                          echo '</div><div class="col-md-9">';
                            echo '<h3>' . esc_html(get_post_meta($page_id, $icon_fields_name . '_' . $i . '_icon_field_title', true)) . '</h3>';
                            echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, $icon_fields_name . '_' . $i . '_icon_field_content', true)));
                          echo '</div></div>';
                        } //end for
                        echo '</section>';
                      } //end if $icon_fields

                      break;
                  } //end switch
                } //end foreach
              ?>
            </div>
          </div>
        </div>

        <?php //accordion
          $accordion = get_post_meta($page_id, 'accordion', true);
          if($accordion): ?>
            <section id="franchise-pros" class="accordion">
              <?php for($a = 0; $a < $accordion; $a++): ?>
                <div class="card">
                  <div class="card-container">
                    <div id="pros-heading-<?php echo $a; ?>" class="card-header">
                      <h2>
                        <a href="#pros-<?php echo $a; ?>" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pros-<?php echo $a; ?>">
                          <span class="expander"></span>
                          <?php echo esc_html(get_post_meta($page_id, 'accordion_' . $a . '_accordion_field_title', true)); ?>
                        </a>
                      </h2>
                    </div>
                    <div id="pros-<?php echo $a; ?>" class="collapse" aria-labelledby="pros-heading-<?php echo $a; ?>" data-parent="#franchise-pros">
                      <div class="card-body">
                        <?php echo wp_kses_post(get_post_meta($page_id, 'accordion_' . $a . '_accordion_field_content', true)); ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>
            </section>
        <?php endif; //accordion

          $alt_content = get_post_meta($page_id, 'alt_content_style', true);
          foreach($alt_content as $count => $alt_content_style){
            switch($alt_content_style){
              case 'with_icon': ?>

                <section class="industries-callout<?php if(is_page('work-at-home-professionals')){ echo ' work-home'; } ?>">
                  <div class="row">
                    <div class="col-md-3">
                      <?php
                        $alt_content_icon_id = get_post_meta($page_id, 'alt_content_style_' . $count . '_alt_content_icon', true);
                        $alt_content_icon = wp_get_attachment_image_src($alt_content_icon_id, 'full');
                        $alt_content_icon_alt = get_post_meta($alt_content_icon_id, '_wp_attachment_image_alt', true);
                      ?>
                      <img src="<?php echo esc_url($alt_content_icon[0]); ?>" class="callout-icon img-fluid d-block mx-md-auto mb-3" alt="<?php echo esc_attr($alt_content_icon_alt); ?>" />
                    </div>
                    <div class="col-md-9">
                      <div class="industries-callout-main">
                        <?php if(is_page('work-at-home-professionals')): ?>
                          <h2>Conversational <span>is the affordable solution</span></h2>
                        <?php else: ?>
                          <h2><?php echo esc_html(get_post_meta($page_id, 'alt_content_style_' . $count .'_alt_content_title', true)); ?></h2>
                        <?php endif; 

                        $icon_content_style = get_post_meta($page_id, 'alt_content_style_' . $count . '_icon_content_style', true);
                        foreach($icon_content_style as $c_count => $content_style){
                          $field_string = 'alt_content_style_' . $count . '_icon_content_style';

                          switch($content_style){
                            case 'regular_content':
                              echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, $field_string . '_' . $c_count . '_content', true)));
                            break;

                            case 'pricing':
                              $pricing_field_string = $field_string . '_' . $c_count . '_plan_';
                              echo '<section id="small-biz-pricing"><div class="row">';
                                echo '<div class="col-lg-4"><div class="card">';
                                  echo '<div class="card-header">';
                                    echo '<h4>' . esc_html(get_post_meta($page_id, $pricing_field_string . '1_title', true)) . '</h4>';
                                    echo '<p>' . esc_html(get_post_meta($page_id, $pricing_field_string . '1_subtitle', true)) . '</p>';
                                  echo '</div><div class="card-body">';
                                    $price_1_per_month = get_post_meta($page_id, $pricing_field_string . '1_price_per_month', true);
                                    $price_1_per_minute = get_post_meta($page_id, $pricing_field_string . '1_price_per_minute', true);
                                    echo '<p><sup>$</sup>' . esc_html($price_1_per_month) . ' per month<small>or $' . esc_html($price_1_per_minute) . ' per minute</small></p>';
                                  echo '</div>';
                                echo '</div></div>';
                                echo '<div class="col-lg-4"><div class="card">';
                                  echo '<div class="card-header">';
                                    echo '<h4>' . esc_html(get_post_meta($page_id, $pricing_field_string . '2_title', true)) . '</h4>';
                                    echo '<p>' . esc_html(get_post_meta($page_id, $pricing_field_string . '2_subtitle', true)) . '</p>';
                                  echo '</div><div class="card-body">';
                                    $price_2_per_month = get_post_meta($page_id, $pricing_field_string . '2_price_per_month', true);
                                    $price_2_per_minute = get_post_meta($page_id, $pricing_field_string . '2_price_per_minute', true);
                                    echo '<p><sup>$</sup>' . esc_html($price_2_per_month) . ' per month<small>or $' . esc_html($price_2_per_minute) . ' per minute</small></p>';
                                  echo '</div>';
                                echo '</div></div>';
                                echo '<div class="col-lg-4"><div class="card">';
                                  echo '<div class="card-header">';
                                    echo '<h4>' . esc_html(get_post_meta($page_id, $pricing_field_string . '3_title', true)) . '</h4>';
                                    echo '<p>' . esc_html(get_post_meta($page_id, $pricing_field_string . '3_subtitle', true)) . '</p>';
                                  echo '</div><div class="card-body">';
                                    $price_3_per_month = get_post_meta($page_id, $pricing_field_string . '3_price_per_month', true);
                                    $price_3_per_minute = get_post_meta($page_id, $pricing_field_string . '3_price_per_minute', true);
                                    echo '<p><sup>$</sup>' . esc_html($price_3_per_month) . ' per month<small>or $' . esc_html($price_3_per_minute) . ' per minute</small></p>';
                                  echo '</div>';
                                echo '</div></div>';
                              echo '</div></section>';

                              $pricing_content = get_post_meta($page_id, $pricing_field_string . 'pricing_content', true);
                              if($pricing_content){
                                echo '<div class="narrow-section">';
                                echo apply_filters('the_content', wp_kses_post($pricing_content));
                                echo '</div>';
                              }
                            break;
                          }//end switch content_style
                        }//end foreach icon_content_style
                        ?>
                      </div>
                    </div>
                  </div>
                </section>
              
              <?php break;

              case 'without_icon':
                echo '<section class="industries-callout medical"><div class="industries-callout-main">';
                echo '<h2>' . esc_html(get_post_meta($page_id, 'alt_content_style_' . $count . '_alt_content_title', true)) . '</h2>';

                $no_icon_content_style = get_post_meta($page_id, 'alt_content_style_' . $count . '_no_icon_content_style', true);
                foreach($no_icon_content_style as $c_count => $content_style){
                  $field_string = 'alt_content_style_' . $count . '_no_icon_content_style';

                  switch($content_style){
                    case 'regular_content':
                      echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, $field_string . '_' . $c_count . '_content', true)));
                    break;

                    case 'icon_field':
                      echo '<section class="pros">';
                        $icon_field_fields = get_post_meta($page_id, $field_string . '_' . $c_count . '_icon_fields', true);
                        $icon_fields_string = $field_string . '_' . $c_count . '_icon_fields';
                        for($f = 0; $f < $icon_field_fields; $f++){
                          echo '<div class="row"><div class="col-md-4">';
                            $icon_field_icon_id = get_post_meta($page_id, $icon_fields_string . '_' . $f . '_icon', true);
                            $icon_field_icon = wp_get_attachment_image_src($icon_field_icon_id, 'full');
                            $icon_field_icon_alt = get_post_meta($icon_field_icon_id, '_wp_attachment_image_alt', true);
                            echo '<img src="' . esc_url($icon_field_icon[0]) . '" class="img-fluid d-block ml-md-auto mb-3" alt="' . esc_attr($icon_field_icon_alt) . '" />';
                          echo '</div><div class="col-md-8">';
                            echo '<h3>' . esc_html(get_post_meta($page_id, $icon_fields_string . '_' . $f . '_icon_field_title', true)) . '</h3>';
                            echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, $icon_fields_string . '_' . $f . '_icon_field_content', true)));
                          echo '</div></div>';
                        } //end for
                      echo '</section>';
                    break;
                  } //end switch content_style
                } //end foreach no_icon_content_style

                echo '</div></section>';
              break;
            }//end switch alt_content_style
          }//end foreach alt_content
        ?>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
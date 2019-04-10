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
                      echo get_post_meta($page_id, 'main_content_style_' . $count . '_content', true);

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
                            echo wp_kses_post(get_post_meta($page_id, $icon_fields_name . '_' . $i . '_icon_field_content', true));
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

        <?php 
          $alt_content = get_post_meta($page_id, 'alt_content_style', true);
          foreach($alt_content as $count => $content_style){
            switch($content_style){
              case 'accordion':
                $accordion_fields = get_post_meta($page_id, 'alt_content_style_' . $count . '_accordion_fields', true);
                if($accordion_fields){
                  echo '<section id="franchise-pros" class="accordion">';
                  $accordion_fields_name = 'alt_content_style_' . $count . '_accordion_fields';

                  for($i = 0; $i < $accordion_fields; $i++){
                    echo '<div class="card"><div class="card-container">';
                      echo '<div id="pros-heading-' . $i . '" class="card-header">';
                        echo '<h2><a href="#pros-' . $i . '" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pros-' . $i . '">';
                          echo '<span class="expander"></span>';
                          echo get_post_meta($page_id, $accordion_fields_name . '_' . $i . '_accordion_field_title', true);
                        echo '</a></h2>';
                      echo '</div>';
                      echo '<div id="pros-' . $i . '" class="collapse" aria-labelledby="pros-heading-' . $i . '" data-parent="#franchise-pros"><div class="card-body">';
                        echo get_post_meta($page_id, $accordion_fields_name . '_' . $i . '_accordion_field_content', true);
                      echo '</div></div>';
                    echo '</div></div>';
                  }//end for
                }//end if $accordion_fields

                break;

              case 'callout':
                $callout_style = get_post_meta($page_id, 'alt_content_style_' . $count . '_callout_style', true);
                foreach($callout_style as $c_count => $style){
                  switch($style){
                    case 'with_icon':
                      //flexible: regular content or pricing content (like small biz)
                      break;

                    case 'without_icon':
                      if(is_page('work-at-home-professionals')){
                        //header is this
                      }//end if work-at-home
                      else{
                        //header is normal
                      }
                      //callout-main
                        //flexible: regular content or icon content(like medical)

                      break;
                  }//end switch
                }//end foreach

                break;
            }//end switch
          }//end foreach

        <section class="industries-callout medical mt-0">
          <div class="industries-callout-main">
            <h2>Choose Conversational medical answering services</h2>
            <p>Our answering service plans offer a host of important benefits for medical offices. As part of our medical answering services package, we provide incoming customer service in addition to friendly appointment reminder calls. Our data shows that appointment reminder calls are effective at reducing no shows. Our clients say the practice reduces no shows by as much as 75%. Other benefits include:</p>
            <section class="pros">
              <div class="row">
                <div class="col-md-4">
                  <img src="images/icon-bell.png" class="img-fluid d-block ml-md-auto mb-3" alt="" />
                </div>
                <div class="col-md-8">
                  <h3>Never miss a call</h3>
                  <p>Employees take breaks, sick days, federal holidays, and vacations, but medical answering services don’t. You define when you want your answering service to be available and answering calls, and they will ensure you never miss a call during that time frame.</p>
                  <p>Our appointment reminder calls encourage patients to remember to confirm or cancel their upcoming appointments with your medical practice, making sure your appointment schedule is as accurate as possible.</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <img src="images/icon-piggybank.png" class="img-fluid d-block ml-md-auto mb-3" alt="" />
                </div>
                <div class="col-md-8">
                  <h3>Cost effective</h3>
                  <p>We make it easy to expand your team in a cost effective, efficient way. Our medical answering specialists eliminate the need to hire a full-time or part-time receptionist. By going virtual, you avoid the costs of hourly pay, vacation, employee benefits, certain taxes, and other employee packages.</p>
                  <p>Because you can define the exact times and days you want your virtual receptionist to answer calls, schedule appointments, and provide customer service to callers during, you can ensure the phones are always covered while side-stepping the much higher cost of hiring a full-time receptionist.</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <img src="images/icon-calltime.png" class="img-fluid d-block ml-md-auto mb-3" alt="" />
                </div>
                <div class="col-md-8">
                  <h3>Pay for call time only</h3>
                  <p>You never pay for medical answering services to take breaks, sit and wait, or any other down time. You only pay for the time Conversational’s call specialists are actually on the phone with your callers.</p>
                  <p>That means you only pay for your answering service when you need it, not full time. That’s part of the reason medical answering services are much more cost effective than hiring–even part-time.</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <img src="images/icon-calendar-2.png" class="img-fluid d-block ml-md-auto mb-3" alt="" />
                </div>
                <div class="col-md-8">
                  <h3>Integrate your scheduling programs</h3>
                  <p>A good medical answering service understands that your existing scheduling programs have become an important cog in the gears that run your medical practice. Conversational seamlessly integrates with your preferred scheduling programs and doesn’t try to sell you an unfamiliar program you’re not used to.</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <img src="images/icon-stopwatch.png" class="img-fluid d-block ml-md-auto mb-3" alt="" />
                </div>
                <div class="col-md-8">
                  <h3>Better manage your time</h3>
                  <p>You will save time and better manage your in-house employees when you opt for specialized medical answering services. By enabling you to take the time you and your staff need to work on your highest priority tasks, our virtual receptionists help you manage your business and time more efficiently.</p>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
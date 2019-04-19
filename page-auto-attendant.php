<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
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

      <section class="industries-callout">
        <div class="row">
          <div class="col-md-3">
            <?php
              $alt_content_icon_id = get_post_meta($page_id, 'alt_content_icon', true);
              $alt_content_icon = wp_get_attachment_image_src($alt_content_icon_id, 'full');
              $alt_content_icon_alt = get_post_meta($alt_content_icon_id, '_wp_attachment_image_src', true);
            ?>
            <img src="<?php echo esc_url($alt_content_icon[0]); ?>" class="callout-icon img-fluid d-block mx-md-auto mb-3" alt="<?php echo esc_attr($alt_content_icon_alt); ?>" />
          </div>
          <div class="col-md-9">
            <div class="industries-callout-main">
              <h2><?php echo esc_html(get_post_meta($page_id, 'alt_content_title', true)); ?></h2>
              <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'alt_content_content', true))); ?>
            </div>
          </div>
        </div>
      </section>
      <div class="page-body">
        <section class="auto-attendant-pricing">
          <header class="page-header">
            <h1 style="margin-top:40px; font-size:66px;">Pricing</h1>
            <hr />
          </header>
          <div class="auto-attendant-pricing-content">
            <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'pricing_content', true))); ?>
          </div>
        </section>
      </div>
    </article>
  </div>
</main>
<?php get_footer(); 
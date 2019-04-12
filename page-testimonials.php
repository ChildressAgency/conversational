<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container_fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>

      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>

        <?php
          $get_started_btn = get_post_meta($page_id, 'get_started_btn_link', true);
          if($get_started_btn){
            $get_started_btn_style = get_post_meta($page_id, 'get_started_btn_style', true)

            echo '<a href="' . esc_url($get_started_btn['url']) . '" class="btn-main ' . esc_attr($get_started_btn_style) . '">' . esc_html($get_started_btn['title']) . '</a>';
          }
        ?>

        <div class="embed-responsive embed-responsive-16by9">
          <?php echo conversational_esc_iframe(get_post_meta($page_id, 'testimonials_iframe', true)); ?>
        </div>

        <section id="team-located">
          <div class="row">
            <div class="col-sm-5">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/globe.png" class="img-fluid d-block mx-auto" alt="Globe with North America highlighted" />
            </div>
            <div class="col-sm-7">
              <div class="team-located__content">
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'team_located_section_content', true))); ?>
              </div>
            </div>
          </div>
        </section>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
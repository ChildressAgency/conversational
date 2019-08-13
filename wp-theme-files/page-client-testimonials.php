<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container_fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>

        <div class="embed-responsive embed-responsive-16by9" style="min-height:800px;">
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
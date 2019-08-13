<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main" class="careers-page">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>
      </div>
      
      <section class="careers-callout">
        <div class="careers-callout-main">
          <h2>Benefits to Working at <span>Conversational</span></h2>
          <hr />
          <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'alt_content', true))); ?>
        </div>
      </section>
    </article>
  </div>
</main>

<section id="ready-to-join">
  <div class="container">
    <article>
      <header>
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'ready_to_join_intro', true))); ?>
      </header>
      <div class="row">
        <div class="col-lg-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-fluid d-block mx-auto" alt="Conversational Logo" />
        </div>
        <div class="col-lg-8">
          <div class="apply-online">
            <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'ready_to_join_content', true))); ?>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
<?php get_footer();
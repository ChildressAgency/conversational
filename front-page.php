<?php get_header(); ?>
  <?php $page_id = get_the_ID(); ?>
  <section id="hp-intro">
    <div class="container-fluid">
      <article class="standard-page">
        <header class="page-header">
          <?php echo wp_kses_post(get_post_meta($page_id, 'home_page_intro', true)); ?>
        </header>
      </article>
    </div>
  </section>

  <?php get_template_part('partials/home-section', 'features'); ?>

  <?php get_template_part('partials/home-section', 'growth'); ?>

  <?php get_template_part('partials/home-section', 'pricing'); ?>

  <?php get_template_part('partials/home-section', 'boost'); ?>

<?php get_footer();
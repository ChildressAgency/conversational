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

  <?php 
    get_template_part('partials/home-section', 'features');

    get_template_part('partials/home-section', 'growth');

    get_template_part('partials/home-section', 'pricing');

    get_template_part('partials/home-section', 'boost');

    get_template_part('partials/home-section', 'testimonials');

    get_template_part('partials/home-section', 'howitworks');

    get_template_part('partials/home-section', 'app');

    get_template_part('partials/home-section', 'getstarted');
  ?>

<?php get_footer();
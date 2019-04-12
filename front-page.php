<?php get_header(); ?>
  <?php $page_id = get_the_ID(); ?>
  <section id="hp-intro">
    <div class="container-fluid">
      <article class="standard-page">
        <?php get_template_part('partials/page', 'intro'); ?>
      </article>
    </div>
  </section>

  <?php 
    get_template_part('partials/home-section', 'features');

    get_template_part('partials/home-section', 'growth');

    get_template_part('partials/section', 'pricing');

    get_template_part('partials/home-section', 'boost');

    get_template_part('partials/home-section', 'testimonials');

    get_template_part('partials/home-section', 'howitworks');

    get_template_part('partials/home-section', 'app');

    get_template_part('partials/section', 'getstarted');
  ?>

<?php get_footer();
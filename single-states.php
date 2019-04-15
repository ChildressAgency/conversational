<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>

        <?php
          $testimonials_iframe = get_post_meta($page_id, 'testimonials_iframe', true);
          if($testimonials_iframe): ?>
            <h1 class="reviews-title"><?php echo esc_html(get_the_title()); ?> answering service reviews</h1>
            <div class="embed-responsive embed-responsive-16by9" style="min-height:800px;">
              <?php echo conversational_esc_iframe($testimonials_iframe); ?>
            </div>
        <?php endif ?>
      </div>
    </article>
  </div>
</main>
<?php get_footer(); 
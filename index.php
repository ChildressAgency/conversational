<?php get_header(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php if(have_posts()): ?>

        <?php if($wp_query->post_count > 1): ?>

          <?php while(have_posts()): the_post(); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          <?php endwhile; ?>

        <?php else: ?>

          <?php get_template_part('partials', 'page-intro'); ?>

          <div class="page-body">
            <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'page_content', true)); ?>
          </div>
        <?php endif; ?>

      <?php else: ?>

        <p><?php echo esc_html__('Sorry, the page could not be found.', 'conversational'); ?></p>

      <?php endif; ?>
    </article>
  </div>
</main>
<?php get_footer();
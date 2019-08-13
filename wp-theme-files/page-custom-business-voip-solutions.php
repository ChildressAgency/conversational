<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>
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
    </article>
  </div>
</main>
<?php get_footer();
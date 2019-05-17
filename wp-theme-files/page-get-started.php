<?php acf_form_head(); ?>
<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<?php
  $class = '';
  if(is_page('privacy-policy')){
    $class = 'stylized-headers';
  }
?>
<main id="main" class="<?php echo $class; ?>">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
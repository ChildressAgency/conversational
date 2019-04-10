<?php
/**
 * page intro header for standard page templates
 */
?>

<header class="page-header">
  <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'page_intro', true)); ?>
</header>
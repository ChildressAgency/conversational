<?php $page_id = get_the_ID(); ?>
<section id="get-started">
  <div class="container">
    <article>
      <header>
        <?php echo wp_kses_post(get_post_meta($page_id, 'get_started_section_intro', true)); ?>
      </header>
      <?php echo wp_kses_post(get_post_meta($page_id, 'get_started_section_content', true)); ?>

      <?php
        $get_started_btn = get_post_meta($page_id, 'get_started_section_button_link', true);
        $get_started_btn_style = get_post_meta($page_id, 'get_started_section_button_style', true);
      ?>
      <a href="<?php echo esc_url($get_started_btn['url']); ?>" class="btn-main <?php echo esc_attr($get_started_btn_style); ?>"><?php echo esc_html($get_started_btn['title']); ?></a>
    </article>
  </div>
</section>

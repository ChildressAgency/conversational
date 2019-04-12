<?php $page_id = get_the_ID(); ?>
<section id="how-it-works">
  <div class="container">
    <article>
      <header>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/headphones-top.png" class="img-fuild mx-auto" alt="" />
        <h2><?php echo esc_html__('How it Works', 'conversational'); ?></h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/headphone-bottom.png" class="img-fluid mx-auto" alt="" />
        <p><?php echo esc_html(get_post_meta($page_id, 'how_it_works_section_intro', true)); ?></p>
      </header>
      <?php 
        echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'how_it_works_section_content', true)));

        $howitworks_btn = get_post_meta($page_id, 'how_it_works_section_button_link', true);
        $howitworks_btn_style = get_post_meta($page_id, 'how_it_works_section_button_style', true);
      ?>
      <a href="<?php echo esc_url($howitworks_btn['url']); ?>" class="btn-main <?php echo esc_attr($howitworks_btn_style); ?>"><?php echo esc_html($howitworks_btn['title']); ?></a>
    </article>
  </div>
</section>

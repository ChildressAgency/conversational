<?php get_header(); ?>
<main id="main" class="blog">
  <div class="container-fluid">
    <div class="search float-right">
      <?php get_search_form(); ?>
    </div>
    <div class="clearfix"></div>
    <?php
      $cur_cat = get_queried_object();
      $cats = get_categories(array('orderby' => 'name', 'order' => 'ASC'));
      if(!empty($cats)){
        echo '<nav id="cat-nav" class="nav nav-pills">';
        foreach($cats as $cat){
          $active = '';
          if($cur_cat->name == $cat->name){ $active = ' active'; }

          echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '" class="nav-link' . $active . '">' . esc_html($cat->name) . '</a>';
        }
        echo '</nav>';
      }
    ?>
    
    <div class="blog-loop">
      <?php if(have_posts()): ?>
        <div class="post-grid">
          <div class="grid-sizer col-12 col-sm-6 col-lg-4"></div>
          <?php while(have_posts()): the_post(); ?>
            <div class="grid-item col-12 col-sm-6 col-lg-4">
              <a href="<?php echo esc_url(get_permalink()); ?>" class="grid-item-content">
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>

                <div class="post-img" style="background-image:url(<?php echo esc_url($featured_img_url); ?>);"></div>
                <h3><?php the_title(); ?></h3>
                <p class="post-date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_the_date('F j, Y'); ?></time></p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <p><?php echo esc_html__('Sorry, no posts were found.', 'conversational'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer();
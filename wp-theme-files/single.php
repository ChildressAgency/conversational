<?php get_header(); ?>
<main id="main" class="blog">
  <div class="container-fluid">
    <div class="search float-right">
      <?php get_search_form(); ?>
    </div>
    <div class="clearfix"></div>
    <?php
      $cur_cats = get_the_category();
      $cur_cat = $cur_cats[0];
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
    
    <article class="blog-post">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <header class="post-header">
          <h2><?php the_title(); ?></h2>
          <p class="post-date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_the_date('F j, Y'); ?></time></p>
        </header>
        <div class="post-content">
          <?php the_content(); ?>
        </div>

        <?php get_the_tag_list('<div class="tags">', ', ', '</div>'); ?>
      <?php endwhile; else: ?>
        <p><?php echo esc_html__('Sorry, that post could not be found.', 'conversational'); ?></p>
      <?php endif; ?>
    </article>

    <div class="post-nav d-flex flex-wrap">
      <hr />
      <a href="<?php echo esc_url(home_url('blog')); ?>" class="post-back">&lt; <?php echo esc_html__('Back', 'conversational'); ?></a>
      <div class="post-pagination ml-auto">
        <?php 
          $prev_post = get_previous_post();
          $next_post = get_next_post();

          if(!empty($prev_post)){
            echo '<a href="' . esc_url($prev_post->guid) . '" class="post-prev">' . esc_html__('Previous Post', 'conversational') . '</a>';
          }

          if(!empty($prev_post) && !empty($next_post)){
            echo '<span>&nbsp;|&nbsp;</span>';
          }

          if(!empty($next_post)){
            echo '<a href="' . esc_url($next_post->guid) . '" class="post-next">' . esc_html__('Next Post', 'conversational') . '</a>';
          }
        ?>
      </div>
    </div>

    <?php
      $related_cat_posts = new WP_Query(array(
        'cat' => $cur_cat->term_id,
        'posts_per_page' => 4
      ));

      if($related_cat_posts->have_posts()): ?>
        <div class="related-cat-posts">
          <h2>Related <?php echo $cur_cat->name; ?> Posts</h2>
          <ol>
            <?php while($related_cat_posts->have_posts()): $related_cat_posts->the_post(); ?>
              <li>
                <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ol>
        </div>
    <?php endif; ?>
    <?php dynamic_sidebar('conversational_subscribe');?>
  </div>
</main>
<?php get_footer();
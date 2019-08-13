<?php get_header(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <header class="page-header">
        <div class="search">
          <?php get_search_form(); ?>
        </div>
        <h2><?php printf(esc_html__('Showing results for "%s"', 'conversational'), get_search_query()); ?></h2>
      </header>
      <div class="page-body">
        <?php 
          if(have_posts()){
            while(have_posts()){
              the_post();
              echo '<h3><a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a></h3>';
              the_excerpt();
            }
          }
          else{
            echo '<p>' . esc_html__('Sorry, nothing was found.', 'conversational') . '</p>';
          }
        ?>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
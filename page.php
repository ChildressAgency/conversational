<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>

      <div class="page-body">
        <?php 
          if(have_posts()){
            while(have_posts()){
              the_post();
              the_content();
            }
          }
        ?>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
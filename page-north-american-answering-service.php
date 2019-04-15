<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?Php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <div class="industries-main">
          <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'page_content', true))); ?>
        </div>
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

      <section class="state-listing">
        <div class="page-body">
          <h2><?php echo esc_html(get_post_meta($page_id, 'state_listing_title', true)); ?></h2>
          <hr />
          <p><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'state_listing_intro', true))); ?></p>
          <?php
            $usa = get_term_by('slug', 'usa', 'countries');
            $usa_id = $usa->term_id;
            $usa_states = new WP_Query(array(
              'post_type' => 'states',
              'posts_per_page' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'countries',
                  'field' => 'term_id',
                  'terms' => $usa_id
                )
              ),
              'orderby' => 'title',
              'order' => 'ASC'
            ));
            if($usa_states->have_posts()): ?>
              <h4>USA</h4>
              <ul>
                <?php while($usa_states->have_posts()): $usa_states->the_post(); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
              </ul>
          <?php endif; wp_reset_postdata(); ?>
          <?php
            $countries = get_terms(array('taxonomy' => 'countries', 'exclude' => $usa_id));
            if($countries):
              foreach($countries as $country):
                $states = new WP_Query(array(
                  'post_type' => 'states',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'countries',
                      'field' => 'term_id',
                      'terms' => $country->term_id
                    )
                  ),
                  'orderby' => 'title',
                  'order' => 'ASC'
                ));
                if($states->have_posts()) : ?>
                  <h4><?php echo esc_html($country->name); ?></h4>
                  <ul>
                    <?php while($states->have_posts()): $states->the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                  </ul>
              <?php endif; wp_reset_postdata(); ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </section>
    </article>
  </div>
</main>
<?php get_footer();
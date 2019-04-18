<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <section id="call-forwarding" class="accordion">
          <div class="card">
            <div id="forwarding-header-1" class="card-header">
              <h3>
                <a href="#forwarding-1" id="landlines" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="forwarding-1">
                  Landlines
                  <i class="fas fa-chevron-up"></i>
                </a>
              </h3>
            </div>
            <div id="forwarding-1" class="collapse" aria-labelledby="forwarding-header-1" data-parent="#call-forwarding">
              <div class="card-body">
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'landlines_content', true))); ?>
              </div>
            </div>
          </div>

          <div class="card">
            <div id="forwarding-header-2" class="card-header">
              <h3>
                <a href="#forwarding-2" id="mobile-carriers" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="forwarding-2">
                  Mobile Carriers
                  <i class="fas fa-chevron-up"></i>
                </a>
              </h3>
            </div>
            <div id="forwarding-2" class="collapse" aria-labelledby="forwarding-header-2" data-parent="#call-forwarding">
              <div class="card-body">
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'mobile_carriers_content', true))); ?>
              </div>
            </div>
          </div>

          <div class="card">
            <div id="forwarding-header-3" class="card-header">
              <h3>
                <a href="#forwarding-3" id="voip" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="forwarding-3">
                  VOIP
                  <i class="fas fa-chevron-up"></i>
                </a>
              </h3>
            </div>
            <div id="forwarding-3" class="collapse" aria-labelledby="forwarding-header-3" data-parent="#call-forwarding">
              <div class="card-body">
                <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'voip_content', true))); ?>
              </div>
            </div>
          </div>
        </section>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
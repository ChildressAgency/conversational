<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>
      <div class="page-body">
        <?php
          $faqs = get_post_meta($page_id, 'faqs', true);

          if($faqs): ?>
            <section id="faqs" class="accordion">
              <?php for($i = 0; $i < $faqs; $i++): ?>
                <div class="card">
                  <div id="question-<?php echo $i; ?>" class="card-header">
                    <h3>
                      <a href="#answer-<?php echo $i; ?>" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="answer-<?php echo $i; ?>">
                        <span class="expander"></span>
                        <?php echo esc_html(get_post_meta($page_id, 'faqs_' . $i . '_question', true)); ?>
                      </a>
                    </h3>
                  </div>
                  <div id="answer-<?php echo $i; ?>" class="collapse" aria-labelledby="question-<?php echo $i; ?>" data-parent="#faqs">
                    <div class="card-body">
                      <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'faqs_' . $i . '_answer', true))); ?>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>
            </section>
        <?php endif; ?>

        <div class="still-have-questions">
          <h2><?php echo esc_html__('Still have questions?', 'conversational'); ?></h2>
          <p><a href="<?php echo esc_url(home_url('contact-us')); ?>"><?php echo esc_html__('Click here to contact us.', 'conversational'); ?></a> <?php echo esc_html__('We are always here to help!', 'conversational'); ?></p>
        </div>
      </div>
    </article>
  </div>
</main>
<?php get_footer();
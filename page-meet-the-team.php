<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials', 'page-intro'); ?>
      <div class="page-body">
        <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'meet_the_team_intro', true))); ?>
      </div>
    </article>

    <section id="team-members">
      <?php
        $team_members = get_post_meta($page_id, 'team_members', true);
        if($team_members):
          for($i = 0; $i < $team_members; $i++): ?>
            <div class="team-member">
              <div class="row">
                <div class="col-sm-5">
                  <?php 
                    $team_member_img_url = get_stylesheet_directory_uri() . '/images/team-placeholder.png';

                    $team_member_img_id = get_post_meta($page_id, 'team_members_' . $i . '_team_member_image', true);
                    if($team_member_img_id){
                      $team_member_img = wp_get_attachment_image_src($team_member_img_id, 'full');
                      $team_member_img_url = $team_member_img[0];
                    }

                    $team_member_name = get_post_meta($page_id, 'team_members_' . $i . '_team_member_name', true);
                    $team_member_names = explode(' ', $team_member_name);
                    $team_member_first_name = $team_member_names[0];
                    $team_member_title = get_post_meta($page_id, 'team_members_' . $i . '_team_member_title', true);
                  ?>
                  <img src="<?php echo esc_url($team_member_img_url); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($team_member_name); ?>" />
                </div>
                <div class="col-sm-7">
                  <article class="team-member-info">
                    <header>
                      <h2><?php echo esc_html($team_member_name); ?> <small><?php echo esc_html($team_member_title); ?></small></h2>
                    </header>
                    <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'team_members_' . $i . '_team_member_bio', true))); ?>

                    <?php 
                      $team_member_quote = get_post_meta($page_id, 'team_members_' . $i . '_team_member_quote', true);
                      if($team_member_quote): ?>
                        <div class="team-quote">
                          <h4><?php printf(esc_html__('%s\'s favorite quote', 'conversational'), $team_member_first_name); ?></h4>
                          <p><?php echo esc_html($team_member_quote); ?></p>
                          <cite>&mdash; <?php echo esc_html($page_id, 'team_members_' . $i . '_quote_author', true)); ?></cite>
                        </div>
                    <?php endif; ?>
                  </article>
                </div>
              </div>
            </div>
        <?php endfor; ?>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer();
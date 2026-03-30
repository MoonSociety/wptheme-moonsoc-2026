<?php
/**
 * Homepage Template
 *
 * @package MoonSociety
 */

get_header();
?>

<!-- HERO SECTION -->
<section class="hero hero-lunar" style="--hero-bg-image: url('<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Lunar-Header-2160x380.jpg');">
  <div class="site-container">
    <div class="hero-content">
      <h1 class="display-1"><?php esc_html_e('The Moon Is No Longer a Dream.', 'moonsociety'); ?></h1>
      <p class="hero-subtitle">
        <?php esc_html_e("NASA's Ignition initiative commits $20 billion to a permanent lunar base. The Moon Society has championed this vision for over 25 years. This is the moment.", 'moonsociety'); ?>
      </p>
      <div class="hero-actions">
        <a href="https://moonsociety.wildapricot.org/join" class="btn btn-primary" target="_blank" rel="noopener">
          <?php esc_html_e('Join the Moon Society', 'moonsociety'); ?>
        </a>
        <a href="https://ldc.moonsociety.org" class="btn btn-secondary" target="_blank" rel="noopener">
          <?php esc_html_e('LDC 2026 — July 17-18', 'moonsociety'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- WHY NOW SECTION -->
<section class="section section-darker">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Why Now', 'moonsociety'); ?></h2>
      <p class="section-subtitle">
        <?php esc_html_e('March 2026 changed everything. The United States has committed to a permanent, continuously crewed base at the lunar south pole.', 'moonsociety'); ?>
      </p>
    </div>

    <div class="card-grid">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Permanent Lunar Base', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('$20 billion over seven years. Three phases. A continuously crewed outpost at the south pole — not visits, but a permanent human presence.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Accelerated Missions', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Crewed landings every six months. Up to 30 robotic CLPS deliveries starting 2027. The cadence is real.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Surface Over Gateway', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e("Gateway is paused. Resources redirected to the surface. This aligns with what the Moon Society has advocated for over two decades.", 'moonsociety'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LDC 2026 SECTION -->
<section class="section section-dark">
  <div class="site-container">
    <div class="cta-banner">
      <h2><?php esc_html_e('Lunar Development Conference 2026', 'moonsociety'); ?></h2>
      <p>
        <?php esc_html_e('July 17-18, 2026 — Virtual via Zoom. Researchers, engineers, entrepreneurs, and advocates shaping the future of lunar settlement.', 'moonsociety'); ?>
      </p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="https://ldc.moonsociety.org" class="btn btn-primary" target="_blank" rel="noopener">
          <?php esc_html_e('Visit LDC 2026 Website', 'moonsociety'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- LATEST NEWS — Block Wall -->
<section class="section section-darker">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Latest News', 'moonsociety'); ?></h2>
    </div>

    <div class="card-grid">
      <?php
      $news_query = new WP_Query([
        'posts_per_page' => 6,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      ]);

      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) :
          $news_query->the_post();
          get_template_part('template-parts/content', 'card');
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p class="text-muted"><?php esc_html_e('No posts yet. Check back soon.', 'moonsociety'); ?></p>
      <?php endif; ?>
    </div>

    <div style="text-align: center; margin-top: var(--space-6);">
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="btn btn-ghost">
        <?php esc_html_e('View All News', 'moonsociety'); ?> &rarr;
      </a>
    </div>
  </div>
</section>

<!-- GET INVOLVED SECTION -->
<section class="section section-dark">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Get Involved', 'moonsociety'); ?></h2>
      <p class="section-subtitle">
        <?php esc_html_e('The Moon Society is a volunteer-driven organization. There are many ways to contribute to the future of lunar development.', 'moonsociety'); ?>
      </p>
    </div>

    <div class="card-grid">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Become a Member', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Join the community that has been making the case for a permanent human presence on the Moon since 2000.', 'moonsociety'); ?>
          </p>
          <div style="margin-top: var(--space-4);">
            <a href="https://moonsociety.wildapricot.org/join" class="btn btn-primary" target="_blank" rel="noopener"><?php esc_html_e('Join', 'moonsociety'); ?></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Volunteer', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('We need web developers, designers, writers, and marketing volunteers. Contribute your skills to the mission.', 'moonsociety'); ?>
          </p>
          <div style="margin-top: var(--space-4);">
            <a href="<?php echo esc_url(home_url('/get-involved/volunteer/')); ?>" class="btn btn-secondary"><?php esc_html_e('Volunteer', 'moonsociety'); ?></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Donate', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Support the Moon Society\'s educational programs, conferences, and advocacy work with a tax-deductible donation.', 'moonsociety'); ?>
          </p>
          <div style="margin-top: var(--space-4);">
            <a href="<?php echo esc_url(home_url('/get-involved/donate/')); ?>" class="btn btn-secondary"><?php esc_html_e('Donate', 'moonsociety'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

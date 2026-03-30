<?php
/**
 * Template Name: Volunteer
 * Template Post Type: page
 *
 * Placeholder volunteer page with CTAs until the full volunteer portal is built.
 *
 * @package MoonSociety
 */

get_header();
?>

<section class="hero" style="min-height: 40vh;">
  <div class="site-container">
    <div class="hero-content">
      <h1 class="display-2"><?php esc_html_e('Volunteer with the Moon Society', 'moonsociety'); ?></h1>
      <p class="hero-subtitle">
        <?php esc_html_e('The Moon Society is volunteer-driven. We need skilled people who believe in the future of lunar development to help us build it.', 'moonsociety'); ?>
      </p>
    </div>
  </div>
</section>

<section class="section section-darker">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Current Volunteer Needs', 'moonsociety'); ?></h2>
      <p class="section-subtitle">
        <?php esc_html_e('We are actively looking for volunteers in the following areas. All roles are remote and flexible.', 'moonsociety'); ?>
      </p>
    </div>

    <div class="card-grid">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Web Development', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('WordPress theme development, plugin configuration, and site maintenance. Experience with PHP, CSS, and the block editor.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Web Design', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Visual design for web pages, graphics, and promotional materials. Familiarity with the Moon Society brand guide is a plus.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Growth Marketing', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Help grow the Moon Society\'s reach through SEO, email campaigns, partnerships, and community engagement strategies.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Social Media Marketing', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Content creation and community management across Facebook, LinkedIn, X/Twitter, and YouTube. Consistent posting and audience engagement.', 'moonsociety'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="site-container">
    <div class="cta-banner">
      <h2><?php esc_html_e('Ready to Contribute?', 'moonsociety'); ?></h2>
      <p>
        <?php esc_html_e("We're building a dedicated volunteer portal. In the meantime, reach out to us directly to get started.", 'moonsociety'); ?>
      </p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="mailto:volunteer@moonsociety.org" class="btn btn-primary">
          <?php esc_html_e('Email Us to Volunteer', 'moonsociety'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/get-involved/join/')); ?>" class="btn btn-secondary">
          <?php esc_html_e('Become a Member', 'moonsociety'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section section-darker">
  <div class="site-container container-narrow">
    <div class="section-header">
      <h2><?php esc_html_e('What to Expect', 'moonsociety'); ?></h2>
    </div>
    <div class="entry-content">
      <p><?php esc_html_e('Moon Society volunteers typically contribute a few hours per week on a flexible schedule. All work is remote. You will collaborate with a small, dedicated team of people who share your interest in lunar development.', 'moonsociety'); ?></p>
      <p><?php esc_html_e('When you reach out, let us know which role interests you, a brief summary of your relevant experience, and your general availability. We will get back to you within a week.', 'moonsociety'); ?></p>
    </div>
  </div>
</section>

<?php get_footer(); ?>

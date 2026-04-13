<?php
/**
 * Template Name: Membership
 * Template Post Type: page
 *
 * Membership page with embedded WildApricot membership application widget.
 *
 * @package MoonSociety
 */

get_header();
?>

<section class="hero" style="min-height: 40vh;">
  <div class="site-container">
    <div class="hero-content">
      <h1 class="display-2"><?php esc_html_e('Join the Moon Society', 'moonsociety'); ?></h1>
      <p class="hero-subtitle">
        <?php esc_html_e('Be part of the organization that has advocated for a permanent human presence on the Moon for over 25 years.', 'moonsociety'); ?>
      </p>
      <div class="hero-actions">
        <a href="#membership-widget" class="btn btn-primary">
          <?php esc_html_e('Apply Now', 'moonsociety'); ?>
        </a>
        <a href="https://join.moonsociety.org/Sys/Login" class="btn btn-secondary" target="_blank" rel="noopener">
          <?php esc_html_e('Members Login', 'moonsociety'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section section-darker">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Why Join?', 'moonsociety'); ?></h2>
    </div>

    <div class="card-grid">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Shape Lunar Policy', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Add your voice to the organization that has been making the case for surface-first lunar development since before it was policy.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Community & Events', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Connect with researchers, engineers, entrepreneurs, and advocates at the Lunar Development Conference and throughout the year.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e("Moon Miners' Manifesto", 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e("Access the full archive of Moon Miners' Manifesto, the longest-running publication dedicated to lunar settlement.", 'moonsociety'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="membership-widget" class="section section-dark wa-widget-section">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Apply for Membership', 'moonsociety'); ?></h2>
      <p class="section-subtitle">
        <?php esc_html_e('Choose your membership tier and complete the application below.', 'moonsociety'); ?>
      </p>
    </div>

    <noscript>
      <div class="wa-widget-noscript">
        <p><?php esc_html_e('The membership application requires JavaScript. Please enable JavaScript or apply directly on WildApricot.', 'moonsociety'); ?></p>
        <a href="https://join.moonsociety.org" class="btn btn-primary" target="_blank" rel="noopener">
          <?php esc_html_e('Join on WildApricot', 'moonsociety'); ?>
        </a>
      </div>
    </noscript>

    <div class="wa-widget-frame">
      <iframe
        src="https://join.moonsociety.org/widget/"
        title="<?php esc_attr_e('Moon Society Membership Application', 'moonsociety'); ?>"
        onload="tryToEnableWACookies('https://join.moonsociety.org');"
        frameborder="no"
        loading="lazy">
      </iframe>
    </div>
    <script src="https://join.moonsociety.org/Common/EnableCookies.js"></script>

    <div class="wa-widget-fallback" aria-live="polite">
      <p>
        <?php esc_html_e('Having trouble with the form above?', 'moonsociety'); ?>
        <a href="https://join.moonsociety.org" target="_blank" rel="noopener">
          <?php esc_html_e('Complete your membership on WildApricot directly', 'moonsociety'); ?>
        </a>
      </p>
    </div>
  </div>
</section>

<section class="section section-darker">
  <div class="site-container">
    <div class="cta-banner">
      <h2><?php esc_html_e('This Is the Moment', 'moonsociety'); ?></h2>
      <p>
        <?php esc_html_e("NASA's Ignition initiative has made a permanent lunar base official policy. The Moon Society has been preparing for this moment since 2000. Join us.", 'moonsociety'); ?>
      </p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="#membership-widget" class="btn btn-primary">
          <?php esc_html_e('Apply Now', 'moonsociety'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

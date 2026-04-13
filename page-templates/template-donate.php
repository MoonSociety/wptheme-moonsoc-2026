<?php
/**
 * Template Name: Donate
 * Template Post Type: page
 *
 * Donation page with embedded WildApricot donate widget.
 *
 * @package MoonSociety
 */

get_header();
?>

<section class="hero" style="min-height: 30vh;">
  <div class="site-container">
    <div class="hero-content">
      <h1 class="display-2"><?php esc_html_e('Support the Moon Society', 'moonsociety'); ?></h1>
      <p class="hero-subtitle">
        <?php esc_html_e('Your tax-deductible donation supports conferences, educational programs, publications, and advocacy for permanent lunar settlement.', 'moonsociety'); ?>
      </p>
      <div class="hero-actions">
        <a href="#donate-widget" class="btn btn-primary">
          <?php esc_html_e('Donate Now', 'moonsociety'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section section-darker">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Your Donation Supports', 'moonsociety'); ?></h2>
    </div>

    <div class="card-grid">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Lunar Development Conference', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('The annual conference bringing together researchers, engineers, and advocates to advance the case for lunar settlement.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Education & Outreach', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e('Public education programs, student engagement, and community building around lunar development.', 'moonsociety'); ?>
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php esc_html_e('Publications & Advocacy', 'moonsociety'); ?></h3>
          <p class="card-excerpt">
            <?php esc_html_e("Moon Miners' Manifesto, Lunarpedia, and policy advocacy for surface-first lunar development.", 'moonsociety'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="donate-widget" class="section section-dark wa-widget-section">
  <div class="site-container">
    <div class="section-header">
      <h2><?php esc_html_e('Make a Donation', 'moonsociety'); ?></h2>
    </div>

    <noscript>
      <div class="wa-widget-noscript">
        <p><?php esc_html_e('The donation form requires JavaScript. Please enable JavaScript or donate directly on WildApricot.', 'moonsociety'); ?></p>
        <a href="https://join.moonsociety.org/Donate" class="btn btn-primary" target="_blank" rel="noopener">
          <?php esc_html_e('Donate on WildApricot', 'moonsociety'); ?>
        </a>
      </div>
    </noscript>

    <div class="wa-widget-frame wa-widget-frame--donate">
      <iframe
        src="https://join.moonsociety.org/widget/Donate"
        title="<?php esc_attr_e('Donate to the Moon Society', 'moonsociety'); ?>"
        onload="tryToEnableWACookies('https://join.moonsociety.org');"
        frameborder="no"
        loading="lazy">
      </iframe>
    </div>
    <script src="https://join.moonsociety.org/Common/EnableCookies.js"></script>

    <div class="wa-widget-fallback" aria-live="polite">
      <p>
        <?php esc_html_e('Having trouble with the form above?', 'moonsociety'); ?>
        <a href="https://join.moonsociety.org/Donate" target="_blank" rel="noopener">
          <?php esc_html_e('Donate on WildApricot directly', 'moonsociety'); ?>
        </a>
      </p>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<?php
/**
 * 404 Template
 *
 * @package MoonSociety
 */

get_header();
?>

<div class="section" style="min-height: 60vh; display: flex; align-items: center;">
  <div class="site-container" style="text-align: center;">
    <h1 class="display-2"><?php esc_html_e('Page Not Found', 'moonsociety'); ?></h1>
    <p class="hero-subtitle" style="margin-inline: auto;">
      <?php esc_html_e("This page doesn't exist — but the Moon does, and we're going back.", 'moonsociety'); ?>
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
      <?php esc_html_e('Return Home', 'moonsociety'); ?>
    </a>
  </div>
</div>

<?php get_footer(); ?>

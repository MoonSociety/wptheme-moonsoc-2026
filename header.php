<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
  <div class="site-container">

    <div class="site-logo">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/TMS_LOGO_THE_565x215px.png"
               alt="<?php bloginfo('name'); ?>"
               width="200" height="76">
        </a>
      <?php endif; ?>
    </div>

    <nav class="primary-nav" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'moonsociety'); ?>">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'       => false,
        'items_wrap'      => '%3$s',
        'depth'           => 2,
        'fallback_cb'     => false,
      ]);
      ?>
    </nav>

    <a href="<?php echo esc_url('https://moonsociety.wildapricot.org/join'); ?>" class="btn btn-primary header-cta" target="_blank" rel="noopener">
      <?php esc_html_e('Join Us', 'moonsociety'); ?>
    </a>

    <button class="mobile-menu-toggle"
            aria-controls="mobile-nav"
            aria-expanded="false"
            aria-label="<?php esc_attr_e('Toggle navigation menu', 'moonsociety'); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
           stroke-width="2" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
      </svg>
    </button>

  </div>
</header>

<nav id="mobile-nav" class="mobile-nav" role="navigation" aria-label="<?php esc_attr_e('Mobile Navigation', 'moonsociety'); ?>">
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container'       => false,
    'depth'           => 2,
    'fallback_cb'     => false,
  ]);
  ?>
  <div style="margin-top: var(--space-5);">
    <a href="<?php echo esc_url('https://moonsociety.wildapricot.org/join'); ?>" class="btn btn-primary" target="_blank" rel="noopener" style="width: 100%; text-align: center;">
      <?php esc_html_e('Join Us', 'moonsociety'); ?>
    </a>
  </div>
</nav>

<main id="main-content" role="main">

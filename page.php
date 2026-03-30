<?php
/**
 * Generic Page Template
 *
 * @package MoonSociety
 */

get_header();
?>

<div class="section">
  <div class="site-container">
    <?php
    while (have_posts()) :
      the_post();
    ?>
      <header class="section-header">
        <h1><?php the_title(); ?></h1>
      </header>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>

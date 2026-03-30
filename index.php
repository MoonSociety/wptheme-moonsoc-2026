<?php
/**
 * Main Template — fallback for all views.
 *
 * @package MoonSociety
 */

get_header();
?>

<div class="section">
  <div class="site-container">
    <?php if (have_posts()) : ?>

      <?php if (is_archive() || is_home()) : ?>
        <div class="section-header">
          <?php if (is_home()) : ?>
            <h1><?php esc_html_e('News', 'moonsociety'); ?></h1>
          <?php else : ?>
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description('<p class="section-subtitle">', '</p>'); ?>
          <?php endif; ?>
        </div>

        <div class="card-grid">
          <?php
          while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'card');
          endwhile;
          ?>
        </div>

        <div style="margin-top: var(--space-7);">
          <?php the_posts_pagination([
            'mid_size'  => 2,
            'prev_text' => '&larr; ' . __('Previous', 'moonsociety'),
            'next_text' => __('Next', 'moonsociety') . ' &rarr;',
          ]); ?>
        </div>

      <?php else : ?>
        <?php
        while (have_posts()) :
          the_post();
          the_content();
        endwhile;
        ?>
      <?php endif; ?>

    <?php else : ?>
      <p><?php esc_html_e('Nothing found.', 'moonsociety'); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>

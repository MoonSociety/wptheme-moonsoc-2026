<?php
/**
 * Single Post Template
 *
 * @package MoonSociety
 */

get_header();
?>

<article class="section" id="post-<?php the_ID(); ?>">
  <div class="site-container container-narrow">

    <header style="margin-bottom: var(--space-6);">
      <div class="card-meta" style="margin-bottom: var(--space-3);">
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
          <?php echo esc_html(get_the_date()); ?>
        </time>
        <?php if (get_the_category_list()) : ?>
          &middot; <?php the_category(', '); ?>
        <?php endif; ?>
      </div>
      <h1><?php the_title(); ?></h1>
    </header>

    <?php if (has_post_thumbnail()) : ?>
      <figure style="margin-bottom: var(--space-6);">
        <?php the_post_thumbnail('blog-featured', ['loading' => 'eager']); ?>
        <?php if (get_the_post_thumbnail_caption()) : ?>
          <figcaption class="text-muted" style="font-size: var(--text-xs); margin-top: var(--space-2);">
            <?php the_post_thumbnail_caption(); ?>
          </figcaption>
        <?php endif; ?>
      </figure>
    <?php endif; ?>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <footer style="margin-top: var(--space-7); padding-top: var(--space-5); border-top: 1px solid var(--border-color);">
      <?php
      the_post_navigation([
        'prev_text' => '<span class="text-muted" style="font-size: var(--text-xs);">' . __('Previous', 'moonsociety') . '</span><br>%title',
        'next_text' => '<span class="text-muted" style="font-size: var(--text-xs);">' . __('Next', 'moonsociety') . '</span><br>%title',
      ]);
      ?>
    </footer>

  </div>
</article>

<?php get_footer(); ?>

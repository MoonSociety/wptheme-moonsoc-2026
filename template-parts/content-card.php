<?php
/**
 * Template Part: Content Card
 *
 * Used in the block wall / card grid to display a single post.
 *
 * @package MoonSociety
 */
?>
<article class="card" id="post-<?php the_ID(); ?>">
  <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) : ?>
      <div class="card-image">
        <?php the_post_thumbnail('card-thumbnail', ['loading' => 'lazy']); ?>
      </div>
    <?php endif; ?>

    <div class="card-body">
      <div class="card-meta">
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
          <?php echo esc_html(get_the_date()); ?>
        </time>
      </div>
      <h3 class="card-title"><?php the_title(); ?></h3>
      <p class="card-excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
    </div>
  </a>
</article>

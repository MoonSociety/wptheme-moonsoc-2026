<!-- wp:group {"className":"section section-darker","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group section section-darker">

  <!-- wp:heading -->
  <h2>Latest Updates</h2>
  <!-- /wp:heading -->

  <!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"flex","columns":3}} -->
  <div class="wp-block-query">

    <!-- wp:post-template {"className":"card-grid"} -->

      <!-- wp:group {"className":"card","layout":{"type":"default"}} -->
      <div class="wp-block-group card">

        <!-- wp:post-featured-image {"isLink":true,"className":"card-image","aspectRatio":"3/2"} /-->

        <!-- wp:group {"className":"card-body","layout":{"type":"default"}} -->
        <div class="wp-block-group card-body">

          <!-- wp:post-date {"className":"card-meta","fontSize":"small"} /-->

          <!-- wp:post-title {"level":3,"isLink":true,"className":"card-title","fontSize":"large"} /-->

          <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25,"className":"card-excerpt"} /-->

        </div>
        <!-- /wp:group -->

      </div>
      <!-- /wp:group -->

    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
      <!-- wp:query-pagination-previous /-->
      <!-- wp:query-pagination-numbers /-->
      <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->

  </div>
  <!-- /wp:query -->

</div>
<!-- /wp:group -->

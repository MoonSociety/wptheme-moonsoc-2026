</main><!-- #main-content -->

<footer class="site-footer" role="contentinfo">
  <div class="site-container">

    <div class="footer-grid">
      <?php if (is_active_sidebar('footer-1')) : ?>
        <?php dynamic_sidebar('footer-1'); ?>
      <?php else : ?>
        <div class="footer-col">
          <h4><?php esc_html_e('About', 'moonsociety'); ?></h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>"><?php esc_html_e('About the Moon Society', 'moonsociety'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/about/leadership/')); ?>"><?php esc_html_e('Leadership', 'moonsociety'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/about/history/')); ?>"><?php esc_html_e('History', 'moonsociety'); ?></a></li>
          </ul>
        </div>
      <?php endif; ?>

      <?php if (is_active_sidebar('footer-2')) : ?>
        <?php dynamic_sidebar('footer-2'); ?>
      <?php else : ?>
        <div class="footer-col">
          <h4><?php esc_html_e('Get Involved', 'moonsociety'); ?></h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/get-involved/join/')); ?>"><?php esc_html_e('Become a Member', 'moonsociety'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/get-involved/volunteer/')); ?>"><?php esc_html_e('Volunteer', 'moonsociety'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/get-involved/donate/')); ?>"><?php esc_html_e('Donate', 'moonsociety'); ?></a></li>
            <li><a href="https://ldc.moonsociety.org" target="_blank" rel="noopener"><?php esc_html_e('LDC 2026', 'moonsociety'); ?></a></li>
          </ul>
        </div>
      <?php endif; ?>

      <?php if (is_active_sidebar('footer-3')) : ?>
        <?php dynamic_sidebar('footer-3'); ?>
      <?php else : ?>
        <div class="footer-col">
          <h4><?php esc_html_e('Resources', 'moonsociety'); ?></h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/resources/mmm/')); ?>"><?php esc_html_e("Moon Miners' Manifesto", 'moonsociety'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/resources/lunarpedia/')); ?>"><?php esc_html_e('Lunarpedia', 'moonsociety'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact', 'moonsociety'); ?></a></li>
          </ul>
        </div>
      <?php endif; ?>

      <div class="footer-col">
        <h4><?php esc_html_e('Connect', 'moonsociety'); ?></h4>
        <ul class="social-links">
          <li>
            <a href="https://www.facebook.com/MoonSociety" aria-label="<?php esc_attr_e('Facebook', 'moonsociety'); ?>" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/groups/62468/" aria-label="<?php esc_attr_e('LinkedIn', 'moonsociety'); ?>" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/MoonSociety" aria-label="<?php esc_attr_e('X / Twitter', 'moonsociety'); ?>" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/@TheMoonSociety" aria-label="<?php esc_attr_e('YouTube', 'moonsociety'); ?>" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-heritage">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/1999-Moonsocietylogo.jpg"
             alt="<?php esc_attr_e('The Moon Society — original logo, established 2000', 'moonsociety'); ?>"
             class="footer-heritage-logo"
             width="80" height="96"
             loading="lazy">
        <div>
          <p class="footer-trademark">
            <?php esc_html_e('The Moon Society and the Moon Society logo are trademarks of The Moon Society, Incorporated.', 'moonsociety'); ?>
          </p>
          <p class="footer-copyright">
            &copy; <?php echo esc_html(date('Y')); ?> <?php esc_html_e('The Moon Society. All rights reserved.', 'moonsociety'); ?>
          </p>
        </div>
      </div>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

/**
 * WildApricot Widget — Cookie Fallback Detection
 *
 * If the WA iframe fails to load due to third-party cookie blocking,
 * the fallback notice below the iframe provides a direct link.
 *
 * Strategy: The fallback message is always visible as a subtle hint.
 * We don't try to detect cookie blocking programmatically (unreliable
 * cross-browser) — instead we show a helpful note that serves double
 * duty as a "having trouble?" escape hatch.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var frames = document.querySelectorAll('.wa-widget-frame iframe');

    frames.forEach(function (iframe) {
      var fallback = iframe
        .closest('.wa-widget-section')
        ?.querySelector('.wa-widget-fallback');

      if (!fallback) return;

      // If the iframe errors out entirely (network block, CSP, etc.),
      // make the fallback more prominent
      iframe.addEventListener('error', function () {
        fallback.style.borderLeftWidth = '4px';
        fallback.style.background = 'var(--bg-elevated)';
      });
    });
  });
})();

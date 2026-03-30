/**
 * Moon Society — Navigation: mobile toggle + submenu expand/collapse.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    /* =========================================
       Mobile menu open/close
       ========================================= */
    var toggle = document.querySelector('.mobile-menu-toggle');
    var nav = document.querySelector('.mobile-nav');

    if (toggle && nav) {
      toggle.addEventListener('click', function () {
        var isOpen = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', isOpen);

        if (isOpen) {
          var firstLink = nav.querySelector('a');
          if (firstLink) firstLink.focus();
        }
      });

      // Close on Escape
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && nav.classList.contains('is-open')) {
          nav.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
          toggle.focus();
        }
      });

      // Close when clicking outside
      document.addEventListener('click', function (e) {
        if (
          nav.classList.contains('is-open') &&
          !nav.contains(e.target) &&
          !toggle.contains(e.target)
        ) {
          nav.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    }

    /* =========================================
       Mobile submenu expand/collapse toggles
       ========================================= */
    if (nav) {
      var parentItems = nav.querySelectorAll('.menu-item-has-children');

      parentItems.forEach(function (item) {
        // Create a toggle button for each parent item
        var btn = document.createElement('button');
        btn.className = 'submenu-toggle';
        btn.setAttribute('aria-expanded', 'false');
        btn.setAttribute('aria-label', 'Expand submenu');
        btn.innerHTML =
          '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" ' +
          'stroke-width="2.5" stroke="currentColor" aria-hidden="true">' +
          '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>' +
          '</svg>';

        item.appendChild(btn);

        btn.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();
          var isExpanded = item.classList.toggle('is-expanded');
          btn.setAttribute('aria-expanded', isExpanded);
          btn.setAttribute(
            'aria-label',
            isExpanded ? 'Collapse submenu' : 'Expand submenu'
          );
        });
      });
    }

    /* =========================================
       Desktop: keyboard accessibility for dropdowns
       ========================================= */
    var desktopNav = document.querySelector('.primary-nav');
    if (desktopNav) {
      // Allow Escape to close an open submenu and return focus to parent
      desktopNav.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
          var openSub = desktopNav.querySelector(
            '.menu-item-has-children:focus-within'
          );
          if (openSub) {
            var parentLink = openSub.querySelector(':scope > a');
            if (parentLink) parentLink.focus();
          }
        }
      });
    }
  });
})();

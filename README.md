# Moon Society WordPress Theme (2026)

Custom WordPress child theme for [moonsociety.org](https://www.moonsociety.org), built on [GeneratePress](https://generatepress.com). Implements the [Moon Society Unofficial Brand Guide](https://github.com/MoonSociety/unofficial-brand-guide) with a dark-mode-first design, card-grid block wall layout, and full WCAG 2.1 AA accessibility.

## Requirements

- WordPress 6.4+
- PHP 8.0+
- [GeneratePress](https://wordpress.org/themes/generatepress/) parent theme (free version)

## Installation

1. Install and activate the GeneratePress theme from Appearance > Themes.
2. Upload this folder to `wp-content/themes/` (or clone it there).
3. Activate **Moon Society** in Appearance > Themes.
4. Assign your navigation menus in Appearance > Menus:
   - **Primary Navigation** — main header menu
   - **Footer Navigation** — footer link columns
   - **Social Links** — social media icons
5. Set your homepage to a static page in Settings > Reading.

## Brand Identity

The theme implements the full Moon Society design system:

- **Colors:** Space Cadet Blue (#13294B), Gold (#FFCD00), Cerulean (#00A3E0), Near-Black (#1D252D)
- **Typography:** Orbitron (display), League Spartan (headings), Noto Sans (body), Palatino (editorial), Inconsolata (code)
- **Layout:** 1200px max width, 12-column CSS Grid, 8px spacing scale, mobile-first breakpoints
- **Components:** Fixed header with backdrop blur, hero section with lunar photo overlay, card grid (block wall), pill buttons, footer with social icons and trademark text

All design tokens are defined as CSS custom properties at `:root` in `style.css`.

## Theme Structure

```
├── style.css                  # Theme header + full brand CSS
├── functions.php              # Font loading, menus, image sizes, block patterns
├── theme.json                 # Block editor design tokens
├── header.php                 # Fixed nav, logo, "Join Us" CTA, mobile menu
├── footer.php                 # Footer grid, social links, 1999 heritage logo, trademark
├── front-page.php             # Homepage: hero, Why Now, LDC banner, news wall, Get Involved
├── index.php                  # Blog/archive listing with card grid
├── page.php                   # Generic page template
├── single.php                 # Single post template
├── 404.php                    # 404 page
├── template-parts/
│   └── content-card.php       # Reusable post card for the block wall
├── page-templates/
│   ├── template-volunteer.php # Volunteer placeholder page
│   └── template-membership.php# Membership page (links to WildApricot)
├── block-patterns/
│   ├── card-grid.php          # Query Loop block pattern
│   ├── hero.php               # Cover block pattern
│   └── cta-banner.php         # CTA banner block pattern
├── assets/
│   ├── js/navigation.js       # Mobile menu + dropdown submenu handling
│   ├── images/                # Logo files, hero background, heritage logo
│   └── fonts/                 # Self-hosted webfonts (optional)
└── theme.json                 # Block editor color palette, fonts, spacing
```

## Page Templates

- **Volunteer** — Select "Volunteer" template when editing a page. Placeholder with role cards and email CTA, pending full volunteer portal.
- **Membership** — Select "Membership" template. Value proposition cards linking to WildApricot for sign-up and member login.

## Block Patterns

Three brand-compliant block patterns are registered under the "Moon Society" category in the block editor:

- **Card Grid — Block Wall** — Responsive post grid using the Query Loop block
- **Hero Section** — Full-width cover block with display headline and CTA buttons
- **CTA Banner** — Centered call-to-action with heading, text, and buttons

## External Links

- **LDC 2026** links point to [ldc.moonsociety.org](https://ldc.moonsociety.org) (separate site)
- **Join Us** links point to [WildApricot](https://moonsociety.wildapricot.org/join) for membership management

## Fonts

Loaded via Google Fonts CDN:

- [Orbitron](https://fonts.google.com/specimen/Orbitron) — hero/display headlines
- [League Spartan](https://fonts.google.com/specimen/League+Spartan) — section headings, nav, buttons
- [Noto Sans](https://fonts.google.com/specimen/Noto+Sans) — body text
- [Inconsolata](https://fonts.google.com/specimen/Inconsolata) — code/technical content

## Accessibility

- Skip-to-content link on every page
- Keyboard-navigable menus with focus-visible states
- WCAG AA color contrast (verified against brand guide pairing matrix)
- Logical heading hierarchy, form labels, image alt text
- Minimum 14px font size, 1.5+ body line height

## License

[MIT](LICENSE) — Copyright (c) 2026 The Moon Society

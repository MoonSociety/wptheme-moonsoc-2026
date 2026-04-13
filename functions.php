<?php
/**
 * Moon Society Theme Functions
 *
 * Child theme of GeneratePress implementing the Moon Society brand guide.
 *
 * @package MoonSociety
 */

defined('ABSPATH') || exit;

/**
 * Enqueue Google Fonts.
 */
function moonsociety_enqueue_fonts() {
    // Preconnect hints
    add_filter('wp_resource_hints', function ($urls, $relation_type) {
        if ($relation_type === 'preconnect') {
            $urls[] = [
                'href' => 'https://fonts.googleapis.com',
                'crossorigin' => false,
            ];
            $urls[] = [
                'href' => 'https://fonts.gstatic.com',
                'crossorigin' => 'anonymous',
            ];
        }
        return $urls;
    }, 10, 2);

    // Google Fonts: Syne, League Spartan, Noto Sans, Inconsolata
    wp_enqueue_style(
        'moonsociety-google-fonts',
        'https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Syne:wght@400;600;700;800&family=League+Spartan:wght@400;500;600;700;800;900&family=Noto+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Inconsolata:wght@400;700&display=swap',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'moonsociety_enqueue_fonts', 5);

/**
 * Enqueue child theme styles after GeneratePress.
 *
 * GeneratePress inlines its CSS with the handle 'generate-style'.
 * We depend on that handle so our child stylesheet loads after it.
 */
function moonsociety_enqueue_styles() {
    // Moon Society child theme style — loads after GeneratePress inline CSS
    wp_enqueue_style(
        'moonsociety-style',
        get_stylesheet_uri(),
        ['generate-style'],
        wp_get_theme()->get('Version')
    );

    // Navigation JS
    wp_enqueue_script(
        'moonsociety-navigation',
        get_stylesheet_directory_uri() . '/assets/js/navigation.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'moonsociety_enqueue_styles', 20);

/**
 * Enqueue WildApricot widget assets on membership/donate pages only.
 */
function moonsociety_enqueue_wa_widget_assets() {
    if (is_page_template('page-templates/template-membership.php')
        || is_page_template('page-templates/template-donate.php')) {
        wp_enqueue_style(
            'moonsociety-wa-widgets',
            get_stylesheet_directory_uri() . '/assets/css/wa-widgets.css',
            ['moonsociety-style'],
            wp_get_theme()->get('Version')
        );
        wp_enqueue_script(
            'moonsociety-wa-fallback',
            get_stylesheet_directory_uri() . '/assets/js/wa-widget-fallback.js',
            [],
            wp_get_theme()->get('Version'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'moonsociety_enqueue_wa_widget_assets', 25);

/**
 * Enqueue editor styles so the block editor matches the frontend.
 */
function moonsociety_editor_styles() {
    add_editor_style('style.css');
    add_editor_style(
        'https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Syne:wght@400;600;700;800&family=League+Spartan:wght@400;500;600;700;800;900&family=Noto+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Inconsolata:wght@400;700&display=swap'
    );
}
add_action('after_setup_theme', 'moonsociety_editor_styles');

/**
 * Theme setup: menus, image sizes, theme supports.
 */
function moonsociety_theme_setup() {
    // Navigation menus
    register_nav_menus([
        'primary'  => __('Primary Navigation', 'moonsociety'),
        'footer'   => __('Footer Navigation', 'moonsociety'),
        'social'   => __('Social Links', 'moonsociety'),
    ]);

    // Image sizes for the card grid
    add_image_size('card-thumbnail', 600, 400, true);  // 3:2
    add_image_size('hero-wide', 1920, 1080, true);      // 16:9
    add_image_size('blog-featured', 1200, 675, true);    // 16:9

    // Theme supports
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    // Block editor color palette — brand colors only
    add_theme_support('editor-color-palette', [
        [
            'name'  => __('Space Cadet Blue', 'moonsociety'),
            'slug'  => 'space-cadet',
            'color' => '#13294B',
        ],
        [
            'name'  => __('Gold', 'moonsociety'),
            'slug'  => 'gold',
            'color' => '#FFCD00',
        ],
        [
            'name'  => __('Cerulean', 'moonsociety'),
            'slug'  => 'cerulean',
            'color' => '#00A3E0',
        ],
        [
            'name'  => __('Blue', 'moonsociety'),
            'slug'  => 'blue',
            'color' => '#006298',
        ],
        [
            'name'  => __('Cyan', 'moonsociety'),
            'slug'  => 'cyan',
            'color' => '#6AD1E3',
        ],
        [
            'name'  => __('Emerald', 'moonsociety'),
            'slug'  => 'emerald',
            'color' => '#009775',
        ],
        [
            'name'  => __('Near Black', 'moonsociety'),
            'slug'  => 'near-black',
            'color' => '#1D252D',
        ],
        [
            'name'  => __('White', 'moonsociety'),
            'slug'  => 'white',
            'color' => '#FFFFFF',
        ],
        [
            'name'  => __('Surface', 'moonsociety'),
            'slug'  => 'surface',
            'color' => '#1a3159',
        ],
    ]);

    // Disable custom colors to enforce brand palette
    add_theme_support('disable-custom-colors');

    // Block editor font sizes — fluid scale
    add_theme_support('editor-font-sizes', [
        [
            'name' => __('Small', 'moonsociety'),
            'slug' => 'small',
            'size' => 14,
        ],
        [
            'name' => __('Normal', 'moonsociety'),
            'slug' => 'normal',
            'size' => 18,
        ],
        [
            'name' => __('Large', 'moonsociety'),
            'slug' => 'large',
            'size' => 24,
        ],
        [
            'name' => __('Extra Large', 'moonsociety'),
            'slug' => 'extra-large',
            'size' => 32,
        ],
    ]);
}
add_action('after_setup_theme', 'moonsociety_theme_setup');

/**
 * Register widget areas.
 */
function moonsociety_widgets_init() {
    register_sidebar([
        'name'          => __('Footer Column 1', 'moonsociety'),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => __('Footer Column 2', 'moonsociety'),
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => __('Footer Column 3', 'moonsociety'),
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'moonsociety_widgets_init');

/**
 * Register block patterns for the card grid (block wall).
 */
function moonsociety_register_block_patterns() {
    register_block_pattern_category('moonsociety', [
        'label' => __('Moon Society', 'moonsociety'),
    ]);

    // Card Grid — Block Wall (Latest Posts)
    register_block_pattern('moonsociety/card-grid', [
        'title'       => __('Card Grid — Block Wall', 'moonsociety'),
        'description' => __('A responsive grid of post cards in the Moon Society brand style.', 'moonsociety'),
        'categories'  => ['moonsociety'],
        'content'     => moonsociety_get_block_pattern('card-grid'),
    ]);

    // Hero Section
    register_block_pattern('moonsociety/hero', [
        'title'       => __('Hero Section', 'moonsociety'),
        'description' => __('Full-width hero with display headline, subtitle, and CTA buttons.', 'moonsociety'),
        'categories'  => ['moonsociety'],
        'content'     => moonsociety_get_block_pattern('hero'),
    ]);

    // CTA Banner
    register_block_pattern('moonsociety/cta-banner', [
        'title'       => __('CTA Banner', 'moonsociety'),
        'description' => __('Centered call-to-action banner with heading and button.', 'moonsociety'),
        'categories'  => ['moonsociety'],
        'content'     => moonsociety_get_block_pattern('cta-banner'),
    ]);
}
add_action('init', 'moonsociety_register_block_patterns');

/**
 * Load a block pattern file and return its content.
 */
function moonsociety_get_block_pattern($name) {
    $file = get_stylesheet_directory() . "/block-patterns/{$name}.php";
    if (file_exists($file)) {
        ob_start();
        include $file;
        return ob_get_clean();
    }
    return '';
}

/**
 * Add skip-to-content link.
 */
function moonsociety_skip_link() {
    echo '<a class="skip-to-content" href="#main-content">' . esc_html__('Skip to content', 'moonsociety') . '</a>';
}
add_action('wp_body_open', 'moonsociety_skip_link');

/**
 * Customize excerpt length.
 */
function moonsociety_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'moonsociety_excerpt_length');

/**
 * Customize excerpt more text.
 */
function moonsociety_excerpt_more($more) {
    return '&hellip;';
}
add_filter('excerpt_more', 'moonsociety_excerpt_more');

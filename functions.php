<?php
// Child theme functions file
add_action('wp_enqueue_scripts', function () {
    // Enqueue Google Fonts
    wp_enqueue_style('celestra-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Source+Sans+3:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap', array(), null);

    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');

    // Enqueue Child Theme Style
    wp_enqueue_style('celestra-child-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    // Enqueue Specific Assets
    wp_enqueue_style('celestra-header', get_stylesheet_directory_uri() . '/assets/css/header.css', array(), '1.0.0');
    wp_enqueue_style('celestra-footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', array(), '1.0.0');

    // Enqueue Scripts
    wp_enqueue_script('celestra-timer', get_stylesheet_directory_uri() . '/assets/js/timer.js', array(), '1.0.0', true);
});

// Remove any lingering paragraph blocks from navigation areas via a filter if needed (Optional)
// This is a safety measure if the editor keeps wrapping things in paragraphs.
add_filter('render_block', function ($block_content, $block) {
    if ($block['blockName'] === 'core/template-part' && isset($block['attrs']['slug']) && $block['attrs']['slug'] === 'header') {
        // You could potentially regex out the unwanted <p> tags here if they persist.
    }
    return $block_content;
}, 10, 2);


/**
 * SEO Meta Tags
 */
add_action('wp_head', function () {
    // Preconnect to Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";

    // Site Title
    echo '<!-- SEO Meta Tags -->';

    // Favicon
    echo '<link rel="icon" href="/wp-content/uploads/2026/03/celestra-logo-tab-icon.webp">' . "\n";

    // Description (from theme description or custom)
    $description = "Celestra — A refined experience of elegant warmth, featuring rich brown and golden tones for a truly sophisticated atmosphere.";
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";

    // Keywords
    $keywords = "Celestra, luxury hospitality, elegant design, rich brown tones, golden tones, sophisticated warmth, boutique experience";
    echo '<meta name="keywords" content="' . esc_attr($keywords) . '">' . "\n";

    // Author & Publisher
    $author = "Christian Gomelan";
    echo '<meta name="author" content="' . esc_attr($author) . '">' . "\n";
    echo '<meta name="publisher" content="' . esc_attr($author) . '">' . "\n";

    // Open Graph Meta Tags for Social SEO
    echo '<meta property="og:title" content="Celestra — Elegant Warmth & Sophisticated Luxury Design">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(home_url('/')) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:site_name" content="Celestra">' . "\n";

    // Language and Robots are usually handled by WordPress core
});

/**
 * Improve Site Title for SEO (30-65 characters)
 */
add_filter('document_title_parts', function ($title) {
    if (is_front_page()) {
        $title['title'] = "Celestra — Elegant Warmth & Sophisticated Luxury Design";
        unset($title['tagline']); // Keep it within 30-65 characters
        unset($title['site']);
    }
    return $title;
});

/**
 * Register Custom Blocks
 */
add_action('init', function () {
    register_block_type(get_stylesheet_directory() . '/blocks/hero-section');
    register_block_type(get_stylesheet_directory() . '/blocks/privileges-section');
    register_block_type(get_stylesheet_directory() . '/blocks/distinction-section');
    register_block_type(get_stylesheet_directory() . '/blocks/offers-section');
    register_block_type(get_stylesheet_directory() . '/blocks/relish-section');
    register_block_type(get_stylesheet_directory() . '/blocks/footer-section');
    register_block_type(get_stylesheet_directory() . '/blocks/celestra-footer');
    register_block_type(get_stylesheet_directory() . '/blocks/scroll-curtain-reveal');
    register_block_type(get_stylesheet_directory() . '/blocks/coming-soon');
    register_block_type(get_stylesheet_directory() . '/blocks/about-section-hero');
    register_block_type(get_stylesheet_directory() . '/blocks/content-split');
    register_block_type(get_stylesheet_directory() . '/blocks/stats-counter');
    register_block_type(get_stylesheet_directory() . '/blocks/differences-section');
});

/**
 * Automatically add title attribute to navigation links if missing
 */
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if (empty($atts['title'])) {
        $atts['title'] = $item->title;
    }
    return $atts;
}, 10, 3);

/**
 * Fallback for Navigation Blocks (Gutenberg)
 * Automatically adds title attributes to links in navigation blocks based on their text content.
 */
add_filter('render_block', function ($block_content, $block) {
    if ($block['blockName'] === 'core/navigation-link' || $block['blockName'] === 'core/page-list' || $block['blockName'] === 'core/navigation') {
        // Use regex to find <a> tags and add title if missing
        $block_content = preg_replace_callback(
            '/<a\s+([^>]*href=["\']([^"\']+)["\'][^>]*)>(.*?)<\/a>/is',
            function ($matches) {
                $opening_tag_attrs = $matches[1];
                $url = $matches[2];
                $content = $matches[3];

                // If title already exists, return as is
                if (stripos($opening_tag_attrs, 'title=') !== false) {
                    return $matches[0];
                }

                // Clean up the content to use as a title (strip tags, trim)
                $title_text = trim(strip_tags($content));

                // If content is empty (e.g., icon), try to use the URL path
                if (empty($title_text)) {
                    $path = parse_url($url, PHP_URL_PATH);
                    $title_text = $path ? ucfirst(trim($path, '/')) : 'Home';
                }

                // Construct new tag with title
                return '<a ' . $opening_tag_attrs . ' title="' . esc_attr($title_text) . '">' . $content . '</a>';
            },
            $block_content
        );
    }
    return $block_content;
}, 10, 2);

/**
 * Enable SVG Upload Support
 */
add_filter('upload_mimes', function ($mimes) {
    if (current_user_can('manage_options')) {
        $mimes['svg'] = 'image/svg+xml';
    }
    return $mimes;
});

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    if (empty($data['ext'])) {
        $filetype = wp_check_filetype($filename, $mimes);
        if ($filetype['ext'] === 'svg') {
            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        }
    }
    return $data;
}, 10, 4);


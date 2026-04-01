<?php
/**
 * About Section Hero Block — Server-side render
 *
 * @var array $attributes Block attributes.
 */

$title = $attributes['title'] ?? 'Stay Smarter. Travel Better.';
$description = $attributes['description'] ?? "Celestra is a seamless hotel reservation platform designed to help travelers discover, compare, and book the perfect stay — effortlessly and confidently.\n\nWhether you're planning a business trip, weekend escape, or dream vacation, Celestra makes finding the right hotel simple, transparent, and secure.";
$primary_button_text = $attributes['primaryButtonText'] ?? 'Find Your Stay';
$primary_button_url = $attributes['primaryButtonUrl'] ?? '#';
$secondary_button_text = $attributes['secondaryButtonText'] ?? 'Start Exploring';
$secondary_button_url = $attributes['secondaryButtonUrl'] ?? '#';
$image_url = $attributes['imageUrl'] ?? '/wp-content/uploads/2026/03/luxury-hotel-reception-hall-lounge-restaurant-with-high-ceiling-scaled.webp';
?>

<section class="celestra-about-hero alignfull" style="background-image: url('<?php echo esc_url($image_url); ?>');">
    <div class="celestra-about-hero__overlay"></div>

    <div class="celestra-about-hero__content">
        <h1 class="celestra-about-hero__title">
            <?php echo wp_kses_post($title); ?>
        </h1>

        <h3 class="celestra-about-hero__description">
            <?php echo wp_kses_post(nl2br($description)); ?>
        </h3>

        <div class="wp-block-buttons celestra-about-hero__buttons">
            <div class="wp-block-button is-style-outline">
                <a href="<?php echo esc_url($secondary_button_url); ?>" class="wp-block-button__link wp-element-button">
                    <?php echo esc_html($secondary_button_text); ?>
                </a>
            </div>
            <div class="wp-block-button is-style-fill">
                <a href="<?php echo esc_url($primary_button_url); ?>" class="wp-block-button__link wp-element-button">
                    <?php echo esc_html($primary_button_text); ?>
                </a>
            </div>
        </div>
    </div>
</section>
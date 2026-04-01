<?php
/**
 * Celestra Hero Section Block — Server-side render
 */

$heading = $attributes['heading'] ?? 'Where Every Moment Feels Effortless';
$description = $attributes['description'] ?? 'Experience comfort, elegance, and warmth in every moment.';
$button_text = $attributes['buttonText'] ?? 'Learn More';
$button_url = $attributes['buttonUrl'] ?? '#';
$image_url = $attributes['imageUrl'] ?? '/wp-content/uploads/2026/03/celestra-home-bg.webp';
$show_button = $attributes['showButton'] ?? true;

$container_classes = array(
    'celestra-hero',
    'wp-block-celestra-hero-section',
    'alignfull',
);
?>

<section class="<?php echo esc_attr(implode(' ', $container_classes)); ?>"
    style="background-image: url('<?php echo esc_url($image_url); ?>');">

    <div class="celestra-hero__overlay"></div>

    <div class="celestra-hero__content alignwide">
        <div class="nexora-reveal nexora-reveal--col-1">
            <div class="nexora-reveal__inner">
                <div class="celestra-hero__text-wrapper">

                    <h1 class="celestra-hero__heading wp-block-heading has-white-color has-text-color">
                        <?php echo wp_kses_post($heading); ?>
                    </h1>

                    <h3 class="celestra-hero__description wp-block-heading has-white-color has-text-color">
                        <?php echo wp_kses_post($description); ?>
                    </h3>

                    <?php if ($show_button): ?>
                        <div class="wp-block-buttons">
                            <div class="wp-block-button is-style-outline learn-more-btn">
                                <a href="<?php echo esc_url($button_url); ?>" class="wp-block-button__link wp-element-button"
                                    title="<?php echo esc_attr($button_text); ?>"
                                    style="border-radius:0px; font-size:20px; font-weight: 500; color: #FFFFFF; border-color: #FFFFFF;">
                                    <?php echo esc_html($button_text); ?>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

</section>
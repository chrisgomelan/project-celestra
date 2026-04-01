<?php
/**
 * Content Split Section Block — Server-side render
 *
 * @var array  $attributes Block attributes.
 */

$title = $attributes['title'] ?? 'Our Story – Why Celestra Exists';
$subheading = $attributes['subheading'] ?? 'Travel should be exciting — not stressful.';
$description = $attributes['description'] ?? '';
$button_text = $attributes['buttonText'] ?? 'Get in Touch';
$button_url = $attributes['buttonUrl'] ?? '#';
$image_url = $attributes['imageUrl'] ?? '';
$image_alt = $attributes['imageAlt'] ?? '';
$reverse_layout = $attributes['reverseLayout'] ?? false;

$container_classes = array(
    'celestra-split-section',
    $reverse_layout ? 'is-reversed' : 'is-normal',
);

// Split description into paragraphs
$paragraphs = array_filter(explode("\n", $description));
?>

<section class="<?php echo esc_attr(implode(' ', $container_classes)); ?>">
    <div class="celestra-split-section__inner alignwide">

        <div class="celestra-split-section__image">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        </div>

        <div class="celestra-split-section__content">
            <div class="celestra-split-section__title-wrapper">
                <h2 class="celestra-split-section__title">
                    <?php echo wp_kses_post($title); ?>
                </h2>
            </div>

            <p class="celestra-split-section__subheading">
                <?php echo esc_html($subheading); ?>
            </p>

            <div class="celestra-split-section__description-wrapper">
                <?php foreach ($paragraphs as $para): ?>
                    <h4 class="celestra-split-section__description">
                        <?php echo wp_kses_post(trim($para)); ?>
                    </h4>
                <?php endforeach; ?>
            </div>

            <div class="wp-block-buttons celestra-split-section__cta">
                <div class="wp-block-button is-style-outline">
                    <a href="<?php echo esc_url($button_url); ?>" class="wp-block-button__link wp-element-button">
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
/**
 * Privileges Section Block — Server-side render
 */

$heading = $attributes['heading'] ?? 'Experience a World of Privilege and Distinction';
$description = $attributes['description'] ?? 'Enjoy premium privileges, member-only offers, and a smooth digital experience crafted for modern travelers.';
$button_text = $attributes['buttonText'] ?? 'Join Now';
$button_url = $attributes['buttonUrl'] ?? '#';

$items = $attributes['items'] ?? [];

$container_classes = array(
    'celestra-privileges',
    'wp-block-celestra-privileges-section',
    'alignfull',
);
?>

<section class="<?php echo esc_attr(implode(' ', $container_classes)); ?>">

    <div class="celestra-privileges__inner alignwide">

        <!-- Header Part -->
        <div class="celestra-privileges__header">
            <h2 class="celestra-privileges__heading wp-block-heading">
                <?php echo wp_kses_post($heading); ?>
            </h2>
            <h4 class="celestra-privileges__description">
                <?php echo wp_kses_post($description); ?>
            </h4>

            <div class="wp-block-buttons">
                <div class="wp-block-button is-style-fill">
                    <a href="<?php echo esc_url($button_url); ?>" class="wp-block-button__link wp-element-button"
                        title="<?php echo esc_attr($button_text); ?>"
                        style="border-radius: 0px; font-weight: 500; font-size: 20px;">
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Grid Part -->
        <div class="celestra-privileges__grid">
            <?php foreach ($items as $item): ?>
                <div class="celestra-privileges__item">
                    <div class="celestra-privileges__icon">
                        <img src="<?php echo esc_url($item['icon']); ?>" alt="<?php echo esc_attr($item['label']); ?>"
                            title="<?php echo esc_attr($item['label']); ?>" />
                    </div>
                    <h5 class="celestra-privileges__item-label">
                        <?php echo esc_html($item['label']); ?>
                    </h5>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</section>
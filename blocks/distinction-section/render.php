<?php
/**
 * Distinction Section Block — Server-side render
 */

$heading = $attributes['heading'] ?? 'Where Every Moment Reflects Your Distinction';
$button_text = $attributes['buttonText'] ?? 'Explore Benefits';
$button_url = $attributes['buttonUrl'] ?? '#';

$cards = $attributes['cards'] ?? [];

$container_classes = array(
    'celestra-distinction',
    'wp-block-celestra-distinction-section',
    'alignfull',
);
?>

<section class="<?php echo esc_attr(implode(' ', $container_classes)); ?>">

    <div class="celestra-distinction__inner alignwide">

        <!-- Header Part -->
        <div class="celestra-distinction__header">
            <h2 class="celestra-distinction__heading wp-block-heading">
                <?php echo wp_kses_post($heading); ?>
            </h2>
        </div>

        <!-- Cards Grid -->
        <div class="celestra-distinction__grid">
            <?php foreach ($cards as $card): ?>
                <div class="celestra-distinction__card">
                    <div class="celestra-distinction__image-wrapper">
                        <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>"
                            title="<?php echo esc_attr($card['title']); ?>" />
                    </div>
                    <div class="celestra-distinction__content">
                        <h3 class="celestra-distinction__card-title">
                            <?php echo esc_html($card['title']); ?>
                        </h3>
                        <h6 class="celestra-distinction__card-description">
                            <?php echo wp_kses_post($card['description']); ?>
                        </h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Button Part -->
        <div class="celestra-distinction__footer">
            <div class="wp-block-buttons">
                <div class="wp-block-button is-style-outline">
                    <a href="<?php echo esc_url($button_url); ?>" class="wp-block-button__link wp-element-button"
                        title="<?php echo esc_attr($button_text); ?>"
                        style="border-radius: 0px; font-weight: 500; font-size: 20px; color: #323732; border-color: #323732;">
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>
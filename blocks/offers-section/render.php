<?php
/**
 * Offers Section Block — Server-side render
 */

$heading = $attributes['heading'] ?? 'Discover Your Offers';
$cards = $attributes['cards'] ?? [];

$container_classes = array(
    'celestra-offers',
    'wp-block-celestra-offers-section',
    'alignfull',
);
?>

<section class="<?php echo esc_attr(implode(' ', $container_classes)); ?>">

    <div class="celestra-offers__inner alignwide">

        <!-- Header Part -->
        <div class="celestra-offers__header">
            <h2 class="celestra-offers__heading wp-block-heading">
                <?php echo wp_kses_post($heading); ?>
            </h2>
        </div>

        <!-- Cards Grid -->
        <div class="celestra-offers__grid">
            <?php foreach ($cards as $card): ?>
                <div class="celestra-offers__card">
                    <div class="celestra-offers__image-wrapper">
                        <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>"
                            title="<?php echo esc_attr($card['title']); ?>" />
                    </div>
                    <div class="celestra-offers__content">
                        <h5 class="celestra-offers__card-title">
                            <?php echo esc_html($card['title']); ?>
                        </h5>
                        <h6 class="celestra-offers__card-description">
                            <?php echo wp_kses_post($card['description']); ?>
                        </h6>

                        <div class="celestra-offers__card-button-wrapper">
                            <div class="wp-block-buttons">
                                <div class="wp-block-button is-style-outline">
                                    <a href="<?php echo esc_url($card['buttonUrl']); ?>"
                                        title="<?php echo esc_attr($card['buttonText']); ?>"
                                        class="wp-block-button__link wp-element-button wp-view-details-button">
                                        <?php echo esc_html($card['buttonText']); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</section>
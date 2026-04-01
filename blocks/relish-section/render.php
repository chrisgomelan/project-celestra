<?php
/**
 * Relish Section Block — Server-side render
 */

$heading = $attributes['heading'] ?? 'Relish Exceptional Privileges';
$description = $attributes['description'] ?? 'Experience refined gastronomy across distinguished restaurants and bars around the world. Savor every occasion and instantly redeem your points, with 15 points equal to USD 1 off your next dining experience.';
$button_text = $attributes['buttonText'] ?? 'Learn More';
$button_url = $attributes['buttonUrl'] ?? '#';
$image_url = $attributes['imageUrl'] ?? '/wp-content/uploads/2026/03/celestra-relish-bg.webp';

$container_classes = array(
    'celestra-relish',
    'wp-block-celestra-relish-section',
    'alignfull',
);
?>

<section class="<?php echo esc_attr(implode(' ', $container_classes)); ?>"
    style="background-image: url('<?php echo esc_url($image_url); ?>');">

    <div class="celestra-relish__inner alignwide">

        <div class="celestra-relish__content-box">
            <h2 class="celestra-relish__heading wp-block-heading">
                <?php echo wp_kses_post($heading); ?>
            </h2>

            <h6 class="celestra-relish__description">
                <?php echo wp_kses_post($description); ?>
            </h6>

            <div class="celestra-relish__button-wrapper">
                <div class="wp-block-buttons">
                    <div class="wp-block-button is-style-outline">
                        <a href="<?php echo esc_url($button_url); ?>" class="wp-block-button__link wp-element-button"
                            title="<?php echo esc_attr($button_text); ?>">
                            <?php echo esc_html($button_text); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
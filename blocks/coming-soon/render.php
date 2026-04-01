<?php
/**
 * Coming Soon Block — Server-side render
 *
 * @var array  $attributes Block attributes.
 */

$title = $attributes['title'] ?? 'Your Next Stay Starts Here';
$description = $attributes['description'] ?? 'Elegant spaces. Seamless booking. Memorable experiences. We\'re launching soon be the first to know.';
$sub_title = $attributes['subTitle'] ?? 'Get notified when we launch';
$image_url = $attributes['imageUrl'] ?? '/wp-content/uploads/2026/03/coming-soon-bg-scaled.webp';
$image_alt = $attributes['imageAlt'] ?? 'Coming Soon Background';

$container_classes = array(
    'celestra-coming-soon',
    'wp-block-celestra-coming-soon',
    'alignfull'
);
?>

<section class="<?php echo esc_attr(implode(' ', $container_classes)); ?>"
    style="background-image: url('<?php echo esc_url($image_url); ?>');">
    <div class="celestra-coming-soon__overlay"></div>
    <div class="celestra-coming-soon__content">

        <div class="celestra-coming-soon__description-container">
            <h1 class="celestra-coming-soon__title">
                <?php echo wp_kses_post($title); ?>
            </h1>
            <p class="celestra-coming-soon__description">
                <?php echo wp_kses_post($description); ?>
            </p>
        </div>

        <div class="celestra-coming-soon__timer">
            <?php
            // Render the simple launch timer block directly
            if (function_exists('sl_render_block_output')) {
                echo sl_render_block_output();
            }
            ?>
        </div>

        <div class="celestra-coming-soon__subscribe">
            <h3 class="celestra-coming-soon__subscribe-title">
                <?php echo wp_kses_post($sub_title); ?>
            </h3>
            <form action="#" method="post" class="celestra-coming-soon__form">
                <input type="email" placeholder="Enter Email Address" required class="celestra-coming-soon__input" />
                <div class="wp-block-button is-style-fill celestra-coming-soon__button-container">
                    <button type="submit" class="wp-block-button__link wp-element-button celestra-coming-soon__button">Notify
                        Me</button>
                </div>
            </form>
            <div class="celestra-coming-soon__socials">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</section>
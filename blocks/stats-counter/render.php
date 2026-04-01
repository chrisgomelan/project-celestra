<?php
/**
 * Stats Counter Bar Block — Server-side render
 *
 * @var array  $attributes Block attributes.
 */

$stats = [
    [
        'num' => $attributes['number1'] ?? '150+',
        'label' => $attributes['label1'] ?? 'Verified Hotel Partners',
    ],
    [
        'num' => $attributes['number2'] ?? '30+',
        'label' => $attributes['label2'] ?? 'Cities Worldwide',
    ],
    [
        'num' => $attributes['number3'] ?? '25+',
        'label' => $attributes['label3'] ?? 'Destinations Covered',
    ],
    [
        'num' => $attributes['number4'] ?? '24/7',
        'label' => $attributes['label4'] ?? 'Booking Support',
    ],
];
?>

<section class="celestra-stats-bar wp-block-celestra-stats-counter">
    <div class="celestra-stats-bar__inner alignwide">
        <?php foreach ($stats as $index => $item): ?>
            <div class="celestra-stats-bar__item">
                <div class="celestra-stats-bar__text-wrapper">
                    <h1 class="celestra-stats-bar__number"><?php echo esc_html($item['num']); ?></h1>
                    <h3 class="celestra-stats-bar__label"><?php echo wp_kses_post(nl2br($item['label'])); ?></h3>
                </div>
            </div>
            <?php if ($index < count($stats) - 1): ?>
                <div class="celestra-stats-bar__separator"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
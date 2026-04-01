<?php
/**
 * Differences Section Block — Server-side render
 *
 * @var array  $attributes Block attributes.
 */

$mainTitle = $attributes['mainTitle'] ?? 'What Makes Celestra Different';

$items = [
    [
        'icon'  => $attributes['item1Icon']  ?? '',
        'title' => $attributes['item1Title'] ?? '',
        'desc'  => $attributes['item1Desc']  ?? ''
    ],
    [
        'icon'  => $attributes['item2Icon']  ?? '',
        'title' => $attributes['item2Title'] ?? '',
        'desc'  => $attributes['item2Desc']  ?? ''
    ],
    [
        'icon'  => $attributes['item3Icon']  ?? '',
        'title' => $attributes['item3Title'] ?? '',
        'desc'  => $attributes['item3Desc']  ?? ''
    ],
    [
        'icon'  => $attributes['item4Icon']  ?? '',
        'title' => $attributes['item4Title'] ?? '',
        'desc'  => $attributes['item4Desc']  ?? ''
    ],
];
?>

<section class="celestra-differences wp-block-celestra-differences-section">
    <div class="celestra-differences__inner alignwide">
        <?php if (!empty($mainTitle)): ?>
            <h2 class="celestra-differences__main-title"><?php echo esc_html($mainTitle); ?></h2>
        <?php endif; ?>
        
        <div class="celestra-differences__row celestra-differences__row--1">
            <?php for ($i = 0; $i < 2; $i++): ?>
                <div class="celestra-differences__item">
                    <?php if (!empty($items[$i]['icon'])): ?>
                        <div class="celestra-differences__icon">
                            <img src="<?php echo esc_url($items[$i]['icon']); ?>" alt="<?php echo esc_attr($items[$i]['title']); ?>">
                        </div>
                    <?php endif; ?>
                    <h3 class="celestra-differences__title"><?php echo esc_html($items[$i]['title']); ?></h3>
                    <p class="celestra-differences__desc"><?php echo esc_html($items[$i]['desc']); ?></p>
                </div>
            <?php endfor; ?>
        </div>

        <div class="celestra-differences__row celestra-differences__row--2">
            <?php for ($i = 2; $i < 4; $i++): ?>
                <div class="celestra-differences__item">
                    <?php if (!empty($items[$i]['icon'])): ?>
                        <div class="celestra-differences__icon">
                            <img src="<?php echo esc_url($items[$i]['icon']); ?>" alt="<?php echo esc_attr($items[$i]['title']); ?>">
                        </div>
                    <?php endif; ?>
                    <h3 class="celestra-differences__title"><?php echo esc_html($items[$i]['title']); ?></h3>
                    <p class="celestra-differences__desc"><?php echo esc_html($items[$i]['desc']); ?></p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
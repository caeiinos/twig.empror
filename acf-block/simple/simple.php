<?php
/**
 * Block Name: simple
 *
 * This is the template that displays the simple block.
 */

// create id attribute for specific styling
$id = 'simple--' . $block['id'];

$simple = get_field('simple');

if ($simple) {
?>
<section id="<?php echo $id; ?>" class="simple simple--<?php echo esc_attr($simple['style']); ?>">
    <h2 class="simple__title simple__title--<?php echo esc_attr($simple['style']); ?>">
        <?php echo esc_html($simple['title']); ?>
    </h2>
    <h3 class="simple__subtitle simple__subtitle--<?php echo esc_attr($simple['style']); ?>">
        <?php echo esc_html($simple['subtitle']); ?>
    </h3>
    <div class="simple__text simple__text--<?php echo esc_attr($simple['style']); ?>">
        <?php echo esc_html($simple['text']); ?>
    </div>
    <div class="simple__containerimg1 simple__containerimg1--<?php echo esc_attr($simple['style']); ?>">
        <img class="simple__img1 simple__img1--<?php echo esc_attr($simple['style']); ?>" src="<?php echo esc_url($simple['img_1']['url']); ?>" alt="<?php echo esc_attr($simple['img_1']['alt']); ?>">
    </div>
</section>
<?php }; ?>

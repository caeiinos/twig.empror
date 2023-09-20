<?php
/**
 * Block Name: twin
 *
 * This is the template that displays the twin block.
 */

// create id attribute for specific styling
$id = 'twin--' . $block['id'];

$twin = get_field('twin');

if ($twin) {
?>
<section id="<?php echo $id; ?>" class="twin twin--<?php echo esc_attr($twin['style']); ?>">
    <h2 class="twin__title twin__title--<?php echo esc_attr($twin['style']); ?>">
        <?php echo esc_html($twin['title']); ?>
    </h2>
    <h3 class="twin__subtitle twin__subtitle--<?php echo esc_attr($twin['style']); ?>">
        <?php echo esc_html($twin['subtitle']); ?>
    </h3>
    <div class="twin__text twin__text--<?php echo esc_attr($twin['style']); ?>">
        <?php echo esc_html($twin['text']); ?>
    </div>
    <div class="twin__containerimg1 twin__containerimg1--<?php echo esc_attr($twin['style']); ?>">
        <img class="twin__img1 twin__img1--<?php echo esc_attr($twin['style']); ?>" src="<?php echo esc_url($twin['img_1']['url']); ?>" alt="<?php echo esc_attr($twin['img_1']['alt']); ?>">
    </div>
    <div class="twin__containerimg2 twin__containerimg2--<?php echo esc_attr($twin['style']); ?>">
        <img class="twin__img2 twin__img2--<?php echo esc_attr($twin['style']); ?>" src="<?php echo esc_url($twin['img_2']['url']); ?>" alt="<?php echo esc_attr($twin['img_2']['alt']); ?>">
    </div>
</section>
<?php }; ?>

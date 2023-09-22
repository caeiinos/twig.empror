<?php
/**
 * Block Name: twist
 *
 * This is the template that displays the twist block.
 */

// create id attribute for specific styling
$id = 'twist--' . $block['id'];

$twist = get_field('twist');

if ($twist) {
?>
<section id="<?php echo $id; ?>" class="twist twist--<?php echo esc_attr($twist['style']); ?>">
    <h2 class="twist__title twist__title--<?php echo esc_attr($twist['style']); ?>">
        <?php echo esc_html($twist['title']); ?>
    </h2>
    <div class="twist__containerimg1 twist__containerimg1--<?php echo esc_attr($twist['style']); ?>">
        <img class="twist__img1 twist__img1--<?php echo esc_attr($twist['style']); ?>" src="<?php echo esc_url($twist['img_1']['url']); ?>" alt="<?php echo esc_attr($twist['img_1']['alt']); ?>">
    </div>
    <div class="twist__containerimg2 twist__containerimg2--<?php echo esc_attr($twist['style']); ?>">
        <img class="twist__img2 twist__img2--<?php echo esc_attr($twist['style']); ?>" src="<?php echo esc_url($twist['img_2']['url']); ?>" alt="<?php echo esc_attr($twist['img_2']['alt']); ?>">
    </div>
</section>
<?php }; ?>

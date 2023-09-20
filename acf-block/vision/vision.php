<?php
/**
 * Block Name: vision
 *
 * This is the template that displays the vision block.
 */

// create id attribute for specific styling
$id = 'vision--' . $block['id'];

$vision = get_field('vision');

if ($vision) {
?>
<section id="<?php echo $id; ?>" class="vision vision--<?php echo esc_attr($vision['style']); ?>">
    <h2 class="vision__title vision__title--<?php echo esc_attr($vision['style']); ?>">
        <?php echo esc_html($vision['title']); ?>
    </h2>
    <h3 class="vision__subtitle vision__subtitle--<?php echo esc_attr($vision['style']); ?>">
        <?php echo esc_html($vision['subtitle']); ?>
    </h3>
    <div class="vision__text vision__text--<?php echo esc_attr($vision['style']); ?>">
        <?php echo esc_html($vision['text']); ?>
    </div>
    <div class="vision__containerimg1 vision__containerimg1--<?php echo esc_attr($vision['style']); ?>">
        <img class="vision__img1 vision__img1--<?php echo esc_attr($vision['style']); ?>" src="<?php echo esc_url($vision['img_1']['url']); ?>" alt="<?php echo esc_attr($vision['img_1']['alt']); ?>">
    </div>
    <div class="vision__containerimg2 vision__containerimg2--<?php echo esc_attr($vision['style']); ?>">
        <img class="vision__img2 vision__img2--<?php echo esc_attr($vision['style']); ?>" src="<?php echo esc_url($vision['img_2']['url']); ?>" alt="<?php echo esc_attr($vision['img_2']['alt']); ?>">
    </div>  
    <div class="vision__containerimg3 vision__containerimg3--<?php echo esc_attr($vision['style']); ?>">
        <img class="vision__img3 vision__img3--<?php echo esc_attr($vision['style']); ?>" src="<?php echo esc_url($vision['img_3']['url']); ?>" alt="<?php echo esc_attr($vision['img_3']['alt']); ?>">
    </div>  

</section>
<?php }; ?>

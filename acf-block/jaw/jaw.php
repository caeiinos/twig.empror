<?php
/**
 * Block Name: jaw
 *
 * This is the template that displays the jaw block.
 */

// create id attribute for specific styling
$id = 'jaw--' . $block['id'];

$jaw = get_field('jaw');

if ($jaw) { ?>
<section id="<?php echo $id; ?>" class="jaw jaw--<?php echo esc_attr($jaw['style']); ?>">
    <h2 class="jaw__title jaw__title--<?php echo esc_attr($jaw['style']); ?>">
        <?php echo esc_html($jaw['title']); ?>
    </h2>
    <div class="jaw__text jaw__text--<?php echo esc_attr($jaw['style']); ?>">
        <?php echo esc_html($jaw['text']); ?>
    </div>
    <?php if ($jaw['type'] == 'image') { ?>
        <div class="jaw__containerimg1 jaw__containerimg1--<?php echo esc_attr($jaw['style']); ?>">
            <img class="jaw__img1 jaw__img1--<?php echo esc_attr($jaw['style']); ?>" src="<?php echo esc_url($jaw['img_1']['url']); ?>" alt="<?php echo esc_attr($jaw['img_1']['alt']); ?>">
        </div>        
    <?php }
else { ?>
        <div class="jaw__containerimg1 jaw__containerimg1--<?php echo esc_attr($jaw['style']); ?>">
            <?php echo esc_url($jaw['video']['url']); ?>
        </div>
        <video autoplay muted loop class="jaw__containerimg1 jaw__containerimg1--<?php echo esc_attr($jaw['style']); ?>">
            <source src="<?php echo esc_url($jaw['video']['url']); ?>" type="video/mp4" >
        </video>        
    <?php }; ?>
</section>
<?php }; ?>

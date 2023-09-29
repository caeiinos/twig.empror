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

    <a class="jaw__cta jaw__cta--<?php echo esc_attr($jaw['style']); ?> jaw__cta--<?php echo esc_attr($jaw['cta']['cta_style']); ?>" href="<?php echo esc_url($jaw['cta']['cta_url']); ?>">
        <?php echo esc_html($jaw['cta']['cta_text']); ?>
    </a>

    <?php if ($jaw['type'] == 'image') { ?>

        <div class="jaw__containerimg1 jaw__containerimg1--<?php echo esc_attr($jaw['style']); ?>">
            <img class="jaw__img1 jaw__img1--<?php echo esc_attr($jaw['style']); ?>" src="<?php echo esc_url($jaw['img_1']['url']); ?>" alt="<?php echo esc_attr($jaw['img_1']['alt']); ?>">
        </div> 

    <?php }
    else { ?>

        <div class="jaw__containerimg1 jaw__containerimg1--<?php echo esc_attr($jaw['style']); ?>">
            <video <?php foreach( $jaw['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="jaw__img1 jaw__img1--<?php echo esc_attr($jaw['style']); ?>">
                <source src="<?php echo esc_url($jaw['video']['video_url']); ?>" type="video/<?php echo esc_attr($jaw['video']['video_type']); ?>" >
            </video> 
        </div> 

    <?php }; ?>
</section>
<?php }; ?>


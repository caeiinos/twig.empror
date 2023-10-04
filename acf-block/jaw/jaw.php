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

    <!-- jaw block -->
    <section id="<?php echo $id; ?>" class="jaw jaw--<?php echo esc_attr($jaw['style']); ?>">

        <!-- jaw title -->
        <?php if (!empty($jaw['title'])) { ?> 
            <h2 class="jaw__title jaw__title--<?php echo esc_attr($jaw['style']); ?>">
                <?php echo esc_html($jaw['title']); ?>
            </h2>
        <?php } ?> 
              
        <!-- jaw text -->
        <?php if (!empty($jaw['text'])) { ?> 
            <div class="jaw__text jaw__text--<?php echo esc_attr($jaw['style']); ?>">
                <?php echo esc_html($jaw['text']); ?>
            </div>
        <?php } ?>

        <!-- jaw cta -->
        <?php if (!empty($jaw['cta'])) { ?>         
            <a class="jaw__cta jaw__cta--<?php echo esc_attr($jaw['style']); ?> jaw__cta--<?php echo esc_attr($jaw['cta']['cta_style']); ?>" href="<?php echo esc_url($jaw['cta']['cta_url']); ?>">
                <?php echo esc_html($jaw['cta']['cta_text']); ?>
            </a>
        <?php } ?>

        <!-- jaw background -->
        <?php if ($jaw['background']) { ?>         

            <div class="jaw__containerimg1 jaw__containerimg1--<?php echo esc_attr($jaw['style']); ?>">

                <?php if ($jaw['background']['type'] == 'image') { ?>

                    <!-- jaw image -->
                    <?php if (!empty($jaw['background']['image']['image']) && !empty($jaw['background']['image']['image_alt'])) { ?>         
                        <img class="jaw__img1 jaw__img1--<?php echo esc_attr($jaw['style']); ?>" src="<?php echo esc_url($jaw['background']['image']['image']['url']); ?>" alt="<?php echo esc_attr($jaw['background']['image']['image_alt']); ?>">
                    <?php } ?>

                <?php }
                else {?>

                    <!-- jaw video -->
                    <?php if (!empty($jaw['background']['video']['video_attributs']) && !empty($jaw['background']['video']['video_type']) && !empty($jaw['background']['video']['video_url'])) { ?>         
                        <video <?php foreach( $jaw['background']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="jaw__img1 jaw__img1--<?php echo esc_attr($jaw['style']); ?>">
                            <source src="<?php echo esc_url($jaw['background']['video']['video_url']); ?>" type="video/<?php echo esc_attr($jaw['background']['video']['video_type']); ?>" >
                        </video> 
                    <?php } ?>

                <?php }; ?>

            </div> 

        <?php } ?>        
    </section>
<?php }; ?>


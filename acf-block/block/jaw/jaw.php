<?php
/**
 * Block Name: jaw
 *
 * This is the template that displays the jaw block.
 */

// create id attribute for specific styling
$id = 'jaw--' . $block['id'];

// get jaw block
$block = get_field('jaw');

// style for include
$style = 'jaw';

if ($block) { ?>

    <!-- jaw block -->
    <section id="<?php echo $id; ?>" class="jaw jaw--<?php echo esc_attr($block['style']); ?>">

        <!-- jaw title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>
              
        <!-- jaw text -->
        <?php include __DIR__.  '/../../components/text/text.php';?>

        <!-- jaw cta -->
        <?php if (!empty($block['cta'])) { ?>         
            <a class="jaw__cta jaw__cta--<?php echo esc_attr($block['style']); ?> jaw__cta--<?php echo esc_attr($block['cta']['cta_style']); ?>" href="<?php echo esc_url($block['cta']['cta_url']); ?>">
                <?php echo esc_html($block['cta']['cta_text']); ?>
            </a>
        <?php } ?>

        <!-- jaw background -->
        <?php if ($block['background']) { ?>         

            <div class="jaw__fst_container jaw__fst_container--<?php echo esc_attr($block['style']); ?>">

                <?php if ($block['background']['type'] == 'image') { ?>

                    <!-- jaw image -->
                    <?php if (!empty($block['background']['image']['image']) && !empty($block['background']['image']['image_alt'])) { ?>         
                        <img class="jaw__fst_image jaw__fst_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['background']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['background']['image']['image_alt']); ?>">
                    <?php } ?>

                <?php }
                else {?>

                    <!-- jaw video -->
                    <?php if (!empty($block['background']['video']['video_attributs']) && !empty($block['background']['video']['video_type']) && !empty($block['background']['video']['video_url'])) { ?>         
                        <video <?php foreach( $block['background']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="jaw__fst_image jaw__fst_image--<?php echo esc_attr($block['style']); ?>">
                            <source src="<?php echo esc_url($block['background']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['background']['video']['video_type']); ?>" >
                        </video> 
                    <?php } ?>

                <?php }; ?>

            </div> 

        <?php } ?>        
    </section>
<?php }; ?>


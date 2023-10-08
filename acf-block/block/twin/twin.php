<?php
/**
 * Block Name: twin
 *
 * This is the template that displays the twin block.
 */

// create id attribute for specific styling
$id = 'twin--' . $block['id'];

// get twin block
$block = get_field('twin');

// style for include
$style = 'twin';

if ($block) { ?>

    <!-- twin block -->
    <section id="<?php echo $id; ?>" class="twin twin--<?php echo esc_attr($block['style']); ?>">

        <!-- twin title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>

        <!-- twin subtitle -->
        <?php include __DIR__.  '/../../components/subtitle/subtitle.php';?>

        <!-- twin text -->
        <?php include __DIR__.  '/../../components/text/text.php';?>

        <!-- twin first element -->
        <?php include __DIR__.  '/../../components/first-element/first-element.php';?>

        <!-- twin second element -->
        <?php if ($block['second_element']) { ?>
            <div class="twin__scd_conatiner twin__scd_conatiner--<?php echo esc_attr($block['style']); ?>">

                <?php if ($block['second_element']['type'] == 'image') { ?>

                    <!-- twin image -->
                    <?php if (!empty($block['second_element']['image']['image']) && !empty($block['second_element']['image']['image_alt'])) { ?>         
                        <img class="twin__scd_image twin__scd_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['second_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['second_element']['image']['image_alt']); ?>">
                    <?php } ?>

                <?php }
                else {?>

                    <!-- twin video -->
                    <?php if (!empty($block['second_element']['video']['video_attributs']) && !empty($block['second_element']['video']['video_type']) && !empty($block['second_element']['video']['video_url'])) { ?>         
                        <video <?php foreach( $block['second_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="twin__scd_image twin__scd_image--<?php echo esc_attr($block['style']); ?>">
                            <source src="<?php echo esc_url($block['second_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['second_element']['video']['video_type']); ?>" >
                        </video> 
                    <?php } ?>

                <?php }; ?>

            </div>             
        <?php } ?>
    </section>
<?php }; ?>

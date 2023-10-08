<?php
/**
 * Block Name: vision
 *
 * This is the template that displays the vision block.
 */

// create id attribute for specific styling
$id = 'vision--' . $block['id'];

// get vision block
$block = get_field('vision');

// style for include
$style = 'vision';

if ($block) {?>

    <!-- visison block -->
    <section id="<?php echo $id; ?>" class="vision vision--<?php echo esc_attr($block['style']); ?>">

        <!-- visison title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>

        <!-- visison subtitle -->
        <?php include __DIR__.  '/../../components/subtitle/subtitle.php';?>

        <!-- visison text -->
        <?php include __DIR__.  '/../../components/text/text.php';?>

        <!-- visison first element -->
        <?php include __DIR__.  '/../../components/first-element/first-element.php';?>

        <!-- visison second element -->
        <?php if ($block['second_element']) { ?>
            <div class="vision__scd_conatiner vision__scd_conatiner--<?php echo esc_attr($block['style']); ?>">

                <?php if ($block['second_element']['type'] == 'image') { ?>

                    <!-- vision image -->
                    <?php if (!empty($block['second_element']['image']['image']) && !empty($block['second_element']['image']['image_alt'])) { ?>         
                        <img class="vision__scd_image vision__scd_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['second_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['second_element']['image']['image_alt']); ?>">
                    <?php } ?>

                <?php }
                else {?>

                    <!-- vision video -->
                    <?php if (!empty($block['second_element']['video']['video_attributs']) && !empty($block['second_element']['video']['video_type']) && !empty($block['second_element']['video']['video_url'])) { ?>         
                        <video <?php foreach( $block['second_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="vision__scd_image vision__scd_image--<?php echo esc_attr($block['style']); ?>">
                            <source src="<?php echo esc_url($block['second_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['second_element']['video']['video_type']); ?>" >
                        </video> 
                    <?php } ?>

                <?php }; ?>

            </div>             
        <?php } ?>


        <!-- visison third element -->
        <?php if ($block['third_element']) { ?>

            <div class="vision__trd_element vision__trd_element--<?php echo esc_attr($block['style']); ?>">

                <?php if ($block['third_element']['type'] == 'image') { ?>

                    <!-- vision image -->
                    <?php if (!empty($block['third_element']['image']['image']) && !empty($block['third_element']['image']['image_alt'])) { ?>         
                        <img class="vision__trd_image vision__trd_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['third_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['third_element']['image']['image_alt']); ?>">
                    <?php } ?>

                <?php }
                else {?>

                    <!-- vision video -->
                    <?php if (!empty($block['third_element']['video']['video_attributs']) && !empty($block['third_element']['video']['video_type']) && !empty($block['third_element']['video']['video_url'])) { ?>         
                        <video <?php foreach( $block['third_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="vision__trd_image vision__trd_image--<?php echo esc_attr($block['style']); ?>">
                            <source src="<?php echo esc_url($block['third_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['third_element']['video']['video_type']); ?>" >
                        </video> 
                    <?php } ?>

                <?php }; ?>

            </div> 
        <?php } ?>
    </section>
<?php }; ?>

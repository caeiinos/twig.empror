<?php if ($block['first_element']) { ?>

    <div class="<?php echo $style; ?>__fst_container <?php echo $style; ?>__fst_container--<?php echo esc_attr($block['style']); ?>">

        <?php if ($block['first_element']['type'] == 'image') { ?>

            <!-- first element image -->
            <?php if (!empty($block['first_element']['image']['image']) && !empty($block['first_element']['image']['image_alt'])) { ?>         
                <img class="<?php echo $style; ?>__fst_image <?php echo $style; ?>__fst_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['first_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['first_element']['image']['image_alt']); ?>">
            <?php } ?>

        <?php }
        else {?>

            <!-- first element video -->
            <?php if (!empty($block['first_element']['video']['video_attributs']) && !empty($block['first_element']['video']['video_type']) && !empty($block['first_element']['video']['video_url'])) { ?>         
                <video <?php foreach( $block['first_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="<?php echo $style; ?>__fst_image <?php echo $style; ?>__fst_image--<?php echo esc_attr($block['style']); ?>">
                    <source src="<?php echo esc_url($block['first_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['first_element']['video']['video_type']); ?>" >
                </video> 
            <?php } ?>

        <?php }; ?>

    </div> 
<?php } ?>
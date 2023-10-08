<?php
/**
 * Block Name: twist
 *
 * This is the template that displays the twist block.
 */

// create id attribute for specific styling
$id = 'twist--' . $block['id'];

// get twist block
$block = get_field('twist');

// style for include
$style = 'twist';

if ($block) {
?>
<section id="<?php echo $id; ?>" class="twist twist--<?php echo esc_attr($block['style']); ?>">

    <?php include __DIR__.  '/../../components/title/title.php';?>

    <!-- first element -->
    <div class="twist__fst_container twist__fst_container--<?php echo esc_attr($block['style']); ?>">

        <?php if ($block['first_element']['type'] == 'image') { ?>

            <img class="twist__fst_image twist__fst_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['first_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['first_element']['image']['image_alt']); ?>">

        <?php }
        elseif ($block['first_element']['type'] == 'menu') {?>
            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($block['style']); ?>">
                <?php foreach ((array) $block['first_element']['menu']['menu_element'] as $menuEl) {  ?>
                    <li class="twist__menuitem twist__menuitem--<?php echo esc_attr($block['style']); ?>">
                        <a class="twist__menulink twist__menulink--<?php echo esc_attr($block['style']); ?>" href="<?php echo esc_url($menuEl['menu_url']) ?>">
                            <?php echo esc_html($menuEl['menu_title']) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        <?php } 
        elseif ($block['first_element']['type'] == 'posts') {?>

            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($block['style']); ?>">

                <?php foreach ($block['first_element']['post']['related_post'] as $post) { ?>
                    <li class="twist__postitem twist__postitem--<?php echo esc_attr($block['style']); ?>">
                        <a class="twist__postlink twist__postlink--<?php echo esc_attr($block['style']); ?>" href="<?php the_permalink($post->ID); ?>">
                            <?php echo $post->post_title ?>
                        </a>
                        <div class="twist__postcontent twist__postcontent--<?php echo esc_attr($block['style']); ?>">
                            <?php echo $post->post_content; ?>
                        </div>
                    </li>

                <?php } ?>
            </ul>
            
        <?php }
        else {?>

            <video <?php foreach( $block['first_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="twist__fst_image twist__fst_image--<?php echo esc_attr($block['style']); ?>">
                <source src="<?php echo esc_url($block['first_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['first_element']['video']['video_type']); ?>" >
            </video> 

        <?php }; ?>

    </div> 

    <!-- second element -->
    <div class="twist__scd_conatiner twist__scd_conatiner--<?php echo esc_attr($block['style']); ?>">

        <?php if ($block['second_element']['type'] == 'image') { ?>

            <img class="twist__scd_image twist__scd_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['second_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['second_element']['image']['image_alt']); ?>">

        <?php }
        elseif ($block['second_element']['type'] == 'menu') {?>
            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($block['style']); ?>">
                <?php foreach ($block['second_element']['menu']['menu_element'] as $menuEl) {  ?>
                    <li class="twist__menuitem twist__menuitem--<?php echo esc_attr($block['style']); ?>">
                        <a class="twist__menulink twist__menulink--<?php echo esc_attr($block['style']); ?>" href="<?php echo esc_url($menuEl['menu_url']) ?>">
                            <?php echo esc_html($menuEl['menu_title']) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        <?php } 
        elseif ($block['second_element']['type'] == 'posts') {?>

            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($block['style']); ?>">

                <?php foreach ((array) $block['second_element']['post']['related_post'] as $post) { ?>
                    <li class="twist__postitem twist__postitem--<?php echo esc_attr($block['style']); ?>">
                        <a class="twist__postlink twist__postlink--<?php echo esc_attr($block['style']); ?>" href="<?php the_permalink($post->ID); ?>">
                            <?php echo $post->post_title ?>
                        </a>
                        <div class="twist__postcontent twist__postcontent--<?php echo esc_attr($block['style']); ?>">
                            <?php echo $post->post_content; ?>
                        </div>
                    </li>

                <?php } ?>
            </ul>
            
        <?php }
        else {?>

            <video <?php foreach( $block['second_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="twist__scd_image twist__scd_image--<?php echo esc_attr($block['style']); ?>">
                <source src="<?php echo esc_url($block['second_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['second_element']['video']['video_type']); ?>" >
            </video> 

        <?php }; ?>

    </div> 

</section>
<?php }; ?>

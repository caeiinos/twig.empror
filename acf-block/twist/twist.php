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

    <!-- first element -->
    <div class="twist__containerimg1 twist__containerimg1--<?php echo esc_attr($twist['style']); ?>">

        <?php if ($twist['first_element']['type'] == 'image') { ?>

            <img class="twist__img1 twist__img1--<?php echo esc_attr($twist['style']); ?>" src="<?php echo esc_url($twist['first_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($twist['first_element']['image']['image_alt']); ?>">

        <?php }
        elseif ($twist['first_element']['type'] == 'menu') {?>
            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($twist['style']); ?>">
                <?php foreach ((array) $twist['first_element']['menu']['menu_element'] as $menuEl) {  ?>
                    <li class="twist__menuitem twist__menuitem--<?php echo esc_attr($twist['style']); ?>">
                        <a class="twist__menulink twist__menulink--<?php echo esc_attr($twist['style']); ?>" href="<?php echo esc_url($menuEl['menu_url']) ?>">
                            <?php echo esc_html($menuEl['menu_title']) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        <?php } 
        elseif ($twist['first_element']['type'] == 'posts') {?>

            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($twist['style']); ?>">

                <?php foreach ($twist['first_element']['post']['related_post'] as $post) { ?>
                    <li class="twist__postitem twist__postitem--<?php echo esc_attr($twist['style']); ?>">
                        <a class="twist__postlink twist__postlink--<?php echo esc_attr($twist['style']); ?>" href="<?php the_permalink($post->ID); ?>">
                            <?php echo $post->post_title ?>
                        </a>
                        <div class="twist__postcontent twist__postcontent--<?php echo esc_attr($twist['style']); ?>">
                            <?php echo $post->post_content; ?>
                        </div>
                    </li>

                <?php } ?>
            </ul>
            
        <?php }
        else {?>

            <video <?php foreach( $twist['first_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="twist__img1 twist__img1--<?php echo esc_attr($twist['style']); ?>">
                <source src="<?php echo esc_url($twist['first_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($twist['first_element']['video']['video_type']); ?>" >
            </video> 

        <?php }; ?>

    </div> 

    <!-- second element -->
    <div class="twist__containerimg2 twist__containerimg2--<?php echo esc_attr($twist['style']); ?>">

        <?php if ($twist['second_element']['type'] == 'image') { ?>

            <img class="twist__img2 twist__img2--<?php echo esc_attr($twist['style']); ?>" src="<?php echo esc_url($twist['second_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($twist['second_element']['image']['image_alt']); ?>">

        <?php }
        elseif ($twist['second_element']['type'] == 'menu') {?>
            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($twist['style']); ?>">
                <?php foreach ($twist['second_element']['menu']['menu_element'] as $menuEl) {  ?>
                    <li class="twist__menuitem twist__menuitem--<?php echo esc_attr($twist['style']); ?>">
                        <a class="twist__menulink twist__menulink--<?php echo esc_attr($twist['style']); ?>" href="<?php echo esc_url($menuEl['menu_url']) ?>">
                            <?php echo esc_html($menuEl['menu_title']) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        <?php } 
        elseif ($twist['second_element']['type'] == 'posts') {?>

            <ul class="twist__menulist twist__menulist--<?php echo esc_attr($twist['style']); ?>">

                <?php foreach ((array) $twist['second_element']['post']['related_post'] as $post) { ?>
                    <li class="twist__postitem twist__postitem--<?php echo esc_attr($twist['style']); ?>">
                        <a class="twist__postlink twist__postlink--<?php echo esc_attr($twist['style']); ?>" href="<?php the_permalink($post->ID); ?>">
                            <?php echo $post->post_title ?>
                        </a>
                        <div class="twist__postcontent twist__postcontent--<?php echo esc_attr($twist['style']); ?>">
                            <?php echo $post->post_content; ?>
                        </div>
                    </li>

                <?php } ?>
            </ul>
            
        <?php }
        else {?>

            <video <?php foreach( $twist['second_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="twist__img2 twist__img2--<?php echo esc_attr($twist['style']); ?>">
                <source src="<?php echo esc_url($twist['second_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($twist['second_element']['video']['video_type']); ?>" >
            </video> 

        <?php }; ?>

    </div> 

</section>
<?php }; ?>

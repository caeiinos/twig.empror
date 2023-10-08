<?php
/**
 * Block Name: simple
 *
 * This is the template that displays the simple block.
 */

// create id attribute for specific styling
$id = 'simple--' . $block['id'];

// get simple block
$block = get_field('simple');

// style for include
$style = 'simple';

if ($block) { ?>

    <!-- simple block -->
    <section id="<?php echo $id; ?>" class="simple simple--<?php echo esc_attr($block['style']); ?>">

        <!-- simple title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>

        <!-- simple subtitle -->
        <?php include __DIR__.  '/../../components/subtitle/subtitle.php';?>

        <!-- simple text -->
        <?php include __DIR__.  '/../../components/text/text.php';?>             

        <!-- simple first element -->
        <div class="simple__fst_container simple__fst_container--<?php echo esc_attr($block['style']); ?>">

            <?php if ($block['first_element']['type'] == 'image') { ?>

                <!-- simple image -->
                <?php if (!empty($block['first_element']['image']['image']) && !empty($block['first_element']['image']['image_alt'])) { ?>         
                    <img class="simple__fst_image simple__fst_image--<?php echo esc_attr($block['style']); ?>" src="<?php echo esc_url($block['first_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($block['first_element']['image']['image_alt']); ?>">
                <?php } ?>

            <?php }
            elseif ($block['first_element']['type'] == 'menu') {?>

                <!-- simple menu -->
                <ul class="simple__menulist simple__menulist--<?php echo esc_attr($block['style']); ?>">

                    <?php if (!empty($block['first_element']['menu']['menu_element'])) {

                        foreach ((array) $block['first_element']['menu']['menu_element'] as $menuEl) {  ?>

                            <li class="simple__menuitem simple__menuitem--<?php echo esc_attr($block['style']); ?>">

                                <?php if (!empty($menuEl['menu_title']) && !empty($menuEl['menu_url'])) { ?>         
                                    <a class="simple__menulink simple__menulink--<?php echo esc_attr($block['style']); ?>" href="<?php echo esc_url($menuEl['menu_url']) ?>">
                                        <?php echo esc_html($menuEl['menu_title']) ?>
                                    </a>
                                <?php } ?>
                            </li>
                        <?php }
                    } ?>
                </ul>

            <?php } 
            elseif ($block['first_element']['type'] == 'posts') {?>

                <!-- simple posts -->
                <ul class="simple__menulist simple__menulist--<?php echo esc_attr($block['style']); ?>">

                    <?php if (!empty($block['first_element']['post']['related_post'])) {

                        foreach ($block['first_element']['post']['related_post'] as $post) { 
                            include __DIR__.  '/../../components/tease/tease.php';
                        }
                    } ?>
                </ul>
                
            <?php }
            else {?>

                <!-- simple video -->
                <?php if (!empty($block['first_element']['video']['video_attributs']) && !empty($block['first_element']['video']['video_type']) && !empty($block['first_element']['video']['video_url'])) { ?>                 
                    <video <?php foreach( $block['first_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="simple__fst_image simple__fst_image--<?php echo esc_attr($block['style']); ?>">
                        <source src="<?php echo esc_url($block['first_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($block['first_element']['video']['video_type']); ?>" >
                    </video> 
                <?php } ?>                

            <?php }; ?>

        </div> 

    </section>
<?php }; ?>

<?php
/**
 * Block Name: gallery
 *
 * This is the template that displays the gallery block.
 */

// create id attribute for specific styling
$id = 'gallery--' . $block['id'];

// get gallery block
$block = get_field('gallery');

// style for include
$style = 'gallery';

if ($block) { ?>

    <!-- gallery block -->
    <section id="<?php echo $id; ?>" class="gallery gallery--<?php echo esc_attr($block['style']); ?>">

        <!-- gallery title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>
        
        <?php if ($block['element']['type'] == 'posts') {?>

            <!-- gallery posts -->
            <ul class="gallery__menulist gallery__menulist--<?php echo esc_attr($block['style']); ?>">

                <?php foreach ((array) $block['element']['post']['related_post'] as $post) { ?>
                    <li class="gallery__postitem gallery__postitem--<?php echo esc_attr($block['style']); ?>">
                        <a class="gallery__postlink gallery__postlink--<?php echo esc_attr($block['style']); ?>" href="<?php the_permalink($post->ID); ?>">
                            <?php echo $post->post_title ?>
                        </a>
                        <div class="gallery__postcontent gallery__postcontent--<?php echo esc_attr($block['style']); ?>">
                            <?php echo $post->post_content; ?>
                        </div>
                    </li>

                <?php } ?>
            </ul>

        <?php } 
        else { ?>

            <!-- gallery images -->
            <ul class="gallery__menulist gallery__menulist--<?php echo esc_attr($block['style']); ?>">

                <?php foreach ((array) $block['element']['image_gallery'] as $img) { ?>

                    <li class="gallery__postitem gallery__postitem--<?php echo esc_attr($block['style']); ?>">
                        <div class="gallery__scd_conatiner gallery__scd_conatiner--<?php echo esc_attr($block['style']); ?>">
                            <img class="gallery__scd_image gallery__scd_image--<?php echo esc_attr($block['style']); ?> gallery__scd_image--<?php echo esc_attr($img['image']['image_style']); ?>" src="<?php echo esc_url($img['image']['image']['url']); ?>" alt="<?php echo esc_attr($img['image']['image_alt']); ?>">
                        </div> 
                    </li>

                <?php } ?>

            </ul>
            
        <?php } ?>
    </section>
<?php }; ?>

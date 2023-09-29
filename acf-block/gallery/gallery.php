<?php
/**
 * Block Name: gallery
 *
 * This is the template that displays the gallery block.
 */

// create id attribute for specific styling
$id = 'gallery--' . $block['id'];

$gallery = get_field('gallery');

if ($gallery) {
?>
<section id="<?php echo $id; ?>" class="gallery gallery--<?php echo esc_attr($gallery['style']); ?>">
    <h2 class="gallery__title gallery__title--<?php echo esc_attr($gallery['style']); ?>">
        <?php echo esc_html($gallery['title']); ?>
    </h2>
    <?php if ($gallery['element']['type'] == 'posts') {?>

        <ul class="gallery__menulist gallery__menulist--<?php echo esc_attr($gallery['style']); ?>">

            <?php foreach ((array) $gallery['element']['post']['related_post'] as $post) { ?>
                <li class="gallery__postitem gallery__postitem--<?php echo esc_attr($gallery['style']); ?>">
                    <a class="gallery__postlink gallery__postlink--<?php echo esc_attr($gallery['style']); ?>" href="<?php the_permalink($post->ID); ?>">
                        <?php echo $post->post_title ?>
                    </a>
                    <div class="gallery__postcontent gallery__postcontent--<?php echo esc_attr($gallery['style']); ?>">
                        <?php echo $post->post_content; ?>
                    </div>
                </li>

            <?php } ?>
        </ul>

    <?php } 
    else { ?>

        <ul class="gallery__menulist gallery__menulist--<?php echo esc_attr($gallery['style']); ?>">

            <?php foreach ((array) $gallery['element']['image_gallery'] as $img) { ?>

                <li class="gallery__postitem gallery__postitem--<?php echo esc_attr($gallery['style']); ?>">
                    <div class="gallery__containerimg2 gallery__containerimg2--<?php echo esc_attr($gallery['style']); ?>">
                        <img class="gallery__img2 gallery__img2--<?php echo esc_attr($gallery['style']); ?> gallery__img2--<?php echo esc_attr($img['image']['image_style']); ?>" src="<?php echo esc_url($img['image']['image']['url']); ?>" alt="<?php echo esc_attr($img['image']['image_alt']); ?>">
                    </div> 
                </li>

            <?php } ?>

        </ul>
        
    <?php } ?>
</section>
<?php }; ?>

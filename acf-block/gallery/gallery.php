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
    <?php
        $related_post = $gallery['related_post'];
        if( $related_post ): ?>
            <ul>
            <?php foreach( $related_post as $post ): 

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <li>
                    <a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a>
                    <span>A custom field from this post: <?php esc_html(the_field( 'field_name' )); ?></span>
                </li>
            <?php endforeach; ?>
            </ul>
            <?php 
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
</section>
<?php }; ?>

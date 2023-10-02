<?php
/**
 * Block Name: simple
 *
 * This is the template that displays the simple block.
 */

// create id attribute for specific styling
$id = 'simple--' . $block['id'];

$simple = get_field('simple');

if ($simple) {
?>
<section id="<?php echo $id; ?>" class="simple simple--<?php echo esc_attr($simple['style']); ?>">
    <h2 class="simple__title simple__title--<?php echo esc_attr($simple['style']); ?>">
        <?php echo esc_html($simple['title']); ?>
    </h2>
    <h3 class="simple__subtitle simple__subtitle--<?php echo esc_attr($simple['style']); ?>">
        <?php echo esc_html($simple['subtitle']); ?>
    </h3>
    <div class="simple__text simple__text--<?php echo esc_attr($simple['style']); ?>">
        <?php echo esc_html($simple['text']); ?>
    </div>

    <!-- first element -->
    <div class="simple__containerimg1 simple__containerimg1--<?php echo esc_attr($simple['style']); ?>">

        <?php if ($simple['first_element']['type'] == 'image') { ?>

            <img class="simple__img1 simple__img1--<?php echo esc_attr($simple['style']); ?>" src="<?php echo esc_url($simple['first_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($simple['first_element']['image']['image_alt']); ?>">

        <?php }
        elseif ($simple['first_element']['type'] == 'menu') {?>
            <ul class="simple__menulist simple__menulist--<?php echo esc_attr($simple['style']); ?>">
                <?php foreach ((array) $simple['first_element']['menu']['menu_element'] as $menuEl) {  ?>
                    <li class="simple__menuitem simple__menuitem--<?php echo esc_attr($simple['style']); ?>">
                        <a class="simple__menulink simple__menulink--<?php echo esc_attr($simple['style']); ?>" href="<?php echo esc_url($menuEl['menu_url']) ?>">
                            <?php echo esc_html($menuEl['menu_title']) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        <?php } 
        elseif ($simple['first_element']['type'] == 'posts') {?>

            <ul class="simple__menulist simple__menulist--<?php echo esc_attr($simple['style']); ?>">

                <?php foreach ($simple['first_element']['post']['related_post'] as $post) { ?>
                    <li class="simple__postitem simple__postitem--<?php echo esc_attr($simple['style']); ?>">
                        <a class="simple__postlink simple__postlink--<?php echo esc_attr($simple['style']); ?>" href="<?php the_permalink($post->ID); ?>">
                            <?php echo $post->post_title ?>
                        </a>
                        <div class="simple__postcontent simple__postcontent--<?php echo esc_attr($simple['style']); ?>">
                            <?php echo $post->post_content; ?>
                        </div>
                    </li>

                <?php } ?>
            </ul>
            
        <?php }
        else {?>

            <video <?php foreach( $simple['first_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="simple__img1 simple__img1--<?php echo esc_attr($simple['style']); ?>">
                <source src="<?php echo esc_url($simple['first_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($simple['first_element']['video']['video_type']); ?>" >
            </video> 

        <?php }; ?>

    </div> 

</section>
<?php }; ?>

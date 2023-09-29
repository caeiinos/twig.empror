<?php
/**
 * Block Name: twin
 *
 * This is the template that displays the twin block.
 */

// create id attribute for specific styling
$id = 'twin--' . $block['id'];

$twin = get_field('twin');

if ($twin) {
?>
<section id="<?php echo $id; ?>" class="twin twin--<?php echo esc_attr($twin['style']); ?>">
    <h2 class="twin__title twin__title--<?php echo esc_attr($twin['style']); ?>">
        <?php echo esc_html($twin['title']); ?>
    </h2>
    <h3 class="twin__subtitle twin__subtitle--<?php echo esc_attr($twin['style']); ?>">
        <?php echo esc_html($twin['subtitle']); ?>
    </h3>
    <div class="twin__text twin__text--<?php echo esc_attr($twin['style']); ?>">
        <?php echo esc_html($twin['text']); ?>
    </div>

    <!-- first element -->
    <div class="twin__containerimg1 twin__containerimg1--<?php echo esc_attr($twin['style']); ?>">

        <?php if ($twin['first_element']['type'] == 'image') { ?>

            <img class="twin__img1 twin__img1--<?php echo esc_attr($twin['style']); ?>" src="<?php echo esc_url($twin['first_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($twin['first_element']['image']['image_alt']); ?>">

        <?php }
        else {?>

            <video <?php foreach( $twin['first_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="twin__img1 twin__img1--<?php echo esc_attr($twin['style']); ?>">
                <source src="<?php echo esc_url($twin['first_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($twin['first_element']['video']['video_type']); ?>" >
            </video> 

        <?php }; ?>

    </div> 

    <!-- second element -->
    <div class="twin__containerimg2 twin__containerimg2--<?php echo esc_attr($twin['style']); ?>">

        <?php if ($twin['second_element']['type'] == 'image') { ?>

            <img class="twin__img2 twin__img2--<?php echo esc_attr($twin['style']); ?>" src="<?php echo esc_url($twin['second_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($twin['second_element']['image']['image_alt']); ?>">

        <?php }
        else {?>

            <video <?php foreach( $twin['second_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="twin__img2 twin__img2--<?php echo esc_attr($twin['style']); ?>">
                <source src="<?php echo esc_url($twin['second_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($twin['second_element']['video']['video_type']); ?>" >
            </video> 

        <?php }; ?>

    </div> 

</section>
<?php }; ?>

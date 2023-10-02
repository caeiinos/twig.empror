<?php
/**
 * Block Name: vision
 *
 * This is the template that displays the vision block.
 */

// create id attribute for specific styling
$id = 'vision--' . $block['id'];

$vision = get_field('vision');

if ($vision) {
?>
<section id="<?php echo $id; ?>" class="vision vision--<?php echo esc_attr($vision['style']); ?>">

    <h2 class="vision__title vision__title--<?php echo esc_attr($vision['style']); ?>">
        <?php echo esc_html($vision['title']); ?>
    </h2>

    <h3 class="vision__subtitle vision__subtitle--<?php echo esc_attr($vision['style']); ?>">
        <?php echo esc_html($vision['subtitle']); ?>
    </h3>

    <div class="vision__text vision__text--<?php echo esc_attr($vision['style']); ?>">
        <?php echo esc_html($vision['text']); ?>
    </div>

    <?php if ($vision['first_element']['type'] == 'image') { ?>

        <div class="vision__containerimg1 vision__containerimg1--<?php echo esc_attr($vision['style']); ?>">
            <img class="vision__img1 vision__img1--<?php echo esc_attr($vision['style']); ?>" src="<?php echo esc_url($vision['first_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($vision['first_element']['image']['image_alt']); ?>">
        </div> 

    <?php }
    else { ?>

        <div class="vision__containerimg1 vision__containerimg1--<?php echo esc_attr($vision['style']); ?>">
            <div class="vision__img1 vision__img1--<?php echo esc_attr($vision['style']); ?>">
                <video <?php foreach( $vision['first_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="vision__img1 vision__img1--<?php echo esc_attr($vision['style']); ?>">
                    <source src="<?php echo esc_url($vision['first_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($vision['first_element']['video']['video_type']); ?>" >
                </video>                 
            </div>
        </div> 

    <?php }; ?>

    <?php if ($vision['second_element']['type'] == 'image') { ?>

        <div class="vision__containerimg2 vision__containerimg2--<?php echo esc_attr($vision['style']); ?>">
            <img class="vision__img2 vision__img2--<?php echo esc_attr($vision['style']); ?>" src="<?php echo esc_url($vision['second_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($vision['second_element']['image']['image_alt']); ?>">
        </div> 

    <?php }
    else { ?>

        <div class="vision__containerimg2 vision__containerimg2--<?php echo esc_attr($vision['style']); ?>">
            <video <?php foreach( $vision['second_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="vision__img2 vision__img2--<?php echo esc_attr($vision['style']); ?>">
                <source src="<?php echo esc_url($vision['second_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($vision['second_element']['video']['video_type']); ?>" >
            </video> 
        </div> 

    <?php }; ?>

    <?php if ($vision['third_element']['type'] == 'image') { ?>

        <div class="vision__containerimg3 vision__containerimg3--<?php echo esc_attr($vision['style']); ?>">
            <img class="vision__img3 vision__img3--<?php echo esc_attr($vision['style']); ?>" src="<?php echo esc_url($vision['third_element']['image']['image']['url']); ?>" alt="<?php echo esc_attr($vision['third_element']['image']['image_alt']); ?>">
        </div> 

    <?php }
    else { ?>

        <div class="vision__containerimg3 vision__containerimg3--<?php echo esc_attr($vision['style']); ?>">
            <video <?php foreach( $vision['third_element']['video']['video_attributs'] as $attr ){ echo esc_attr($attr . ' ') ; } ?> class="vision__img3 vision__img3--<?php echo esc_attr($vision['style']); ?>">
                <source src="<?php echo esc_url($vision['third_element']['video']['video_url']); ?>" type="video/<?php echo esc_attr($vision['third_element']['video']['video_type']); ?>" >
            </video> 
        </div> 

    <?php }; ?>

</section>
<?php }; ?>

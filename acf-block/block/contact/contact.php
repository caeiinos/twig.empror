<?php
/**
 * Block Name: contact
 *
 * This is the template that displays the contact block.
 */

// create id attribute for specific styling
$id = 'contact--' . $block['id'];

//get contact block
$block = get_field('contact');

// style for include
$style = 'contact';

if ($block) { ?>

    <!-- contact block -->
    <section id="<?php echo $id; ?>" class="contact contact--<?php echo esc_attr($block['style']); ?>">

        <!-- contact title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>

        <!-- contact mail -->
        <?php if (!empty($block['mail'])) { ?>
            <a href="mailto:<?php echo esc_url($block['mail']); ?>" class="contact__mail contact__mail--<?php echo esc_attr($block['style']); ?>">
                <?php echo esc_html($block['mail']); ?>
            </a>
        <?php } ?>

        <!-- contact phone -->
        <?php if (!empty($block['phone'])) { ?>
            <p class="contact__phone contact__phone--<?php echo esc_attr($block['style']); ?>">
                <?php echo esc_html($block['phone']); ?>
            </p>
        <?php } ?>        

        <!-- contact address -->
        <?php if ($block['address']) { ?>        
            <a href="<?php if (!empty($block['address']['address_url'])) { echo esc_url($block['address']['address_url']); } ?>" class="contact__address contact__address--<?php echo esc_attr($block['style']); ?>">

                <?php if (!empty($block['address']['street'])) { ?>                  
                    <span>
                        <?php echo esc_html($block['address']['street']); ?>
                    </span>
                <?php } 
                if (!empty($block['address']['city'])) { ?>   
                    <span>
                        <?php echo esc_html($block['address']['city']); ?>
                    </span>
                <?php } 
                if (!empty($block['address']['country'])) { ?>   
                    <span>
                        <?php echo esc_html($block['address']['country']); ?>   
                    </span>
                <?php } ?> 

            </a>
        <?php } ?>
        
        <!-- contact social -->
        <?php if (!empty($block['socials'])) {
            foreach ($block['socials'] as $social) { ?>
                <ul class="contact__list contact__list--<?php echo esc_attr($block['style']); ?>">
                    <li class="contact__item contact__item--<?php echo esc_attr($block['style']); ?>">
                        <?php if (!empty($social['social_url']) && !empty($social['social_title'])) { ?>                    
                            <a href="<?php echo esc_url($social['social_url']) ?>" class="contact__content contact__content--<?php echo esc_attr($block['style']); ?>">
                                <?php echo esc_html($social['social_title']) ?>
                            </a> 
                        <?php } ?>   
                    </li>
                </ul>
            <?php }
        } ?>

    </section>
<?php }; ?>
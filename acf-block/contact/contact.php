<?php
/**
 * Block Name: contact
 *
 * This is the template that displays the contact block.
 */

// create id attribute for specific styling
$id = 'contact--' . $block['id'];

$contact = get_field('contact');

if ($contact) { ?>

    <!-- contact block -->
    <section id="<?php echo $id; ?>" class="contact contact--<?php echo esc_attr($contact['style']); ?>">

        <!-- contact title -->
        <?php if (!empty($contact['title'])) { ?>
            <h2 class="contact__title contact__title--<?php echo esc_attr($contact['style']); ?>">
                <?php echo esc_html($contact['title']); ?>
            </h2>
        <?php } ?>

        <!-- contact mail -->
        <?php if (!empty($contact['mail'])) { ?>
            <a href="mailto:<?php echo esc_url($contact['mail']); ?>" class="contact__mail contact__mail--<?php echo esc_attr($contact['style']); ?>">
                <?php echo esc_html($contact['mail']); ?>
            </a>
        <?php } ?>

        <!-- contact phone -->
        <?php if (!empty($contact['phone'])) { ?>
            <p class="contact__phone contact__phone--<?php echo esc_attr($contact['style']); ?>">
                <?php echo esc_html($contact['phone']); ?>
            </p>
        <?php } ?>        

        <!-- contact address -->
        <?php if ($contact['address']) { ?>        
            <a href="<?php if (!empty($contact['address']['address_url'])) { echo esc_url($contact['address']['address_url']); } ?>" class="contact__address contact__address--<?php echo esc_attr($contact['style']); ?>">

                <?php if (!empty($contact['address']['street'])) { ?>                  
                    <span>
                        <?php echo esc_html($contact['address']['street']); ?>
                    </span>
                <?php } 
                if (!empty($contact['address']['city'])) { ?>   
                    <span>
                        <?php echo esc_html($contact['address']['city']); ?>
                    </span>
                <?php } 
                if (!empty($contact['address']['country'])) { ?>   
                    <span>
                        <?php echo esc_html($contact['address']['country']); ?>   
                    </span>
                <?php } ?> 

            </a>
        <?php } ?>
        
        <!-- contact social -->
        <?php if (!empty($contact['socials'])) {
            foreach ($contact['socials'] as $social) { ?>
                <ul class="contact__list contact__list--<?php echo esc_attr($contact['style']); ?>">
                    <li class="contact__item contact__item--<?php echo esc_attr($contact['style']); ?>">
                        <?php if (!empty($social['social_url']) && !empty($social['social_title'])) { ?>                    
                            <a href="<?php echo esc_url($social['social_url']) ?>" class="contact__content contact__content--<?php echo esc_attr($contact['style']); ?>">
                                <?php echo esc_html($social['social_title']) ?>
                            </a> 
                        <?php } ?>   
                    </li>
                </ul>
            <?php }
        } ?>

    </section>
<?php }; ?>
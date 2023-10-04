<?php
/**
 * Block Name: faq
 *
 * This is the template that displays the faq block.
 */

// create id attribute for specific styling
$id = 'faq--' . $block['id'];

$faq = get_field('faq');

if ($faq) { ?>

    <!-- faq block -->
    <section id="<?php echo $id; ?>" class="faq faq--<?php echo esc_attr($faq['style']); ?>">

        <!-- faq title -->
        <?php if ($faq['title']) { ?>        
            <h2 class="faq__title faq__title--<?php echo esc_attr($faq['style']); ?>">
                <?php echo esc_html($faq['title']); ?>
            </h2>
        <?php } ?>

        <!-- faq questions -->
        <?php if ($faq['questions']) {

            foreach ($faq['questions'] as $question) { ?>
                <section class="faq__content faq__content--<?php echo esc_attr($faq['style']); ?>">
                    <?php if ($question['question']) { ?> 
                        <h3 class="faq__question faq__question--<?php echo esc_attr($faq['style']); ?>">
                            <?php echo esc_html($question['question']) ?>
                        </h3>
                    <?php }
                    if ($question['answer']) { ?>                     
                        <p class="faq__answer faq__answer--<?php echo esc_attr($faq['style']); ?>">
                            <?php echo esc_html($question['answer']) ?>
                        </p>
                    <?php } ?>
                </section>
            <?php }
        } ?>
    </section>
<?php }; ?>
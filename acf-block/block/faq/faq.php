<?php
/**
 * Block Name: faq
 *
 * This is the template that displays the faq block.
 */

// create id attribute for specific styling
$id = 'faq--' . $block['id'];

// get faq block field
$block = get_field('faq');

// style for include
$style = 'faq';

if ($block) { ?>

    <!-- faq block -->
    <section id="<?php echo $id; ?>" class="faq faq--<?php echo esc_attr($block['style']); ?>">

        <!-- faq title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>

        <!-- faq questions -->
        <?php if (!empty($block['questions'])) {

            foreach ($block['questions'] as $question) { ?>
            
                <section class="faq__content faq__content--<?php echo esc_attr($block['style']); ?>">

                    <div class="faq__questions faq__questions--<?php echo esc_attr($block['style']); ?>">

                        <?php if (!empty($question['question'])) { ?> 

                            <!-- faq question -->
                            <h3 class="faq__question faq__question--<?php echo esc_attr($block['style']); ?>">
                                <?php echo esc_html($question['question']) ?>
                            </h3>

                        <?php }
                        if (!empty($question['answer'])) { ?>   

                            <!-- faq answer -->
                            <p class="faq__answer faq__answer--<?php echo esc_attr($block['style']); ?>">
                                <?php echo esc_html($question['answer']) ?>
                            </p>
                        <?php } ?>                    
                    </div>
                </section>
            <?php }
        } ?>
    </section>
<?php }; ?>
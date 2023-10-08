<?php
/**
 * Block Name: quote
 *
 * This is the template that displays the quote block.
 */

// create id attribute for specific styling
$id = 'quote--' . $block['id'];

// get quote block
$block = get_field('quote');

// style for include
$style = 'quote';

if ($block) { ?>

    <!-- quote block -->
    <section id="<?php echo $id; ?>" class="quote quote--<?php echo esc_attr($block['style']); ?>">

        <!-- quote title -->
        <?php include __DIR__.  '/../../components/title/title.php';?>

        <!-- quote subtitle -->
        <?php include __DIR__.  '/../../components/subtitle/subtitle.php';?>

        <!-- quote text -->
        <?php include __DIR__.  '/../../components/text/text.php';?>
        
    </section>
<?php }; ?>

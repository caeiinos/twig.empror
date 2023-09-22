<?php
/**
 * Block Name: quote
 *
 * This is the template that displays the quote block.
 */

// create id attribute for specific styling
$id = 'quote--' . $block['id'];

$quote = get_field('quote');

if ($quote) {
?>
<section id="<?php echo $id; ?>" class="quote quote--<?php echo esc_attr($quote['style']); ?>">
    <h2 class="quote__title quote__title--<?php echo esc_attr($quote['style']); ?>">
        <?php echo esc_html($quote['title']); ?>
    </h2>
    <h3 class="quote__subtitle quote__subtitle--<?php echo esc_attr($quote['style']); ?>">
        <?php echo esc_html($quote['subtitle']); ?>
    </h3>
    <div class="quote__text quote__text--<?php echo esc_attr($quote['style']); ?>">
        <?php echo $quote['text']; ?>
    </div>
</section>
<?php }; ?>

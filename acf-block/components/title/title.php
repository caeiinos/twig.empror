<?php if (!empty($block['title'])) { ?>
    <h2 class="<?php echo $style; ?>__title <?php echo $style; ?>__title--<?php echo esc_attr($block['style']); ?>">
        <?php echo esc_html($block['title']); ?>
    </h2>
<?php } ?>
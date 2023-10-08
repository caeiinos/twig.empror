<?php if (!empty($block['subtitle'])) { ?> 
    <h3 class="<?php echo $style; ?>__subtitle <?php echo $style; ?>__subtitle--<?php echo esc_attr($block['style']); ?>">
        <?php echo esc_html($block['subtitle']); ?>
    </h3>
<?php } ?>
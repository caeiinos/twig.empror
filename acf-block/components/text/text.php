<?php if (!empty($block['text'])) { ?>         
    <div class="<?php echo $style; ?>__text <?php echo $style; ?>__text--<?php echo esc_attr($block['style']); ?>">
        <?php echo esc_html($block['text']); ?>
    </div>
<?php } ?>
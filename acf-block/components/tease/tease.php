<li class="simple__postitem simple__postitem--<?php echo esc_attr($block['style']); ?>">
    <a class="simple__postlink simple__postlink--<?php echo esc_attr($block['style']); ?>" href="<?php the_permalink($post->ID); ?>">
        <?php echo $post->post_title ?>
    </a>
    <div class="simple__postcontent simple__postcontent--<?php echo esc_attr($block['style']); ?>">
        <?php 
            $text_preview = get_field( 'text_preview', $post->ID );
            echo $text_preview; 
        ?>
    </div>
</li>
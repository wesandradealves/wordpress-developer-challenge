<nav class="post-info d-flex align-items-stretch">
    <?php 
        $terms = wp_get_object_terms( $post->ID, 'video_type' );

        if(count($terms)) :
            foreach ($terms as $key => $term) :
                ?>
                <span class="tag"><a href="<?php echo get_term_link($term); ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></span>
                <?php 
            endforeach;
        endif;

        if(get_field('bx_play_video_duration')) :
            ?>
            <span class="tag"><?php echo get_field('bx_play_video_duration'); ?>m</span>
            <?php 
        endif;
    ?>
</nav>
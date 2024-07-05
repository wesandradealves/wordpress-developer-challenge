<article id="<?php echo get_post_type().'_'.get_the_id(); ?>" class="movie-card <?php echo isset($args['classes']) ? $args['classes'] : '' ?>">
    <div class="inner d-flex flex-column" onclick="location.href = '<?php the_permalink(); ?>';">
        <?php if(get_the_post_thumbnail_url()) : ?> 
            <img class="img-fluid thumbnail" src="<?php the_post_thumbnail_url(); ?>" loading="lazy" alt="<?php the_title(); ?>">
            <span class="tag me-auto"><?php echo get_field('bx_play_video_duration'); ?>m</span>
            <h3 class="title"><?php the_title(); ?></h3>
        <?php endif; ?>
    </div>
</article>
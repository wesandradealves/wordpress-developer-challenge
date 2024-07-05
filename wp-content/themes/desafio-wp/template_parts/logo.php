
<span class="logo">
    <a title="<?php echo get_bloginfo('title'); ?>" href="<?php echo site_url(); ?>">
        <?php if(get_field('settings_logo', 'option')) : ?>
            <img loading="lazy" class="img-fluid" src="<?php echo get_field('settings_logo', 'option'); ?>" alt="<?php echo get_bloginfo('title'); ?>">
        <?php else : ?>
            <?php echo get_bloginfo('title'); ?>
        <?php endif; ?>
    </a>
</span>
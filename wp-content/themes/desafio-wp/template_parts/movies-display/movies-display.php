<div class="movies-display data-<?php echo $args['term']->slug; ?>">
    <div class="container d-flex flex-column">
        <?php if(!is_archive()): ?>
            <h2 class="d-block title"><?php echo $args['term']->name; ?></h2>
        <?php endif; ?>
        <?php
        $query = new WP_Query(
            array(
                'post_type' => 'pelicula',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => $args['term']->taxonomy,
                        'field' => 'slug',
                        'terms' => $args['term']->slug,
                    )
                )
            )
        );

        if ($query->have_posts()):
            ?>
            <div class="<?php if(!is_archive()): ?> movies-carousel <?php else : ?> movies-grid d-flex align-items-stretch flex-wrap <?php endif; ?>">
                <?php
                    while ($query->have_posts()):
                        $query->the_post();

                        get_template_part('template_parts/movie-card/movie-card', null, array(
                            'classes' => is_archive() ? 'col-6 col-md-4' : ''
                        ));
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                ?>
            </div>
            <?php
        endif;
        ?>
    </div>
</div>
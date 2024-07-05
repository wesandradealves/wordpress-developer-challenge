<?php

$query = new WP_Query( array(
    'post_type' => 'pelicula',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'post_status'    => array( 'publish' )
) );  

if($query->have_posts()) :
    ?>
    <section class="banner">
        <?php
            while ( $query->have_posts() ) : 
                $query->the_post();
                ?>
                <article class="banner-inner overflow-hidden" <?php if(get_the_post_thumbnail_url()) : ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>)" <?php endif; ?>>
                    <div class="container d-flex flex-column justify-content-center">
                        <?php get_template_part('template_parts/post-info', null); ?>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <?php get_template_part('template_parts/button', null, array( 
                            'label' => 'Mais informações',
                            'href' => get_the_permalink(),
                            'classes' => 'animate__animated me-auto',
                        )); ?>
                    </div>
                </article>
                <?php 
            endwhile;
            wp_reset_query();
            wp_reset_postdata();   
        ?>
    </section>
    <?php   
endif;
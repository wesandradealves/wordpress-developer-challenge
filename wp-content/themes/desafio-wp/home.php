<?php get_header(); ?>
<?php get_template_part('template_parts/banner/banner', null); ?>
<?php
$terms = get_terms([
    'post_type' => 'pelicula',
    'taxonomy' => 'video_type',
    'orderby' => 'term_order',
    'hide_empty' => false
]);

if (count($terms)):
    ?>
    <section class="movies d-flex flex-column">
        <?php
            foreach ($terms as $key => $term):
                get_template_part('template_parts/movies-display/movies-display', null, array( 
                    'term' => $term
                ));
            endforeach;
        ?>
    </section>
<?php

endif;
?>
<?php get_footer(); ?>
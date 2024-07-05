<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<section class="movies d-flex flex-column">
    <div class="container d-flex flex-column flex-lg-row align-items-start flex-wrap">
        <div class="col-lg-6 mb-5 mb-lg-0 taxonomy-heading">
            <div class="taxonomy-heading-inner d-flex flex-column">
                <h2 class="d-block title"><?php echo $term->name; ?></h2>
                <p><?php echo $term->description; ?></p>
            </div>
        </div>
        <div class="flex-fill">
            <?php
                get_template_part('template_parts/movies-display/movies-display', null, array( 
                    'term' => $term
                ));
            ?> 
        </div>
    </div>
</section>
<?php get_footer(); ?>
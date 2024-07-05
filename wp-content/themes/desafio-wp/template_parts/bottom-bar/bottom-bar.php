<?php 
    $terms = get_terms([
        'post_type' => 'pelicula',
        'taxonomy' => 'video_type',
        'orderby' => 'term_order',
        'hide_empty' => false
    ]);

    if($terms) :
?>

<nav class="bottom-bar d-flex d-md-none flex-wrap justify-content-center align-items-center">
    <?php 
        foreach ($terms as $key => $term):
            ?>
            <a href="<?php echo get_term_link($term); ?>" class="nav-link d-flex flex-column justify-content-center align-items-center text-center">
                <img src="<?php echo get_field("imagem", $term); ?>" loading="lazy" alt="<?php echo $term->name; ?>">
                <span><?php echo $term->name; ?></span>
            </a>
            <?php 
        endforeach;
    ?>
</nav>

<?php endif; ?>


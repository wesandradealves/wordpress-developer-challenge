<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            ?>
            <section id="primary" class="d-flex flex-column">
                <div class="heading">
                    <div class="container d-flex flex-column">
                        <?php get_template_part('template_parts/post-info', null); ?>
                        <h1 clas="title d-block"><?php the_title(); ?></h1>
                    </div>
                </div>

                <!-- <?php 
                    if(get_field("bx_play_video_ID")) :
                        ?>
                        <div class="video-player">
                            <div class="container">
                                <?php 
                                    if (strpos(get_field("bx_play_video_ID"), "?v=") !== false) :
                                        $url = explode("?v=", get_field("bx_play_video_ID"));
                                        $vid = end($url);
                                        $thumbnail = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : "https://img.youtube.com/vi/".$vid."/0.jpg";
                                        ?>
                                        <div data-vid="<?php echo $vid; ?>" class="video-display yu2fvl overflow-hidden" style="background-image: url(<?php echo $thumbnail; ?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="89.563" height="89.563" viewBox="0 0 89.563 89.563"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M45.781,1A44.781,44.781,0,1,0,90.563,45.781,44.834,44.834,0,0,0,45.781,1ZM64.325,49.168,39.9,65.452a4.07,4.07,0,0,1-6.33-3.387V29.5a4.068,4.068,0,0,1,6.326-3.387L64.321,42.394a4.07,4.07,0,0,1,0,6.774Z" transform="translate(-1 -1)"/></svg>
                                        </div>
                                        <?php 
                                    endif;
                                ?>
                            </div>
                        </div>                    
                        <?php 
                    endif; 
                ?> -->

                <div class="content">
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <?php 
        endwhile; 
    endif;
?>

<?php get_footer(); ?>
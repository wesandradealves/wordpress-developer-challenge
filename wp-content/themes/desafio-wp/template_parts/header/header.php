<header class="header">
    <div class="container d-flex align-items-center justify-content-center">
        <?php get_template_part('template_parts/logo', null); ?>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main',
                    'menu_class' => 'menu d-flex align-items-center justify-content-end',
                    'container' => 'nav',
                    'container_class' => 'navigation flex-fill d-none d-md-flex justify-content-end'
                )
            );
        ?>
    </div>
</header>
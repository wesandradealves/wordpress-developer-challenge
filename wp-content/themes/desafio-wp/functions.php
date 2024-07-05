<?php

require_once(__DIR__ ."/inc/settings.php");
function wp_before_admin_bar_render()
{

    echo '

        <style type="text/css">

        </style>

    ';

}

function remove_menus()
{
    global $post;

    remove_menu_page("jetpack"); //Jetpack*

    remove_menu_page("edit.php"); //Posts;

    remove_menu_page( 'edit.php?post_type=page' );    //Pages
}

function prefix_add_footer_styles()
{
    wp_enqueue_style('overwrites', get_template_directory_uri() . '/assets/css/overwrites.css', array(), false, 'all');
    wp_enqueue_script('commons', get_template_directory_uri() . "/assets/js/main.js", array(), false, true);
}

function prefix_add_header_styles()
{
    wp_enqueue_script(
        "jquery",
        "//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js",
        [],
        false,
        false
    );
    wp_enqueue_style(
        "bootstrap-grid",
        "//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-grid.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "bootstrap-reboot",
        "//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-reboot.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "bootstrap-utilities",
        "//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-utilities.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_script(
        "slick",
        "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js",
        [],
        false,
        true
    );   
    wp_enqueue_style(
        "slick",
        "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css",
        [],
        null,
        "all"
    );      
    wp_enqueue_style(
        "slick-theme",
        "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css",
        [],
        null,
        "all"
    );          
    wp_enqueue_script(
        "jqueryyu2fvl",
        get_template_directory_uri() . "/assets/js/jquery.yu2fvl.min.js",
        [],
        false,
        true
    );        
    wp_enqueue_style(
        "jqueryyu2fvl",
        get_stylesheet_directory_uri() . "/assets/css/jquery.yu2fvl.css",
        [],
        null,
        "all"
    );     
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), false, 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
}

function disable_default_dashboard_widgets()
{
    remove_meta_box("dashboard_right_now", "dashboard", "core");

    remove_meta_box("dashboard_recent_comments", "dashboard", "core");

    remove_meta_box("dashboard_incoming_links", "dashboard", "core");

    remove_meta_box("dashboard_plugins", "dashboard", "core");

    remove_meta_box("dashboard_quick_press", "dashboard", "core");

    remove_meta_box("dashboard_recent_drafts", "dashboard", "core");

    remove_meta_box("dashboard_primary", "dashboard", "core");

    remove_meta_box("dashboard_secondary", "dashboard", "core");
}

function wpb_custom_new_menu()
{
    register_nav_menu("main", __("Main"));
}

function atg_menu_classes($classes, $item, $args)
{
    $classes[] = "nav-item";
    return $classes;
}

function add_menu_link_class($atts, $item, $args)
{
    $atts["class"] = "nav-link";
    return $atts;
}

if (function_exists("register_sidebar")) {
    register_sidebar([
        "id" => "sidebar",
        "name" => __("Sidebar"),
        "before_widget" => '<aside id="%1$s" class="widget %2$s">',
        "after_widget" => "</aside>",
        "before_title" => "",
        "after_title" => "",
    ]);
}

add_post_type_support('page', 'excerpt');
add_theme_support("post-thumbnails");
add_filter("nav_menu_link_attributes", "add_menu_link_class", 1, 3);
add_filter("nav_menu_css_class", "atg_menu_classes", 1, 3);
add_action("get_footer", "prefix_add_footer_styles");
add_action("init", "wpb_custom_new_menu");
add_action("wp_enqueue_scripts", "prefix_add_header_styles");
add_action("admin_menu", "remove_menus");
add_action("admin_menu", "disable_default_dashboard_widgets");
add_action('wp_before_admin_bar_render', 'wp_before_admin_bar_render');
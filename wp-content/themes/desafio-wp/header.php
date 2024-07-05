<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') . (is_front_page() ? ' - '.bloginfo('description') : wp_title('')); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="wrap" class="d-flex w-100 flex-column justify-content-start overflow-hidden">
        <a class="skip-link screen-reader-text" href="#content">
            <?php
            /* translators: Hidden accessibility text. */
            esc_html_e('Skip to content', 'twentytwentyone');
            ?>
        </a>
        <?php get_template_part('template_parts/header/header', null); ?>
        <main class="main">
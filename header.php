<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="<?php echo esc_url( home_url( add_query_arg( [], $_SERVER['REQUEST_URI'] ) ) ); ?>" />
<link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/img/background-web-1.webp">    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
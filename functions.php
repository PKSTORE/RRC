<?php
function rrcwebsite_enqueue_styles()
{
    wp_enqueue_style(
        'rrcwebsite-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'rrcwebsite_enqueue_styles');
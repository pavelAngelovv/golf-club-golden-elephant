<?php
function golf_club_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery']);
}
add_action('after_setup_theme', 'golf_club_setup');

function golf_club_enqueue_scripts() {
    wp_enqueue_style(
        'golf-club-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0.0'
    );
    wp_enqueue_script(
        'golf-club-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'golf_club_enqueue_scripts');
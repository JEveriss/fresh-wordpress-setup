<?php
//Disable Guttenburg Editor
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
    return false;
}
// Load the theme stylesheets
function theme_assets()
{
    // Load all of the styles that need to appear on all pages
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_assets');

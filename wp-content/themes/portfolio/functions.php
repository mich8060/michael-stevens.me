<?php

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );

if(function_exists('add_theme_support')){
    // Add Menu Support
    add_theme_support('menus');
    add_theme_support('post-thumbnails'); 
    add_theme_support('custom-header');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('quote'));
}

function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_menu');

function five_posts_on_homepage( $query ) {
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('posts_per_page', 5);
    }
}
add_action( 'pre_get_posts', 'five_posts_on_homepage' );

?>

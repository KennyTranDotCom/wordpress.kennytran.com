<?php

// Remove admin bar for logged in users
add_filter('show_admin_bar', '__return_false');

// Enqueue custom CSS file for login page
function KennyTranDotCom_login_css() {
    wp_enqueue_style(
        'login_css',
        get_template_directory_uri() . '/style-login.css'
    );
}
add_action('login_enqueue_scripts', 'KennyTranDotCom_login_css');

// Customise logo link on login page
function KennyTranDotCom_login_headerurl() {
    return home_url();
}
add_filter('login_headerurl', 'KennyTranDotCom_login_headerurl');

// Customise logo title
function KennyTranDotCom_login_logo_title() {
    return get_option('blogname');
}
add_filter('login_headertext', 'KennyTranDotCom_login_logo_title');
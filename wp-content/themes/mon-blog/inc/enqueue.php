<?php

function mon_theme() {        
        wp_enqueue_style(
            'main-style', 
            get_theme_file_uri('public/css/style.css'),
            [],
            '20201304',
            'all'
        );
        
        wp_enqueue_script(
            'app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '20201304',
            true
        );
    }

function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

function register_my_menus() {
    register_nav_menus(
    array(
    'private-menu' => __( 'Menu Privé' ),
    'footer-menu' => __( 'Menu Header' ),
    )
    );
}






add_action( 'wp_enqueue_scripts', 'register_my_menus' );
add_action('wp_enqueue_scripts', 'mon_theme');
add_action('wp_enqueue_scripts','add_normalize_CSS');


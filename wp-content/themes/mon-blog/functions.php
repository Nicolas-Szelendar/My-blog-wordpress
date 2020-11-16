<?php

function mon_theme()
{
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


function add_normalize_CSS()
{
    wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

function style_bootstrap()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'['popper,jquery'], null, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], null, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstarp');
}


function register_my_menus()
{
    register_nav_menus(
        array(
            'private-menu' => __('Menu Privé'),
            'footer-menu' => __('Menu Header'),
        )
    );
}

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 200, 200, true );
}




add_action('wp_enqueue_scripts', 'register_my_menus');
add_action('wp_enqueue_scripts', 'mon_theme');
add_action('wp_enqueue_scripts', 'add_normalize_CSS');
add_action('wp_enqueue_scripts', 'style_bootstrap');
add_action('after_setup_theme', 'montheme_supports');

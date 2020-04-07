<?php

function load_stylesheet()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/vendor/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-rfs', get_template_directory_uri() . '/css/vendor/bootstrap-rfs.css', array(), false, 'all');
    wp_enqueue_style('bootstrap-rfs');

    wp_register_style('fontawesome', get_template_directory_uri() . '/css/vendor/fontawesome/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('animate', get_template_directory_uri() . '/css/vendor/animate.css', array(), false, 'all');
    wp_enqueue_style('animate');

    wp_register_style('normalize', get_template_directory_uri() . '/css/vendor/normalize.css', array(), false, 'all');
    wp_enqueue_style('normalize');

    wp_register_style('hover-min', get_template_directory_uri() . '/css/vendor/hover-min.css', array(), false, 'all');
    wp_enqueue_style('hover-min');

    wp_register_style('aos', get_template_directory_uri() . '/css/vendor/aos.css', array(), '2.3.1', 'all');
    wp_enqueue_style('aos');

    wp_register_style('cssgram', get_template_directory_uri() . '/css/vendor/cssgram.min.css', array(), false, 'all');
    wp_enqueue_style('cssgram');

    // Customed stylesheets

    wp_register_style('fonts', get_template_directory_uri() . '/css/fonts.css', array(), false, 'all');
    wp_enqueue_style('fonts');

    wp_register_style('navbar', get_template_directory_uri() . '/css/navbar.css', array(), false, 'all');
    wp_enqueue_style('navbar');

    wp_register_style('footer', get_template_directory_uri() . '/css/footer.css', array(), false, 'all');
    wp_enqueue_style('footer');

    wp_register_style('custom_stylesheet', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom_stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.4.1.min.js', '', '3.4.1', true);
}
add_action('wp_enqueue_scripts', 'load_jquery');


function load_javascript()
{
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', '', '4.3.1', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.js', '', '4.3.1', true);
    wp_enqueue_script('bootstrap-js');

    wp_register_script('aos', get_template_directory_uri() . '/js/vendor/aos.js', '', '2.3.1', true);
    wp_enqueue_script('aos');

    wp_register_script('jquery-visible', get_template_directory_uri() . '/js/vendor/jquery.visible.min.js', '', false, true);
    wp_enqueue_script('jquery-visible');

    wp_register_script('axios', get_template_directory_uri() . '/js/vendor/axios.min.js', '', '0.19.2', true);
    wp_enqueue_script('axios');

    // Custom scripts

    wp_register_script('custom_script', get_template_directory_uri() . '/js/custom.js', '', false, true);
    wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add menu feature in WordPress
add_theme_support('menus');

// Add thumbnail feature in Wordpress
add_theme_support('post-thumbnails');

// Add thumbnail feature in Wordpress
add_theme_support('templates');

// Add Boostrap Menu file with Wordpress
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(
    array(
        'menu' => __("Menu", 'theme')
    )
);

function console($data)
{
    echo "<script>console.log('" . json_encode($data) . "');</script>";
}

// turn off wysiwig for custom post types
add_action('init', 'init_remove_support', 100);
function init_remove_support()
{
    remove_post_type_support('page', 'editor');
}